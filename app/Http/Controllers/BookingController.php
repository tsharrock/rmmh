<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\BookingSession;
use App\Services\Booking\AvailabilityRepository;
use App\Services\Booking\BookingFailedException;
use App\Services\Booking\PatientRecords;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

/**
 * On-site booking flow, mirroring the NextPatient journey:
 *
 *   1. /schedule                    pick patient type + visit reason
 *   2. /schedule/times              3-day slot grid, paginated
 *   3. /schedule/identify           email capture
 *   4. /schedule/details            patient information form
 *   5. /schedule/confirmed          confirmation
 *
 * Flow state lives in the session and is cleared on confirmation. Nothing is
 * written to the database: until Athena is attached this app deliberately
 * stores no patient data at all.
 */
class BookingController extends Controller
{
    use BookingSession;

    public function __construct(
        private readonly AvailabilityRepository $availability,
        private readonly PatientRecords $patients,
    ) {}

    /** Step 1 -- choose patient type and visit reason. */
    public function start(Request $request)
    {
        $providerKey  = $this->defaultProviderKey();
        $patientType  = $request->query('patient_type');
        $visitReason  = $request->query('visit_reason');

        $patientType = $this->validOrNull($patientType, array_keys(config('booking.patient_types')));
        $visitReason = $this->validOrNull($visitReason, array_keys(config('booking.visit_reasons')));

        $nextSlots = collect();
        if ($patientType && $visitReason) {
            $nextSlots = $this->availability->nextSlots($providerKey, $patientType, $visitReason, 3);
        }

        return view('booking.start', [
            'provider'     => $this->provider($providerKey),
            'providerKey'  => $providerKey,
            'patientType'  => $patientType,
            'visitReason'  => $visitReason,
            'nextSlots'    => $nextSlots,
            'headline'     => $this->headlineSlot($providerKey, $patientType, $visitReason),
        ]);
    }

    /** Step 2 -- the full slot grid, three days at a time. */
    public function times(Request $request)
    {
        $validated = $request->validate([
            'patient_type' => ['required', Rule::in(array_keys(config('booking.patient_types')))],
            'visit_reason' => ['required', Rule::in(array_keys(config('booking.visit_reasons')))],
            'start'        => ['nullable', 'date_format:Y-m-d'],
        ]);

        $providerKey = $this->defaultProviderKey();
        $today       = $this->today();
        $horizonEnd  = $today->addDays((int) config('booking.horizon_days', 60));
        $perPage     = (int) config('booking.days_per_page', 3);

        $start = isset($validated['start'])
            ? CarbonImmutable::createFromFormat('Y-m-d', $validated['start'], config('booking.timezone'))->startOfDay()
            : $today;

        // Never page before today or past the horizon.
        $start = $start->lessThan($today) ? $today : $start;
        $start = $start->greaterThan($horizonEnd) ? $horizonEnd : $start;

        $days = collect(range(0, $perPage - 1))->map(function (int $offset) use ($start, $providerKey, $validated) {
            $day = $start->addDays($offset);

            return [
                'date'  => $day,
                'slots' => $this->availability->slotsForDay(
                    $providerKey,
                    $day,
                    $validated['patient_type'],
                    $validated['visit_reason'],
                ),
            ];
        });

        $prev = $start->subDays($perPage);

        return view('booking.times', [
            'provider'    => $this->provider($providerKey),
            'patientType' => $validated['patient_type'],
            'visitReason' => $validated['visit_reason'],
            'days'        => $days,
            'prevStart'   => $prev->greaterThanOrEqualTo($today) ? $prev->format('Y-m-d') : null,
            'nextStart'   => $start->addDays($perPage)->lessThanOrEqualTo($horizonEnd)
                ? $start->addDays($perPage)->format('Y-m-d')
                : null,
        ]);
    }

    /** Step 3 -- email capture, which is what NextPatient asks for first. */
    public function identify(Request $request)
    {
        $validated = $request->validate([
            'patient_type' => ['required', Rule::in(array_keys(config('booking.patient_types')))],
            'visit_reason' => ['required', Rule::in(array_keys(config('booking.visit_reasons')))],
            'slot'         => ['required', 'date_format:Y-m-d\TH:i'],
        ]);

        $providerKey = $this->defaultProviderKey();
        $slotStart   = $this->parseSlot($validated['slot']);

        if (! $this->availability->findSlot($providerKey, $slotStart, $validated['patient_type'], $validated['visit_reason'])) {
            return redirect()
                ->route('booking.times', [
                    'patient_type' => $validated['patient_type'],
                    'visit_reason' => $validated['visit_reason'],
                    'start'        => $slotStart->format('Y-m-d'),
                ])
                ->withErrors(['slot' => 'Sorry, that time was just taken. Please choose another.']);
        }

        $existing = $this->booking($request);

        // Changing the visit type invalidates intake -- a different reason can
        // mean different paperwork -- so start clean. Picking a different TIME
        // for the same visit does not, and a patient must not be made to redo
        // consent and photos just because a slot went while they were filling
        // them in. complete() promises exactly this.
        $sameVisit = ($existing['patient_type'] ?? null) === $validated['patient_type']
            && ($existing['visit_reason'] ?? null) === $validated['visit_reason'];

        $carried = $sameVisit ? $existing : [];
        unset($carried['slot']);

        $request->session()->put(self::SESSION_KEY, array_replace($carried, [
            'provider_key' => $providerKey,
            'patient_type' => $validated['patient_type'],
            'visit_reason' => $validated['visit_reason'],
            'slot'         => $validated['slot'],
        ]));

        // Someone who already has a record and has finished intake is only here
        // to replace a lost slot. Send them to the end rather than back through
        // details they have already given.
        if ($this->hasPatient($request) && $this->intakeComplete($request)) {
            return redirect()->route('booking.review');
        }

        // Post/Redirect/Get: the patient lands on a GET URL, so refreshing or
        // going back never re-submits the step.
        return redirect()->route('booking.identify.show');
    }

    /**
     * GET /schedule/identify -- re-renders step 3 from the session.
     *
     * Without this, refreshing or using the browser back button after the POST
     * throws a 405. Patients do both constantly, so both step pages answer GET.
     */
    public function showIdentify(Request $request)
    {
        if (! $this->hasSlot($request)) {
            return redirect()->route('booking.start');
        }

        return view('booking.identify', $this->slotContext($request));
    }

    /** GET /schedule/details -- re-renders step 4 from the session. */
    public function showDetails(Request $request)
    {
        if (! $this->hasSlot($request)) {
            return redirect()->route('booking.start');
        }

        if (! isset($this->booking($request)['email'])) {
            return redirect()->route('booking.identify.show');
        }

        return view('booking.details', $this->slotContext($request));
    }

    /** Step 4 -- the patient information form. */
    public function details(Request $request)
    {
        if (! $this->hasSlot($request)) {
            return $this->expired();
        }

        $validated = $request->validate([
            'email' => ['required', 'email:rfc', 'max:255'],
        ]);

        $this->putBooking($request, ['email' => $validated['email']]);

        return redirect()->route('booking.details.show');
    }

    /**
     * Step 4 submit -- validate the patient, create their athena record, and
     * hand off to intake.
     *
     * The record is created HERE rather than at booking because everything that
     * follows (consent PDF, insurance card, driver's licence) has to attach to
     * a patient id. The cost is an orphan record in athena for anyone who
     * abandons from here on; the benefit is that no image ever has to be held
     * on this server waiting for a patient to exist.
     */
    public function submitPatient(Request $request)
    {
        if (! $this->hasSlot($request)) {
            return $this->expired();
        }

        $validated = $request->validate([
            'first_name'   => ['required', 'string', 'max:100'],
            'last_name'    => ['required', 'string', 'max:100'],
            'email'        => ['required', 'email:rfc', 'max:255'],
            'dob_month'    => ['required', 'integer', 'between:1,12'],
            'dob_day'      => ['required', 'integer', 'between:1,31'],
            'dob_year'     => ['required', 'integer', 'between:1900,' . now()->year],
            'sex'          => ['required', Rule::in(['female', 'male', 'other'])],
            'phone'        => ['required', 'string', 'max:25'],
            'phone_type'   => ['required', Rule::in(['mobile', 'home', 'work'])],
            'sms_consent'  => ['nullable', 'boolean'],
            'reason'       => ['nullable', 'string', 'max:1000'],
        ], [
            'dob_month.required' => 'Please enter your full date of birth.',
            'dob_day.required'   => 'Please enter your full date of birth.',
            'dob_year.required'  => 'Please enter your full date of birth.',
        ]);

        if (! checkdate((int) $validated['dob_month'], (int) $validated['dob_day'], (int) $validated['dob_year'])) {
            return back()->withInput()->withErrors(['dob_day' => 'That date of birth is not a real date.']);
        }

        $slotStart = $this->parseSlot($this->booking($request)['slot']);

        // Check the slot is still there before creating a patient record. If it
        // has gone, better to find out now than after they photograph a card.
        $stillThere = $this->availability->findSlot(
            $this->booking($request)['provider_key'],
            $slotStart,
            $this->booking($request)['patient_type'],
            $this->booking($request)['visit_reason'],
        );

        if (! $stillThere) {
            return $this->slotGone($request, $slotStart);
        }

        $patient = [
            'first_name'  => $validated['first_name'],
            'last_name'   => $validated['last_name'],
            'email'       => $validated['email'],
            'dob'         => sprintf('%04d-%02d-%02d', $validated['dob_year'], $validated['dob_month'], $validated['dob_day']),
            'sex'         => $validated['sex'],
            'phone'       => $validated['phone'],
            'phone_type'  => $validated['phone_type'],
            'sms_consent' => (bool) ($validated['sms_consent'] ?? false),
            'reason'      => $validated['reason'] ?? null,
        ];

        try {
            $patientId = $this->patients->findOrCreate($patient);
        } catch (BookingFailedException $e) {
            report($e);

            return back()->withInput()->withErrors(['first_name' => $e->getMessage()]);
        }

        $this->putBooking($request, [
            'patient'    => $patient,
            'patient_id' => $patientId,
            'email'      => $patient['email'],
        ]);

        // An established patient may have no intake steps at all, in which case
        // this goes straight to review.
        return redirect()->route($this->nextIntakeRoute($request));
    }

    /** Shared handling for "that time has gone" from any step. */
    protected function slotGone(Request $request, CarbonImmutable $slotStart)
    {
        $booking = $this->booking($request);

        return redirect()
            ->route('booking.times', [
                'patient_type' => $booking['patient_type'],
                'visit_reason' => $booking['visit_reason'],
                'start'        => $slotStart->format('Y-m-d'),
            ])
            ->withErrors(['slot' => 'Sorry, that time was taken while you were filling in your details. '
                . 'Please pick another — everything else you have entered is saved.']);
    }

    /** Step 5 view. */
    public function confirmed(Request $request)
    {
        $result = $request->session()->get('booking_result');

        if (! $result) {
            return redirect()->route('booking.start');
        }

        return view('booking.confirmed', ['result' => $result]);
    }

    // ---------------------------------------------------------------- helpers

    private function headlineSlot(string $providerKey, ?string $patientType, ?string $visitReason)
    {
        // The first screen shows a "next appointment" teaser before a reason is
        // chosen, the way NextPatient's widget does.
        return $this->availability
            ->nextSlots($providerKey, $patientType ?: 'established', $visitReason ?: 'telehealth', 1)
            ->first();
    }

    private function defaultProviderKey(): string
    {
        return array_key_first(config('booking.providers'));
    }

    private function today(): CarbonImmutable
    {
        return CarbonImmutable::now(config('booking.timezone'))->startOfDay();
    }

    private function validOrNull(?string $value, array $allowed): ?string
    {
        return $value !== null && in_array($value, $allowed, true) ? $value : null;
    }
}
