@extends('layout')

@section('title', 'Panguitch Telehealth | Psychiatry, Primary Care &amp; Weight Loss | Redmond MMH')
@section('description', 'No more long drives to Cedar City, an hour west over the summit for care. Redmond MMH provides expert psychiatric care, family medicine, and weight-loss treatment to Panguitch and Garfield County via secure telehealth.')
@section('keywords', 'Telehealth Panguitch, Online Psychiatry Garfield County, Mental Health Rural Utah, Telehealth Utah, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Panguitch Telehealth",
    "description": "Online psychiatry, primary care, and weight-loss services for Panguitch and Garfield County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/utah/panguitch",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Panguitch",
        "addressRegion": "UT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Panguitch, UT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 37.8225,
            "longitude": -112.4358
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
            "name": "Can people in Panguitch really see a psychiatric provider online?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely. Tiffany Redmond, PA-C holds an active Utah license and cares for Panguitch patients across psychiatry, primary care, and weight loss &mdash; all through secure video."
            }
        },
        {
            "@type": "Question",
            "name": "What's the wait for a new patient in Panguitch?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Far shorter than driving to Cedar City, an hour west over the summit and waiting months. Most new telehealth patients are seen within a few days, and same- or next-day visits are common."
            }
        },
        {
            "@type": "Question",
            "name": "Is a Panguitch telehealth visit covered by insurance?",
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
    <div class="hero panguitch border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Panguitch</h1>
                    <p>Whole-person care for Panguitch &mdash; mental health, primary care, and weight loss, all online.</p>
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
                <li class="breadcrumb-item active" aria-current="page">Panguitch</li>
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
            "name": "Panguitch",
            "item": "https://redmondmmh.com/telehealth/utah/panguitch"
        }
    ]
}
    </script>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Panguitch, UT</h2>
                    <p>Distance shouldn't decide the quality of your health care. Redmond MMH connects Garfield County residents to a Utah-licensed provider without the mileage.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Psychiatric providers are hard to come by in Panguitch, and harder still to see quickly. We take the headache out of it: online scheduling, fast appointments, and a provider who has time for you.</p>
                        <p>Tiffany Redmond, PA-C brings more than 30 years of psychiatric practice to every visit &mdash; from ADHD and anxiety to depression, bipolar disorder, eating disorders, and addiction &mdash; without you ever leaving Panguitch.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Managing a chronic condition in a rural area often means repeat trips to Cedar City, an hour west over the summit. We handle high blood pressure, diabetes, thyroid disorders, PCOS, and hormone balancing entirely online.</p>
                        <p>We also treat acute concerns &mdash; infections, injuries, skin problems &mdash; and coordinate any labs or specialist referrals through providers close to Panguitch.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Sustainable weight loss shouldn't depend on your zip code. Our virtual program combines Semaglutide or Tirzepatide with ongoing coaching, all managed by video.</p>
                        <p>Local compounding pharmacies make the medications affordable and available to Panguitch patients who never thought GLP-1 therapy was an option.</p>
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
                    <h2>Serving Garfield County</h2>
                    <p>Our telehealth services reach Panguitch and the surrounding communities of Garfield County &mdash; Hatch, Circleville, Antimony, and Bryce Canyon City. Set in the high country of southern Utah, near Bryce Canyon and Panguitch Lake, this is exactly the kind of place where reaching a specialist has always meant a long drive. Redmond Medical and Mental Health brings psychiatric care, primary care, and weight-loss treatment to patients of every age &mdash; we see children as young as 4, adolescents, adults, and seniors &mdash; and accept most major insurance plans.</p>
                    <ul>
                        <li><strong>Licensed in Utah:</strong> Tiffany Redmond, PA-C is fully licensed to care for Panguitch and Garfield County patients across the state.</li>
                        <li><strong>Your Pharmacy, Your Town:</strong> We send prescriptions straight to your preferred pharmacy near Panguitch &mdash; no extra trips.</li>
                        <li><strong>One Appointment, Whole-Person Care:</strong> Address medical and mental-health needs together, usually within a day of booking.</li>
                    </ul>
                </div>
            </div>
            <div class="divider-line"></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>How It Works</h2>
                    <ol>
                        <li><strong>Request a Visit:</strong> Pick a telehealth slot online &mdash; most Panguitch patients get one within a day or two.</li>
                        <li><strong>Get Your Link:</strong> We text or email a private, HIPAA-compliant video link before your appointment.</li>
                        <li><strong>Meet Tiffany:</strong> Connect from anywhere in Panguitch to review your history, goals, and plan.</li>
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
                        <span class="credential-badge credential-badge-local">Serves Garfield County</span>
                    </div>
                    <p>Every Panguitch visit is with Tiffany Redmond, PA-C herself &mdash; three decades of psychiatric and primary care experience, and the same trusted provider each time you check in. <a class="rmmh_red" href="{{ route('about') }}">Read Tiffany's full story on our About page</a>.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Panguitch Telehealth FAQs</h2>
                    <p><span class="question">Can people in Panguitch really see a psychiatric provider online?</span><br />
                    Absolutely. Tiffany Redmond, PA-C holds an active Utah license and cares for Panguitch patients across psychiatry, primary care, and weight loss &mdash; all through secure video.</p>

                    <p><span class="question">What's the wait for a new patient in Panguitch?</span><br />
                    Far shorter than driving to Cedar City, an hour west over the summit and waiting months. Most new telehealth patients are seen within a few days, and same- or next-day visits are common.</p>

                    <p><span class="question">Is a Panguitch telehealth visit covered by insurance?</span><br />
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
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.cedar-city') }}">Cedar City</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.kanab') }}">Kanab</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.st-george') }}">St. George</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.escalante') }}">Escalante</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
