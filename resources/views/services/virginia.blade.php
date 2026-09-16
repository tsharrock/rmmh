@extends('layout')

@section('title', 'Virginia Telehealth Services & Insurance | Redmond MMH')
@section('description', 'Telehealth psychiatric care, family medicine, and medical weight loss for patients across
    Virginia, plus accepted insurance plans and credentialing.')
@section('keywords', 'Virginia Telehealth, Virginia Mental Health, Virginia Insurance Credentials, Psychiatric Care
    Virginia, Medical Weight Loss Virginia')

@section('content')
    <div class="hero virginia hero-va-4 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Telehealth Services<br class="d-none d-md-block"> in Virginia</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a> <span>></span> Virginia Services
                </div>
                <p>Tiffany Redmond, PA-C, is licensed in Virginia and provides the following services to patients across the
                    state via secure telehealth. Ketamine Therapy and IV Nutrition & Injectables require in-person
                    administration and are only available at our Hyde Park, Utah clinic.</p>

                <h2>Accepted Insurance Plans in Virginia</h2>
                <p>We're credentialed with the following insurance plan in Virginia:</p>
                <ul>
                    <li>BCBS Blue Card</li>
                </ul>
                <p>Insurance acceptance may vary by plan. We recommend calling the number on the back of your card to
                    confirm your telemedicine benefit before your visit.</p>
                <p>Don't have insurance, or prefer not to bill your plan? We also accept cash pay for all services.</p>

                <div class="divider-line"></div>

                <h2>Services offered in Virginia</h2>
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <h3 class="text-center">Psychiatric Care</h3>
                            <p>Comprehensive diagnosis and medication management for conditions ranging from anxiety and
                                depression to ADHD, bipolar disorder, and addictions.</p>
                            <p class="link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <h3 class="text-center">Family Medicine & Women's Health</h3>
                            <p>Holistic primary care that integrates annual wellness exams, labs and acute and chronic
                                disease management. Specialized women's services include contraception and hormonal health.
                            </p>
                            <p class="link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <h3 class="text-center">Medical Weight Loss</h3>
                            <p>Evidence-based weight management programs featuring GLP-1 medications (like semaglutide and
                                tirzepatide) combined with nutritional support to help you achieve and maintain a healthy
                                weight.</p>
                            <p class="link"><a class="rmmh_red" href="{{ route('weight-loss') }}">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <h3 class="text-center">Telehealth Services</h3>
                            <p>Convenient virtual consultations that allow you to receive high-quality primary care and
                                psychiatric services, medication management, and medical follow-ups from the comfort and
                                privacy of your own home.</p>
                            <p class="link"><a class="rmmh_red" href="{{ route('telehealth') }}">Read More</a></p>
                        </div>
                    </div>
                </div>

                <div class="divider-line"></div>

                <h2>Telehealth by City in Virginia</h2>
                <p>Pick your city below for an overview of how telehealth fits your area:</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li><a href="{{ route('telehealth.virginia.virginia-beach') }}">Virginia Beach</a></li>
                            <li><a href="{{ route('telehealth.virginia.norfolk') }}">Norfolk</a></li>
                            <li><a href="{{ route('telehealth.virginia.richmond') }}">Richmond</a></li>
                            <li><a href="{{ route('telehealth.virginia.arlington') }}">Arlington</a></li>
                            <li><a href="{{ route('telehealth.virginia.chesapeake') }}">Chesapeake</a></li>
                            <li><a href="{{ route('telehealth.virginia.roanoke') }}">Roanoke</a></li>
                            <li><a href="{{ route('telehealth.virginia.lynchburg') }}">Lynchburg</a></li>
                            <li><a href="{{ route('telehealth.virginia.charlottesville') }}">Charlottesville</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li><a href="{{ route('telehealth.virginia.abingdon') }}">Abingdon</a></li>
                            <li><a href="{{ route('telehealth.virginia.big-stone-gap') }}">Big Stone Gap</a></li>
                            <li><a href="{{ route('telehealth.virginia.marion') }}">Marion</a></li>
                            <li><a href="{{ route('telehealth.virginia.galax') }}">Galax</a></li>
                            <li><a href="{{ route('telehealth.virginia.tazewell') }}">Tazewell</a></li>
                            <li><a href="{{ route('telehealth.virginia.farmville') }}">Farmville</a></li>
                            <li><a href="{{ route('telehealth.virginia.south-boston') }}">South Boston</a></li>
                            <li><a href="{{ route('telehealth.virginia.grundy') }}">Grundy</a></li>
                            <li><a href="{{ route('telehealth.virginia.chincoteague') }}">Chincoteague</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                @include('partials.sidebar-booking')
            </div>
        </div>
    </div>
@endsection
