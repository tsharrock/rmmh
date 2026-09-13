<?php

namespace App\Services\Booking\Athena;

use Carbon\CarbonImmutable;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Thin wrapper over the athenahealth REST API.
 *
 * Only the calls the booking flow needs. Authentication is two-legged OAuth2
 * (client_credentials); the access token is cached until shortly before it
 * expires, because athena rate-limits token issuance.
 *
 * Everything here speaks athena's own vocabulary -- appointmentid, reasonid,
 * departmentid, mm/dd/yyyy dates. Translating to and from the site's own
 * vocabulary is AthenaAvailabilityRepository's job, not this class's.
 */
class AthenaClient
{
    public function __construct(
        protected array $config,
    ) {}

    // ---------------------------------------------------------------- config

    /** 'preview' or 'production'. */
    public function environmentName(): string
    {
        return $this->config['environment'] ?? 'preview';
    }

    public function isProduction(): bool
    {
        return $this->environmentName() === 'production';
    }

    public function practiceId(): int
    {
        return (int) ($this->environment()['practice_id'] ?? 0);
    }

    public function apiUrl(): string
    {
        return $this->baseUrl();
    }

    /**
     * Everything the active environment needs is present.
     *
     * Deliberately checks the ACTIVE environment only: having production
     * credentials filled in must never make a half-configured preview look
     * ready, or the reverse.
     */
    public function isConfigured(): bool
    {
        $env = $this->environment();

        return ! empty($env['client_id'])
            && ! empty($env['client_secret'])
            && ! empty($env['practice_id']);
    }

    /** Which required keys are missing, for the check command's error output. */
    public function missingConfig(): array
    {
        $env = $this->environment();
        $name = strtoupper($this->environmentName());

        $missing = [];

        foreach (['client_id', 'client_secret', 'practice_id', 'department_id'] as $key) {
            if (empty($env[$key])) {
                $missing[] = 'ATHENA_'.$name.'_'.strtoupper($key);
            }
        }

        return $missing;
    }

    protected function baseUrl(): string
    {
        return rtrim($this->environment()['api_url'], '/');
    }

    public function departmentId(): ?int
    {
        $id = $this->environment()['department_id'] ?? null;

        return $id ? (int) $id : null;
    }

    /** @return array<string, mixed> */
    public function environment(): array
    {
        $name = $this->environmentName();

        return $this->config['environments'][$name]
            ?? throw new AthenaApiException(
                "Unknown Athena environment [{$name}]. Set ATHENA_ENV to 'preview' or 'production'."
            );
    }

    // ------------------------------------------------------------------ auth

    /**
     * A valid bearer token, cached across requests.
     *
     * The cache key includes the environment and client id so switching
     * between preview and production, or rotating credentials, cannot serve a
     * stale token.
     */
    protected function token(): string
    {
        $key = $this->tokenKey();

        if ($cached = Cache::get($key)) {
            return $cached;
        }

        try {
            $response = Http::asForm()
                ->withBasicAuth($this->environment()['client_id'], $this->environment()['client_secret'])
                ->timeout($this->readTimeout())
                ->post($this->environment()['token_url'], [
                    'grant_type' => 'client_credentials',
                    'scope' => $this->config['scope'] ?? 'athena/service/Athenanet.MDP.*',
                ]);
        } catch (ConnectionException $e) {
            throw new AthenaApiException(
                'Could not reach the Athena token endpoint.',
                null,
                ['reason' => $e->getMessage()],
            );
        }

        if ($response->failed()) {
            throw new AthenaApiException(
                'Athena token request failed.',
                $response->status(),
                (array) $response->json(),
            );
        }

        $token = $response->json('access_token');

        if (! $token) {
            throw new AthenaApiException('Athena token response contained no access_token.');
        }

        // Cache for the lifetime athena actually gave us, minus a minute so a
        // token can never expire mid-request. Doing this by hand rather than
        // with Cache::remember, because remember() fixes the TTL before the
        // callback runs and so could not use the real expires_in.
        $ttl = max(60, (int) $response->json('expires_in', 3600) - 60);

        Cache::put($key, $token, $ttl);

        return $token;
    }

    protected function tokenKey(): string
    {
        // Keyed by environment and credential so flipping ATHENA_ENV, or
        // rotating a secret, can never serve the other environment's token.
        return 'athena:token:'.$this->environmentName()
            .':'.substr(hash('sha256', (string) ($this->environment()['client_id'] ?? '')), 0, 16);
    }

    /** Discard the cached token, so the next call re-authenticates. */
    public function forgetToken(): void
    {
        Cache::forget($this->tokenKey());
    }

    // -------------------------------------------------------------- requests

    /**
     * $retries is 0 for writes on purpose. A retried POST /patients creates a
     * duplicate chart and a retried booking PUT can double-book; a transient
     * failure on a write must surface, not be papered over.
     */
    protected function request(int $retries = 0, ?int $timeout = null): PendingRequest
    {
        $request = Http::withToken($this->token())
            ->acceptJson()
            ->timeout($timeout ?? $this->readTimeout());

        // Retry only on a server-side error, never on a timeout. Retrying a
        // slow endpoint just doubles the wait for someone sitting in front of
        // a spinner -- and a patient lookup that takes 25s twice is 50s of
        // them thinking the site is broken.
        return $retries > 0
            ? $request->retry($retries, 200, when: fn ($e) => $e instanceof RequestException, throw: false)
            : $request;
    }

    /** Reads are safe to retry, so they get a shorter leash. */
    protected function readTimeout(): int
    {
        return (int) ($this->config['timeout'] ?? 30);
    }

    /**
     * Writes get longer, because they are not retried.
     *
     * A write that times out may have landed anyway -- athena can create the
     * patient and still fail to answer us. Giving up early on a write is worse
     * than waiting, because the recovery is a duplicate record.
     */
    protected function writeTimeout(): int
    {
        return (int) ($this->config['write_timeout'] ?? max(45, $this->readTimeout()));
    }

    public function get(string $path, array $query = []): array
    {
        return $this->send(
            fn () => $this->request(retries: 2)->get($this->url($path), $query),
            'GET '.$path,
        );
    }

    /** Athena's write endpoints take form-encoded bodies, not JSON. */
    public function post(string $path, array $form = []): array
    {
        return $this->send(
            fn () => $this->request(timeout: $this->writeTimeout())->asForm()->post($this->url($path), $form),
            'POST '.$path,
        );
    }

    public function put(string $path, array $form = []): array
    {
        return $this->send(
            fn () => $this->request(timeout: $this->writeTimeout())->asForm()->put($this->url($path), $form),
            'PUT '.$path,
        );
    }

    /**
     * Run a request, timing it, and turn transport failures into the same
     * exception type as API failures.
     *
     * A timeout throws ConnectionException, which is NOT an AthenaApiException
     * -- so without this every catch block in the booking flow misses it and a
     * raw cURL message ends up in front of a patient. Everything that can go
     * wrong with an athena call now arrives as one type.
     */
    protected function send(callable $perform, string $label): array
    {
        $startedAt = microtime(true);

        try {
            $response = $perform();
        } catch (ConnectionException $e) {
            $seconds = round(microtime(true) - $startedAt, 1);

            Log::error('Athena call could not complete', [
                'call' => $label,
                'seconds' => $seconds,
                'reason' => $e->getMessage(),
            ]);

            throw new AthenaApiException(
                "Athena did not respond to {$label} within {$seconds}s.",
                null,
                ['reason' => $e->getMessage()],
            );
        }

        $seconds = round(microtime(true) - $startedAt, 1);

        // Athena's sandbox is routinely slow. Surfacing the slow ones makes a
        // creeping timeout visible before it starts failing bookings.
        if ($seconds >= 5) {
            Log::info('Slow athena call', ['call' => $label, 'seconds' => $seconds]);
        }

        return $this->handle($response, $label);
    }

    protected function url(string $path): string
    {
        return $this->baseUrl().'/v1/'.$this->practiceId().'/'.ltrim($path, '/');
    }

    protected function handle(Response $response, string $label): array
    {
        // A 401 usually means our cached token was revoked early; drop it so
        // the next attempt re-authenticates rather than failing forever.
        if ($response->status() === 401) {
            $this->forgetToken();
        }

        if ($response->failed()) {
            Log::warning('Athena API call failed', [
                'call' => $label,
                'status' => $response->status(),
                'body' => $response->json(),
            ]);

            throw new AthenaApiException(
                "Athena call failed: {$label}",
                $response->status(),
                (array) $response->json(),
            );
        }

        $body = $response->json();

        // Athena returns 200 with an "error" key for some failures.
        if (is_array($body) && isset($body['error'])) {
            throw new AthenaApiException(
                "Athena returned an error for {$label}: ".$body['error'],
                $response->status(),
                $body,
            );
        }

        return is_array($body) ? $body : [];
    }

    // ---------------------------------------------------------- reference data

    /** @return array<int, array> */
    public function departments(): array
    {
        return $this->get('departments', ['limit' => 200])['departments'] ?? [];
    }

    /** @return array<int, array> */
    public function providers(): array
    {
        return $this->get('providers', ['limit' => 200])['providers'] ?? [];
    }

    /**
     * Appointment reasons configured for this practice.
     *
     * $patientType is 'new' or 'established'; athena exposes these as separate
     * sub-resources because a reason can be restricted to one or the other.
     *
     * @return array<int, array>
     */
    public function appointmentReasons(int $departmentId, int $providerId, ?string $patientType = null): array
    {
        $path = match ($patientType) {
            'new' => 'patientappointmentreasons/newpatient',
            'established' => 'patientappointmentreasons/existingpatient',
            default => 'patientappointmentreasons',
        };

        return $this->get($path, [
            'departmentid' => $departmentId,
            'providerid' => $providerId,
            'limit' => 1500,
        ])['patientappointmentreasons'] ?? [];
    }

    // ----------------------------------------------------------------- slots

    /**
     * Open, web-schedulable slots in a date range.
     *
     * Athena defaults to hiding slots less than ~24h out and more than ~90 days
     * out, per practice configuration. Those are the practice's rules, so we do
     * not bypass them -- if RMMH wants same-day booking, that is a setting to
     * change in athenaOne rather than a flag to pass here.
     *
     * @param  array<int, int|string>  $reasonIds
     * @return array<int, array>
     */
    public function openSlots(
        int $departmentId,
        int $providerId,
        array $reasonIds,
        CarbonImmutable $start,
        CarbonImmutable $end,
    ): array {
        return $this->get('appointments/open', [
            'departmentid' => $departmentId,
            'providerid' => $providerId,
            'reasonid' => implode(',', $reasonIds),
            'startdate' => $start->format('m/d/Y'),
            'enddate' => $end->format('m/d/Y'),
            'limit' => 10000,
        ])['appointments'] ?? [];
    }

    /**
     * Appointment types available to the practice.
     *
     * Slots can be opened by appointmenttypeid instead of reasonid. In a
     * sandbox where no patient-facing reasons are wired to the provider, this
     * is often the only way to create anything.
     *
     * @return array<int, array>
     */
    public function appointmentTypes(): array
    {
        return $this->get('appointmenttypes', ['limit' => 500])['appointmenttypes'] ?? [];
    }

    /**
     * Open new appointment slots for a provider on one date.
     *
     * Sandbox-only in practice: real availability is opened by the practice in
     * athenaOne, and this app is a consumer of that schedule, not an author of
     * it. The seeding command enforces that -- see AthenaSeedSlots.
     *
     * @param  array<int, string>  $times  24-hour hh:mm starts
     * @return array<string, mixed> appointmentids, keyed by the time requested
     */
    public function createOpenSlots(
        int $departmentId,
        int $providerId,
        CarbonImmutable $date,
        array $times,
        ?int $reasonId = null,
        ?int $appointmentTypeId = null,
    ): array {
        if (! $reasonId && ! $appointmentTypeId) {
            throw new AthenaApiException('createOpenSlots needs either a reasonid or an appointmenttypeid.');
        }

        $created = $this->post('appointments/open', array_filter([
            'departmentid' => $departmentId,
            'providerid' => $providerId,
            'reasonid' => $reasonId,
            'appointmenttypeid' => $appointmentTypeId,
            'appointmentdate' => $date->format('m/d/Y'),
            'appointmenttime' => implode(',', $times),
        ], fn ($v) => $v !== null));

        return $created['appointmentids'] ?? [];
    }

    /**
     * Open slots for a department regardless of reason.
     *
     * Athena treats reasonid=-1 as "any web-schedulable reason", and it is the
     * only search that does not require a providerid. That makes it the right
     * tool for answering "is there any availability here at all?" -- which is
     * how you find a usable provider in a shared sandbox you do not control.
     *
     * @return array<int, array>
     */
    public function openSlotsAnyReason(
        int $departmentId,
        CarbonImmutable $start,
        CarbonImmutable $end,
    ): array {
        return $this->get('appointments/open', [
            'departmentid' => $departmentId,
            'reasonid' => -1,
            'startdate' => $start->format('m/d/Y'),
            'enddate' => $end->format('m/d/Y'),
            'limit' => 1000,
        ])['appointments'] ?? [];
    }

    // --------------------------------------------------------------- patients

    /**
     * Find an existing patient, or null. Matching deliberately requires name +
     * DOB together; a looser match risks booking one patient into another
     * patient's chart, which is far worse than creating a duplicate.
     */
    public function findPatient(array $patient, int $departmentId): ?string
    {
        $matches = $this->get('patients', [
            'departmentid' => $departmentId,
            'firstname' => $patient['first_name'],
            'lastname' => $patient['last_name'],
            'dob' => $this->formatDob($patient['dob']),
            'limit' => 10,
        ])['patients'] ?? [];

        // Several matches means we cannot tell which chart is theirs. Creating
        // a new one would silently duplicate a real patient, and picking one
        // could book them into someone else's chart -- so refuse and let a
        // human sort it out.
        if (count($matches) > 1) {
            throw new AmbiguousPatientMatchException(
                'More than one athena patient matched the details supplied.'
            );
        }

        return count($matches) === 1 ? (string) $matches[0]['patientid'] : null;
    }

    /** Create a patient and return the new athena patient id. */
    public function createPatient(array $patient, int $departmentId): string
    {
        $payload = array_filter([
            'departmentid' => $departmentId,
            'firstname' => $patient['first_name'],
            'lastname' => $patient['last_name'],
            'dob' => $this->formatDob($patient['dob']),
            'email' => $patient['email'] ?? null,
            'sex' => $this->formatSex($patient['sex'] ?? null),
        ], fn ($v) => $v !== null && $v !== '');

        // Athena requires at least one phone number, in the matching field.
        $phone = preg_replace('/\D+/', '', (string) ($patient['phone'] ?? ''));
        if ($phone !== '') {
            $field = match ($patient['phone_type'] ?? 'mobile') {
                'home' => 'homephone',
                'work' => 'workphone',
                default => 'mobilephone',
            };
            $payload[$field] = $phone;
        }

        if (! empty($patient['sms_consent']) && isset($payload['mobilephone'])) {
            $payload['consenttotext'] = 'true';
        }

        $created = $this->post('patients', $payload);

        $id = $created[0]['patientid'] ?? $created['patientid'] ?? null;

        if (! $id) {
            throw new AthenaApiException('Athena did not return a patientid on create.', null, $created);
        }

        return (string) $id;
    }

    // --------------------------------------------------------------- uploads

    /*
    | Every upload here takes an already-base64-encoded image or file. The
    | booking flow encodes in the browser and forwards the string straight
    | through, so nothing sensitive is ever written to this server's disk --
    | no $_FILES, no PHP temp file. Keep it that way: the moment one of these
    | takes a path instead of a string, the server becomes a PHP store and the
    | practice inherits a pile of obligations it does not currently have.
    */

    /**
     * Attach a driver's licence image to the patient's record.
     *
     * @param  string  $base64Image  Raw base64, no data: prefix
     */
    public function uploadDriversLicense(string $patientId, string $base64Image, ?int $departmentId = null): bool
    {
        $result = $this->post("patients/{$patientId}/driverslicense", array_filter([
            'image' => $base64Image,
            'departmentid' => $departmentId,
        ], fn ($v) => $v !== null));

        return $this->succeeded($result);
    }

    /**
     * Attach an image to an existing insurance record.
     *
     * Needs an insuranceid, which only exists once an insurance package has
     * been chosen. Until RMMH's accepted plans are mapped to athena package
     * IDs, insurance cards go through uploadAdminDocument() instead and staff
     * key in the record. This is here for when that changes.
     */
    public function uploadInsuranceCardImage(
        string $patientId,
        string $insuranceId,
        string $base64Image,
        ?int $departmentId = null,
    ): bool {
        $result = $this->post("patients/{$patientId}/insurances/{$insuranceId}/image", array_filter([
            'image' => $base64Image,
            'departmentid' => $departmentId,
        ], fn ($v) => $v !== null));

        return $this->succeeded($result);
    }

    /**
     * Put a document on the patient's chart.
     *
     * Used for both the signed consent PDF and insurance card photos. Admin
     * documents need no insurance record, which is what makes them the right
     * home for a card photo that staff will transcribe later.
     *
     * @param  string  $base64Contents  Raw base64 of the file
     */
    public function uploadAdminDocument(
        string $patientId,
        string $base64Contents,
        string $attachmentType,
        ?string $documentSubclass = null,
        ?string $description = null,
        ?int $departmentId = null,
    ): ?string {
        $result = $this->post("patients/{$patientId}/documents/admin", array_filter([
            'attachmentcontents' => $base64Contents,
            // Athena's ATTACHMENTTYPE enum only accepts uppercase extensions
            // (PDF, JPG, PNG, ...); a lowercase value is rejected with a 400.
            'attachmenttype' => strtoupper($attachmentType),
            'documentsubclass' => $documentSubclass,
            'documentdescription' => $description,
            'internalnote' => $description,
            'departmentid' => $departmentId,
        ], fn ($v) => $v !== null && $v !== ''));

        $id = $result['documentid'] ?? ($result[0]['documentid'] ?? null);

        return $id ? (string) $id : null;
    }

    /** Athena answers writes with a 'success' string rather than a status code. */
    protected function succeeded(array $result): bool
    {
        $success = $result['success'] ?? ($result[0]['success'] ?? null);

        if ($success === null) {
            // No success key at all and no exception thrown: treat as fine, but
            // say so in the log rather than silently assuming.
            Log::info('Athena upload returned no success flag', ['response' => $result]);

            return true;
        }

        return filter_var($success, FILTER_VALIDATE_BOOLEAN);
    }

    // ---------------------------------------------------------------- booking

    /**
     * Book an open slot. The appointment id IS the slot -- athena creates open
     * slots as appointment records and booking fills one in.
     */
    public function bookAppointment(string $appointmentId, array $body): array
    {
        return $this->put("appointments/{$appointmentId}", $body);
    }

    // ---------------------------------------------------------------- helpers

    /** Athena wants mm/dd/yyyy; we store Y-m-d. */
    protected function formatDob(string $isoDate): string
    {
        return CarbonImmutable::createFromFormat('Y-m-d', $isoDate)->format('m/d/Y');
    }

    protected function formatSex(?string $sex): ?string
    {
        return match ($sex) {
            'female' => 'F',
            'male' => 'M',
            default => null,
        };
    }
}
