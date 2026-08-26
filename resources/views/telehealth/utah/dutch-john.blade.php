@extends('layout')

@section('title', 'Telehealth Dutch John | Online Mental Health & Psychiatry | Redmond MMH')
@section('description', 'Specialty care for Dutch John and the Flaming Gorge area via secure telehealth. Skip the long drive out of Daggett County for psychiatric care, primary care, and weight loss treatment.')
@section('keywords', 'Telehealth Dutch John, Online Psychiatry Daggett County, Flaming Gorge Telehealth, Telehealth Utah, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "name": "Redmond Medical & Mental Health - Dutch John Telehealth",
  "description": "Online psychiatry, primary care, and weight loss services for Dutch John and the Flaming Gorge region through secure telehealth.",
  "url": "https://redmondmmh.com/telehealth/utah/dutch-john",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Dutch John",
    "addressRegion": "UT"
  },
  "areaServed": {
    "@type": "City",
    "name": "Dutch John, UT"
  },
  "serviceArea": {
    "@type": "GeoCircle",
    "geoMidpoint": {
      "@type": "GeoCoordinates",
      "latitude": 40.9305,
      "longitude": -109.3911
    },
    "geoRadius": "60000"
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
      "name": "Is telehealth psychiatry available to Dutch John residents?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Tiffany Redmond, PA-C is licensed in Utah and sees Dutch John and Daggett County patients for psychiatric medication management, primary care, and weight loss consultations by secure video visit."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the wait for a new patient appointment in Dutch John?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Rural Utah often means a long drive or a long wait for specialty psychiatric care. We typically offer new telehealth patients an appointment within a few days, often the same day or next."
      }
    },
    {
      "@type": "Question",
      "name": "Does insurance cover a Dutch John telehealth visit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We're in-network with most major Utah insurance plans, including SelectHealth, Blue Cross Blue Shield of Utah, and PEHP. See our full accepted insurance list or call our office to confirm your specific plan."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need to travel to an office for care in Dutch John?",
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
    <div class="hero dutch-john border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Dutch John</h1>
                    <p>Expert Mental Health and medical care for Daggett County and the Flaming Gorge, from the comfort of home.</p>
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
                <li class="breadcrumb-item active" aria-current="page">Dutch John</li>
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
        { "@type": "ListItem", "position": 3, "name": "Dutch John", "item": "https://redmondmmh.com/telehealth/utah/dutch-john" }
      ]
    }
    </script>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Dutch John, UT</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Experienced psychiatric providers in the Dutch John area can be hard to find, especially those without a long wait.  Tiffany is easy to schedule with and can typically see patients the same day or next.  We take the headache out of scheduling and make the process simple.</p>
                        <p>Tiffany is licensed in Arizona and has over 30 years of experience in psychiatry treating ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions.  Get all of your mental health concerns addressed from the comfort of home!</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>We diagnose and manage chronic medical issues such as high blood pressure, diabetes, hormonal imbalances (including menopausal therapy and low testosterone),  erectile issues, PCOS and thyroid conditions.</p>
                        <p>We can also address acute concerns such as the flu, rashes or urinary tract infections, sexually transmitted infections, eye problems, injuries and acute pain.</p>
                        <p>We can easily order labs to be drawn at your local hospital, review the results and send specialty referrals, if needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany has experienced success with GLP-1 medications and so can you!  We specialize in individualized weight management programs from the comfort of your home, including Semaglutide and Tirzepatide therapy, combined with coaching and nutritional guidance.  Our use of local compounding pharmacies means that these medications are no longer out of reach for non-diabetics and they are more affordable than ever!</p>
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
                    <h2>Serving Dutch John, Manila, and the Flaming Gorge</h2>
                    <p>Our telehealth services reach Dutch John, Manila, and the surrounding Daggett County and Flaming Gorge communities, including visitors and residents near Flaming Gorge Reservoir. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We also accept most major insurance plans.</p>
                    <ul>
                        <li><strong>Utah-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Utah medical  license and treats Utah residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Dutch John area pharmacy.</li>
                        <li><strong>Integrated Care:</strong> Address both your physical and mental health needs in one convenient appointment.  Scheduling is easy and most patients can be seen the same day or next.  We allow you to save time and save copays.</li>
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
                        <li><strong>Prescriptions & Follow-up:</strong> Any necessary medications are sent to your preferred local pharmacy immediately.</li>
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
                        <span class="credential-badge credential-badge-local">Serves Daggett County</span>
                    </div>
                    <p>As a board-credentialed Physician Assistant with three decades of integrated medical and psychiatric experience, Tiffany Redmond brings that expertise directly to Dutch John patients. <a class="rmmh_red" href="{{ route('about') }}">Read her full story on our About page</a>.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Dutch John Telehealth FAQs</h2>
                    <p><span class="question">Is telehealth psychiatry available to Dutch John residents?</span><br />
                    Yes. Tiffany Redmond, PA-C is licensed in Utah and sees Dutch John and Daggett County patients for psychiatric medication management, primary care, and weight loss consultations by secure video visit.</p>

                    <p><span class="question">How long is the wait for a new patient appointment in Dutch John?</span><br />
                    Rural Utah often means a long drive or a long wait for specialty psychiatric care. We typically offer new telehealth patients an appointment within a few days, often the same day or next.</p>

                    <p><span class="question">Does insurance cover a Dutch John telehealth visit?</span><br />
                    We're in-network with most major Utah insurance plans, including SelectHealth, Blue Cross Blue Shield of Utah, and PEHP. See our <a class="rmmh_red" href="{{ route('insurance') }}">full accepted insurance list</a> or call our office to confirm your specific plan.</p>

                    <p><span class="question">Do I need to travel to an office for care in Dutch John?</span><br />
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
                    <p>Redmond MMH offers the same telehealth services throughout Utah, including:</p>
                    <ul>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.vernal') }}">Vernal</a></li>
                        <li><a class="rmmh_red" href="{{ route('logan-cache-valley') }}">Logan &amp; Cache Valley</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.park-city') }}">Park City</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.utah.salt-lake-city') }}">Salt Lake City</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
