@extends('layout')

@section('title', 'Telehealth Psychiatry & Primary Care | Cedar City, UT | Redmond MMH')
@section('description', 'Skip the drive to Logan. Redmond Medical and Mental Health offers secure, integrated telehealth services for Cedar City residents. Specializing in ADHD, Anxiety, and Primary Care.')
@section('keywords', 'Cedar City Telehealth, Online Psychiatry Southern Utah, Mental Health Cedar City, Online Therapy Utah, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "name": "Redmond Medical & Mental Health - Cedar City Telehealth",
  "alternateName": "Redmond MMH",
  "description": "Secure telehealth psychiatry, primary care, and medical weight loss for Cedar City and Iron County residents.",
  "url": "https://redmondmmh.com/telehealth/utah/cedar-city",
  "telephone": "+1-435-938-1440",
  "priceRange": "$$",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Cedar City",
    "addressRegion": "UT",
    "addressCountry": "US"
  },
  "areaServed": {
    "@type": "City",
    "name": "Cedar City, UT"
  },
  "serviceArea": {
    "@type": "GeoCircle",
    "geoMidpoint": {
      "@type": "GeoCoordinates",
      "latitude": 37.6775,
      "longitude": -113.0619
    },
    "geoRadius": "35000"
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
      "name": "Is telehealth psychiatry available to Cedar City residents?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Tiffany Redmond, PA-C is licensed in Utah and sees Cedar City and Iron County patients for psychiatric medication management, primary care, and weight loss consultations by secure video visit, including students and staff around Southern Utah University."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the wait for a new patient appointment in Cedar City?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Rural Southern Utah often means a long drive or a long wait for specialty psychiatric care. We typically offer new telehealth patients an appointment within a few days, often the same day or next."
      }
    },
    {
      "@type": "Question",
      "name": "Does insurance cover a Cedar City telehealth visit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We're in-network with most major Utah insurance plans, including SelectHealth, Blue Cross Blue Shield of Utah, and PEHP. See our full accepted insurance list or call our office to confirm your specific plan."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need to travel to an office for care in Cedar City?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Psychiatric medication management, primary care, and weight loss visits are handled entirely by video. Services that require a hands-on exam, such as Ketamine therapy or IV nutrition, are provided in person at our Hyde Park, UT clinic."
      }
    }
  ]
}
</script>
@endsection

@section('content')
    <div class="hero cedar-city border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Expert Psychiatric & Medical Care for Cedar City—From the Comfort of Home.</h1>
                    <p>Tiffany Redmond, PA-C, provides integrated telehealth services to patients across Iron County and the Cedar City area, home to Southern Utah University and the Utah Shakespeare Festival. Your time is important to us and we won’t waste it — we are on time for our visits and can usually see patients the same day or next.</p>
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
                <li class="breadcrumb-item active" aria-current="page">Cedar City</li>
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
        { "@type": "ListItem", "position": 3, "name": "Cedar City", "item": "https://redmondmmh.com/telehealth/utah/cedar-city" }
      ]
    }
    </script>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Services offered</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>At Redmond Medical and Mental Health, we offer expert telepsychiatry services to patients of all ages. Tiffany has over 30 years of experience working in mental health and treating conditions such as ADHD, Anxiety, Depression, Bipolar Disorders, eating disorders, addictions issues and more. We bridge the gap for those seeking specialized mental health support without the long wait times of traditional clinics.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Manage chronic conditions like hypertension or thyroid issues, acute conditions such as urinary tract infections and the flu, discuss lab results, and receive specialist referrals without leaving Iron County.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Access our individualized weight management programs from home! We offer initial screenings and follow-ups for Semaglutide and Tirzepatide therapy. We specialize in coaching, nutritional guidance and weight loss medications to help you look and feel your best.</p>
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
                    <h2>Why Cedar City Patients Choose Redmond Medical and Mental Health Telehealth Services</h2>
                    <ul>
                        <li><strong>Local Pharmacy Partnerships:</strong> We work with Cedar City pharmacies to ensure your prescriptions are filled quickly and conveniently.</li>

                        <li><strong>Integrated Care:</strong> Address both your physical and mental health needs in one appointment, saving you time and effort.</li>

                        <li><strong>Experienced Provider:</strong> Tiffany Redmond, PA-C, has extensive experience in both family medicine and psychiatric care, ensuring comprehensive treatment.</li>
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
                        <li><strong>Prescriptions & Follow-up:</strong> Any necessary medications are sent to your preferred Cedar City pharmacy immediately.</li>
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
                    <p>Tiffany Redmond, PA-C, is licensed in both Utah and Arizona and has spent over 30 years treating patients like those in Cedar City. <a class="rmmh_red" href="{{ route('about') }}">Learn more about her background on our About page</a>.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Cedar City Telehealth FAQs</h2>
                    <p><span class="question">Is telehealth psychiatry available to Cedar City residents?</span><br />
                    Yes. Tiffany Redmond, PA-C is licensed in Utah and sees Cedar City and Iron County patients for psychiatric medication management, primary care, and weight loss consultations by secure video visit, including students and staff around Southern Utah University.</p>

                    <p><span class="question">How long is the wait for a new patient appointment in Cedar City?</span><br />
                    Rural Southern Utah often means a long drive or a long wait for specialty psychiatric care. We typically offer new telehealth patients an appointment within a few days, often the same day or next.</p>

                    <p><span class="question">Does insurance cover a Cedar City telehealth visit?</span><br />
                    We're in-network with most major Utah insurance plans, including SelectHealth, Blue Cross Blue Shield of Utah, and PEHP. See our <a class="rmmh_red" href="{{ route('insurance') }}">full accepted insurance list</a> or call our office to confirm your specific plan.</p>

                    <p><span class="question">Do I need to travel to an office for care in Cedar City?</span><br />
                    No. Psychiatric medication management, primary care, and weight loss visits are handled entirely by video. Services that require a hands-on exam, such as <a class="rmmh_red" href="{{ route('ketamine') }}">Ketamine therapy</a> or <a class="rmmh_red" href="{{ route('iv-fluids') }}">IV nutrition</a>, are provided in person at our Hyde Park, UT clinic.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="also-serve" class="bg_rmmh_gray py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h3>We Also Serve</h3>
                    <p>Redmond MMH offers the same telehealth services throughout Southern Utah and beyond, including:</p>
                    <ul>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.st-george') }}">St. George</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.beaver') }}">Beaver</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.salt-lake-city') }}">Salt Lake City</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.provo') }}">Provo</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
