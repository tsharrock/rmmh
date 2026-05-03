@extends('layout')

@section('title', 'Telehealth Phoenix | Online Mental Health & Psychiatry in AZ | Redmond Medical & Mental Health')
@section('description', 'Arizona-licensed psychiatric care, family medicine, and weight loss treatment for Phoenix residents via secure telehealth. Skip the Valley traffic and the wait list.')
@section('keywords', 'Telehealth Phoenix, Online Psychiatrist Phoenix AZ, Mental Health Maricopa County, Telehealth Arizona, Online Doctor Phoenix, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "name": "Redmond Medical & Mental Health - Phoenix Telehealth",
  "description": "Arizona-licensed online psychiatry, primary care, and weight loss services for Phoenix and Maricopa County through secure telehealth.",
  "url": "https://www.redmondmmh.com/telehealth/arizona/phoenix",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Phoenix",
    "addressRegion": "AZ"
  },
  "areaServed": {
    "@type": "City",
    "name": "Phoenix, AZ"
  },
  "serviceArea": {
    "@type": "GeoCircle",
    "geoMidpoint": {
      "@type": "GeoCoordinates",
      "latitude": 33.4484,
      "longitude": -112.0740
    },
    "geoRadius": "30000"
  }
}
</script>
@endsection

@section('content')
    <div class="hero phoenix border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Phoenix</h1>
                    <p>Arizona-licensed mental health and medical care from the comfort of your Phoenix home.</p>
                    <a class="btn rmmh_button_primary me-3" href="https://nextpatient.co/p/redmondmedical/schedule" target="_blank">Schedule Your Visit</a>
                </div>
            </div>
        </div>
    </div>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Phoenix</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Arizona has a documented shortage of psychiatric providers. Tiffany is licensed in Arizona and has over 30 years of experience treating ADHD, anxiety, depression, bipolar disorders, eating disorders, and addiction—giving Phoenix residents access to specialty mental health care without the months-long wait at Valley health systems.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Manage chronic conditions like hypertension or thyroid issues, handle acute concerns like UTIs and the flu, and review lab results from your home in Phoenix—no I-10 traffic, no parking garage.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Access individualized weight management programs from home, including Semaglutide and Tirzepatide therapy with coaching and nutritional guidance.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('weight-loss') }}">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Serving Phoenix and Maricopa County</h2>
                    <p>Our Arizona-licensed telehealth services reach Phoenix, Glendale, Peoria, Avondale, Paradise Valley, and the surrounding Maricopa County communities. Whether you are searching for an "online psychiatrist in Phoenix" or "telehealth weight loss in Maricopa County," Redmond MMH provides integrated medical and mental health care across the Valley.</p>
                    <ul>
                        <li><strong>Arizona-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Arizona license and treats Arizona residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Phoenix pharmacy for same-day pickup.</li>
                        <li><strong>Integrated Care:</strong> Address both your physical and mental health needs in one appointment, saving time and copays.</li>
                    </ul>
                </div>
            </div>
            <div class="divider-line"></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>How It Works</h2>
                    <ol>
                        <li><strong>Book Online:</strong> Select a "Telehealth" appointment through our secure portal.</li>
                        <li><strong>Secure Connection:</strong> Receive a HIPAA-compliant video link via email or text.</li>
                        <li><strong>The Visit:</strong> Meet with Tiffany Redmond, PA-C, to discuss your health goals and treatment plan from your home.</li>
                        <li><strong>Prescriptions & Follow-up:</strong> Any necessary medications are sent to your preferred Phoenix pharmacy immediately.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section id="meet-provider" class="bg_rmmh_gray py-5">
        <div class="container">
            <div class="row">
                <div class="col pb-5 text-center">
                    <h3>Meet your provider</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 ">
                    <img class="float-start me-3" src="/img/tiffany_redmond_cropped.webp" alt="Tiffany Redmond, PA-C" />
                    <h4>Tiffany Redmond, PA-C</h4>
                    <p>After graduating from Arizona State University in 1997, Tiffany began her career working in juvenile correctional facilities, overseeing treatment groups for adolescent violent offenders, sex offenders, and substance abusers. She also spent time working in adolescent and adult group homes and a residential treatment facility in inner-city Los Angeles. She then went on to earn a Master's in Counseling Psychology, after which she spent four years in Nebraska providing therapeutic services for foster children with severe psychiatric issues. Tiffany then went on to work as a civilian for the U.S. Army, conducting neuropsychological assessments of service members returning from the Middle East with traumatic brain injuries. Upon graduating from the University of Alabama's surgical Physician Assistant Program in 2016, Tiffany moved to Utah, where she has since been providing family medicine and psychiatric services to the Cache Valley community.</p>
                    <p>Tiffany is licensed to see patients in Utah and Arizona and is currently accepting new patients for both in-person and telehealth services. Whether you are seeking mental health support or a new primary care home, she is ready to partner with you on your journey.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
