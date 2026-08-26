@extends('layout')

@section('title', 'Redmond Medical and Mental Health | Integrated Care in Utah and Arizona')
@section('description',
    'Redmond Medical and Mental Health offers a unique "one-stop-shop" for Psychiatric care, IV
    Therapy, Ketamine treatments, and Family Medicine, plus telehealth now serving Utah, Arizona, Montana, and Iowa. Book
    your holistic wellness visit today.')
@section('keywords',
    'Integrated Mental Health Utah, Primary Care Hyde Park, IV Therapy Logan, Ketamine Treatment Utah,
    Medical Weight Loss Logan, Telehealth Montana, Telehealth Iowa')

@section('content')
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-white">
                    <h1 class="text-white">Integrated Mental Health & Primary Care in Utah, Arizona, Montana and Iowa</h1>
                    <p>We know your time is valuable and attending multiple doctor appointments to get each of your medical
                        concerns addressed is very time-consuming. Our goal has always been to simplify this process. Say
                        goodbye to long waits in waiting rooms and endless referrals by providers who are unable to address
                        all of your issues in a single visit. Welcome to Redmond Medical and Mental Health.</p>
                    <a class="btn rmmh_button_primary me-3" href="https://nextpatient.co/p/redmondmedical/schedule"
                        target="_blank">Schedule an Appointment</a>
                </div>
            </div>
        </div>
    </section>
    <section id="page-content" class="py-5">
        <div class="container py-lg-5">
            <div class="row text-center">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Where are you located?</h2>
                    <p>Choose your state to see the services and insurance we offer near you.</p>
                </div>
            </div>
            <div class="row justify-content-center align-items-end g-4 mt-2">
                <div class="col-auto">
                    <a class="state-tile utah" href="{{ route('services.utah') }}">
                        <span class="state-tile-shape"></span>
                        <span class="state-tile-label">Utah</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a class="state-tile arizona" href="{{ route('services.arizona') }}">
                        <span class="state-tile-shape"></span>
                        <span class="state-tile-label">Arizona</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a class="state-tile montana" href="{{ route('services.montana') }}">
                        <span class="state-tile-shape"></span>
                        <span class="state-tile-label">Montana</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a class="state-tile iowa" href="{{ route('services.iowa') }}">
                        <span class="state-tile-shape"></span>
                        <span class="state-tile-label">Iowa</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="work-together" class="mt-3 mt-lg-5">
        <div class="row py-lg-5">
            <div class="col-lg-6 offset-lg-3">
                <h3>How these services work together</h3>
                <p>Redmond Medical & Mental Health is unique because it treats the "whole you" by bridging the gap between
                    physical and mental wellness.</p>
                <ul>
                    <li><strong>Integrated Care:</strong> You can address mental health and primary medical needs in a
                        single visit.</li>

                    <li><strong>Modern Modalities:</strong> Using cutting-edge tools like Ketamine and Semaglutide alongside
                        traditional medicine.</li>

                    <li><strong>Accessibility:</strong> Located in Hyde Park, UT, with a mission to make high-quality care
                        affordable.</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
