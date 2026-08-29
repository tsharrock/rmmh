@extends('layout')

@section('title', 'Redmond Medical and Mental Health | Integrated Care in Utah, Arizona, Montana, and Iowa')
@section('description',
    'Redmond Medical and Mental Health offers a unique "one-stop-shop" for Psychiatric care, IV
    Therapy, Ketamine treatments, and Family Medicine, plus telehealth now serving Utah, Arizona, Montana, and Iowa. Book
    your holistic wellness visit today.')
@section('keywords',
    'Integrated Mental Health Utah, Primary Care Hyde Park, IV Therapy Logan, Ketamine Treatment Utah,
    Medical Weight Loss Logan, Telehealth Montana, Telehealth Iowa')

@section('jsonld')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "@id": "https://redmondmmh.com/#organization",
  "name": "Redmond Medical & Mental Health",
  "alternateName": "Redmond MMH",
  "description": "Integrated psychiatric care, family medicine, medical weight loss, ketamine therapy, and IV nutrition, offered in person in Hyde Park, Utah and via telehealth throughout Utah and Arizona.",
  "url": "https://redmondmmh.com/",
  "telephone": "+1-435-938-1440",
  "email": "PatientSupport@RedmondMMH.com",
  "priceRange": "$$",
  "image": "https://redmondmmh.com/img/logo.png",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "245 N. 700 W.",
    "addressLocality": "Hyde Park",
    "addressRegion": "UT",
    "postalCode": "84318",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 41.7961,
    "longitude": -111.8138
  },
  "employee": {
    "@type": "Physician",
    "name": "Tiffany Redmond, PA-C",
    "url": "https://redmondmmh.com/about"
  },
  "areaServed": [
    { "@type": "City", "name": "Hyde Park, UT" },
    { "@type": "City", "name": "Logan, UT" },
    { "@type": "City", "name": "Salt Lake City, UT" },
    { "@type": "City", "name": "Ogden, UT" },
    { "@type": "City", "name": "Layton, UT" },
    { "@type": "City", "name": "Sandy, UT" },
    { "@type": "City", "name": "Provo, UT" },
    { "@type": "City", "name": "Orem, UT" },
    { "@type": "City", "name": "Spanish Fork, UT" },
    { "@type": "City", "name": "Park City, UT" },
    { "@type": "City", "name": "Heber City, UT" },
    { "@type": "City", "name": "St. George, UT" },
    { "@type": "City", "name": "Cedar City, UT" },
    { "@type": "City", "name": "Beaver, UT" },
    { "@type": "City", "name": "Moab, UT" },
    { "@type": "City", "name": "Blanding, UT" },
    { "@type": "City", "name": "Price, UT" },
    { "@type": "City", "name": "Helper, UT" },
    { "@type": "City", "name": "Vernal, UT" },
    { "@type": "City", "name": "Dutch John, UT" },
    { "@type": "City", "name": "Wendover, UT" },
    { "@type": "City", "name": "Phoenix, AZ" },
    { "@type": "City", "name": "Tucson, AZ" },
    { "@type": "City", "name": "Mesa, AZ" },
    { "@type": "City", "name": "Scottsdale, AZ" },
    { "@type": "City", "name": "Tempe, AZ" },
    { "@type": "City", "name": "Goodyear, AZ" },
    { "@type": "City", "name": "Buckeye, AZ" },
    { "@type": "City", "name": "Surprise, AZ" },
    { "@type": "City", "name": "Queen Creek, AZ" },
    { "@type": "City", "name": "San Tan Valley, AZ" },
    { "@type": "City", "name": "Apache Junction, AZ" },
    { "@type": "City", "name": "Maricopa, AZ" },
    { "@type": "City", "name": "Casa Grande, AZ" },
    { "@type": "City", "name": "Flagstaff, AZ" },
    { "@type": "City", "name": "Prescott, AZ" },
    { "@type": "City", "name": "Sierra Vista, AZ" },
    { "@type": "City", "name": "Yuma, AZ" },
    { "@type": "City", "name": "Kingman, AZ" },
    { "@type": "City", "name": "Lake Havasu City, AZ" },
    { "@type": "City", "name": "Page, AZ" },
    { "@type": "City", "name": "Tuba City, AZ" }
  ]
}
</script>
@endsection

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
