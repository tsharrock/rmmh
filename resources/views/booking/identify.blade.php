@extends('layout')

@section('title', 'Book Appointment | Redmond Medical & Mental Health')
@section('description', 'Confirm your appointment with Redmond Medical & Mental Health.')

@section('content')
<div class="container booking-shell">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <h1 class="booking-title">Book Appointment</h1>
            @include('booking._progress', ['step' => 'details'])

            <div class="booking-card">
                <div class="row g-4">
                    <div class="col-md-6">
                        @include('booking._summary')
                    </div>

                    <div class="col-md-6">
                        <div class="booking-panel">
                            <h2 class="booking-panel__title">To book this appointment, enter your email address</h2>

                            <form method="POST" action="{{ route('booking.details') }}" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label visually-hidden">Email address</label>
                                    <input type="email" name="email" id="email" required autofocus
                                           autocomplete="email" inputmode="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           value="{{ old('email', $email) }}" placeholder="Email">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn rmmh_button_primary w-100">Next</button>
                            </form>

                            <p class="booking-panel__note">
                                We use this to send your confirmation. We never share it.
                            </p>
                        </div>

                        <a class="booking-back" href="{{ route('booking.times', ['patient_type' => $patientType, 'visit_reason' => $visitReason, 'start' => $slot->format('Y-m-d')]) }}">
                            &larr; Pick a different time
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
