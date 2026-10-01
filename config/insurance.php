<?php

// Accepted insurance plans by state, rendered by partials/insurance-strip.blade.php.
// Utah pages keep their own (current/pending) list and are not included here.
return [
    'arizona' => [
        'name' => 'Arizona',
        'plans' => [
            'BCBS Blue Card',
            'Curative Health',
            'United Healthcare',
        ],
    ],
    'montana' => [
        'name' => 'Montana',
        'plans' => [
            'BCBS Blue Card',
            'Mountain Health CO-OP',
            'Curative Health',
            'Allegiance Benefit Management Plan',
            'First Choice Health Network (Aetna)',
            'Optum Behavioral Health',
        ],
    ],
    'iowa' => [
        'name' => 'Iowa',
        'plans' => [
            'BCBS Wellmark of Iowa',
            'BCBS Blue Card',
            'Curative Health',
            'Midlands Choice (Cigna)',
            'United Healthcare (Effective 11/3/2026)',
            'Optum Behavioral Health',
        ],
    ],
    'virginia' => [
        'name' => 'Virginia',
        'plans' => [
            'BCBS Blue Card',
            'Curative Health',
            'Virginia Medicaid Fee for Service Plan',
        ],
    ],
];
