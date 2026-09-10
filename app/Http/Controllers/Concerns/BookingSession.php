<?php

namespace App\Http\Controllers\Concerns;

use Carbon\CarbonImmutable;
use Illuminate\Http\Request;

/**
 * Shared state for the booking and intake steps.
 *
 * The whole in-progress booking lives in one session key. Nothing is written
 * to the database at any point: the appointment goes to athena, the patient
 * record goes to athena, the photos go to athena, and when the flow finishes
 * this key is dropped. If the session expires mid-flow the patient loses their
 * progress, which is the correct trade for not holding PHI here.
 */
trait BookingSession
{
    protected const SESSION_KEY = 'booking';

    protected function booking(Request $request): array
    {
        $booking = $request->session()->get(self::SESSION_KEY);

        return is_array($booking) ? $booking : [];
    }

    protected function putBooking(Request $request, array $values): array
    {
        $booking = $this->booking($request) + [];
        $booking = array_replace($booking, $values);

        $request->session()->put(self::SESSION_KEY, $booking);

        return $booking;
    }

    /** True once the slot, type and reason are chosen. */
    protected function hasSlot(Request $request): bool
    {
        $booking = $this->booking($request);

        return isset($booking['slot'], $booking['patient_type'], $booking['visit_reason'], $booking['provider_key']);
    }

    /** True once the athena patient record exists. */
    protected function hasPatient(Request $request): bool
    {
        return (bool) ($this->booking($request)['patient_id'] ?? null);
    }

    protected function expired()
    {
        return redirect()->route('booking.start')
            ->withErrors(['slot' => 'Your session expired. Please choose a time again.']);
    }

    protected function parseSlot(string $token): CarbonImmutable
    {
        return CarbonImmutable::createFromFormat('Y-m-d\TH:i', $token, config('booking.timezone'));
    }

    protected function reasonLabel(string $patientType, string $visitReason): string
    {
        return config("booking.patient_types.{$patientType}")
            . ': '
            . config("booking.visit_reasons.{$visitReason}.label");
    }

    protected function provider(string $key): array
    {
        return config("booking.providers.{$key}") + ['key' => $key];
    }

    /** The summary panel shown alongside every step from step 3 onward. */
    protected function slotContext(Request $request): array
    {
        $booking = $this->booking($request);

        return [
            'provider'    => $this->provider($booking['provider_key']),
            'slot'        => $this->parseSlot($booking['slot']),
            'patientType' => $booking['patient_type'],
            'visitReason' => $booking['visit_reason'],
            'reasonLabel' => $this->reasonLabel($booking['patient_type'], $booking['visit_reason']),
            'email'       => $booking['email'] ?? null,
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Intake steps
    |--------------------------------------------------------------------------
    |
    | Consent, insurance and photo ID are each independently gated, and the
    | order below is the order they run in. Everything routes through
    | nextIntakeRoute() so there is exactly one place that decides what comes
    | next -- scattering "if new patient" checks through the controllers is how
    | a step ends up unreachable or, worse, skippable.
    |
    */

    /** In order. Keys match config('booking.intake.*'). */
    protected const INTAKE_STEPS = ['consent', 'insurance', 'drivers_license'];

    protected const INTAKE_ROUTES = [
        'consent'         => 'booking.consent.show',
        'insurance'       => 'booking.insurance.show',
        'drivers_license' => 'booking.identification.show',
    ];

    /** Does this step apply to the patient currently in session? */
    protected function intakeApplies(Request $request, string $step): bool
    {
        $mode  = config("booking.intake.{$step}", 'always');
        $isNew = ($this->booking($request)['patient_type'] ?? null) === 'new';

        return match ($mode) {
            'always', true => true,
            'new_only'     => $isNew,
            'optional'     => true,
            default        => false,
        };
    }

    /** True when the patient may move past this step without completing it. */
    protected function intakeOptional(string $step): bool
    {
        return config("booking.intake.{$step}") === 'optional';
    }

    /** Has this step been satisfied for the booking in session? */
    protected function intakeDone(Request $request, string $step): bool
    {
        $booking = $this->booking($request);

        return match ($step) {
            'consent'   => ! empty($booking['consent_signed_at']),
            'insurance' => ($booking['self_pay'] ?? false)
                            || ! empty(($booking['insurance_sides'] ?? [])['front']),
            'drivers_license' => (bool) ($booking['drivers_license'] ?? false),
            default     => true,
        };
    }

    /**
     * The route for the next step after $after, or the review page when intake
     * is finished. Pass null for the first applicable step.
     */
    protected function nextIntakeRoute(Request $request, ?string $after = null): string
    {
        $steps = self::INTAKE_STEPS;
        $from  = $after === null ? 0 : (int) array_search($after, $steps, true) + 1;

        foreach (array_slice($steps, $from) as $step) {
            if ($this->intakeApplies($request, $step)) {
                return self::INTAKE_ROUTES[$step];
            }
        }

        return 'booking.review';
    }

    /**
     * Send them back to the earliest applicable step they have not finished,
     * or null if they are allowed to be where they are.
     *
     * Steps that do not apply are never checked, so an established patient is
     * not held at a consent step they will never be shown.
     */
    protected function intakeGuard(Request $request, ?string $current = null)
    {
        foreach (self::INTAKE_STEPS as $step) {
            if ($step === $current) {
                break;
            }

            if (! $this->intakeApplies($request, $step)) {
                continue;
            }

            if (! $this->intakeDone($request, $step) && ! $this->intakeOptional($step)) {
                return redirect()->route(self::INTAKE_ROUTES[$step]);
            }
        }

        return null;
    }

    /** True once every applicable intake step is satisfied. */
    protected function intakeComplete(Request $request): bool
    {
        foreach (self::INTAKE_STEPS as $step) {
            if (! $this->intakeApplies($request, $step)) {
                continue;
            }

            if (! $this->intakeDone($request, $step) && ! $this->intakeOptional($step)) {
                return false;
            }
        }

        return true;
    }
}
