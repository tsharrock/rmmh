@extends('layout')

@section('title', 'Telehealth Services & Insurance in Montana | Redmond Medical & Mental Health')
@section('description', 'Telehealth psychiatric care, family medicine, and medical weight loss for patients across Montana, plus accepted insurance plans and credentialing.')
@section('keywords', 'Montana Telehealth, Montana Mental Health, Montana Insurance Credentials, Psychiatric Care Montana, Medical Weight Loss Montana')

@section('content')
    <div class="hero montana border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-lg-1">
                    <h1>Services & Insurance in Montana</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a> <span>></span> Montana Services
                </div>
                <p>Tiffany Redmond, PA-C, is licensed in Montana and provides the following services to patients across the state via secure telehealth. Ketamine Therapy and IV Nutrition & Injectables require in-person administration and are only available at our Hyde Park, Utah clinic.</p>

                <h2>Services offered in Montana</h2>
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <h3 class="text-center">Psychiatric Care</h3>
                            <p>Comprehensive diagnosis and medication management for conditions ranging from anxiety and depression to ADHD, bipolar disorder, and addictions.</p>
                            <p class="link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <h3 class="text-center">Family Medicine & Women's Health</h3>
                            <p>Holistic primary care that integrates annual wellness exams, labs and acute and chronic disease management. Specialized women's services include contraception and hormonal health.</p>
                            <p class="link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <h3 class="text-center">Medical Weight Loss</h3>
                            <p>Evidence-based weight management programs featuring GLP-1 medications (like semaglutide and tirzepatide) combined with nutritional support to help you achieve and maintain a healthy weight.</p>
                            <p class="link"><a class="rmmh_red" href="{{ route('weight-loss') }}">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <h3 class="text-center">Telehealth Services</h3>
                            <p>Convenient virtual consultations that allow you to receive high-quality primary care and psychiatric services, medication management, and medical follow-ups from the comfort and privacy of your own home.</p>
                            <p class="link"><a class="rmmh_red" href="{{ route('telehealth') }}">Read More</a></p>
                        </div>
                    </div>
                </div>

                <div class="divider-line"></div>

                <h2>Insurance & Credentialing in Montana</h2>
                <p>We're credentialed with the following insurance plans in Montana:</p>
                <ul>
                    <li>BCBS Blue Card</li>
                    <li>Curative Health</li>
                </ul>
                <p>Insurance acceptance may vary by plan. We recommend calling the number on the back of your card to confirm your telemedicine benefit before your visit.</p>

                <div class="divider-line"></div>

                <h2>Telehealth by City in Montana</h2>
                <p>Pick your city below for an overview of how telehealth fits your area:</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li><a href="{{ route('telehealth.montana.billings') }}">Billings</a></li>
                            <li><a href="{{ route('telehealth.montana.missoula') }}">Missoula</a></li>
                            <li><a href="{{ route('telehealth.montana.great-falls') }}">Great Falls</a></li>
                            <li><a href="{{ route('telehealth.montana.bozeman') }}">Bozeman</a></li>
                            <li><a href="{{ route('telehealth.montana.butte') }}">Butte</a></li>
                            <li><a href="{{ route('telehealth.montana.helena') }}">Helena</a></li>
                            <li><a href="{{ route('telehealth.montana.kalispell') }}">Kalispell</a></li>
                            <li><a href="{{ route('telehealth.montana.havre') }}">Havre</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li><a href="{{ route('telehealth.montana.miles-city') }}">Miles City</a></li>
                            <li><a href="{{ route('telehealth.montana.glendive') }}">Glendive</a></li>
                            <li><a href="{{ route('telehealth.montana.lewistown') }}">Lewistown</a></li>
                            <li><a href="{{ route('telehealth.montana.dillon') }}">Dillon</a></li>
                            <li><a href="{{ route('telehealth.montana.hamilton') }}">Hamilton</a></li>
                            <li><a href="{{ route('telehealth.montana.polson') }}">Polson</a></li>
                            <li><a href="{{ route('telehealth.montana.sidney') }}">Sidney</a></li>
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
