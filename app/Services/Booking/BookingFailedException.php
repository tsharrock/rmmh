<?php

namespace App\Services\Booking;

use RuntimeException;

/**
 * Thrown when a booking could not be completed -- the slot went, the upstream
 * scheduling system rejected it, or it was unreachable.
 *
 * The message is shown to the patient, so keep it plain and actionable and
 * never leak upstream error detail into it. Technical detail belongs in the
 * log, via the previous exception.
 */
class BookingFailedException extends RuntimeException
{
}
