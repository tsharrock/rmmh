@extends('layout')

@section('title', 'Confirm Your Appointment | Redmond Medical & Mental Health')
@section('description', 'Check your details and confirm your appointment with Redmond Medical & Mental Health.')

@section('content')
<div class="container booking-shell">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <h1 class="booking-title">Nearly there</h1>
            @include('booking._progress', ['step' => 'confirm'])

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">{{ $errors->first() }}</div>
            @endif

            <div class="booking-card">
                <p class="booking-lead">
                    Everything's collected. Press the button below and your appointment is booked.
                </p>

                <div class="review-grid">
                    <div class="review-block">
                        <h2 class="review-block__title">Appointment</h2>
                        <p class="review-block__value">
                            {{ $slot->format('l, F j, Y') }}<br>
                            <strong>{{ strtolower($slot->format('g:ia')) }} {{ config('booking.timezone_label') }}</strong>
                        </p>
                        <p class="review-block__meta">
                            {{ $provider['name'] }}<br>
                            {{ $reasonLabel }}
                        </p>
                        <a href="{{ route('booking.times', ['patient_type' => $patientType, 'visit_reason' => $visitReason, 'start' => $slot->format('Y-m-d')]) }}"
                           class="review-block__change">Change time</a>
                    </div>

                    <div class="review-block">
                        <h2 class="review-block__title">You</h2>
                        <p class="review-block__value">
                            {{ $booking['patient']['first_name'] }} {{ $booking['patient']['last_name'] }}
                        </p>
                        <p class="review-block__meta">
                            {{ $booking['patient']['email'] }}<br>
                            {{ $booking['patient']['phone'] }}
                        </p>
                    </div>

                    <div class="review-block">
                        <h2 class="review-block__title">Paperwork</h2>

                        @php
                            $done = [];

                            if (! empty($booking['consent_signed_at'])) {
                                $done[] = 'Consent forms signed';
                            }

                            if ($booking['self_pay'] ?? false) {
                                $done[] = 'Self-pay';
                            } elseif (! empty(($booking['insurance_sides'] ?? [])['front'])) {
                                $done[] = 'Insurance card added';
                            }

                            if (! empty($booking['drivers_license'])) {
                                $done[] = 'Photo ID added';
                            }
                        @endphp

                        @if ($done)
                            <ul class="review-check">
                                @foreach ($done as $item)
                                    <li class="is-done">{{ $item }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p class="review-block__meta">
                                Nothing needed — we already have your forms and insurance on file.
                            </p>
                        @endif
                    </div>
                </div>

                <form method="POST" action="{{ route('booking.complete') }}" class="mt-4" data-confirm-booking>
                    @csrf
                    <button type="submit" class="btn rmmh_button_primary w-100 btn-lg">
                        Book my appointment
                    </button>
                </form>

                <p class="booking-fine-print text-center mt-3">
                    You'll get a confirmation email with a calendar invite.
                </p>
            </div>

        </div>
    </div>
</div>
@endsection
