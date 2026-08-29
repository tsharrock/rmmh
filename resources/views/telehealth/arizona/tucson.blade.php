@extends('layout')

@section('title', 'Telehealth Tucson | Online Mental Health & Psychiatry in AZ | Redmond MMH')
@section('description', 'Arizona-licensed psychiatric care, family medicine, and weight loss treatment for Tucson residents via secure telehealth. Skip the wait list and the drive across town.')
@section('keywords', 'Telehealth Tucson, Online Psychiatrist Tucson AZ, Mental Health Pima County, Telehealth Arizona, Online Doctor Tucson, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "name": "Redmond Medical & Mental Health - Tucson Telehealth",
  "description": "Arizona-licensed online psychiatry, primary care, and weight loss services for Tucson and Pima County through secure telehealth.",
  "url": "https://redmondmmh.com/telehealth/arizona/tucson",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Tucson",
    "addressRegion": "AZ"
  },
  "areaServed": {
    "@type": "City",
    "name": "Tucson, AZ"
  },
  "serviceArea": {
    "@type": "GeoCircle",
    "geoMidpoint": {
      "@type": "GeoCoordinates",
      "latitude": 32.2226,
      "longitude": -110.9747
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
      "name": "Is telehealth psychiatry available to Tucson residents?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Tiffany Redmond, PA-C is licensed in Arizona and sees Tucson and Pima County patients for psychiatric medication management, primary care, and weight loss consultations by secure video visit."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the wait for a new patient appointment in Tucson?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Many Pima County practices carry multi-week waitlists for psychiatry. We typically offer new telehealth patients an appointment within a few days, often the same day or next."
      }
    },
    {
      "@type": "Question",
      "name": "Does insurance cover a Tucson telehealth visit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We're in-network with most major Arizona insurance plans. See our full accepted insurance list or call our office to confirm your specific plan."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need to visit an office in Tucson?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No physical office visit is required — Arizona telehealth appointments are conducted securely from home. Services that require a hands-on exam, such as Ketamine therapy or IV nutrition, are only available in person at our Hyde Park, Utah clinic."
      }
    }
  ]
}
</script>
@endsection

@section('content')
    <div class="hero tucson border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Tucson</h1>
                    <p>Arizona-licensed Mental Health and medical care from the comfort of your Tucson home or dorm.</p>
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
                <li class="breadcrumb-item active" aria-current="page">Tucson</li>
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
        { "@type": "ListItem", "position": 3, "name": "Tucson", "item": "https://redmondmmh.com/telehealth/arizona/tucson" }
      ]
    }
    </script>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Tucson, AZ</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Experienced psychiatric providers in Tucson can be hard to find, especially those without a long wait.  Tiffany is easy to schedule with and can typically see patients the same day or next.  We take the headache out of scheduling and make the process simple.</p>
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
                    <h2>Serving Tucson and Pima County</h2>
                    <p>Our Arizona-licensed telehealth services reach Tucson, Marana, Oro Valley, Sahuarita, Vail, and the surrounding Pima County communities, including students and staff at the University of Arizona. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We also accept most major insurance plans.</p>
                    <ul>
                        <li><strong>Arizona-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Arizona license and treats Arizona residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Tucson pharmacy.</li>
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
                        <li><strong>Prescriptions & Follow-up:</strong> Any necessary medications are sent to your preferred Tucson pharmacy immediately.</li>
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
                        <span class="credential-badge credential-badge-local">Serves Pima County</span>
                    </div>
                    <p>Tiffany Redmond, PA-C, is licensed in both Utah and Arizona and has spent over 30 years treating patients like those in Tucson. <a class="rmmh_red" href="{{ route('about') }}">Learn more about her background on our About page</a>.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Tucson Telehealth FAQs</h2>
                    <p><span class="question">Is telehealth psychiatry available to Tucson residents?</span><br />
                    Yes. Tiffany Redmond, PA-C is licensed in Arizona and sees Tucson and Pima County patients for psychiatric medication management, primary care, and weight loss consultations by secure video visit.</p>

                    <p><span class="question">How long is the wait for a new patient appointment in Tucson?</span><br />
                    Many Pima County practices carry multi-week waitlists for psychiatry. We typically offer new telehealth patients an appointment within a few days, often the same day or next.</p>

                    <p><span class="question">Does insurance cover a Tucson telehealth visit?</span><br />
                    We're in-network with most major Arizona insurance plans. See our <a class="rmmh_red" href="{{ route('insurance') }}">full accepted insurance list</a> or call our office to confirm your specific plan.</p>

                    <p><span class="question">Do I need to visit an office in Tucson?</span><br />
                    No physical office visit is required — Arizona telehealth appointments are conducted securely from home. Services that require a hands-on exam, such as <a class="rmmh_red" href="{{ route('ketamine') }}">Ketamine therapy</a> or <a class="rmmh_red" href="{{ route('iv-fluids') }}">IV nutrition</a>, are only available in person at our Hyde Park, Utah clinic.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="also-serve" class="bg_rmmh_gray py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h3>We Also Serve</h3>
                    <p>Redmond MMH offers the same telehealth services throughout Arizona, including:</p>
                    <ul>
                        <li><a class="rmmh_red" href="{{ route('telehealth.arizona.sierra-vista') }}">Sierra Vista</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.arizona.casa-grande') }}">Casa Grande</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.arizona.maricopa') }}">Maricopa</a></li>
                        <li><a class="rmmh_red" href="{{ route('telehealth.arizona.yuma') }}">Yuma</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
