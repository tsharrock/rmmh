<?php

// Used by the /book interstitial. Keep insurance lists in sync with resources/views/services/*.
return [
    'nextpatient_url' => 'https://nextpatient.co/p/redmondmedical/schedule',

    'states' => [
        'Utah' => [
            'Aetna', 'Altius/Coventry', 'Beacon Health', 'BIND Benefits', 'Blue Cross Blue Shield of Idaho',
            'Blue Cross Blue Shield of Utah', 'Blue Cross Federal', 'CHAMPVA', 'Cigna', 'Curative Health',
            'Deseret Mutual - DMBA', 'EMI Health', 'Great-West (Cigna)', 'HealthChoice Medicaid', 'HealthEZ',
            'HealthNet Tricare', 'HealthUtah Physicians Network', 'HealthWest Administrators', 'Humana',
            'Medicaid of Utah', 'Medicaid of Idaho', 'Medicare Part B of Utah', 'Medicare Railroad',
            'Molina Medicaid', 'Motiv Health', 'MultiPlan/PHCS (Beech Street)', 'Optum Behavioral Health',
            'PEHP', 'Regence Blue Cross Blue Shield', 'Samera Health', 'Select Health', 'UMR',
            'United Healthcare', 'University of Utah Health Plan / Healthy U', 'Wise',
        ],
        'Arizona' => ['BCBS Blue Card', 'Curative Health', 'United Healthcare'],
        'Montana' => [
            'BCBS Blue Card', 'Mountain Health CO-OP', 'Curative Health', 'Allegiance Benefit Management Plan (Cigna)',
            'First Choice Health Network (Aetna)', 'Optum Behavioral Health',
        ],
        'Iowa' => [
            'BCBS Wellmark of Iowa', 'BCBS Blue Card', 'Curative Health', 'Midlands Choice (Cigna)',
            'United Healthcare (Effective 11/3/2026)', 'Optum Behavioral Health',
        ],
        'Virginia' => ['BCBS Blue Card', 'Curative Health', 'Virginia Medicaid Fee for Service Plan'],
    ],
];
