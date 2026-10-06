@extends('layout')

@section('title', 'Book an Appointment | Redmond MMH')
@section('description', 'Tell us where you are and how you plan to pay, then schedule your Redmond Medical & Mental Health appointment online.')
@section('keywords', 'Book appointment Redmond MMH, schedule telehealth, insurance accepted')

@section('content')
    <section id="book" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h1 class="text-center mb-4">Book an Appointment</h1>

                    @include('partials.booking-gate', ['mode' => 'link'])
                </div>
            </div>
        </div>
    </section>

@endsection
