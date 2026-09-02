@extends('layout')

@section('title', 'Telehealth Bozeman | Online Mental Health & Psychiatry in MT | Redmond MMH')
@section('description', 'Montana-licensed psychiatric care, family medicine, and weight loss treatment for Bozeman and Gallatin County via secure telehealth.')
@section('keywords', 'Telehealth Bozeman, Online Psychiatrist Bozeman MT, Mental Health Gallatin County, Telehealth Montana, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Bozeman Telehealth",
    "description": "Montana-licensed online psychiatry, primary care, and weight loss services for Bozeman and Gallatin County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/montana/bozeman",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Bozeman",
        "addressRegion": "MT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Bozeman, MT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 45.677,
            "longitude": -111.0429
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
            "name": "I'm a Montana State University student — can I use telehealth if I'm away from my hometown doctor?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. As long as you're physically located in Montana at the time of your visit, you can schedule with Tiffany whether you're at your Bozeman address, a residence hall near MSU, or anywhere else in the Gallatin Valley."
            }
        },
        {
            "@type": "Question",
            "name": "Does RMMH coordinate care with Bozeman Health if I need in-person treatment?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Redmond Medical and Mental Health is an independent telehealth practice and isn't affiliated with Bozeman Health. When a concern needs an in-person exam, imaging, or a specialist, we're glad to send a referral so you can be seen locally."
            }
        },
        {
            "@type": "Question",
            "name": "Can telehealth help with seasonal mood changes during Gallatin Valley winters?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Tiffany treats anxiety, depression, and other mood concerns that can intensify during Montana's long winters, and appointments can be scheduled quickly rather than waiting weeks for an opening."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero bozeman hero-mt-2 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Bozeman</h1>
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
                    <h2>Accessible Care for Bozeman, MT</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Bozeman's population has grown quickly alongside Montana State University, and local psychiatric practices often carry waitlists of many weeks. Tiffany takes a simpler approach, with scheduling that typically gets patients seen the same day or next.</p>
                        <p>Licensed in Montana with more than 30 years of experience, she treats ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions, for students, families, and everyone else in the Gallatin Valley.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Chronic conditions such as high blood pressure, diabetes, hormonal imbalances (including menopausal therapy and low testosterone), erectile issues, PCOS and thyroid disorders are managed through the same secure video visits.</p>
                        <p>Acute concerns are handled too: flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, and the sprains and strains that come with skiing, biking, or hiking around the Bridger Mountains.</p>
                        <p>Labs can be drawn locally, results reviewed together, and specialty referrals sent whenever a concern calls for more than a virtual visit.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany's own success with GLP-1 medications shapes how she builds each weight-management plan: Semaglutide or Tirzepatide therapy, paired with coaching and nutritional guidance, delivered from home. Local compounding pharmacies keep these medications within reach for non-diabetics and more affordable than ever.</p>
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
                    <h2>Serving Bozeman and Gallatin County</h2>
                    <p>Our Montana-licensed telehealth services reach Bozeman, Belgrade, Four Corners, Manhattan, Livingston, and the surrounding Gallatin County communities. Bozeman is also home to Bozeman Health Deaconess Regional Medical Center, a Level III trauma center serving an eleven-county region of southwest Montana, and our telehealth visits are designed to work alongside the in-person care available there. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We're in-network with Blue Cross Blue Shield through the BlueCard program and with Curative Health Plan, and we accept most major insurance plans.</p>
                    <ul>
                        <li><strong>Montana-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Montana license and treats Montana residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Bozeman area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Bozeman pharmacy immediately.</li>
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
                    <h3>I'm a Montana State University student — can I use telehealth if I'm away from my hometown doctor?</h3>
                    <p>Yes. As long as you're physically located in Montana at the time of your visit, you can schedule with Tiffany whether you're at your Bozeman address, a residence hall near MSU, or anywhere else in the Gallatin Valley.</p>
                    <h3>Does RMMH coordinate care with Bozeman Health if I need in-person treatment?</h3>
                    <p>Redmond Medical and Mental Health is an independent telehealth practice and isn't affiliated with Bozeman Health. When a concern needs an in-person exam, imaging, or a specialist, we're glad to send a referral so you can be seen locally.</p>
                    <h3>Can telehealth help with seasonal mood changes during Gallatin Valley winters?</h3>
                    <p>Yes. Tiffany treats anxiety, depression, and other mood concerns that can intensify during Montana's long winters, and appointments can be scheduled quickly rather than waiting weeks for an opening.</p>
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
