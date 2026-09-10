<?php

namespace App\Services\Booking;

use Carbon\CarbonImmutable;

/**
 * A single bookable appointment slot.
 *
 * Deliberately a plain value object with no persistence: when Athena becomes
 * the source of truth, its scheduling response is mapped into these and
 * nothing downstream needs to change.
 */
class Slot
{
    public function __construct(
        public readonly CarbonImmutable $start,
        public readonly int $durationMinutes,
        public readonly string $providerKey,
        public readonly ?string $externalId = null,
    ) {}

    public function end(): CarbonImmutable
    {
        return $this->start->addMinutes($this->durationMinutes);
    }

    /** True when the upstream system gave this slot its own identity. */
    public function hasExternalId(): bool
    {
        return $this->externalId !== null;
    }

    /** Stable identifier used in URLs and form fields. */
    public function token(): string
    {
        return $this->start->format('Y-m-d\TH:i');
    }

    /** "10:40am" -- matches how NextPatient labels its slot buttons. */
    public function label(): string
    {
        return strtolower($this->start->format('g:ia'));
    }

    /** "Wed, Sep 9 at 10:40am" */
    public function longLabel(): string
    {
        return $this->start->format('D, M j') . ' at ' . $this->label();
    }
}
