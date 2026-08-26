@extends('layout')

@section('title', 'Accepted Insurance | Redmond Medical & Mental Health | Utah, Arizona, Montana & Iowa')
@section('description', 'View accepted insurance providers by state. Redmond Medical & Mental Health is credentialed with Aetna, SelectHealth, BCBS, Humana, Curative Health, and more across Utah, Arizona, Montana, and Iowa.')
@section('keywords', 'Accepted Insurance Redmond MMH, SelectHealth Utah, Blue Cross Blue Shield, Curative Health, Arizona Insurance, Montana Insurance, Iowa Insurance')

@section('content')

    <section id="insurance" class="mb-5">
        <div class="container">
            <div class="row py-5">
                <div class="col text-center"><h1>Accepted Insurance Providers</h1></div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <p>Insurance credentialing varies by state. Choose your state below to see the plans we accept along with our full range of services there.</p>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="info-card">
                        <h3>Utah</h3>
                        <p class="link"><a class="rmmh_red" href="{{ route('services.utah') }}">View Insurance</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="info-card">
                        <h3>Arizona</h3>
                        <p class="link"><a class="rmmh_red" href="{{ route('services.arizona') }}">View Insurance</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="info-card">
                        <h3>Montana</h3>
                        <p class="link"><a class="rmmh_red" href="{{ route('services.montana') }}">View Insurance</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="info-card">
                        <h3>Iowa</h3>
                        <p class="link"><a class="rmmh_red" href="{{ route('services.iowa') }}">View Insurance</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
