<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\BookingSession;
use App\Mail\AppointmentConfirmation;
use App\Services\Booking\AvailabilityRepository;
use App\Services\Booking\BookingFailedException;
use App\Services\Booking\ConsentDocument;
use App\Services\Booking\PatientRecords;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Throwable;

/**
 * Intake: everything collected after a time is chosen and before it is booked.
 *
 *   5. /schedule/consent          HIPAA + client contract, typed signature
 *   6. /schedule/insurance        card photos, or an explicit self-pay choice
 *   7. /schedule/identification   driver's licence (new patients only)
 *   8. /schedule/complete         books the slot, sends confirmation
 *
 * The appointment is not booked until step 8, so the practice never ends up
 * with a confirmed visit and no paperwork.
 *
 * Images arrive as base64 in a JSON body, are forwarded straight to athena, and
 * are never written to disk or held in the session. The only thing recorded
 * about them here is that the step is done.
 */
class BookingIntakeController extends Controller
{
    use BookingSession;

    public function __construct(
        private readonly AvailabilityRepository $availability,
        private readonly PatientRecords $patients,
        private readonly ConsentDocument $consent,
    ) {}

    // ---------------------------------------------------------------- consent

    public function showConsent(Request $request)
    {
        if ($redirect = $this->guard($request, 'consent')) {
            return $redirect;
        }

        return view('booking.consent', $this->slotContext($request) + [
            'documents' => config('booking.consent.documents', []),
            'today'     => CarbonImmutable::now(config('booking.timezone')),
        ]);
    }

    public function submitConsent(Request $request)
    {
        if ($redirect = $this->guard($request, 'consent')) {
            return $redirect;
        }

        $documents = config('booking.consent.documents', []);

        // Each document is agreed to separately, so a patient cannot tick one
        // box and be recorded as having accepted both.
        $rules = [
            'signature_name'      => ['required', 'string', 'max:150'],
            'signature_dob_month' => ['required', 'integer', 'between:1,12'],
            'signature_dob_day'   => ['required', 'integer', 'between:1,31'],
            'signature_dob_year'  => ['required', 'integer', 'between:1900,' . now()->year],
            'authorized_contacts' => ['nullable', 'string', 'max:2000'],
        ];

        $messages = ['signature_name.required' => 'Please type your full name to sign.'];

        foreach ($documents as $key => $document) {
            $rules["agreements.{$key}"] = ['accepted'];
            $messages["agreements.{$key}.accepted"] =
                'Please tick to agree to the ' . $document['title'] . ' before continuing.';
        }

        $validated = $request->validate($rules, $messages);

        $booking = $this->booking($request);
        $patient = $booking['patient'];

        $signedDob = sprintf(
            '%04d-%02d-%02d',
            $validated['signature_dob_year'],
            $validated['signature_dob_month'],
            $validated['signature_dob_day'],
        );

        // The typed date of birth is the signature check: it has to match the
        // record being signed for, or the signature is not evidence of anything.
        if ($signedDob !== $patient['dob']) {
            return back()->withInput()->withErrors([
                'signature_dob_day' => 'That date of birth does not match the one you gave earlier.',
            ]);
        }

        $signature = [
            'name'                => $validated['signature_name'],
            'dob'                 => CarbonImmutable::createFromFormat('Y-m-d', $signedDob)->format('j F Y'),
            'agreed_at'           => CarbonImmutable::now(config('booking.timezone')),
            'ip'                  => $request->ip(),
            'authorized_contacts' => $validated['authorized_contacts'] ?? null,
            // Recorded individually so the PDF shows exactly which documents
            // this signature covers, not just that "consent" happened.
            'documents'           => array_map(fn ($d) => $d['title'], $documents),
        ];

        try {
            $pdf = $this->consent->render($signature);

            $this->patients->attachConsent(
                $booking['patient_id'],
                $pdf,
                $this->consent->description($signature),
            );
        } catch (BookingFailedException $e) {
            report($e);

            return back()->withInput()->withErrors(['agree' => $e->getMessage()]);
        } catch (Throwable $e) {
            report($e);

            return back()->withInput()->withErrors([
                'agree' => 'We could not save your signed forms. Please try again, or call or text us.',
            ]);
        }

        $this->putBooking($request, [
            'consent_signed_at'   => $signature['agreed_at']->toIso8601String(),
            'consent_documents'   => array_keys($documents),
            'authorized_contacts' => $signature['authorized_contacts'],
        ]);

        return redirect()->route($this->nextIntakeRoute($request, 'consent'));
    }

    // -------------------------------------------------------------- insurance

    public function showInsurance(Request $request)
    {
        if ($redirect = $this->guard($request, 'insurance')) {
            return $redirect;
        }

        return view('booking.insurance', $this->slotContext($request) + [
            'allowSelfPay' => (bool) config('booking.intake.allow_self_pay', true),
            'uploaded'     => $this->booking($request)['insurance_sides'] ?? [],
        ]);
    }

    /**
     * XHR endpoint: one card side at a time, straight through to athena.
     *
     * Kept separate from the step submit so a patient can retake a photo
     * without re-posting the whole form, and so a failed upload is reported
     * against the photo rather than the page.
     */
    public function uploadInsurance(Request $request)
    {
        if (! $this->hasPatient($request)) {
            return response()->json(['message' => 'Your session expired. Please start again.'], 419);
        }

        $validated = $request->validate([
            'side'  => ['required', Rule::in(['front', 'back'])],
            'image' => ['required', 'string'],
        ]);

        $image = $this->decodeImage($validated['image']);

        if ($image === null) {
            return response()->json(['message' => 'That image could not be read. Please try again.'], 422);
        }

        try {
            $this->patients->attachInsuranceCard(
                $this->booking($request)['patient_id'],
                $image,
                $validated['side'],
            );
        } catch (BookingFailedException $e) {
            report($e);

            return response()->json(['message' => $e->getMessage()], 502);
        } catch (Throwable $e) {
            report($e);

            return response()->json([
                'message' => 'That did not save. Please try again, or call or text us on '
                    . config('booking.practice.phone') . '.',
            ], 502);
        } catch (Throwable $e) {
            report($e);

            return response()->json([
                'message' => 'That did not save. Please try again, or call or text us on '
                    . config('booking.practice.phone') . '.',
            ], 502);
        }

        $sides = $this->booking($request)['insurance_sides'] ?? [];
        $sides[$validated['side']] = true;

        $this->putBooking($request, ['insurance_sides' => $sides, 'self_pay' => false]);

        return response()->json(['ok' => true, 'sides' => array_keys($sides)]);
    }

    public function submitInsurance(Request $request)
    {
        if ($redirect = $this->guard($request, 'insurance')) {
            return $redirect;
        }

        $selfPay = $request->boolean('self_pay');
        $sides   = $this->booking($request)['insurance_sides'] ?? [];

        if ($selfPay) {
            $this->patients->recordSelfPay($this->booking($request)['patient_id']);
            $this->putBooking($request, ['self_pay' => true, 'insurance_sides' => []]);

            return redirect()->route($this->nextIntakeRoute($request, 'insurance'));
        }

        // Front is the side with the member ID and payer on it; without it
        // there is nothing for staff to key in, so it is the one hard
        // requirement here.
        if (empty($sides['front'])) {
            return back()->withErrors([
                'insurance' => config('booking.intake.allow_self_pay')
                    ? 'Please add a photo of the front of your insurance card, or choose self-pay.'
                    : 'Please add a photo of the front of your insurance card.',
            ]);
        }

        $this->putBooking($request, ['self_pay' => false]);

        return redirect()->route($this->nextIntakeRoute($request, 'insurance'));
    }

    // --------------------------------------------------------- identification

    public function showIdentification(Request $request)
    {
        if ($redirect = $this->guard($request, 'drivers_license')) {
            return $redirect;
        }

        return view('booking.identification', $this->slotContext($request) + [
            'optional' => $this->intakeOptional('drivers_license'),
            'uploaded' => (bool) ($this->booking($request)['drivers_license'] ?? false),
        ]);
    }

    public function uploadIdentification(Request $request)
    {
        if (! $this->hasPatient($request)) {
            return response()->json(['message' => 'Your session expired. Please start again.'], 419);
        }

        $validated = $request->validate(['image' => ['required', 'string']]);

        $image = $this->decodeImage($validated['image']);

        if ($image === null) {
            return response()->json(['message' => 'That image could not be read. Please try again.'], 422);
        }

        try {
            $this->patients->attachDriversLicense($this->booking($request)['patient_id'], $image);
        } catch (BookingFailedException $e) {
            report($e);

            return response()->json(['message' => $e->getMessage()], 502);
        }

        $this->putBooking($request, ['drivers_license' => true]);

        return response()->json(['ok' => true]);
    }

    public function submitIdentification(Request $request)
    {
        if ($redirect = $this->guard($request, 'drivers_license')) {
            return $redirect;
        }

        if (! $this->intakeDone($request, 'drivers_license') && ! $this->intakeOptional('drivers_license')) {
            return back()->withErrors([
                'identification' => 'Please add a photo of your driver\'s licence or photo ID.',
            ]);
        }

        return redirect()->route($this->nextIntakeRoute($request, 'drivers_license'));
    }

    // ------------------------------------------------------------------ book

    public function review(Request $request)
    {
        if ($redirect = $this->guard($request)) {
            return $redirect;
        }

        return view('booking.review', $this->slotContext($request) + [
            'booking' => $this->booking($request),
        ]);
    }

    /** Step 8 -- everything is collected, book the slot for real. */
    public function complete(Request $request)
    {
        if ($redirect = $this->guard($request)) {
            return $redirect;
        }

        $booking   = $this->booking($request);
        $slotStart = $this->parseSlot($booking['slot']);

        $slot = $this->availability->findSlot(
            $booking['provider_key'],
            $slotStart,
            $booking['patient_type'],
            $booking['visit_reason'],
        );

        if (! $slot) {
            // Their paperwork is already with athena and their record exists,
            // so the session keeps everything except the slot. Picking a new
            // time drops them straight back here.
            $this->putBooking($request, ['slot' => null]);

            return redirect()
                ->route('booking.times', [
                    'patient_type' => $booking['patient_type'],
                    'visit_reason' => $booking['visit_reason'],
                    'start'        => $slotStart->format('Y-m-d'),
                ])
                ->withErrors(['slot' => 'That time was taken while you were completing your forms. '
                    . 'Please pick another — your details and documents are already saved, '
                    . 'so this is the only thing left to do.']);
        }

        $patient = $booking['patient'];
        $patient['reason'] = $this->bookingNote($booking);

        try {
            $reference = $this->availability->book(
                $slot,
                $booking['patient_type'],
                $booking['visit_reason'],
                $patient + ['patient_id' => $booking['patient_id']],
            );
        } catch (BookingFailedException $e) {
            report($e);

            return redirect()->route('booking.review')->withErrors(['slot' => $e->getMessage()]);
        } catch (Throwable $e) {
            report($e);

            return redirect()->route('booking.review')->withErrors([
                'slot' => 'Something went wrong booking that appointment. Please try again, or '
                    . 'call or text us on ' . config('booking.practice.phone') . '.',
            ]);
        }

        $context = [
            'provider'    => $this->provider($booking['provider_key']),
            'slot'        => $slotStart,
            'patientType' => $booking['patient_type'],
            'visitReason' => $booking['visit_reason'],
            'reasonLabel' => $this->reasonLabel($booking['patient_type'], $booking['visit_reason']),
            'duration'    => (int) config("booking.visit_reasons.{$booking['visit_reason']}.duration.{$booking['patient_type']}", 20),
            'patient'     => $patient,
            'reference'   => $reference,
        ];

        try {
            Mail::to($patient['email'])->send(new AppointmentConfirmation($context));
        } catch (Throwable $e) {
            // A confirmation that fails to send is not a failed booking. Log it
            // and let them see the confirmation screen.
            report($e);
        }

        $request->session()->forget(self::SESSION_KEY);
        $request->session()->flash('booking_result', [
            'slot_label' => $slotStart->format('D, M j') . ' at ' . strtolower($slotStart->format('g:ia')),
            'slot_iso'   => $slotStart->toIso8601String(),
            'first_name' => $patient['first_name'],
            'email'      => $patient['email'],
            'provider'   => $this->provider($booking['provider_key'])['name'],
            'reason'     => $this->reasonLabel($booking['patient_type'], $booking['visit_reason']),
            'reference'  => $reference,
            'self_pay'   => (bool) ($booking['self_pay'] ?? false),
        ]);

        return redirect()->route('booking.confirmed');
    }

    // --------------------------------------------------------------- helpers

    /**
     * Common entry check for every intake step.
     *
     * Confirms there is a slot and a patient, then hands off to the trait to
     * check the applicable earlier steps. Passing $step also means a step that
     * does not apply to this patient bounces forward rather than rendering.
     */
    protected function guard(Request $request, ?string $step = null)
    {
        if (! $this->hasSlot($request)) {
            return $this->expired();
        }

        if (! $this->hasPatient($request)) {
            return redirect()->route('booking.details.show');
        }

        if ($step !== null && ! $this->intakeApplies($request, $step)) {
            return redirect()->route($this->nextIntakeRoute($request, $step));
        }

        return $this->intakeGuard($request, $step);
    }

    /**
     * Strip a data: prefix and re-encode, so whatever reaches athena is known
     * to be valid base64 of an actual image rather than whatever was posted.
     */
    protected function decodeImage(string $payload): ?string
    {
        if (str_contains($payload, ',')) {
            [$prefix, $payload] = explode(',', $payload, 2);

            if (! str_starts_with($prefix, 'data:image/')) {
                return null;
            }
        }

        $binary = base64_decode($payload, true);

        if ($binary === false || $binary === '') {
            return null;
        }

        $max = (int) config('booking.intake.max_upload_bytes', 8 * 1024 * 1024);

        if (strlen($binary) > $max) {
            return null;
        }

        // Confirm it really is an image before forwarding it on.
        if (@getimagesizefromstring($binary) === false) {
            return null;
        }

        return base64_encode($binary);
    }

    /** What staff see on the appointment in athenaOne. */
    protected function bookingNote(array $booking): string
    {
        $parts = [];

        if (! empty($booking['patient']['reason'])) {
            $parts[] = $booking['patient']['reason'];
        }

        $parts[] = ($booking['self_pay'] ?? false)
            ? 'SELF-PAY declared at booking.'
            : 'Insurance card photographed at booking — needs keying into athenaOne.';

        if (! empty($booking['authorized_contacts'])) {
            $parts[] = 'Authorized contacts: ' . $booking['authorized_contacts'];
        }

        return implode(' | ', $parts);
    }
}
