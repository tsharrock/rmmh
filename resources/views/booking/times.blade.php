@extends('layout')

@section('title', 'Available Appointments | Redmond Medical & Mental Health')
@section('description', 'Choose an appointment time with Tiffany Redmond, PA-C at Redmond Medical & Mental Health.')

@section('content')
<div class="container booking-shell">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <h1 class="booking-title">Available Appointments</h1>
            @include('booking._progress', ['step' => 'time'])

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">{{ $errors->first() }}</div>
            @endif

            <div class="booking-card">
                @include('booking._provider-card')

                <div class="booking-reason-bar">
                    <div>
                        <span class="booking-reason-bar__label">Reason</span>
                        <strong>{{ config("booking.patient_types.$patientType") }}: {{ config("booking.visit_reasons.$visitReason.label") }}</strong>
                    </div>
                    <a href="{{ route('booking.start', ['patient_type' => $patientType, 'visit_reason' => $visitReason]) }}"
                       class="booking-reason-bar__change">Change</a>
                </div>

                <p class="booking-tz-banner">
                    All times shown in Mountain Time ({{ config('booking.timezone_label') }}).
                    Arizona does not observe daylight saving &mdash; please double-check your local time.
                </p>

                <div class="booking-calendar">
                    <div class="booking-calendar__nav">
                        @if ($prevStart)
                            <a class="booking-nav-btn"
                               href="{{ route('booking.times', ['patient_type' => $patientType, 'visit_reason' => $visitReason, 'start' => $prevStart]) }}"
                               rel="prev" aria-label="Earlier days">&lsaquo;</a>
                        @else
                            <span class="booking-nav-btn is-disabled" aria-hidden="true">&lsaquo;</span>
                        @endif

                        <div class="booking-calendar__days">
                            @foreach ($days as $day)
                                <div class="booking-calendar__heading">{{ $day['date']->format('D, M j') }}</div>
                            @endforeach
                        </div>

                        @if ($nextStart)
                            <a class="booking-nav-btn"
                               href="{{ route('booking.times', ['patient_type' => $patientType, 'visit_reason' => $visitReason, 'start' => $nextStart]) }}"
                               rel="next" aria-label="Later days">&rsaquo;</a>
                        @else
                            <span class="booking-nav-btn is-disabled" aria-hidden="true">&rsaquo;</span>
                        @endif
                    </div>

                    <div class="booking-calendar__grid">
                        @foreach ($days as $day)
                            <div class="booking-calendar__column">
                                <div class="booking-calendar__heading booking-calendar__heading--inline">
                                    {{ $day['date']->format('D, M j') }}
                                </div>

                                @forelse ($day['slots'] as $slot)
                                    <form method="POST" action="{{ route('booking.identify') }}">
                                        @csrf
                                        <input type="hidden" name="patient_type" value="{{ $patientType }}">
                                        <input type="hidden" name="visit_reason" value="{{ $visitReason }}">
                                        <input type="hidden" name="slot" value="{{ $slot->token() }}">
                                        <button type="submit" class="booking-slot">{{ $slot->label() }}</button>
                                    </form>
                                @empty
                                    <p class="booking-calendar__none">No times</p>
                                @endforelse
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <p class="booking-footnote">
                Nothing that works? Call or text
                <a href="tel:{{ config('booking.practice.phone_link') }}">{{ config('booking.practice.phone') }}</a>
                and we'll find a time.
            </p>

        </div>
    </div>
</div>
@endsection
