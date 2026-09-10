<?php

namespace App\Services\Booking;

use Illuminate\Support\Facades\Log;

/**
 * Records nothing.
 *
 * Lets the full intake flow be clicked through with no athena connection, and
 * -- more importantly -- guarantees that running in static mode cannot leak a
 * driver's licence or insurance card anywhere. Images are counted and
 * discarded, never written down, never logged.
 */
class StaticPatientRecords implements PatientRecords
{
    public function findOrCreate(array $patient): string
    {
        // Deterministic so the same test patient keeps the same fake id
        // through a session, without storing anything about them.
        return 'static-' . substr(sha1($patient['email'] . '|' . $patient['dob']), 0, 12);
    }

    public function attachConsent(string $patientId, string $base64Pdf, string $description): void
    {
        $this->note('consent', $patientId, strlen($base64Pdf));
    }

    public function attachInsuranceCard(string $patientId, string $base64Image, string $side): void
    {
        $this->note("insurance card ({$side})", $patientId, strlen($base64Image));
    }

    public function attachDriversLicense(string $patientId, string $base64Image): void
    {
        $this->note("driver's licence", $patientId, strlen($base64Image));
    }

    public function recordSelfPay(string $patientId): void
    {
        $this->note('self-pay declared', $patientId, 0);
    }

    /** Size and kind only. Never the contents. */
    protected function note(string $what, string $patientId, int $bytes): void
    {
        Log::info('Static mode: discarded ' . $what, [
            'patient' => $patientId,
            'bytes'   => $bytes,
        ]);
    }
}
