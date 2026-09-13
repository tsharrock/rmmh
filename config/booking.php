<?php

/*
|--------------------------------------------------------------------------
| Booking engine configuration
|--------------------------------------------------------------------------
|
| This drives the on-site booking flow that replaces the NextPatient widget.
| Everything here is STATIC placeholder data so the flow can be clicked
| through end to end. When the Athena endpoint is ready, swap the binding in
| AppServiceProvider from StaticAvailabilityRepository to
| AthenaAvailabilityRepository -- nothing in the controller or views changes.
|
*/

return [

    // The practice runs on Mountain Time. Patients book from AZ (no DST), MT
    // and IA (Central), so every slot is generated and displayed in this zone
    // with an explicit label. Do not remove the label.
    'timezone' => 'America/Denver',
    'timezone_label' => 'MT',

    'practice' => [
        'name'    => 'Redmond Medical & Mental Health',
        'address' => '245 N 700 W, Hyde Park, UT 84318',
        'phone'   => '(435) 938-1440',
        'phone_link' => '4359381440',
        'email'   => 'patientsupport@redmondmmh.com',
    ],

    'providers' => [
        'tiffany-redmond' => [
            'name'        => 'Tiffany Redmond, PA-C',
            'credential'  => 'PA-C',
            'photo'       => '/img/tiffany_redmond_cropped.webp',

            // athenaNet provider IDs, per environment -- the sandbox practice
            // is a different practice, so its IDs do not match production.
            // Find them with: php artisan athena:discover
            'athena_provider_id' => [
                'preview'    => env('ATHENA_PREVIEW_PROVIDER_ID_TIFFANY'),
                'production' => env('ATHENA_PRODUCTION_PROVIDER_ID_TIFFANY'),
            ],
        ],
    ],

    'patient_types' => [
        'new'         => 'New Patient',
        'established' => 'Established Patient',
    ],

    // Visit reasons, keyed per patient type. New patients get longer slots.
    // Athena scopes appointment reasons to new vs existing patients, so each
    // (patient type, visit reason) pair maps to its own reason ID -- and those
    // IDs differ between the preview sandbox and the live practice, so they are
    // keyed by environment too. Find them with: php artisan athena:discover
    // 'duration' is only used by the static placeholder repository -- with
    // Athena attached, the real duration comes back with each slot.
    'visit_reasons' => [
        'in-person' => [
            'label'    => 'In-Person Visit',
            'duration' => ['new' => 40, 'established' => 20],
            'athena_reason_ids' => [
                'preview' => [
                    'new'         => env('ATHENA_PREVIEW_REASON_INPERSON_NEW'),
                    'established' => env('ATHENA_PREVIEW_REASON_INPERSON_ESTABLISHED'),
                ],
                'production' => [
                    'new'         => env('ATHENA_PRODUCTION_REASON_INPERSON_NEW'),
                    'established' => env('ATHENA_PRODUCTION_REASON_INPERSON_ESTABLISHED'),
                ],
            ],
        ],
        'telehealth' => [
            'label'    => 'Telehealth Visit',
            'duration' => ['new' => 40, 'established' => 20],
            'athena_reason_ids' => [
                'preview' => [
                    'new'         => env('ATHENA_PREVIEW_REASON_TELEHEALTH_NEW'),
                    'established' => env('ATHENA_PREVIEW_REASON_TELEHEALTH_ESTABLISHED'),
                ],
                'production' => [
                    'new'         => env('ATHENA_PRODUCTION_REASON_TELEHEALTH_NEW'),
                    'established' => env('ATHENA_PRODUCTION_REASON_TELEHEALTH_ESTABLISHED'),
                ],
            ],
        ],
        'ketamine' => [
            'label'    => 'Ketamine Visit',
            'duration' => ['new' => 60, 'established' => 60],
            'athena_reason_ids' => [
                'preview' => [
                    'new'         => env('ATHENA_PREVIEW_REASON_KETAMINE_NEW'),
                    'established' => env('ATHENA_PREVIEW_REASON_KETAMINE_ESTABLISHED'),
                ],
                'production' => [
                    'new'         => env('ATHENA_PRODUCTION_REASON_KETAMINE_NEW'),
                    'established' => env('ATHENA_PRODUCTION_REASON_KETAMINE_ESTABLISHED'),
                ],
            ],
        ],
    ],

    // Weekly template, local practice time. 0 = Sunday .. 6 = Saturday.
    // Slots are generated on a 20-minute grid inside these windows.
    'schedule' => [
        1 => [['08:40', '12:00'], ['13:00', '16:40']], // Mon
        2 => [['08:40', '12:00'], ['13:00', '16:40']], // Tue
        3 => [['08:40', '12:00'], ['13:00', '16:40']], // Wed
        4 => [['08:40', '12:00'], ['13:00', '15:20']], // Thu
        5 => [['08:40', '12:00']],                     // Fri
    ],

    'slot_interval' => 20,   // minutes between slot starts
    'lead_time_hours' => 2,  // earliest bookable slot, from now
    'horizon_days' => 60,    // how far ahead the calendar goes
    'days_per_page' => 3,    // columns shown on the times screen

    // Dates with no availability at all (holidays, PTO). Y-m-d.
    'blackout_dates' => [],

    // Purely cosmetic: the static repository carves out pseudo-random slots so
    // the calendar looks like a real, partly-booked schedule rather than a
    // solid block of times. Deterministic, so it does not shift on refresh.
    'simulate_bookings' => true,

    /*
    |--------------------------------------------------------------------------
    | Consent
    |--------------------------------------------------------------------------
    |
    | The wording itself lives in resources/views/booking/consent-text.blade.php
    | so the on-screen copy and the signed PDF can never drift apart.
    |
    | 'version' is stamped into the PDF and the athena document description. Bump
    | it whenever the wording changes, so a signed copy can always be traced to
    | the exact terms that were agreed.
    |
    */

    'consent' => [
        'version' => env('CONSENT_VERSION', '2026-09'),

        /*
        | The documents a patient agrees to, in order. Each gets its own
        | "I agree" and all of them are covered by one signature at the end,
        | which is how the practice's existing paper forms work.
        |
        | 'view' is rendered both on screen and into the signed PDF, so the two
        | can never drift. Adding a document here adds it to both.
        |
        | 'collects_contacts' puts the authorized-contacts field directly under
        | that document, because the field only makes sense next to the
        | authorization it belongs to.
        */
        'documents' => [
            'client_contract' => [
                'title' => 'Client Contract',
                'view'  => 'booking.consent.client-contract',
            ],
            'emergency_contact' => [
                'title'             => 'Emergency Contact Release Form',
                'view'              => 'booking.consent.emergency-contact',
                'collects_contacts' => true,
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | athenahealth
    |--------------------------------------------------------------------------
    |
    | Set BOOKING_DRIVER=athena once the IDs below are filled in. Until then it
    | stays on the static placeholder data.
    |
    | How booking actually works in athena, because it is not obvious:
    | open slots are already appointment records with their own appointmentid,
    | created by the practice in athenaOne. Booking is a PUT to one of those
    | ids with a patientid and a reasonid. This app never invents availability.
    |
    */

    'driver' => env('BOOKING_DRIVER', 'static'), // static | athena

    /*
    |--------------------------------------------------------------------------
    | Intake — consent, insurance and identification
    |--------------------------------------------------------------------------
    |
    | Collected after the patient picks a time but BEFORE the appointment is
    | booked, so nothing is confirmed until the practice has what it needs.
    |
    | Images are encoded in the browser and forwarded straight to athena. They
    | are never written to this server's disk. See BookingIntakeController.
    |
    */

    'intake' => [

        /*
        | Which intake steps apply, and to whom.
        |
        |   always    every patient, every booking
        |   new_only  new patients only -- established patients already have
        |             this on file in athenaOne, so asking again is friction
        |             for nothing
        |   optional  shown, but skippable (drivers_license only)
        |   off       never shown
        |
        | Steps run in this order and non-applicable ones are skipped entirely:
        | an established patient goes details -> review with nothing in between.
        */
        'consent'         => env('INTAKE_CONSENT', 'new_only'),
        'insurance'       => env('INTAKE_INSURANCE', 'new_only'),
        'drivers_license' => env('INTAKE_DRIVERS_LICENSE', 'new_only'),

        // Self-pay is an explicit, honest choice rather than a way to skip the
        // insurance question.
        'allow_self_pay' => true,

        // TESTING ONLY: when true, athena document uploads (consent PDF,
        // insurance card, ID) are skipped and treated as successful, so the
        // intake flow can be exercised before the athena document subclasses
        // are confirmed. Never enable in production.
        'fake_uploads' => env('BOOKING_FAKE_UPLOADS', false),

        // Browser-side limits. Photos are resized before upload, so these are
        // a backstop against someone posting something enormous by hand.
        'max_upload_bytes' => 8 * 1024 * 1024,
        'image_max_edge'   => 1600,   // px, longest side after browser resize
        'image_quality'    => 0.82,   // JPEG quality after browser resize

        // athena document classification. Confirm these against the practice's
        // athenaOne setup -- an unknown subclass is rejected on upload.
        'document_subclass' => [
            'consent'        => env('ATHENA_SUBCLASS_CONSENT', 'CONSENT'),
            'insurance_card' => env('ATHENA_SUBCLASS_INSURANCE', 'INSURANCECARD'),
        ],
    ],

    'athena' => [

        // Which environment every athena call goes to. Change this ONLY when
        // promoting; see the checklist in claude/booking-engine-spec.md.
        'environment' => env('ATHENA_ENV', 'preview'), // preview | production

        'scope' => env('ATHENA_SCOPE', 'athena/service/Athenanet.MDP.*'),

        // Athena's preview sandbox is routinely slow -- patient search in
        // particular. These are seconds.
        //
        // Reads are retried on a 5xx but never on a timeout, so 'timeout' is
        // close to the worst case a patient waits. Writes are never retried at
        // all, so they get longer: giving up early on a write that has already
        // landed leaves a duplicate record behind.
        'timeout'       => (int) env('ATHENA_TIMEOUT', 25),
        'write_timeout' => (int) env('ATHENA_WRITE_TIMEOUT', 45),

        // Seconds to cache an availability lookup. Short: a stale slot shown to
        // a patient is caught by the pre-booking re-check, but it still wastes
        // their time, so do not raise this much.
        'cache_ttl' => 60,

        // We send our own branded confirmation email, so suppress athena's to
        // avoid the patient receiving two different ones.
        'suppress_athena_email' => true,

        /*
        | Per-environment settings.
        |
        | These are separate on purpose. athena issues DIFFERENT client
        | credentials for preview and production, and the sandbox practice is a
        | different practice with its own IDs -- department, provider and
        | appointment reason IDs from preview will not exist in production.
        | Keeping both sets side by side means promoting is a one-line change
        | to ATHENA_ENV rather than a risky swap of every key, and it makes it
        | impossible to accidentally point preview credentials at the live
        | practice.
        |
        | api_url values confirmed against the athenahealth developer portal.
        | The token_url values still need confirming there -- athena has moved
        | them before. `php artisan athena:check` is the fastest way to find
        | out: it fails on the token request if they are wrong.
        */
        'environments' => [

            'preview' => [
                'api_url'   => 'https://api.preview.platform.athenahealth.com',
                'token_url' => env('ATHENA_PREVIEW_TOKEN_URL', 'https://athena.okta.com/oauth2/aus2hfei6ookPyyCA297/v1/token'),

                'practice_id'   => env('ATHENA_PREVIEW_PRACTICE_ID', 195900),
                'client_id'     => env('ATHENA_PREVIEW_CLIENT_ID'),
                'client_secret' => env('ATHENA_PREVIEW_CLIENT_SECRET'),
                'department_id' => env('ATHENA_PREVIEW_DEPARTMENT_ID'),
            ],

            'production' => [
                'api_url'   => 'https://api.platform.athenahealth.com',
                'token_url' => env('ATHENA_PRODUCTION_TOKEN_URL', 'https://athena.okta.com/oauth2/aus2hff5eqFb7Wqfh297/v1/token'),

                'practice_id'   => env('ATHENA_PRODUCTION_PRACTICE_ID', 24211),
                'client_id'     => env('ATHENA_PRODUCTION_CLIENT_ID'),
                'client_secret' => env('ATHENA_PRODUCTION_CLIENT_SECRET'),
                'department_id' => env('ATHENA_PRODUCTION_DEPARTMENT_ID'),
            ],
        ],
    ],
];
