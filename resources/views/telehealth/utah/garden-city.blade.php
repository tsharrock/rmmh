@extends('layout')

@section('title', 'Telehealth Garden City | Online Psychiatry &amp; Mental Health | Redmond MMH')
@section('description', 'No more long drives to Logan, an hour west over the summit for care. Redmond MMH provides expert psychiatric care, family medicine, and weight-loss treatment to Garden City and Rich County via secure telehealth.')
@section('keywords', 'Telehealth Garden City, Online Psychiatry Rich County, Telehealth Utah, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Garden City Telehealth",
    "description": "Online psychiatry, primary care, and weight-loss services for Garden City and Rich County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/utah/garden-city",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Garden City",
        "addressRegion": "UT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Garden City, UT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 41.9469,
            "longitude": -111.3936
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
            "name": "Is telehealth psychiatry available to Garden City residents?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Tiffany Redmond, PA-C is licensed in Utah and treats Garden City and Rich County patients for psychiatric medication management, primary care, and weight loss by secure video visit."
            }
        },
        {
            "@type": "Question",
            "name": "How soon can I get an appointment in Garden City?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Rural Utah usually means a long wait or a long drive for psychiatric care. We typically offer new telehealth patients a visit within a few days — often the same day or the next."
            }
        },
        {
            "@type": "Question",
            "name": "Will my insurance cover a Garden City telehealth visit?",
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
    <div class="hero garden-city border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Garden City</h1>
                    <p>Expert mental health and medical care, delivered to your door &mdash; no long drive required.</p>
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
                <li class="breadcrumb-item active" aria-current="page">Garden City</li>
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
            "name": "Garden City",
            "item": "https://redmondmmh.com/telehealth/utah/garden-city"
        }
    ]
}
    </script>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Garden City, UT</h2>
                    <p>For families in Garden City and across Rich County, specialty care has always meant time on the road. Redmond MMH changes that &mdash; psychiatric care, primary care, and weight-loss treatment delivered by secure video, right where you live.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Finding an experienced psychiatric provider in Garden City can mean a long waitlist or a longer drive to Logan, an hour west over the summit. Tiffany is easy to schedule with and often sees new patients the same day or next &mdash; no referral gauntlet, no months of waiting.</p>
                        <p>She is licensed in Utah with more than 30 years in psychiatry, treating ADHD, anxiety, depression, bipolar disorder, eating disorders, addiction, and smoking cessation. Every concern is handled from the comfort of home.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>We diagnose and manage the chronic conditions that shouldn't require a specialist visit &mdash; high blood pressure, diabetes, thyroid disease, PCOS, and hormone concerns including menopause and low testosterone.</p>
                        <p>Acute problems like infections, rashes, UTIs, and minor injuries are handled by video too, and we can order labs at your nearest Garden City-area facility and route referrals wherever you need them.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Our individualized weight-management programs bring GLP-1 therapy &mdash; Semaglutide and Tirzepatide &mdash; to Garden City without a trip to a specialty clinic. Coaching and nutrition guidance are built in.</p>
                        <p>Because we work with local compounding pharmacies, these medications are more affordable and finally within reach, even for non-diabetic patients.</p>
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
                    <h2>Serving Rich County</h2>
                    <p>Our telehealth services reach Garden City and the surrounding communities of Rich County &mdash; Laketown, Pickleville, Fish Haven, and Randolph. Set in the shores of Bear Lake in Utah's northeast corner, near Bear Lake and its famous raspberry shakes, this is exactly the kind of place where reaching a specialist has always meant a long drive. Redmond Medical and Mental Health brings psychiatric care, primary care, and weight-loss treatment to patients of every age &mdash; we see children as young as 4, adolescents, adults, and seniors &mdash; and accept most major insurance plans.</p>
                    <ul>
                        <li><strong>Utah-Licensed Provider:</strong> Tiffany Redmond, PA-C holds an active Utah medical license and treats Garden City residents directly by secure video.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions go electronically to the Garden City-area pharmacy you already use.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any medications are sent to your Garden City pharmacy right away.</li>
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
                        <span class="credential-badge credential-badge-local">Serves Rich County</span>
                    </div>
                    <p>Tiffany Redmond, PA-C brings more than 30 years of combined mental health and primary care experience to every Garden City telehealth visit. <a class="rmmh_red" href="{{ route('about') }}">Read Tiffany's full story on our About page</a>.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Garden City Telehealth FAQs</h2>
                    <p><span class="question">Is telehealth psychiatry available to Garden City residents?</span><br />
                    Yes. Tiffany Redmond, PA-C is licensed in Utah and treats Garden City and Rich County patients for psychiatric medication management, primary care, and weight loss by secure video visit.</p>

                    <p><span class="question">How soon can I get an appointment in Garden City?</span><br />
                    Rural Utah usually means a long wait or a long drive for psychiatric care. We typically offer new telehealth patients a visit within a few days &mdash; often the same day or the next.</p>

                    <p><span class="question">Will my insurance cover a Garden City telehealth visit?</span><br />
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
                        <li><a class="rmmh_red" href="{{ route('logan-cache-valley') }}">Logan &amp; Cache Valley</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.tremonton') }}">Tremonton</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.brigham-city') }}">Brigham City</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.ogden') }}">Ogden</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
