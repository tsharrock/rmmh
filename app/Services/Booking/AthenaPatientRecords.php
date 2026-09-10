<?php

namespace App\Services\Booking;

use App\Services\Booking\Athena\AmbiguousPatientMatchException;
use App\Services\Booking\Athena\AthenaApiException;
use App\Services\Booking\Athena\AthenaClient;
use Illuminate\Support\Facades\Log;

/**
 * Patient records backed by athenahealth.
 *
 * Uploads pass base64 straight through from the browser to athena. Nothing is
 * written to disk here, and no image content is ever logged -- only its size,
 * because "the upload failed" is useless without knowing whether anything
 * arrived.
 */
class AthenaPatientRecords implements PatientRecords
{
    public function __construct(
        protected AthenaClient $client,
    ) {}

    public function findOrCreate(array $patient): string
    {
        $departmentId = $this->departmentId();

        try {
            return $this->client->findPatient($patient, $departmentId)
                ?? $this->client->createPatient($patient, $departmentId);
        } catch (AmbiguousPatientMatchException $e) {
            // Surfaced here rather than at booking so they find out before
            // photographing cards, not after.
            throw new BookingFailedException(
                'We found more than one record matching those details, so we cannot continue online. '
                . 'Please call or text us and we will get you booked.',
                0,
                $e,
            );
        } catch (AthenaApiException $e) {
            Log::error('Could not resolve athena patient', ['status' => $e->status, 'body' => $e->body]);

            throw new BookingFailedException(
                'We could not set up your record just now. Please call or text us.',
                0,
                $e,
            );
        }
    }

    public function attachConsent(string $patientId, string $base64Pdf, string $description): void
    {
        $this->upload(
            fn () => $this->client->uploadAdminDocument(
                $patientId,
                $base64Pdf,
                'pdf',
                config('booking.intake.document_subclass.consent'),
                $description,
                $this->departmentId(),
            ),
            'consent form',
            $patientId,
            strlen($base64Pdf),
            // Consent is the one upload that must not fail quietly: without it
            // there is no record the patient agreed to anything.
            critical: true,
        );
    }

    public function attachInsuranceCard(string $patientId, string $base64Image, string $side): void
    {
        $this->upload(
            fn () => $this->client->uploadAdminDocument(
                $patientId,
                $base64Image,
                'jpg',
                config('booking.intake.document_subclass.insurance_card'),
                'Insurance card (' . $side . ') — uploaded by patient at booking',
                $this->departmentId(),
            ),
            'insurance card (' . $side . ')',
            $patientId,
            strlen($base64Image),
            critical: true,
        );
    }

    public function attachDriversLicense(string $patientId, string $base64Image): void
    {
        $this->upload(
            fn () => $this->client->uploadDriversLicense($patientId, $base64Image, $this->departmentId()),
            "driver's licence",
            $patientId,
            strlen($base64Image),
            critical: true,
        );
    }

    public function recordSelfPay(string $patientId): void
    {
        // Nothing structured to write: athena has no "self-pay declared" flag
        // reachable here. Logged so staff can see it was asked and answered,
        // and carried into the booking note at booking time.
        Log::info('Patient declared self-pay', ['patient' => $patientId]);
    }

    /**
     * Run an upload, translating failures into something a patient can act on.
     *
     * @param  callable  $upload
     */
    protected function upload(callable $upload, string $what, string $patientId, int $bytes, bool $critical): void
    {
        try {
            $upload();

            Log::info('Uploaded ' . $what . ' to athena', [
                'patient' => $patientId,
                'bytes'   => $bytes,
            ]);
        } catch (AthenaApiException $e) {
            Log::error('Failed to upload ' . $what . ' to athena', [
                'patient' => $patientId,
                'bytes'   => $bytes,
                'status'  => $e->status,
                'body'    => $e->body,
            ]);

            if ($critical) {
                throw new BookingFailedException(
                    'We could not save your ' . $what . '. Please try again, or call or text us.',
                    0,
                    $e,
                );
            }
        }
    }

    protected function departmentId(): int
    {
        return $this->client->departmentId()
            ?? throw new BookingFailedException('Booking is not fully configured. Please call or text us.');
    }
}
