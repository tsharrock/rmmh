@extends('layout')

@section('title', 'Schedule an Appointment | Redmond Medical & Mental Health')
@section('description', 'Book an in-person, telehealth or ketamine appointment with Tiffany Redmond, PA-C at Redmond Medical & Mental Health. Serving Utah, Arizona, Montana and Iowa.')

@section('content')
<div class="container booking-shell">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <h1 class="booking-title">Schedule an Appointment</h1>
            @include('booking._progress', ['step' => 'visit'])

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <div class="booking-card">
                <form method="GET" action="{{ route('booking.start') }}" id="booking-filters">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="patient_type" class="form-label">Patient Type</label>
                            <select name="patient_type" id="patient_type" class="form-select" onchange="this.form.submit()">
                                <option value="">- Choose -</option>
                                @foreach (config('booking.patient_types') as $key => $label)
                                    <option value="{{ $key }}" @selected($patientType === $key)>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="visit_reason" class="form-label">Visit Reason</label>
                            <select name="visit_reason" id="visit_reason" class="form-select"
                                    onchange="this.form.submit()" @disabled(! $patientType)>
                                <option value="">- Choose -</option>
                                @foreach (config('booking.visit_reasons') as $key => $reason)
                                    <option value="{{ $key }}" @selected($visitReason === $key)>{{ $reason['label'] }}</option>
                                @endforeach
                            </select>
                            @unless ($patientType)
                                <div class="form-text">Choose a patient type first.</div>
                            @endunless
                        </div>
                    </div>
                    <noscript>
                        <button type="submit" class="btn rmmh_button_primary mt-3">Show times</button>
                    </noscript>
                </form>

                <hr class="booking-rule">

                @include('booking._provider-card')

                @if ($patientType && $visitReason)
                    @if ($nextSlots->isNotEmpty())
                        <p class="booking-slots__intro">
                            Next available &mdash; all times {{ config('booking.timezone_label') }}
                            <span class="booking-tz-note">(Mountain Time)</span>
                        </p>
                        <div class="booking-slots">
                            @foreach ($nextSlots as $slot)
                                <form method="POST" action="{{ route('booking.identify') }}" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="patient_type" value="{{ $patientType }}">
                                    <input type="hidden" name="visit_reason" value="{{ $visitReason }}">
                                    <input type="hidden" name="slot" value="{{ $slot->token() }}">
                                    <button type="submit" class="booking-slot booking-slot--wide">
                                        <span class="booking-slot__day">{{ $slot->start->format('D, M j') }}</span>
                                        <span class="booking-slot__time">{{ $slot->label() }}</span>
                                    </button>
                                </form>
                            @endforeach

                            <a class="booking-slot booking-slot--more"
                               href="{{ route('booking.times', ['patient_type' => $patientType, 'visit_reason' => $visitReason]) }}">
                                More&hellip;
                            </a>
                        </div>
                    @else
                        <p class="booking-empty">
                            No times are available in the next {{ config('booking.horizon_days') }} days for this visit type.
                            Please call or text <a href="tel:{{ config('booking.practice.phone_link') }}">{{ config('booking.practice.phone') }}</a>.
                        </p>
                    @endif
                @else
                    <p class="booking-slots__intro mb-1">
                        @if ($headline)
                            Next appointment: <strong>{{ $headline->longLabel() }} {{ config('booking.timezone_label') }}</strong>
                        @else
                            Appointments available
                        @endif
                    </p>
                    <p class="booking-hint">Choose a patient type and visit reason above to see exact times.</p>
                @endif
            </div>

            <p class="booking-footnote">
                Prefer to talk to someone? Call or text
                <a href="tel:{{ config('booking.practice.phone_link') }}">{{ config('booking.practice.phone') }}</a>.
            </p>

        </div>
    </div>
</div>
@endsection
