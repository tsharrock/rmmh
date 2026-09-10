@extends('layout')

@section('title', 'Appointment Confirmed | Redmond Medical & Mental Health')
@section('description', 'Your appointment with Redmond Medical & Mental Health is confirmed.')

@section('content')
<div class="container booking-shell">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <h1 class="booking-title">Appointment Confirmed</h1>
            @include('booking._progress', ['step' => 'confirm'])

            <div class="booking-card booking-card--confirmed">
                <div class="booking-tick" aria-hidden="true">&#10003;</div>

                <h2 class="booking-confirmed__lead">{{ $result['first_name'] }}, you're booked.</h2>

                <p class="booking-confirmed__when">
                    {{ $result['slot_label'] }} {{ config('booking.timezone_label') }}<br>
                    <span class="booking-confirmed__meta">with {{ $result['provider'] }} &mdash; {{ $result['reason'] }}</span>
                </p>

                <p class="booking-confirmed__email">
                    A confirmation is on its way to <strong>{{ $result['email'] }}</strong>,
                    with a calendar invite attached.
                </p>

                @if ($result['reference'])
                    <p class="booking-confirmed__ref">Reference: <code>{{ $result['reference'] }}</code></p>
                @endif

                <div class="booking-next-steps">
                    <h3>Before your visit</h3>
                    <p>
                        We'll email you a check-in link to complete your consent forms, insurance
                        details and address ahead of time. If anything changes, call or text
                        <a href="tel:{{ config('booking.practice.phone_link') }}">{{ config('booking.practice.phone') }}</a>.
                    </p>
                </div>

                <a href="{{ route('home') }}" class="btn rmmh_button_secondary">Back to the site</a>
            </div>

        </div>
    </div>
</div>
@endsection
