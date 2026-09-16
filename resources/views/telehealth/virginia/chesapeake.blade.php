@extends('layout')

@section('title', 'Telehealth in Chesapeake, VA | Redmond MMH')
@section('description', 'Virginia-licensed psychiatric care, family medicine, and weight loss treatment for Chesapeake and Hampton Roads via secure telehealth.')
@section('keywords', 'Telehealth Chesapeake, Online Psychiatrist Chesapeake VA, Mental Health Hampton Roads, Telehealth Virginia, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Chesapeake Telehealth",
    "description": "Virginia-licensed online psychiatry, primary care, and weight loss services for Chesapeake and Hampton Roads through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/virginia/chesapeake",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Chesapeake",
        "addressRegion": "VA"
    },
    "areaServed": {
        "@type": "City",
        "name": "Chesapeake, VA"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 36.7682,
            "longitude": -76.2875
        },
        "geoRadius": "30000"
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Is telehealth psychiatric care available to Chesapeake residents?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Tiffany Redmond, PA-C is licensed in Virginia and treats Chesapeake and Hampton Roads patients for psychiatric medication management, primary care, and weight loss by secure video visit."
            }
        },
        {
            "@type": "Question",
            "name": "Chesapeake is a large, spread-out city &mdash; does telehealth still work well here?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, and it often works especially well. Chesapeake covers a wide area from Great Bridge to the Great Dismal Swamp, and a secure video visit means patients in any part of the city can be seen without a long drive to a single clinic location."
            }
        },
        {
            "@type": "Question",
            "name": "Will my insurance cover a Chesapeake telehealth visit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We're currently credentialed with BCBS Blue Card in Virginia. Call the number on the back of your card to confirm your telemedicine benefit, or ask about our cash-pay rates."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero chesapeake hero-va-5 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Chesapeake</h1>
                    <p>Virginia-licensed Mental Health and medical care from the comfort of your home.</p>
                    <a class="btn rmmh_button_primary me-3" href="https://nextpatient.co/p/redmondmedical/schedule" target="_blank">Schedule Your Visit</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('telehealth') }}">Telehealth</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chesapeake</li>
            </ol>
        </nav>
    </div>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://redmondmmh.com/" },
        { "@type": "ListItem", "position": 2, "name": "Telehealth", "item": "https://redmondmmh.com/telehealth" },
        { "@type": "ListItem", "position": 3, "name": "Chesapeake", "item": "https://redmondmmh.com/telehealth/virginia/chesapeake" }
      ]
    }
    </script>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Chesapeake, VA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Chesapeake's population has grown quickly, and psychiatric appointments haven't always kept pace, often meaning a long wait for a new patient slot. Tiffany typically sees new patients same-day or next-day.</p>
                        <p>Licensed in Virginia with more than 30 years of psychiatric experience, she treats ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation, and addiction &mdash; all from a secure video visit at home.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Chronic conditions such as high blood pressure, diabetes, thyroid disorders, PCOS, and hormonal changes &mdash; including menopause and low testosterone &mdash; are managed with the same ongoing attention as an in-person practice.</p>
                        <p>Acute concerns are welcome too: flu, rashes, urinary or sexually transmitted infections, eye problems, and minor injuries can all be evaluated by video, with labs and referrals routed to a location near you.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Semaglutide and Tirzepatide have delivered real, lasting results for many patients, and Tiffany builds each plan around individualized coaching and nutrition guidance.</p>
                        <p>Local compounding pharmacy partnerships keep GLP-1 therapy more affordable and available to non-diabetic patients throughout Hampton Roads.</p>
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
                    <h2>Serving Chesapeake and Hampton Roads</h2>
                    <p>Our Virginia-licensed telehealth services reach Chesapeake's Great Bridge, Deep Creek, South Norfolk, and Western Branch neighborhoods, along with Norfolk, Virginia Beach, and Suffolk across the wider Hampton Roads region. Bordering the Great Dismal Swamp and the Elizabeth River, Chesapeake is one of Virginia's largest cities by land area. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages. We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients. We're in-network with the insurance plan listed below.</p>
                    <ul>
                        <li><strong>Virginia-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Virginia license and treats Virginia residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Chesapeake area pharmacy.</li>
                        <li><strong>Integrated Care:</strong> Address both your physical and mental health needs in one convenient appointment. Scheduling is easy and most patients can be seen the same day or next. We allow you to save time and save copays.</li>
                    </ul>

                    <h3>Accepted Insurance Plans</h3>
                    <ul>
                        <li>BCBS Blue Card</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Chesapeake pharmacy immediately.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-5">
            <div class="divider-line"></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Local FAQ</h2>
                    <h3>Is telehealth psychiatric care available to Chesapeake residents?</h3>
                    <p>Yes. Tiffany Redmond, PA-C is licensed in Virginia and treats Chesapeake and Hampton Roads patients for psychiatric medication management, primary care, and weight loss by secure video visit.</p>
                    <h3>Chesapeake is a large, spread-out city &mdash; does telehealth still work well here?</h3>
                    <p>Yes, and it often works especially well. Chesapeake covers a wide area from Great Bridge to the Great Dismal Swamp, and a secure video visit means patients in any part of the city can be seen without a long drive to a single clinic location.</p>
                    <h3>Will my insurance cover a Chesapeake telehealth visit?</h3>
                    <p>We're currently credentialed with BCBS Blue Card in Virginia. Call the number on the back of your card to confirm your telemedicine benefit, or ask about our cash-pay rates.</p>
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
                    <p>Tiffany is licensed to see patients in Virginia and is currently accepting new patients for telehealth services. Whether you are seeking mental health support or a new primary care home, she is ready to partner with you on your journey.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
