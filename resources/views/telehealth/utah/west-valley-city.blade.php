@extends('layout')

@section('title', 'Telehealth West Valley City | Online Mental Health &amp; Medical Care | Redmond MMH')
@section('description', 'Skip the commute and the weeks-long wait. Redmond MMH provides expert psychiatric care, family medicine, and weight-loss treatment to West Valley City and Salt Lake County via secure telehealth.')
@section('keywords', 'Telehealth West Valley City, Online Psychiatry Salt Lake County, Telehealth Utah, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - West Valley City Telehealth",
    "description": "Online psychiatry, primary care, and weight-loss services for West Valley City and Salt Lake County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/utah/west-valley-city",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "West Valley City",
        "addressRegion": "UT"
    },
    "areaServed": {
        "@type": "City",
        "name": "West Valley City, UT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 40.6916,
            "longitude": -112.0011
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
            "name": "Is telehealth psychiatry available to West Valley City residents?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Tiffany Redmond, PA-C is licensed in Utah and treats West Valley City and Salt Lake County patients for psychiatric medication management, primary care, and weight loss by secure video visit."
            }
        },
        {
            "@type": "Question",
            "name": "How soon can I get an appointment in West Valley City?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Appointments across the valley can run weeks out. We typically see new telehealth patients within a few days — often the same day or the next."
            }
        },
        {
            "@type": "Question",
            "name": "Will my insurance cover a West Valley City telehealth visit?",
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
    <div class="hero west-valley-city border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in West Valley City</h1>
                    <p>Quality mental health, primary care, and weight-loss care &mdash; by secure video, on your schedule.</p>
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
                <li class="breadcrumb-item active" aria-current="page">West Valley City</li>
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
            "name": "West Valley City",
            "item": "https://redmondmmh.com/telehealth/utah/west-valley-city"
        }
    ]
}
    </script>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for West Valley City, UT</h2>
                    <p>In a place as busy as West Valley City, the hardest part of care is often just finding the time. Redmond MMH brings psychiatric care, primary care, and weight-loss treatment to your screen &mdash; no cross-valley drive, no crowded waiting room.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Even in West Valley City, getting in to see a psychiatric provider can take weeks, and the visit itself means traffic, parking, and a waiting room. Telehealth removes all of that &mdash; Tiffany can typically see new patients the same day or next, by secure video.</p>
                        <p>She is licensed in Utah with more than 30 years in psychiatry, treating ADHD, anxiety, depression, bipolar disorder, eating disorders, addiction, and smoking cessation, all from wherever you are.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>From blood pressure and diabetes to thyroid, PCOS, and hormone therapy, our virtual primary care keeps everyday medical needs simple for West Valley City families.</p>
                        <p>Need something urgent &mdash; the flu, a rash, a UTI, an eye issue? We can assess it on the spot, send prescriptions to your local pharmacy, and order labs at a facility near you.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany has seen real results with GLP-1 medications, and West Valley City patients can too. We tailor Semaglutide or Tirzepatide plans to you and pair them with practical coaching from home.</p>
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
                    <h2>Serving Salt Lake County</h2>
                    <p>Our telehealth services reach West Valley City and the surrounding communities of Salt Lake County &mdash; Taylorsville, Kearns, Magna, West Jordan, and South Salt Lake. Set in Utah's second-largest city, on the west side of the Salt Lake Valley, near the Maverik Center and the Oquirrh foothills, and even here, a specialist appointment can mean weeks of waiting and a cross-town commute. Redmond Medical and Mental Health brings psychiatric care, primary care, and weight-loss treatment to patients of every age &mdash; we see children as young as 4, adolescents, adults, and seniors &mdash; and accept most major insurance plans.</p>
                    <ul>
                        <li><strong>Utah-Licensed Provider:</strong> Tiffany Redmond, PA-C holds an active Utah medical license and treats West Valley City residents directly by secure video.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions go electronically to the West Valley City-area pharmacy you already use.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any medications are sent to your West Valley City pharmacy right away.</li>
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
                        <span class="credential-badge credential-badge-local">Serves Salt Lake County</span>
                    </div>
                    <p>Tiffany Redmond, PA-C brings more than 30 years of combined mental health and primary care experience to every West Valley City telehealth visit. <a class="rmmh_red" href="{{ route('about') }}">Read Tiffany's full story on our About page</a>.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>West Valley City Telehealth FAQs</h2>
                    <p><span class="question">Is telehealth psychiatry available to West Valley City residents?</span><br />
                    Yes. Tiffany Redmond, PA-C is licensed in Utah and treats West Valley City and Salt Lake County patients for psychiatric medication management, primary care, and weight loss by secure video visit.</p>

                    <p><span class="question">How soon can I get an appointment in West Valley City?</span><br />
                    Appointments across the valley can run weeks out. We typically see new telehealth patients within a few days &mdash; often the same day or the next.</p>

                    <p><span class="question">Will my insurance cover a West Valley City telehealth visit?</span><br />
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
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.salt-lake-city') }}">Salt Lake City</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.sandy') }}">Sandy</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.tooele') }}">Tooele</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.provo') }}">Provo</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
