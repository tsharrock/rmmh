@extends('layout')

@section('title', 'Insurance | Redmond Medical & Mental Health')
@section('description', 'Add your insurance details for your appointment with Redmond Medical & Mental Health.')

@section('content')
<div class="container booking-shell">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <h1 class="booking-title">Insurance</h1>
            @include('booking._progress', ['step' => 'insurance'])

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">{{ $errors->first() }}</div>
            @endif

            <div class="booking-card">
                <div class="row g-4">
                    <div class="col-lg-4 order-lg-2">
                        @include('booking._summary')
                    </div>

                    <div class="col-lg-8 order-lg-1">
                        <p class="booking-lead">
                            Take a photo of your insurance card and we'll do the rest. Nothing is
                            stored on this website — the photo goes straight to your medical record.
                        </p>

                        <div class="photo-grid" data-insurance-photos>
                            @include('booking._photo-capture', [
                                'name'     => 'insurance-front',
                                'label'    => 'Front of card',
                                'hint'     => 'The side with your name and member ID.',
                                'endpoint' => route('booking.insurance.photo'),
                                'extra'    => ['side' => 'front'],
                                'done'     => ! empty($uploaded['front']),
                            ])

                            @include('booking._photo-capture', [
                                'name'     => 'insurance-back',
                                'label'    => 'Back of card',
                                'hint'     => 'Optional, but it usually has the claims address.',
                                'endpoint' => route('booking.insurance.photo'),
                                'extra'    => ['side' => 'back'],
                                'done'     => ! empty($uploaded['back']),
                            ])
                        </div>

                        <form method="POST" action="{{ route('booking.insurance') }}" class="mt-4">
                            @csrf
                            <button type="submit" class="btn rmmh_button_primary w-100">Continue</button>
                        </form>

                        @if ($allowSelfPay)
                            <div class="booking-alt">
                                <span class="booking-alt__rule">or</span>
                            </div>

                            <form method="POST" action="{{ route('booking.insurance') }}">
                                @csrf
                                <input type="hidden" name="self_pay" value="1">
                                <button type="submit" class="btn rmmh_button_secondary w-100">
                                    I'm paying for this myself
                                </button>
                                <p class="booking-panel__note text-center">
                                    Choose this if you don't have insurance, or you'd rather not
                                    claim for this visit. We'll go through costs with you before
                                    anything is charged.
                                </p>
                            </form>
                        @endif

                        <p class="booking-fine-print mt-4">
                            Photos are sent directly to your chart in our medical records system.
                            This website doesn't keep a copy.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
