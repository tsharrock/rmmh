@extends('layout')

@section('title', 'Telehealth Salt Lake City | Online Mental Health & Psychiatry | Redmond MMH')
@section('description', 'Secure telehealth psychiatry, primary care, and medical weight loss for Salt Lake City residents. Skip the waitlist and book your visit with Redmond MMH.')
@section('keywords', 'Telehealth Salt Lake City, Online Psychiatry SLC, Mental Health Utah, Online Weight Loss Salt Lake City, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "name": "Redmond Medical & Mental Health - Salt Lake City Telehealth",
  "alternateName": "Redmond MMH",
  "description": "Secure telehealth psychiatry, primary care, and medical weight loss for Salt Lake City and Salt Lake County residents.",
  "url": "https://redmondmmh.com/telehealth/utah/salt-lake-city",
  "telephone": "+1-435-938-1440",
  "priceRange": "$$",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Salt Lake City",
    "addressRegion": "UT",
    "addressCountry": "US"
  },
  "areaServed": {
    "@type": "City",
    "name": "Salt Lake City, UT"
  },
  "serviceArea": {
    "@type": "GeoCircle",
    "geoMidpoint": {
      "@type": "GeoCoordinates",
      "latitude": 40.7608,
      "longitude": -111.8910
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
      "name": "Is telehealth psychiatry available to Salt Lake City residents?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Tiffany Redmond, PA-C is licensed in Utah and sees Salt Lake City, West Valley City, Murray, Sandy, and Draper patients for psychiatric medication management, primary care, and weight loss consultations by secure video visit."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the wait for a new patient appointment in Salt Lake City?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Many Salt Lake County practices carry multi-week waitlists for psychiatry. We typically offer new telehealth patients an appointment within a few days, often the same day or next."
      }
    },
    {
      "@type": "Question",
      "name": "Does insurance cover a Salt Lake City telehealth visit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We're in-network with most major Utah insurance plans, including SelectHealth, Blue Cross Blue Shield of Utah, and PEHP. See our full accepted insurance list or call our office to confirm your specific plan."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need to travel to an office for care in Salt Lake City?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Psychiatric medication management, primary care, and weight loss visits are handled entirely by video. Services that require a hands-on exam, such as Ketamine therapy or IV nutrition, are provided in person at our Hyde Park, UT clinic, about an hour north of downtown Salt Lake City."
      }
    }
  ]
}
</script>
@endsection

@section('content')
    <div class="hero salt-lake-city border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Salt Lake City</h1>
                    <p>Expert Mental Health and Medical Care from the Comfort of Your SLC Home.</p>
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
                <li class="breadcrumb-item active" aria-current="page">Salt Lake City</li>
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
        { "@type": "ListItem", "position": 3, "name": "Salt Lake City", "item": "https://redmondmmh.com/telehealth/utah/salt-lake-city" }
      ]
    }
    </script>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Salt Lake City</h2>
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
                        <p>Manage chronic conditions like hypertension or thyroid issues, acute conditions such as urinary tract infections and the flu, discuss lab results, and receive specialist referrals without leaving Salt Lake County.</p>
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
                    <h2>Serving the Salt Lake Valley</h2>
                    <p>Our telehealth services are available to all residents of Salt Lake City, West Valley City, Murray, Sandy, and Draper. Whether you are looking for an "online psychiatrist near me" or "telehealth weight loss in SLC," Redmond MMH is here to provide integrated medical and mental health solutions across Utah. From students near the University of Utah to state employees working downtown near the Capitol, we help Salt Lake County residents skip the drive and the waitlist for psychiatric and primary care.</p>
                    <ul>
                        <li><strong>Local Pharmacy Partnerships:</strong> We work with Salt Lake City pharmacies to ensure your prescriptions are filled quickly and conveniently.</li>

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
                        <li><strong>Prescriptions & Follow-up:</strong> Any necessary medications are sent to your preferred Salt Lake City pharmacy immediately.</li>
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
                    <p>With more than three decades in mental health and primary care, Tiffany Redmond, PA-C, has helped patients across Salt Lake County manage everything from ADHD to chronic conditions. <a class="rmmh_red" href="{{ route('about') }}">Read her full story on our About page</a>.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Salt Lake City Telehealth FAQs</h2>
                    <p><span class="question">Is telehealth psychiatry available to Salt Lake City residents?</span><br />
                    Yes. Tiffany Redmond, PA-C is licensed in Utah and sees Salt Lake City, West Valley City, Murray, Sandy, and Draper patients for psychiatric medication management, primary care, and weight loss consultations by secure video visit.</p>

                    <p><span class="question">How long is the wait for a new patient appointment in Salt Lake City?</span><br />
                    Many Salt Lake County practices carry multi-week waitlists for psychiatry. We typically offer new telehealth patients an appointment within a few days, often the same day or next.</p>

                    <p><span class="question">Does insurance cover a Salt Lake City telehealth visit?</span><br />
                    We're in-network with most major Utah insurance plans, including SelectHealth, Blue Cross Blue Shield of Utah, and PEHP. See our <a class="rmmh_red" href="{{ route('insurance') }}">full accepted insurance list</a> or call our office to confirm your specific plan.</p>

                    <p><span class="question">Do I need to travel to an office for care in Salt Lake City?</span><br />
                    No. Psychiatric medication management, primary care, and weight loss visits are handled entirely by video. Services that require a hands-on exam, such as <a class="rmmh_red" href="{{ route('ketamine') }}">Ketamine therapy</a> or <a class="rmmh_red" href="{{ route('iv-fluids') }}">IV nutrition</a>, are provided in person at our Hyde Park, UT clinic, about an hour north of downtown Salt Lake City.</p>
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
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.sandy') }}">Sandy</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.layton') }}">Layton</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.provo') }}">Provo</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.ogden') }}">Ogden</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.park-city') }}">Park City</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
