@extends('layout')

@section('title', 'Telehealth Butte | Online Mental Health & Psychiatry in MT | Redmond MMH')
@section('description', 'Montana-licensed psychiatric care, family medicine, and weight loss treatment for Butte and Silver Bow County via secure telehealth.')
@section('keywords', 'Telehealth Butte, Online Psychiatrist Butte MT, Mental Health Silver Bow County, Telehealth Montana, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Butte Telehealth",
    "description": "Montana-licensed online psychiatry, primary care, and weight loss services for Butte and Silver Bow County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/montana/butte",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Butte",
        "addressRegion": "MT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Butte, MT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 46.0038,
            "longitude": -112.5348
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
            "name": "Is telehealth psychiatric care a good option if Butte-area providers have long waitlists?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Many communities in the Butte-Silver Bow area have limited local access to psychiatric care, and Tiffany's telehealth practice is built to close that gap, typically offering same or next-day scheduling instead of a months-long wait."
            }
        },
        {
            "@type": "Question",
            "name": "Can RMMH coordinate with St. James Hospital if I need in-person care?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We're an independent telehealth practice and aren't affiliated with St. James Hospital, but we're glad to send a referral there or to another local specialist whenever your care requires an in-person visit."
            }
        },
        {
            "@type": "Question",
            "name": "Does Butte's elevation or winter weather ever affect telehealth scheduling?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Visits happen over a secure video connection from wherever you are, so the Continental Divide's elevation and Butte's winter weather don't affect scheduling the way an in-person appointment might."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero butte hero-mt-4 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Butte</h1>
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
                    <h2>Accessible Care for Butte, MT</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Butte's mining-era independence is part of its character, but that same self-reliance can mean going without care when psychiatric providers are scarce across southwestern Montana. Tiffany's telehealth practice is built to close that gap, with scheduling that typically lands a same or next-day visit.</p>
                        <p>Licensed in Montana with more than 30 years of experience, she treats ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions, no trip up to the Divide required.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Chronic conditions such as high blood pressure, diabetes, hormonal imbalances (including menopausal therapy and low testosterone), erectile issues, PCOS and thyroid disorders are managed through the same secure video visit, no drive up the hill required.</p>
                        <p>Acute concerns are covered too: flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, and the injuries and acute pain that come with Butte's mile-high elevation on the Continental Divide.</p>
                        <p>Labs can be ordered at your preferred local hospital, results reviewed together, and specialty referrals sent whenever a concern needs more than telehealth can offer.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany's own experience with GLP-1 medications informs the individualized plans she builds for patients: Semaglutide or Tirzepatide therapy, paired with coaching and nutritional guidance, all managed from home. Local compounding pharmacies keep these medications within reach for non-diabetics and more affordable than ever.</p>
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
                    <h2>Serving Butte and Silver Bow County</h2>
                    <p>Our Montana-licensed telehealth services reach Butte, Walkerville, Rocker, Ramsay, Anaconda, and the surrounding Silver Bow County communities. Butte is also home to St. James Hospital, the region's primary acute-care facility for southwestern Montana, and our telehealth visits are designed to work alongside the in-person care available there. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We're in-network with Blue Cross Blue Shield through the BlueCard program and with Curative Health Plan, and we accept most major insurance plans.</p>
                    <ul>
                        <li><strong>Montana-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Montana license and treats Montana residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Butte area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Butte pharmacy immediately.</li>
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
                    <h3>Is telehealth psychiatric care a good option if Butte-area providers have long waitlists?</h3>
                    <p>Yes. Many communities in the Butte-Silver Bow area have limited local access to psychiatric care, and Tiffany's telehealth practice is built to close that gap, typically offering same or next-day scheduling instead of a months-long wait.</p>
                    <h3>Can RMMH coordinate with St. James Hospital if I need in-person care?</h3>
                    <p>We're an independent telehealth practice and aren't affiliated with St. James Hospital, but we're glad to send a referral there or to another local specialist whenever your care requires an in-person visit.</p>
                    <h3>Does Butte's elevation or winter weather ever affect telehealth scheduling?</h3>
                    <p>No. Visits happen over a secure video connection from wherever you are, so the Continental Divide's elevation and Butte's winter weather don't affect scheduling the way an in-person appointment might.</p>
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
