<?php

namespace App\Services\Booking;

/**
 * Everything the intake steps need to do to a patient record.
 *
 * Split from AvailabilityRepository on purpose: availability is about the
 * schedule, this is about the person. Both have a static implementation so the
 * whole flow can be clicked through with no athena connection at all.
 *
 * Every method here takes an already-base64-encoded string. Nothing in this
 * layer accepts a file path or an UploadedFile, because nothing in this flow
 * should ever land on our disk.
 */
interface PatientRecords
{
    /**
     * Match an existing patient or create one, returning the record id.
     *
     * Called at the details step rather than at booking, because uploads need
     * a patient to attach to.
     *
     * @throws BookingFailedException when the patient cannot be resolved safely
     */
    public function findOrCreate(array $patient): string;

    /**
     * @throws BookingFailedException
     */
    public function attachConsent(string $patientId, string $base64Pdf, string $description): void;

    /**
     * Insurance card photo. Goes on the chart as a document rather than an
     * insurance record, because athena cannot create an insurance record
     * without a package ID -- staff transcribe it into athenaOne.
     *
     * @throws BookingFailedException
     */
    public function attachInsuranceCard(string $patientId, string $base64Image, string $side): void;

    /**
     * @throws BookingFailedException
     */
    public function attachDriversLicense(string $patientId, string $base64Image): void;

    /** Record that the patient declared self-pay, so staff know it was asked. */
    public function recordSelfPay(string $patientId): void;
}
