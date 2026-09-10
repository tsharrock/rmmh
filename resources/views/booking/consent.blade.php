@extends('layout')

@section('title', 'Consent Forms | Redmond Medical & Mental Health')
@section('description', 'Review and sign the consent forms for your appointment with Redmond Medical & Mental Health.')

@section('content')
<div class="container booking-shell">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <h1 class="booking-title">Consent Forms</h1>
            @include('booking._progress', ['step' => 'forms'])

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">{{ $errors->first() }}</div>
            @endif

            <div class="booking-card">
                <div class="row g-4">
                    <div class="col-lg-4 order-lg-2">
                        @include('booking._summary')

                        <p class="booking-step-note">
                            Your appointment isn't booked yet. We'll hold it while you finish these
                            few steps.
                        </p>
                    </div>

                    <div class="col-lg-8 order-lg-1">
                        <p class="booking-lead">
                            Please read the following and sign at the bottom. You'll get a copy by
                            email once you're booked.
                        </p>

                        <div class="consent-scroll" tabindex="0" role="region" aria-label="Consent forms">
                            @include('booking.consent-text')
                        </div>

                        <form method="POST" action="{{ route('booking.consent') }}" novalidate class="consent-form">
                            @csrf

                            @if ($askContacts)
                                <div class="mb-3">
                                    <label for="authorized_contacts" class="form-label">
                                        Authorized contacts <span class="text-muted">(optional)</span>
                                    </label>
                                    <textarea name="authorized_contacts" id="authorized_contacts" rows="3"
                                              class="form-control @error('authorized_contacts') is-invalid @enderror"
                                              placeholder="Name, phone number and relationship for anyone we may speak to about your care">{{ old('authorized_contacts') }}</textarea>
                                    <div class="form-text">
                                        Leave blank if you'd rather we only speak with you.
                                    </div>
                                    @error('authorized_contacts')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            @endif

                            <div class="form-check mb-4">
                                <input class="form-check-input @error('agree') is-invalid @enderror"
                                       type="checkbox" value="1" name="agree" id="agree"
                                       @checked(old('agree'))>
                                <label class="form-check-label" for="agree">
                                    I have read and agree to the forms above.
                                </label>
                                @error('agree')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>

                            <fieldset class="consent-signature">
                                <legend>Signature</legend>
                                <p class="consent-signature__hint">
                                    Sign by typing your full name and date of birth.
                                </p>

                                <div class="mb-3">
                                    <label for="signature_name" class="form-label">Your name</label>
                                    <input type="text" name="signature_name" id="signature_name" required
                                           class="form-control consent-signature__name @error('signature_name') is-invalid @enderror"
                                           value="{{ old('signature_name') }}" autocomplete="name">
                                    @error('signature_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <label class="form-label" id="sig-dob-label">Your date of birth</label>
                                <div class="row g-2" role="group" aria-labelledby="sig-dob-label">
                                    <div class="col-6 col-sm-5">
                                        <label for="signature_dob_month" class="visually-hidden">Birth month</label>
                                        <select name="signature_dob_month" id="signature_dob_month" required
                                                class="form-select @error('signature_dob_month') is-invalid @enderror">
                                            <option value="">Month</option>
                                            @foreach (range(1, 12) as $m)
                                                <option value="{{ $m }}" @selected((int) old('signature_dob_month') === $m)>
                                                    {{ DateTime::createFromFormat('!m', (string) $m)->format('F') }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label for="signature_dob_day" class="visually-hidden">Birth day</label>
                                        <input type="number" name="signature_dob_day" id="signature_dob_day" required
                                               min="1" max="31" inputmode="numeric" placeholder="DD"
                                               class="form-control @error('signature_dob_day') is-invalid @enderror"
                                               value="{{ old('signature_dob_day') }}">
                                    </div>
                                    <div class="col-3 col-sm-4">
                                        <label for="signature_dob_year" class="visually-hidden">Birth year</label>
                                        <input type="number" name="signature_dob_year" id="signature_dob_year" required
                                               min="1900" max="{{ now()->year }}" inputmode="numeric" placeholder="YYYY"
                                               class="form-control @error('signature_dob_year') is-invalid @enderror"
                                               value="{{ old('signature_dob_year') }}">
                                    </div>
                                </div>
                                @error('signature_dob_day')<div class="booking-field-error">{{ $message }}</div>@enderror
                            </fieldset>

                            <button type="submit" class="btn rmmh_button_primary w-100 mt-4">
                                Agree and continue
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
