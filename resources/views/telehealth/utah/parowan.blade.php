@extends('layout')

@section('title', 'Parowan Telehealth | Psychiatry, Primary Care &amp; Weight Loss | Redmond MMH')
@section('description', 'No more long drives to Cedar City, a short drive south for care. Redmond MMH provides expert psychiatric care, family medicine, and weight-loss treatment to Parowan and Iron County via secure telehealth.')
@section('keywords', 'Telehealth Parowan, Online Psychiatry Iron County, Telehealth Utah, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Parowan Telehealth",
    "description": "Online psychiatry, primary care, and weight-loss services for Parowan and Iron County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/utah/parowan",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Parowan",
        "addressRegion": "UT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Parowan, UT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 37.8408,
            "longitude": -112.828
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
            "name": "Is telehealth psychiatry available to Parowan residents?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Tiffany Redmond, PA-C is licensed in Utah and treats Parowan and Iron County patients for psychiatric medication management, primary care, and weight loss by secure video visit."
            }
        },
        {
            "@type": "Question",
            "name": "How soon can I get an appointment in Parowan?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Rural Utah usually means a long wait or a long drive for psychiatric care. We typically offer new telehealth patients a visit within a few days — often the same day or the next."
            }
        },
        {
            "@type": "Question",
            "name": "Will my insurance cover a Parowan telehealth visit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We're in-network with most major Utah plans, including SelectHealth, Blue Cross Blue Shield of Utah, and PEHP. See our full accepted insurance list or call to confirm your plan."
            }
        },
        {
            "@type": "Question",
            "name": "Do I ever need to come into an office?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Psychiatric, primary care, and weight-loss visits happen entirely by video. Only hands-on services like Ketamine therapy and IV nutrition are done in person at our Hyde Park, UT clinic."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero parowan border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Parowan</h1>
                    <p>Skip the highway and the waiting room. Quality care by secure video.</p>
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
                <li class="breadcrumb-item active" aria-current="page">Parowan</li>
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
            "name": "Parowan",
            "item": "https://redmondmmh.com/telehealth/utah/parowan"
        }
    ]
}
    </script>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Parowan, UT</h2>
                    <p>For families in Parowan and across Iron County, specialty care has always meant time on the road. Redmond MMH changes that &mdash; psychiatric care, primary care, and weight-loss treatment delivered by secure video, right where you live.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Finding an experienced psychiatric provider in Parowan can mean a long waitlist or a longer drive to Cedar City, a short drive south. Tiffany is easy to schedule with and often sees new patients the same day or next &mdash; no referral gauntlet, no months of waiting.</p>
                        <p>She is licensed in Utah with more than 30 years in psychiatry, treating ADHD, anxiety, depression, bipolar disorder, eating disorders, addiction, and smoking cessation. Every concern is handled from the comfort of home.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Managing a chronic condition takes consistent follow-up. We handle high blood pressure, diabetes, thyroid disorders, PCOS, and hormone balancing entirely online for Parowan patients.</p>
                        <p>We also treat acute concerns &mdash; infections, injuries, skin problems &mdash; and coordinate any labs or specialist referrals through providers close to Parowan.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Sustainable weight loss shouldn't be complicated. Our virtual program combines Semaglutide or Tirzepatide with ongoing coaching, all managed by video.</p>
                        <p>Local compounding pharmacies make the medications affordable and available to Parowan patients who never thought GLP-1 therapy was an option.</p>
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
                    <h2>Serving Iron County</h2>
                    <p>Our telehealth services reach Parowan and the surrounding communities of Iron County &mdash; Paragonah, Summit, Enoch, and Brian Head. Set in Iron County at the foot of the Red Cliffs, near the Parowan Gap petroglyphs and Brian Head, this is exactly the kind of place where reaching a specialist has always meant a long drive. Redmond Medical and Mental Health brings psychiatric care, primary care, and weight-loss treatment to patients of every age &mdash; we see children as young as 4, adolescents, adults, and seniors &mdash; and accept most major insurance plans.</p>
                    <ul>
                        <li><strong>Utah-Licensed Provider:</strong> Tiffany Redmond, PA-C holds an active Utah medical license and treats Parowan residents directly by secure video.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions go electronically to the Parowan-area pharmacy you already use.</li>
                        <li><strong>Integrated Care:</strong> Cover physical and mental health in one visit &mdash; same-day or next-day scheduling saves you both time and copays.</li>
                    </ul>
                </div>
            </div>
            <div class="divider-line"></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>How It Works</h2>
                    <ol>
                        <li><strong>Book Online:</strong> Choose a "Telehealth" appointment in our secure portal.</li>
                        <li><strong>Secure Connection:</strong> A HIPAA-compliant video link arrives by email or text.</li>
                        <li><strong>The Visit:</strong> Meet with Tiffany Redmond, PA-C to talk through your goals and treatment plan from home.</li>
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any medications are sent to your Parowan pharmacy right away.</li>
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
                        <span class="credential-badge credential-badge-local">Serves Iron County</span>
                    </div>
                    <p>Tiffany Redmond, PA-C brings more than 30 years of combined mental health and primary care experience to every Parowan telehealth visit. <a class="rmmh_red" href="{{ route('about') }}">Read Tiffany's full story on our About page</a>.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Parowan Telehealth FAQs</h2>
                    <p><span class="question">Is telehealth psychiatry available to Parowan residents?</span><br />
                    Yes. Tiffany Redmond, PA-C is licensed in Utah and treats Parowan and Iron County patients for psychiatric medication management, primary care, and weight loss by secure video visit.</p>

                    <p><span class="question">How soon can I get an appointment in Parowan?</span><br />
                    Rural Utah usually means a long wait or a long drive for psychiatric care. We typically offer new telehealth patients a visit within a few days &mdash; often the same day or the next.</p>

                    <p><span class="question">Will my insurance cover a Parowan telehealth visit?</span><br />
                    We're in-network with most major Utah plans, including SelectHealth, Blue Cross Blue Shield of Utah, and PEHP. See our full accepted insurance list or call to confirm your plan.</p>

                    <p><span class="question">Do I ever need to come into an office?</span><br />
                    No. Psychiatric, primary care, and weight-loss visits happen entirely by video. Only hands-on services like Ketamine therapy and IV nutrition are done in person at our Hyde Park, UT clinic.</p>
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
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.st-george') }}">St. George</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.panguitch') }}">Panguitch</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.beaver') }}">Beaver</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
