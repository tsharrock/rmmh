@extends('layout')

@section('title', 'Telehealth Tremonton | Online Mental Health &amp; Medical Care | Redmond MMH')
@section('description', 'No more long drives to Ogden or Logan for care. Redmond MMH provides expert psychiatric care, family medicine, and weight-loss treatment to Tremonton and Box Elder County via secure telehealth.')
@section('keywords', 'Telehealth Tremonton, Online Psychiatry Box Elder County, Mental Health Rural Utah, Telehealth Utah, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Tremonton Telehealth",
    "description": "Online psychiatry, primary care, and weight-loss services for Tremonton and Box Elder County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/utah/tremonton",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Tremonton",
        "addressRegion": "UT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Tremonton, UT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 41.7108,
            "longitude": -112.1655
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
            "name": "Can people in Tremonton really see a psychiatric provider online?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely. Tiffany Redmond, PA-C holds an active Utah license and cares for Tremonton patients across psychiatry, primary care, and weight loss &mdash; all through secure video."
            }
        },
        {
            "@type": "Question",
            "name": "What's the wait for a new patient in Tremonton?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Far shorter than driving to Ogden or Logan and waiting months. Most new telehealth patients are seen within a few days, and same- or next-day visits are common."
            }
        },
        {
            "@type": "Question",
            "name": "Is a Tremonton telehealth visit covered by insurance?",
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
    <div class="hero tremonton border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Tremonton</h1>
                    <p>Whole-person care for Tremonton &mdash; mental health, primary care, and weight loss, all online.</p>
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
                <li class="breadcrumb-item active" aria-current="page">Tremonton</li>
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
            "name": "Tremonton",
            "item": "https://redmondmmh.com/telehealth/utah/tremonton"
        }
    ]
}
    </script>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Tremonton, UT</h2>
                    <p>Getting to a psychiatrist or specialist from Tremonton usually means a drive to Ogden or Logan. Our telehealth service brings that same care to any private room in your home.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Psychiatric providers are hard to come by in Tremonton, and harder still to see quickly. We take the headache out of it: online scheduling, fast appointments, and a provider who has time for you.</p>
                        <p>Tiffany Redmond, PA-C brings more than 30 years of psychiatric practice to every visit &mdash; from ADHD and anxiety to depression, bipolar disorder, eating disorders, and addiction &mdash; without you ever leaving Tremonton.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>From blood pressure and diabetes to thyroid, PCOS, and hormone therapy, our virtual primary care keeps everyday medical needs close to home for Tremonton families.</p>
                        <p>Need something urgent &mdash; the flu, a rash, a UTI, an eye issue? We can assess it on the spot, send prescriptions to your local pharmacy, and order labs at a facility near you.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany has seen real results with GLP-1 medications, and Tremonton patients can too. We tailor Semaglutide or Tirzepatide plans to you and pair them with practical coaching from home.</p>
                        <p>Partnering with compounding pharmacies keeps the cost down, making medical weight loss accessible whether or not you're diabetic.</p>
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
                    <h2>Serving Box Elder County</h2>
                    <p>Our telehealth services reach Tremonton and the surrounding communities of Box Elder County &mdash; Garland, Bear River City, Fielding, Deweyville, and Corinne. Set in the Bear River Valley of northern Utah, near Golden Spike National Historical Park and the Bear River bird refuge, this is exactly the kind of place where reaching a specialist has always meant a long drive. Redmond Medical and Mental Health brings psychiatric care, primary care, and weight-loss treatment to patients of every age &mdash; we see children as young as 4, adolescents, adults, and seniors &mdash; and accept most major insurance plans.</p>
                    <ul>
                        <li><strong>Licensed in Utah:</strong> Tiffany Redmond, PA-C is fully licensed to care for Tremonton and Box Elder County patients across the state.</li>
                        <li><strong>Your Pharmacy, Your Town:</strong> We send prescriptions straight to your preferred pharmacy near Tremonton &mdash; no extra trips.</li>
                        <li><strong>One Appointment, Whole-Person Care:</strong> Address medical and mental-health needs together, usually within a day of booking.</li>
                    </ul>
                </div>
            </div>
            <div class="divider-line"></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>How It Works</h2>
                    <ol>
                        <li><strong>Request a Visit:</strong> Pick a telehealth slot online &mdash; most Tremonton patients get one within a day or two.</li>
                        <li><strong>Get Your Link:</strong> We text or email a private, HIPAA-compliant video link before your appointment.</li>
                        <li><strong>Meet Tiffany:</strong> Connect from anywhere in Tremonton to review your history, goals, and plan.</li>
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
                        <span class="credential-badge credential-badge-local">Serves Box Elder County</span>
                    </div>
                    <p>Every Tremonton visit is with Tiffany Redmond, PA-C herself &mdash; three decades of psychiatric and primary care experience, and the same trusted provider each time you check in. <a class="rmmh_red" href="{{ route('about') }}">Read Tiffany's full story on our About page</a>.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Tremonton Telehealth FAQs</h2>
                    <p><span class="question">Can people in Tremonton really see a psychiatric provider online?</span><br />
                    Absolutely. Tiffany Redmond, PA-C holds an active Utah license and cares for Tremonton patients across psychiatry, primary care, and weight loss &mdash; all through secure video.</p>

                    <p><span class="question">What's the wait for a new patient in Tremonton?</span><br />
                    Far shorter than driving to Ogden or Logan and waiting months. Most new telehealth patients are seen within a few days, and same- or next-day visits are common.</p>

                    <p><span class="question">Is a Tremonton telehealth visit covered by insurance?</span><br />
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
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.brigham-city') }}">Brigham City</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.ogden') }}">Ogden</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.layton') }}">Layton</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.salt-lake-city') }}">Salt Lake City</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
