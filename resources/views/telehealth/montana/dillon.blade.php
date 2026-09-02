@extends('layout')

@section('title', 'Telehealth Dillon | Online Mental Health & Psychiatry in MT | Redmond MMH')
@section('description', 'Montana-licensed psychiatric care, family medicine, and weight loss treatment for Dillon and Beaverhead County via secure telehealth.')
@section('keywords', 'Telehealth Dillon, Online Psychiatrist Dillon MT, Mental Health Beaverhead County, Telehealth Montana, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Dillon Telehealth",
    "description": "Montana-licensed online psychiatry, primary care, and weight loss services for Dillon and Beaverhead County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/montana/dillon",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Dillon",
        "addressRegion": "MT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Dillon, MT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 45.2158,
            "longitude": -112.6375
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
            "name": "I live outside Dillon in a rural part of Beaverhead County — can I still get scheduled quickly?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Telehealth reaches you anywhere in Beaverhead County with an internet connection, so the county's size — Montana's largest by land area — doesn't stand between you and an appointment."
            }
        },
        {
            "@type": "Question",
            "name": "Are University of Montana Western students eligible for telehealth visits?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Any patient physically located in Montana at the time of the visit can schedule with Tiffany, including UM Western students living in Dillon during the school year."
            }
        },
        {
            "@type": "Question",
            "name": "Do you treat mental health concerns tied to isolation on rural ranches?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Tiffany treats anxiety, depression, and other mental health concerns that can be harder to manage when the nearest provider is a long drive away, with scheduling that typically offers a same or next-day visit."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero dillon hero-mt-2 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Dillon</h1>
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
                    <h2>Accessible Care for Dillon, MT</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Beaverhead County is Montana's largest county by land area, and that size alone means many ranching and farming families face a long drive for psychiatric care, when they can find an opening at all. Tiffany brings same or next-day scheduling to the Dillon area instead.</p>
                        <p>Licensed in Montana with more than 30 years of experience, she treats ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions, from wherever you call home in the Beaverhead Valley.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Chronic conditions such as high blood pressure, diabetes, hormonal imbalances (including menopausal therapy and low testosterone), erectile issues, PCOS and thyroid disorders are managed through the same secure video visits.</p>
                        <p>Acute concerns are covered too: flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, and the strains and injuries that come with ranch work across Beaverhead County or student life at University of Montana Western.</p>
                        <p>Labs can be ordered locally, results reviewed together, and specialty referrals sent whenever a concern needs more than telehealth can offer.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany's own experience with GLP-1 medications shapes the individualized weight-management plans she builds: Semaglutide or Tirzepatide therapy, paired with coaching and nutritional guidance, all managed from home rather than a long drive into Dillon. Local compounding pharmacies keep these medications within reach for non-diabetics and more affordable than ever.</p>
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
                    <h2>Serving Dillon and Beaverhead County</h2>
                    <p>Our Montana-licensed telehealth services reach Dillon, Twin Bridges, Sheridan, Melrose, Lima, and the surrounding communities of southwest Montana. Dillon is also home to the University of Montana Western, and the Beaverhead River that runs along the valley ties together the ranching communities our telehealth patients call home. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We're in-network with Blue Cross Blue Shield through the BlueCard program and with Curative Health Plan, and we accept most major insurance plans.</p>
                    <ul>
                        <li><strong>Montana-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Montana license and treats Montana residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Dillon area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Dillon pharmacy immediately.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="divider-line"></div>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Local FAQ</h2>
                    <h3>I live outside Dillon in a rural part of Beaverhead County — can I still get scheduled quickly?</h3>
                    <p>Yes. Telehealth reaches you anywhere in Beaverhead County with an internet connection, so the county's size — Montana's largest by land area — doesn't stand between you and an appointment.</p>
                    <h3>Are University of Montana Western students eligible for telehealth visits?</h3>
                    <p>Yes. Any patient physically located in Montana at the time of the visit can schedule with Tiffany, including UM Western students living in Dillon during the school year.</p>
                    <h3>Do you treat mental health concerns tied to isolation on rural ranches?</h3>
                    <p>Yes. Tiffany treats anxiety, depression, and other mental health concerns that can be harder to manage when the nearest provider is a long drive away, with scheduling that typically offers a same or next-day visit.</p>
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
