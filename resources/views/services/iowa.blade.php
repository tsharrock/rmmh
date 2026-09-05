@extends('layout')

@section('title', 'Telehealth Services & Insurance in Iowa | Redmond Medical & Mental Health')
@section('description', 'Telehealth psychiatric care, family medicine, and medical weight loss for patients across Iowa,
    plus accepted insurance plans and credentialing.')
@section('keywords', 'Iowa Telehealth, Iowa Mental Health, Iowa Insurance Credentials, Psychiatric Care Iowa, Medical
    Weight Loss Iowa')

@section('content')
    <div class="hero iowa hero-ia-4 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Telehealth Services<br class="d-none d-md-block"> in Iowa</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a> <span>></span> Iowa Services
                </div>
                <p>Tiffany Redmond, PA-C, is licensed in Iowa and provides the following services to patients across the
                    state via secure telehealth. Ketamine Therapy and IV Nutrition & Injectables require in-person
                    administration and are only available at our Hyde Park, Utah clinic.</p>

                <h2>Accepted Insurance Plans in Iowa</h2>
                <p>We're credentialed with the following insurance plans in Iowa:</p>
                <ul>
                    <li>BCBS Wellmark of Iowa</li>
                    <li>BCBS Blue Card</li>
                    <li>Curative Health</li>
                    <li>Midlands Choice (Cigna)</li>
                </ul>
                <p>Insurance acceptance may vary by plan. We recommend calling the number on the back of your card to
                    confirm your telemedicine benefit before your visit.</p>
                <p>Don't have insurance, or prefer not to bill your plan? We also accept cash pay for all services.</p>

                <div class="divider-line"></div>

                <h2>Services offered in Iowa</h2>
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

                <h2>Telehealth by City in Iowa</h2>
                <p>Pick your city below for an overview of how telehealth fits your area:</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li><a href="{{ route('telehealth.iowa.des-moines') }}">Des Moines</a></li>
                            <li><a href="{{ route('telehealth.iowa.cedar-rapids') }}">Cedar Rapids</a></li>
                            <li><a href="{{ route('telehealth.iowa.davenport') }}">Davenport</a></li>
                            <li><a href="{{ route('telehealth.iowa.sioux-city') }}">Sioux City</a></li>
                            <li><a href="{{ route('telehealth.iowa.iowa-city') }}">Iowa City</a></li>
                            <li><a href="{{ route('telehealth.iowa.waterloo') }}">Waterloo</a></li>
                            <li><a href="{{ route('telehealth.iowa.ames') }}">Ames</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li><a href="{{ route('telehealth.iowa.council-bluffs') }}">Council Bluffs</a></li>
                            <li><a href="{{ route('telehealth.iowa.dubuque') }}">Dubuque</a></li>
                            <li><a href="{{ route('telehealth.iowa.mason-city') }}">Mason City</a></li>
                            <li><a href="{{ route('telehealth.iowa.fort-dodge') }}">Fort Dodge</a></li>
                            <li><a href="{{ route('telehealth.iowa.marshalltown') }}">Marshalltown</a></li>
                            <li><a href="{{ route('telehealth.iowa.ottumwa') }}">Ottumwa</a></li>
                            <li><a href="{{ route('telehealth.iowa.burlington') }}">Burlington</a></li>
                            <li><a href="{{ route('telehealth.iowa.carroll') }}">Carroll</a></li>
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
