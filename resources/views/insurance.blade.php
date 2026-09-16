@extends('layout')

@section('title', 'Accepted Insurance Plans | Redmond MMH')
@section('description', 'View accepted insurance by state. Credentialed with Aetna, SelectHealth, BCBS, Humana, and more across UT, AZ, MT, IA & VA.')
@section('keywords', 'Accepted Insurance Redmond MMH, SelectHealth Utah, Blue Cross Blue Shield, Curative Health, Arizona Insurance, Montana Insurance, Iowa Insurance')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Accepted Insurance Providers by State",
  "description": "Insurance plans accepted by Redmond Medical & Mental Health, organized by state: Utah, Arizona, Montana, Iowa, and Virginia.",
  "url": "https://redmondmmh.com/insurance",
  "hasPart": [
    { "@type": "WebPage", "name": "Utah Insurance & Services", "url": "https://redmondmmh.com/services/utah" },
    { "@type": "WebPage", "name": "Arizona Insurance & Services", "url": "https://redmondmmh.com/services/arizona" },
    { "@type": "WebPage", "name": "Montana Insurance & Services", "url": "https://redmondmmh.com/services/montana" },
    { "@type": "WebPage", "name": "Iowa Insurance & Services", "url": "https://redmondmmh.com/services/iowa" },
    { "@type": "WebPage", "name": "Virginia Insurance & Services", "url": "https://redmondmmh.com/services/virginia" }
  ]
}
</script>
@endsection

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
