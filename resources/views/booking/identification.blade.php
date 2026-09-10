@extends('layout')

@section('title', 'Photo ID | Redmond Medical & Mental Health')
@section('description', 'Add a photo ID for your first appointment with Redmond Medical & Mental Health.')

@section('content')
<div class="container booking-shell">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <h1 class="booking-title">Photo ID</h1>
            @include('booking._progress', ['step' => 'id'])

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
                            Because this is your first visit with us, we need to confirm your
                            identity. A driver's licence, state ID or passport all work.
                        </p>

                        @include('booking._photo-capture', [
                            'name'     => 'drivers-license',
                            'label'    => 'Photo ID',
                            'hint'     => 'Make sure the whole card is in frame and the text is readable.',
                            'endpoint' => route('booking.identification.photo'),
                            'extra'    => [],
                            'done'     => $uploaded,
                        ])

                        <form method="POST" action="{{ route('booking.identification') }}" class="mt-4">
                            @csrf
                            <button type="submit" class="btn rmmh_button_primary w-100">Continue</button>
                        </form>

                        @if ($optional)
                            <form method="POST" action="{{ route('booking.identification') }}" class="mt-2">
                                @csrf
                                <input type="hidden" name="skip" value="1">
                                <button type="submit" class="btn btn-link w-100 booking-skip">
                                    Skip for now — I'll bring it to my visit
                                </button>
                            </form>
                        @endif

                        <p class="booking-fine-print mt-4">
                            Sent directly to your medical record. This website doesn't keep a copy.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
