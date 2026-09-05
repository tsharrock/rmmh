@extends('layout')

@section('title', 'Telehealth Lewistown | Online Mental Health & Psychiatry in MT | Redmond MMH')
@section('description', 'Montana-licensed psychiatric care, family medicine, and weight loss treatment for Lewistown and Central Montana via secure telehealth.')
@section('keywords', 'Telehealth Lewistown, Online Psychiatrist Lewistown MT, Mental Health Fergus County, Telehealth Montana, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Lewistown Telehealth",
    "description": "Montana-licensed online psychiatry, primary care, and weight loss services for Lewistown and Central Montana through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/montana/lewistown",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Lewistown",
        "addressRegion": "MT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Lewistown, MT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 47.0625,
            "longitude": -109.4285
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
            "name": "Do I have to drive to Great Falls or Billings to see a psychiatric provider?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Many Fergus County residents currently travel to Great Falls or Billings for psychiatric care since local specialty access is limited. Tiffany provides the same psychiatric medication management by secure video, so you can be seen from home in Lewistown or anywhere in the Judith Basin."
            }
        },
        {
            "@type": "Question",
            "name": "Can you help with the seasonal mood changes that come with central Montana winters?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Long, dark Judith Basin winters can worsen anxiety, depression, and other mood conditions. Tiffany treats these concerns as part of her psychiatric practice and can adjust your treatment plan seasonally."
            }
        },
        {
            "@type": "Question",
            "name": "Will you coordinate with Central Montana Medical Center if I need labs or a specialist?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely. We can order labs to be drawn locally at Central Montana Medical Center or another Lewistown-area facility, review the results with you, and send specialty referrals when needed."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero lewistown hero-mt-1 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Lewistown</h1>
                    <p>Montana-licensed Mental Health and medical care from the comfort of your home.</p>
                    <a class="btn rmmh_button_primary me-3" href="https://nextpatient.co/p/redmondmedical/schedule" target="_blank">Schedule Your Visit</a>
                </div>
            </div>
        </div>
    </div>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Lewistown, MT</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Psychiatric specialists are in short supply across the Judith Basin — Central Montana Medical Center brings in visiting psychiatric providers only a few days a month, and many Fergus County residents otherwise drive to Great Falls or Billings for care. Tiffany offers a closer option: video visits that can usually be scheduled within a day or two, right from home.</p>
                        <p>Licensed in Montana with more than 30 years in psychiatry, Tiffany manages ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions — the same conditions patients elsewhere travel hours to address, now handled from your own kitchen table.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>We diagnose and manage chronic conditions common among Judith Basin's ranching and wheat-farming families — high blood pressure, diabetes, hormonal imbalances (including menopausal therapy and low testosterone), erectile issues, PCOS and thyroid conditions.</p>
                        <p>We also treat acute concerns such as the flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, injuries and acute pain — the kind of everyday issues that come up on a working ranch or in town.</p>
                        <p>Lab work can be drawn locally at Central Montana Medical Center or another Lewistown-area facility, with results reviewed and specialty referrals sent when needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany's individualized weight-management program — Semaglutide and Tirzepatide therapy, paired with coaching and nutritional guidance — is now available to Lewistown and the Judith Basin by video visit. Working with local compounding pharmacies keeps these medications accessible for non-diabetic patients and more affordable than ever.</p>
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
                    <h2>Serving Lewistown and Central Montana</h2>
                    <p>Our Montana-licensed telehealth services reach Lewistown, Denton, Moore, Hobson, Grass Range, and the surrounding communities of central Montana. Lewistown sits at the geographic center of the state in the Judith Basin, anchored by Central Montana Medical Center, an outreach facility of Benefis Health System. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We're in-network with most major insurance plans; the full list appears below.</p>
                    <ul>
                        <li><strong>Montana-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Montana license and treats Montana residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Lewistown area pharmacy.</li>
                        <li><strong>Integrated Care:</strong> Address both your physical and mental health needs in one convenient appointment.  Scheduling is easy and most patients can be seen the same day or next.  We allow you to save time and save copays.</li>
                    </ul>

                    <h3>Accepted Insurance Plans</h3>
                    <ul>
                        <li>BCBS Blue Card</li>
                        <li>Moutain Health CO-OP</li>
                        <li>Curative Health</li>
                        <li>Allegiance Benefit Management Plan</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Lewistown pharmacy immediately.</li>
                    </ol>
                </div>
            </div>
            <div class="divider-line"></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Local FAQ: Telehealth in Lewistown &amp; Central Montana</h2>
                    <h3>Do I have to drive to Great Falls or Billings to see a psychiatric provider?</h3>
                    <p>No. Many Fergus County residents currently travel to Great Falls or Billings for psychiatric care since local specialty access is limited. Tiffany provides the same psychiatric medication management by secure video, so you can be seen from home in Lewistown or anywhere in the Judith Basin.</p>
                    <h3>Can you help with the seasonal mood changes that come with central Montana winters?</h3>
                    <p>Yes. Long, dark Judith Basin winters can worsen anxiety, depression, and other mood conditions. Tiffany treats these concerns as part of her psychiatric practice and can adjust your treatment plan seasonally.</p>
                    <h3>Will you coordinate with Central Montana Medical Center if I need labs or a specialist?</h3>
                    <p>Absolutely. We can order labs to be drawn locally at Central Montana Medical Center or another Lewistown-area facility, review the results with you, and send specialty referrals when needed.</p>
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
                    <img class="float-start me-3" src="/img/tiffany_redmond_cropped.webp" alt="Tiffany Redmond, PA-C" />
                    <h4>Tiffany Redmond, PA-C</h4>
                    <p>After graduating from Arizona State University in 1997, Tiffany began her career working in juvenile correctional facilities, overseeing treatment groups for adolescent violent offenders, sex offenders, and substance abusers. She also spent time working in adolescent and adult group homes and a residential treatment facility in inner-city Los Angeles. She then went on to earn a Master's in Counseling Psychology, after which she spent four years in Nebraska providing therapeutic services for foster children with severe psychiatric issues. Tiffany then went on to work as a civilian for the U.S. Army, conducting neuropsychological assessments of service members returning from the Middle East with traumatic brain injuries. Upon graduating from the University of Alabama's surgical Physician Assistant Program in 2016, Tiffany moved to Utah, where she has since been providing family medicine and psychiatric services to the Cache Valley community.</p>
                    <p>Tiffany is licensed to see patients in Montana and is currently accepting new patients for telehealth services. Whether you are seeking mental health support or a new primary care home, she is ready to partner with you on your journey.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
