<?php

namespace App\Services\Booking;

use Carbon\CarbonImmutable;
use Illuminate\Support\Collection;

/**
 * Generates a plausible-looking schedule from config/booking.php.
 *
 * Nothing here is persisted and nothing is authoritative -- it exists so the
 * booking flow can be clicked through and reviewed before Athena is wired in.
 * Slot carve-outs are seeded off the date so the calendar looks partly booked
 * but does not reshuffle on every page load.
 */
class StaticAvailabilityRepository implements AvailabilityRepository
{
    public function slotsForDay(
        string $providerKey,
        CarbonImmutable $day,
        string $patientType,
        string $visitReason,
    ): Collection {
        $day = $day->startOfDay();

        if (in_array($day->format('Y-m-d'), config('booking.blackout_dates', []), true)) {
            return collect();
        }

        $windows = config('booking.schedule.' . $day->dayOfWeek, []);
        if ($windows === []) {
            return collect();
        }

        $duration = $this->duration($patientType, $visitReason);
        $interval = (int) config('booking.slot_interval', 20);
        $earliest = $this->earliestBookable();
        $slots    = collect();

        foreach ($windows as [$open, $close]) {
            [$oh, $om] = array_map('intval', explode(':', $open));
            [$ch, $cm] = array_map('intval', explode(':', $close));

            $cursor    = $day->setTime($oh, $om);
            $windowEnd = $day->setTime($ch, $cm);

            // Step by the longer of the grid interval and the appointment
            // length, so a 40- or 60-minute visit never offers two start times
            // that would overlap each other.
            $step = max($interval, $duration);

            while ($cursor->addMinutes($duration)->lessThanOrEqualTo($windowEnd)) {
                if ($cursor->greaterThanOrEqualTo($earliest) && $this->isOpen($providerKey, $cursor)) {
                    $slots->push(new Slot($cursor, $duration, $providerKey));
                }
                $cursor = $cursor->addMinutes($step);
            }
        }

        return $slots->values();
    }

    public function nextSlots(
        string $providerKey,
        string $patientType,
        string $visitReason,
        int $limit = 3,
    ): Collection {
        $found  = collect();
        $day    = $this->now()->startOfDay();
        $lastDay = $day->addDays((int) config('booking.horizon_days', 60));

        while ($found->count() < $limit && $day->lessThanOrEqualTo($lastDay)) {
            $found = $found->concat(
                $this->slotsForDay($providerKey, $day, $patientType, $visitReason)
            );
            $day = $day->addDay();
        }

        return $found->take($limit)->values();
    }

    public function findSlot(
        string $providerKey,
        CarbonImmutable $start,
        string $patientType,
        string $visitReason,
    ): ?Slot {
        return $this->slotsForDay($providerKey, $start, $patientType, $visitReason)
            ->first(fn (Slot $slot) => $slot->start->equalTo($start));
    }

    public function book(
        Slot $slot,
        string $patientType,
        string $visitReason,
        array $patient,
    ): ?string {
        // Static mode books nothing -- there is no schedule to write to and no
        // patient record is stored. AthenaAvailabilityRepository::book() is
        // where the real appointment gets created.
        return null;
    }

    /**
     * Deterministic carve-out so the grid resembles a real, partly-booked day.
     * Roughly a third of slots are marked taken, stable per provider+datetime.
     */
    protected function isOpen(string $providerKey, CarbonImmutable $start): bool
    {
        if (! config('booking.simulate_bookings', true)) {
            return true;
        }

        $seed = crc32($providerKey . '|' . $start->format('Y-m-d H:i'));

        return ($seed % 100) >= 34;
    }

    protected function duration(string $patientType, string $visitReason): int
    {
        return (int) config(
            "booking.visit_reasons.{$visitReason}.duration.{$patientType}",
            20
        );
    }

    protected function earliestBookable(): CarbonImmutable
    {
        return $this->now()->addHours((int) config('booking.lead_time_hours', 2));
    }

    protected function now(): CarbonImmutable
    {
        return CarbonImmutable::now(config('booking.timezone'));
    }
}
