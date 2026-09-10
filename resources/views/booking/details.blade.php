@extends('layout')

@section('title', 'Patient Information | Redmond Medical & Mental Health')
@section('description', 'Enter your details to complete your appointment booking with Redmond Medical & Mental Health.')

@section('content')
<div class="container booking-shell">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <h1 class="booking-title">Book Appointment</h1>
            @include('booking._progress', ['step' => 'details'])

            <div class="booking-card">
                <div class="row g-4">
                    <div class="col-md-5">
                        @include('booking._summary')
                    </div>

                    <div class="col-md-7">
                        <div class="booking-panel">
                            <h2 class="booking-panel__title">Patient Information</h2>

                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    Please check the highlighted fields below.
                                </div>
                            @endif

                            <form method="POST" action="{{ route('booking.patient') }}" novalidate>
                                @csrf

                                <div class="row g-2 mb-3">
                                    <div class="col-sm-6">
                                        <label for="first_name" class="form-label">First name</label>
                                        <input type="text" name="first_name" id="first_name" required
                                               autocomplete="given-name"
                                               class="form-control @error('first_name') is-invalid @enderror"
                                               value="{{ old('first_name') }}">
                                        @error('first_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="last_name" class="form-label">Last name</label>
                                        <input type="text" name="last_name" id="last_name" required
                                               autocomplete="family-name"
                                               class="form-control @error('last_name') is-invalid @enderror"
                                               value="{{ old('last_name') }}">
                                        @error('last_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" required autocomplete="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           value="{{ old('email', $email) }}">
                                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <fieldset class="mb-3">
                                    <legend class="form-label">Date of birth</legend>
                                    <div class="row g-2">
                                        <div class="col-6 col-sm-5">
                                            <label for="dob_month" class="visually-hidden">Birth month</label>
                                            <select name="dob_month" id="dob_month" required
                                                    class="form-select @error('dob_month') is-invalid @enderror">
                                                <option value="">Month</option>
                                                @foreach (range(1, 12) as $m)
                                                    <option value="{{ $m }}" @selected((int) old('dob_month') === $m)>
                                                        {{ DateTime::createFromFormat('!m', (string) $m)->format('F') }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-3 col-sm-3">
                                            <label for="dob_day" class="visually-hidden">Birth day</label>
                                            <input type="number" name="dob_day" id="dob_day" required min="1" max="31"
                                                   inputmode="numeric" placeholder="DD"
                                                   class="form-control @error('dob_day') is-invalid @enderror"
                                                   value="{{ old('dob_day') }}">
                                        </div>
                                        <div class="col-3 col-sm-4">
                                            <label for="dob_year" class="visually-hidden">Birth year</label>
                                            <input type="number" name="dob_year" id="dob_year" required min="1900" max="{{ now()->year }}"
                                                   inputmode="numeric" placeholder="YYYY"
                                                   class="form-control @error('dob_year') is-invalid @enderror"
                                                   value="{{ old('dob_year') }}">
                                        </div>
                                    </div>
                                    @error('dob_day')<div class="booking-field-error">{{ $message }}</div>@enderror
                                    @error('dob_month')<div class="booking-field-error">{{ $message }}</div>@enderror
                                    @error('dob_year')<div class="booking-field-error">{{ $message }}</div>@enderror
                                </fieldset>

                                <div class="mb-3">
                                    <label for="sex" class="form-label">Sex</label>
                                    <select name="sex" id="sex" required class="form-select @error('sex') is-invalid @enderror">
                                        <option value="">- Choose -</option>
                                        <option value="female" @selected(old('sex') === 'female')>Female</option>
                                        <option value="male" @selected(old('sex') === 'male')>Male</option>
                                        <option value="other" @selected(old('sex') === 'other')>Other</option>
                                    </select>
                                    @error('sex')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <div class="form-text">Required by your insurance and medical record.</div>
                                </div>

                                <div class="row g-2 mb-3">
                                    <div class="col-8">
                                        <label for="phone" class="form-label">Phone number</label>
                                        <input type="tel" name="phone" id="phone" required autocomplete="tel"
                                               inputmode="tel"
                                               class="form-control @error('phone') is-invalid @enderror"
                                               value="{{ old('phone') }}">
                                        @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="phone_type" class="form-label">Type</label>
                                        <select name="phone_type" id="phone_type" class="form-select">
                                            <option value="mobile" @selected(old('phone_type', 'mobile') === 'mobile')>Mobile</option>
                                            <option value="home" @selected(old('phone_type') === 'home')>Home</option>
                                            <option value="work" @selected(old('phone_type') === 'work')>Work</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1"
                                           name="sms_consent" id="sms_consent" @checked(old('sms_consent', true))>
                                    <label class="form-check-label" for="sms_consent">
                                        You can send me text messages about my appointment and account.
                                        <span class="booking-fine-print">Message and data rates may apply.</span>
                                    </label>
                                </div>

                                <div class="mb-3">
                                    <label for="reason" class="form-label">Reason for visit <span class="text-muted">(optional)</span></label>
                                    <textarea name="reason" id="reason" rows="3"
                                              class="form-control @error('reason') is-invalid @enderror">{{ old('reason') }}</textarea>
                                    @error('reason')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <button type="submit" class="btn rmmh_button_primary w-100">Continue</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
