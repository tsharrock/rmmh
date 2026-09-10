<?php

namespace App\Services\Booking\Athena;

use RuntimeException;

/**
 * An Athena API call failed. Carries the HTTP status and the decoded body so
 * the log is useful; never surface this message to a patient.
 */
class AthenaApiException extends RuntimeException
{
    public function __construct(
        string $message,
        public readonly ?int $status = null,
        public readonly array $body = [],
    ) {
        parent::__construct($message);
    }
}
