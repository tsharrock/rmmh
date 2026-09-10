<?php

namespace App\Services\Booking;

use Carbon\CarbonImmutable;
use Illuminate\Support\Collection;

/**
 * The seam between the booking UI and whatever actually owns the schedule.
 *
 * Two implementations: StaticAvailabilityRepository (hardcoded placeholder
 * data) and AthenaAvailabilityRepository (the real thing). The binding lives
 * in AppServiceProvider; the controller and views are written against this
 * interface only.
 *
 * Note on identity: in Athena an open slot IS an appointment record with its
 * own appointmentid, and booking is a PUT to that id rather than a create at a
 * time. That is why findSlot() returns the Slot itself and book() takes it --
 * the external id has to survive from listing through to booking.
 */
interface AvailabilityRepository
{
    /**
     * Bookable slots for a provider on a given day.
     *
     * @return Collection<int, Slot>
     */
    public function slotsForDay(
        string $providerKey,
        CarbonImmutable $day,
        string $patientType,
        string $visitReason,
    ): Collection;

    /**
     * The next N bookable slots from now, across the booking horizon.
     * Used for the "next available" buttons on the first screen.
     *
     * @return Collection<int, Slot>
     */
    public function nextSlots(
        string $providerKey,
        string $patientType,
        string $visitReason,
        int $limit = 3,
    ): Collection;

    /**
     * Resolve a start time back to a currently-bookable slot, or null if it has
     * gone. Called immediately before booking, so a slot taken mid-flow is
     * caught rather than double-booked.
     */
    public function findSlot(
        string $providerKey,
        CarbonImmutable $start,
        string $patientType,
        string $visitReason,
    ): ?Slot;

    /**
     * Book the slot. Returns an external appointment reference, or null when
     * the implementation has none.
     *
     * @throws BookingFailedException when the booking could not be completed.
     */
    public function book(
        Slot $slot,
        string $patientType,
        string $visitReason,
        array $patient,
    ): ?string;
}
