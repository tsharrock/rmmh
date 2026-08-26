@extends('layout')

@section('title', 'Redmond Medical and Mental Health | Integrated Care in Utah and Arizona')
@section('description', 'Redmond Medical and Mental Health offers a unique "one-stop-shop" for Psychiatric care, IV
    Therapy, Ketamine treatments, and Family Medicine. Book your holistic wellness visit today.')
@section('keywords', 'Integrated Mental Health Utah, Primary Care Hyde Park, IV Therapy Logan, Ketamine Treatment Utah,
    Medical Weight Loss Logan')

@section('content')
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-white">
                    <h1 class="text-white">Integrated Mental Health & Primary Care in Utah and Arizona</h1>
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
            <div class="row">
                <div class="col">
                    <h2>Services offered</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Care</h3>
                        <p>Comprehensive diagnosis and medication management for conditions ranging from anxiety and
                            depression to ADHD, bipolar disorder, and addictions.</p>
                        <p class="link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="info-card">
                        <h3 class="text-center">Ketamine Therapy</h3>
                        <p>An innovative, rapid-acting treatment using intramuscular injections to help repair neural
                            pathways for patients struggling with treatment-resistant depression and suicidal ideation,
                            PTSD, migraine headaches, addictions, and chronic pain.</p>
                        <p class="link"><a class="rmmh_red" href="{{ route('ketamine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="info-card">
                        <h3 class="text-center">Family Medicine & Women’s Health</h3>
                        <p>Holistic primary care that integrates annual wellness exams, labs and acute and chronic disease
                            management. Specialized women’s services include contraception and hormonal health.</p>
                        <p class="link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="info-card">
                        <h3 class="text-center">Medical Weight Loss</h3>
                        <p>Evidence-based weight management programs featuring GLP-1 medications (like semaglutide and
                            tirzepatide) combined with nutritional support to help you achieve and maintain a healthy
                            weight.</p>
                        <p class="link"><a class="rmmh_red" href="{{ route('weight-loss') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="info-card">
                        <h3 class="text-center">IV Therapy & Injectables</h3>
                        <p>Customizable nutrient infusions and vitamin injections designed to instantly boost energy,
                            enhance immunity, decrease pain and accelerate physical recovery.</p>
                        <p class="link"><a class="rmmh_red" href="{{ route('iv-fluids') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="info-card">
                        <h3 class="text-center">Telehealth Services</h3>
                        <p>Convenient virtual consultations that allow you to receive high-quality primary care and
                            psychiatric services, medication management, and medical follow-ups from the comfort and privacy
                            of your own home.</p>
                        <p class="link"><a class="rmmh_red" href="{{ route('telehealth') }}">Read More</a></p>
                    </div>
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
