<?php

namespace App\Services\Booking;

use App\Services\Booking\Athena\AmbiguousPatientMatchException;
use App\Services\Booking\Athena\AthenaApiException;
use App\Services\Booking\Athena\AthenaClient;
use Carbon\CarbonImmutable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

/**
 * Availability backed by the athenahealth Appointment API.
 *
 * Shape of the integration, which differs from a naive "create an appointment
 * at a time" model:
 *
 *   1. Open slots are fetched from GET /appointments/open. Each one is already
 *      an appointment record with its own appointmentid.
 *   2. Booking is PUT /appointments/{appointmentid} with a patientid and a
 *      reasonid. There is no "create at this time" call for patient-facing
 *      scheduling -- the slot must already exist in athenaOne.
 *   3. A patientid is required, so the patient is matched or created first.
 *
 * That means the practice still opens slots in athenaOne. This app never
 * invents availability; it books against what is already there.
 *
 * Failure behaviour is deliberate: reads degrade to "no times available" and
 * log, so an athena outage shows the call-us message instead of a 500. Writes
 * throw BookingFailedException, because silently failing to book while telling
 * the patient they are booked is the worst outcome available.
 */
class AthenaAvailabilityRepository implements AvailabilityRepository
{
    public function __construct(
        protected AthenaClient $client,
    ) {}

    public function slotsForDay(
        string $providerKey,
        CarbonImmutable $day,
        string $patientType,
        string $visitReason,
    ): Collection {
        $day = $day->startOfDay();

        return $this->slotsInRange($providerKey, $day, $day, $patientType, $visitReason);
    }

    public function nextSlots(
        string $providerKey,
        string $patientType,
        string $visitReason,
        int $limit = 3,
    ): Collection {
        $today = $this->today();

        // One ranged call rather than a loop of per-day calls. Athena's own
        // lead-time rules already exclude anything too soon.
        return $this->slotsInRange(
            $providerKey,
            $today,
            $today->addDays((int) config('booking.horizon_days', 60)),
            $patientType,
            $visitReason,
        )->take($limit)->values();
    }

    public function findSlot(
        string $providerKey,
        CarbonImmutable $start,
        string $patientType,
        string $visitReason,
    ): ?Slot {
        // Bypass the cache: this is the pre-booking freshness check, and a
        // cached answer would defeat its whole purpose.
        return $this->fetchSlots($providerKey, $start->startOfDay(), $start->startOfDay(), $patientType, $visitReason)
            ->first(fn (Slot $slot) => $slot->start->equalTo($start));
    }

    public function book(
        Slot $slot,
        string $patientType,
        string $visitReason,
        array $patient,
    ): ?string {
        if (! $slot->hasExternalId()) {
            throw new BookingFailedException(
                'We could not complete that booking. Please call or text us and we will book it for you.'
            );
        }

        $departmentId = $this->departmentId();
        $reasonId     = $this->reasonId($patientType, $visitReason);

        try {
            $patientId = $this->client->findPatient($patient, $departmentId)
                ?? $this->client->createPatient($patient, $departmentId);
        } catch (AmbiguousPatientMatchException $e) {
            Log::warning('Athena patient match was ambiguous; booking refused.', [
                'appointmentid' => $slot->externalId,
            ]);

            throw new BookingFailedException(
                'We found more than one record matching those details, so we did not book this '
                . 'automatically. Please call or text us and we will get you scheduled.',
                0,
                $e,
            );
        } catch (AthenaApiException $e) {
            Log::error('Athena patient lookup or creation failed', [
                'status' => $e->status,
                'body'   => $e->body,
            ]);

            throw new BookingFailedException(
                'We could not complete that booking. Please call or text us and we will book it for you.',
                0,
                $e,
            );
        }

        try {
            $result = $this->client->bookAppointment($slot->externalId, array_filter([
                'patientid'    => $patientId,
                'reasonid'     => $reasonId,
                'departmentid' => $departmentId,
                'bookingnote'  => $patient['reason'] ?? null,
                // We send our own branded confirmation, so suppress athena's to
                // avoid the patient getting two different emails.
                'donotsendconfirmationemail' => config('booking.athena.suppress_athena_email', true) ? 'true' : null,
            ], fn ($v) => $v !== null && $v !== ''));
        } catch (AthenaApiException $e) {
            Log::error('Athena booking failed', [
                'appointmentid' => $slot->externalId,
                'status'        => $e->status,
                'body'          => $e->body,
            ]);

            throw new BookingFailedException(
                'We could not complete that booking. The time may have just been taken — '
                . 'please pick another, or call or text us and we will book it for you.',
                0,
                $e,
            );
        }

        $appointment = $result[0] ?? $result;

        // Athena answers a successful book with the filled appointment. Status
        // 'f' means filled; anything else means we did not actually book it.
        $status = $appointment['appointmentstatus'] ?? null;

        if ($status !== null && $status !== 'f' && $status !== '2') {
            Log::error('Athena booking returned an unexpected status', [
                'appointmentid' => $slot->externalId,
                'status'        => $status,
            ]);

            throw new BookingFailedException(
                'We could not confirm that booking. Please call or text us before assuming it went through.'
            );
        }

        return (string) ($appointment['appointmentid'] ?? $slot->externalId);
    }

    // ---------------------------------------------------------------- fetching

    /**
     * Cached range fetch. The three-day grid and the next-available buttons
     * both land here, so a patient paging back and forth does not hammer the
     * API.
     *
     * @return Collection<int, Slot>
     */
    protected function slotsInRange(
        string $providerKey,
        CarbonImmutable $from,
        CarbonImmutable $to,
        string $patientType,
        string $visitReason,
    ): Collection {
        $key = implode(':', [
            'athena:slots',
            $providerKey,
            $patientType,
            $visitReason,
            $from->format('Ymd'),
            $to->format('Ymd'),
        ]);

        $ttl = (int) config('booking.athena.cache_ttl', 60);

        /** @var array<int, array{start:string,duration:int,id:string}> $raw */
        $raw = Cache::remember($key, $ttl, function () use ($providerKey, $from, $to, $patientType, $visitReason) {
            return $this->fetchSlots($providerKey, $from, $to, $patientType, $visitReason)
                ->map(fn (Slot $slot) => [
                    'start'    => $slot->start->format('Y-m-d H:i'),
                    'duration' => $slot->durationMinutes,
                    'id'       => $slot->externalId,
                ])
                ->all();
        });

        $tz = config('booking.timezone');

        return collect($raw)->map(fn (array $row) => new Slot(
            CarbonImmutable::createFromFormat('Y-m-d H:i', $row['start'], $tz),
            $row['duration'],
            $providerKey,
            $row['id'],
        ))->values();
    }

    /**
     * Uncached call to athena, mapped into Slot objects.
     *
     * @return Collection<int, Slot>
     */
    protected function fetchSlots(
        string $providerKey,
        CarbonImmutable $from,
        CarbonImmutable $to,
        string $patientType,
        string $visitReason,
    ): Collection {
        if (! $this->client->isConfigured()) {
            Log::warning('Athena booking is selected but not configured; no slots will be shown.', [
                'environment' => $this->environmentName(),
                'missing'     => $this->client->missingConfig(),
            ]);

            return collect();
        }

        try {
            $rows = $this->client->openSlots(
                $this->departmentId(),
                $this->providerId($providerKey),
                [$this->reasonId($patientType, $visitReason)],
                $from,
                $to,
            );
        } catch (AthenaApiException $e) {
            // Reads degrade rather than explode: the patient sees the
            // call-us message instead of an error page.
            Log::error('Athena availability lookup failed', [
                'status' => $e->status,
                'body'   => $e->body,
            ]);

            return collect();
        }

        $tz = config('booking.timezone');

        return collect($rows)
            ->map(function (array $row) use ($providerKey, $tz): ?Slot {
                // Athena returns date as mm/dd/yyyy and starttime as HH:MM,
                // both local to the department -- which is Mountain Time.
                $date = $row['date'] ?? null;
                $time = $row['starttime'] ?? null;

                if (! $date || ! $time) {
                    return null;
                }

                try {
                    $start = CarbonImmutable::createFromFormat('m/d/Y H:i', "{$date} {$time}", $tz);
                } catch (\Throwable $e) {
                    Log::warning('Unparseable Athena slot timestamp', ['date' => $date, 'starttime' => $time]);

                    return null;
                }

                return new Slot(
                    $start,
                    (int) ($row['duration'] ?? 20),
                    $providerKey,
                    isset($row['appointmentid']) ? (string) $row['appointmentid'] : null,
                );
            })
            ->filter()
            ->sortBy(fn (Slot $slot) => $slot->start->getTimestamp())
            ->values();
    }

    // ----------------------------------------------------------------- config

    /**
     * Department, provider and reason IDs are all scoped to the active
     * environment: the preview sandbox is a different practice, so its IDs do
     * not exist in production and vice versa. Reading them through the
     * environment is what makes flipping ATHENA_ENV safe.
     */
    protected function environmentName(): string
    {
        return $this->client->environmentName();
    }

    protected function departmentId(): int
    {
        return $this->client->departmentId()
            ?? throw new BookingFailedException('Booking is not fully configured. Please call or text us.');
    }

    protected function providerId(string $providerKey): int
    {
        $id = config("booking.providers.{$providerKey}.athena_provider_id.{$this->environmentName()}");

        if (! $id) {
            Log::error('No athena provider ID configured', [
                'provider'    => $providerKey,
                'environment' => $this->environmentName(),
            ]);

            throw new BookingFailedException('Booking is not fully configured. Please call or text us.');
        }

        return (int) $id;
    }

    /**
     * Map the site's (patient type, visit reason) pair onto an athena reason
     * ID. Athena scopes reasons to new vs existing patients, so the pair is
     * what identifies one -- not the reason alone.
     */
    protected function reasonId(string $patientType, string $visitReason): int
    {
        $id = config(
            "booking.visit_reasons.{$visitReason}.athena_reason_ids.{$this->environmentName()}.{$patientType}"
        );

        if (! $id) {
            Log::error('No athena reason ID configured', [
                'visit_reason' => $visitReason,
                'patient_type' => $patientType,
                'environment'  => $this->environmentName(),
            ]);

            throw new BookingFailedException('That visit type is not bookable online. Please call or text us.');
        }

        return (int) $id;
    }

    protected function today(): CarbonImmutable
    {
        return CarbonImmutable::now(config('booking.timezone'))->startOfDay();
    }
}
