<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Mirrors the NextPatient confirmation email: appointment details, an
 * add-to-calendar link, and the check-in prompt.
 *
 * The .ics attachment is generated here rather than linked, so it works from
 * any mail client without a round trip to the site.
 */
class AppointmentConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public array $context;

    public function __construct(array $context)
    {
        $this->context = $context;
    }

    public function build()
    {
        return $this->subject('Your appointment with ' . $this->context['provider']['name'])
            ->view('emails.appointment_confirmation')
            ->with(['ctx' => $this->context])
            ->attachData(
                $this->icsBody(),
                'appointment.ics',
                ['mime' => 'text/calendar; charset=utf-8; method=REQUEST'],
            );
    }

    /**
     * Minimal VEVENT. Times are emitted as UTC so the patient's calendar shows
     * the correct local time -- this matters because patients book from
     * Arizona (no DST), Montana, Iowa and Utah.
     */
    protected function icsBody(): string
    {
        $slot     = $this->context['slot'];
        $practice = config('booking.practice');
        $start    = $slot->utc();
        $end      = $slot->addMinutes($this->context['duration'] ?? 20)->utc();

        $lines = [
            'BEGIN:VCALENDAR',
            'VERSION:2.0',
            'PRODID:-//Redmond Medical & Mental Health//Booking//EN',
            'CALSCALE:GREGORIAN',
            'METHOD:REQUEST',
            'BEGIN:VEVENT',
            'UID:' . uniqid('rmmh-', true) . '@redmondmmh.com',
            'DTSTAMP:' . now()->utc()->format('Ymd\THis\Z'),
            'DTSTART:' . $start->format('Ymd\THis\Z'),
            'DTEND:' . $end->format('Ymd\THis\Z'),
            'SUMMARY:Appointment with ' . $this->escapeIcs($this->context['provider']['name']),
            'DESCRIPTION:' . $this->escapeIcs($this->context['reasonLabel'] ?? 'Appointment'),
            'LOCATION:' . $this->escapeIcs($practice['address']),
            'END:VEVENT',
            'END:VCALENDAR',
        ];

        return implode("\r\n", $lines);
    }

    protected function escapeIcs(string $value): string
    {
        return str_replace([',', ';'], ['\\,', '\\;'], $value);
    }
}
