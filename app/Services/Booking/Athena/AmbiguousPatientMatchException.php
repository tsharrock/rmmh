<?php

namespace App\Services\Booking\Athena;

use RuntimeException;

/**
 * More than one athena patient matched the details given.
 *
 * Deliberately fatal to the booking. Guessing which record is right risks
 * booking someone into another patient's chart, which is far worse than making
 * them phone the practice.
 */
class AmbiguousPatientMatchException extends RuntimeException
{
}
