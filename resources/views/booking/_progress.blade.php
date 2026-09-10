@php
    // Mirrors BookingSession::intakeApplies(). The bar must never promise a
    // step the patient will not be shown — an established patient with nothing
    // to fill in goes straight from details to confirm.
    $patientType = session('booking.patient_type');
    $isNew = $patientType === 'new';

    $applies = function (string $key) use ($isNew): bool {
        return match (config("booking.intake.{$key}", 'always')) {
            'always', true => true,
            'new_only'     => $isNew,
            'optional'     => true,
            default        => false,
        };
    };

    $steps = collect([
        ['key' => 'visit',     'label' => 'Visit type', 'when' => true],
        ['key' => 'time',      'label' => 'Time',       'when' => true],
        ['key' => 'details',   'label' => 'Your details', 'when' => true],
        ['key' => 'forms',     'label' => 'Forms',      'when' => $applies('consent')],
        ['key' => 'insurance', 'label' => 'Insurance',  'when' => $applies('insurance')],
        ['key' => 'id',        'label' => 'Photo ID',   'when' => $applies('drivers_license')],
        ['key' => 'confirm',   'label' => 'Confirm',    'when' => true],
    ])->where('when', true)->values();

    $currentIndex = $steps->search(fn ($s) => $s['key'] === ($step ?? 'visit'));
    $currentIndex = $currentIndex === false ? 0 : $currentIndex;
@endphp

<nav class="booking-progress" aria-label="Booking progress">
    <ol>
        @foreach ($steps as $i => $s)
            <li @class(['is-done' => $i < $currentIndex, 'is-current' => $i === $currentIndex])
                @if($i === $currentIndex) aria-current="step" @endif>
                <span class="booking-progress__dot" aria-hidden="true">{{ $i < $currentIndex ? '✓' : $i + 1 }}</span>
                <span class="booking-progress__label">{{ $s['label'] }}</span>
            </li>
        @endforeach
    </ol>
</nav>
