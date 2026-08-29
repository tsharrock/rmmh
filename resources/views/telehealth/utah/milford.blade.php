@extends('layout')

@section('title', 'Milford Telehealth | Psychiatry, Primary Care &amp; Weight Loss | Redmond MMH')
@section('description', 'No more long drives to Cedar City or Beaver for care. Redmond MMH provides expert psychiatric care, family medicine, and weight-loss treatment to Milford and Beaver County via secure telehealth.')
@section('keywords', 'Telehealth Milford, Online Psychiatry Beaver County, Mental Health Rural Utah, Telehealth Utah, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Milford Telehealth",
    "description": "Online psychiatry, primary care, and weight-loss services for Milford and Beaver County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/utah/milford",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Milford",
        "addressRegion": "UT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Milford, UT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 38.3963,
            "longitude": -113.0107
        },
        "geoRadius": "40000"
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
            "name": "Can people in Milford really see a psychiatric provider online?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely. Tiffany Redmond, PA-C holds an active Utah license and cares for Milford patients across psychiatry, primary care, and weight loss &mdash; all through secure video."
            }
        },
        {
            "@type": "Question",
            "name": "What's the wait for a new patient in Milford?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Far shorter than driving to Cedar City or Beaver and waiting months. Most new telehealth patients are seen within a few days, and same- or next-day visits are common."
            }
        },
        {
            "@type": "Question",
            "name": "Is a Milford telehealth visit covered by insurance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most major Utah insurers are accepted, including SelectHealth, Blue Cross Blue Shield of Utah, and PEHP. See our insurance page or call the office to confirm your coverage."
            }
        },
        {
            "@type": "Question",
            "name": "Does anything require an in-person appointment?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Medication management, primary care, and weight-loss care are fully virtual. Only treatments that need a physical exam &mdash; Ketamine therapy, IV nutrition &mdash; take place at our Hyde Park, UT clinic."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero milford border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Milford</h1>
                    <p>Board-certified psychiatric and primary care, right from the comfort of home.</p>
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
                <li class="breadcrumb-item active" aria-current="page">Milford</li>
            </ol>
        </nav>
    </div>
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://redmondmmh.com/"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "Telehealth",
            "item": "https://redmondmmh.com/telehealth"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": "Milford",
            "item": "https://redmondmmh.com/telehealth/utah/milford"
        }
    ]
}
    </script>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Milford, UT</h2>
                    <p>Distance shouldn't decide the quality of your health care. Redmond MMH connects Beaver County residents to a Utah-licensed provider without the mileage.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Specialty mental health care is scarce across Beaver County, and the nearest in-person psychiatrist is often hours away. Telehealth closes that gap &mdash; you meet with Tiffany by secure video, usually within a day or two of reaching out.</p>
                        <p>With over three decades of psychiatric experience, Tiffany manages medications for ADHD, anxiety, depression, bipolar disorder, eating disorders, and substance use. Care that once required a road trip now fits into your afternoon.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Managing a chronic condition in a rural area often means repeat trips to Cedar City or Beaver. We handle high blood pressure, diabetes, thyroid disorders, PCOS, and hormone balancing entirely online.</p>
                        <p>We also treat acute concerns &mdash; infections, injuries, skin problems &mdash; and coordinate any labs or specialist referrals through providers close to Milford.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Sustainable weight loss shouldn't depend on your zip code. Our virtual program combines Semaglutide or Tirzepatide with ongoing coaching, all managed by video.</p>
                        <p>Local compounding pharmacies make the medications affordable and available to Milford patients who never thought GLP-1 therapy was an option.</p>
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
                    <h2>Serving Beaver County</h2>
                    <p>Our telehealth services reach Milford and the surrounding communities of Beaver County &mdash; Minersville, and Newhouse. Set in the high desert of western Beaver County, near the Mineral Mountains, geothermal fields, and wind farms, this is exactly the kind of place where reaching a specialist has always meant a long drive. Redmond Medical and Mental Health brings psychiatric care, primary care, and weight-loss treatment to patients of every age &mdash; we see children as young as 4, adolescents, adults, and seniors &mdash; and accept most major insurance plans.</p>
                    <ul>
                        <li><strong>Licensed in Utah:</strong> Tiffany Redmond, PA-C is fully licensed to care for Milford and Beaver County patients across the state.</li>
                        <li><strong>Your Pharmacy, Your Town:</strong> We send prescriptions straight to your preferred pharmacy near Milford &mdash; no extra trips.</li>
                        <li><strong>One Appointment, Whole-Person Care:</strong> Address medical and mental-health needs together, usually within a day of booking.</li>
                    </ul>
                </div>
            </div>
            <div class="divider-line"></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>How It Works</h2>
                    <ol>
                        <li><strong>Request a Visit:</strong> Pick a telehealth slot online &mdash; most Milford patients get one within a day or two.</li>
                        <li><strong>Get Your Link:</strong> We text or email a private, HIPAA-compliant video link before your appointment.</li>
                        <li><strong>Meet Tiffany:</strong> Connect from anywhere in Milford to review your history, goals, and plan.</li>
                        <li><strong>Pharmacy &amp; Next Steps:</strong> Prescriptions and any labs are routed to providers near you the same day.</li>
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
                    <img class="float-start me-3" src="/img/tiffany_redmond_cropped.webp" alt="Tiffany Redmond, PA-C" width="233" height="260" loading="lazy" decoding="async" />
                    <h4>Tiffany Redmond, PA-C</h4>
                    <div class="credential-strip mb-3">
                        <span class="credential-badge">PA-C</span>
                        <span class="credential-badge">30+ Years Experience</span>
                        <span class="credential-badge">Licensed in UT &amp; AZ</span>
                        <span class="credential-badge">Same/Next-Day Scheduling</span>
                        <span class="credential-badge credential-badge-local">Serves Beaver County</span>
                    </div>
                    <p>Every Milford visit is with Tiffany Redmond, PA-C herself &mdash; three decades of psychiatric and primary care experience, and the same trusted provider each time you check in. <a class="rmmh_red" href="{{ route('about') }}">Read Tiffany's full story on our About page</a>.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Milford Telehealth FAQs</h2>
                    <p><span class="question">Can people in Milford really see a psychiatric provider online?</span><br />
                    Absolutely. Tiffany Redmond, PA-C holds an active Utah license and cares for Milford patients across psychiatry, primary care, and weight loss &mdash; all through secure video.</p>

                    <p><span class="question">What's the wait for a new patient in Milford?</span><br />
                    Far shorter than driving to Cedar City or Beaver and waiting months. Most new telehealth patients are seen within a few days, and same- or next-day visits are common.</p>

                    <p><span class="question">Is a Milford telehealth visit covered by insurance?</span><br />
                    Most major Utah insurers are accepted, including SelectHealth, Blue Cross Blue Shield of Utah, and PEHP. See our insurance page or call the office to confirm your coverage.</p>

                    <p><span class="question">Does anything require an in-person appointment?</span><br />
                    Medication management, primary care, and weight-loss care are fully virtual. Only treatments that need a physical exam &mdash; Ketamine therapy, IV nutrition &mdash; take place at our Hyde Park, UT clinic.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="also-serve" class="bg_rmmh_gray py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h3>We Also Serve</h3>
                    <p>Redmond MMH offers the same telehealth services throughout Utah, including:</p>
                    <ul>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.beaver') }}">Beaver</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.cedar-city') }}">Cedar City</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.delta') }}">Delta</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.st-george') }}">St. George</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
