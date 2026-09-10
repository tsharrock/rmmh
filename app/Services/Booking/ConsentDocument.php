<?php

namespace App\Services\Booking;

use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Log;
use RuntimeException;

/**
 * Renders the signed consent to a PDF, in memory.
 *
 * The PDF is the practice's record that this person agreed to these terms on
 * this date, so it embeds the full consent text rather than a reference to it
 * -- if the wording on the website changes later, the signed copy must still
 * show what was actually agreed to.
 *
 * Returns base64 and never touches the filesystem.
 */
class ConsentDocument
{
    /**
     * @param  array{name:string, dob:string, agreed_at:CarbonImmutable, ip:?string, authorized_contacts:?string}  $signature
     */
    public function render(array $signature): string
    {
        $html = view('booking.consent-pdf', [
            'practice'  => config('booking.practice'),
            'signature' => $signature + ['version' => config('booking.consent.version')],
        ])->render();

        return base64_encode($this->toPdf($html));
    }

    protected function toPdf(string $html): string
    {
        if (class_exists(\Dompdf\Dompdf::class)) {
            $dompdf = new \Dompdf\Dompdf(['isRemoteEnabled' => false]);
            $dompdf->setPaper('letter');
            $dompdf->loadHtml($html, 'UTF-8');
            $dompdf->render();

            return $dompdf->output();
        }

        // Static mode has no patient and no athena, so a missing PDF library
        // must not stop the flow being clicked through. Hand back the raw HTML
        // and say so -- nothing is going anywhere anyway.
        if (config('booking.driver') !== 'athena') {
            Log::warning('dompdf is not installed; static mode is using raw HTML instead of a consent PDF.');

            return $html;
        }

        // With athena attached this is fatal, and deliberately so: booking
        // someone while telling them they signed something we never kept is
        // worse than failing in front of them.
        throw new RuntimeException(
            'Consent PDFs need dompdf. Run: composer require dompdf/dompdf'
        );
    }

    /** A human-readable description for the athena chart entry. */
    public function description(array $signature): string
    {
        return 'Consent forms (v' . config('booking.consent.version') . ') signed online by '
            . $signature['name'] . ' on ' . $signature['agreed_at']->format('j M Y, g:ia T');
    }
}
