@extends('layout')

@section('title', 'Telehealth Billings | Online Mental Health & Psychiatry in MT | Redmond MMH')
@section('description', 'Montana-licensed psychiatric care, family medicine, and weight loss treatment for Billings and Yellowstone County via secure telehealth.')
@section('keywords', 'Telehealth Billings, Online Psychiatrist Billings MT, Mental Health Yellowstone County, Telehealth Montana, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Billings Telehealth",
    "description": "Montana-licensed online psychiatry, primary care, and weight loss services for Billings and Yellowstone County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/montana/billings",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Billings",
        "addressRegion": "MT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Billings, MT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 45.7833,
            "longitude": -108.5007
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
            "name": "Do I need to already be a Billings Clinic patient to use RMMH telehealth?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Redmond Medical and Mental Health is an independent telehealth practice, not affiliated with Billings Clinic or any hospital system. You don't need to be an existing patient anywhere to schedule with Tiffany, and we're happy to send referrals or coordinate with your local providers if in-person care is ever needed."
            }
        },
        {
            "@type": "Question",
            "name": "Can I get labs drawn locally in Billings after a virtual visit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. We can order labs to be drawn at your preferred Billings-area hospital or lab, review the results with you over telehealth, and send a specialty referral if your care needs more than a virtual visit can provide."
            }
        },
        {
            "@type": "Question",
            "name": "Does winter weather in Yellowstone County ever disrupt telehealth appointments?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Because visits happen over a secure video connection from your own home, winter storms and icy roads around Billings don't cause the delays or cancellations that in-person appointments sometimes do."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero billings hero-mt-3 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Billings</h1>
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
                    <h2>Accessible Care for Billings, MT</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Billings may be Montana's largest city, but a psychiatric appointment here can still mean a months-long wait, especially if you're not already established with a large clinic. Tiffany offers a more direct path: scheduling is simple, and most patients are seen the same day or next.</p>
                        <p>Licensed in Montana with more than 30 years of experience, Tiffany treats ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions. A long Yellowstone County winter is hard enough without also waiting weeks to be seen.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Chronic conditions like high blood pressure, diabetes, hormonal imbalances (including menopausal therapy and low testosterone), erectile issues, PCOS and thyroid disorders are managed the same way they would be in an office visit, just without the drive.</p>
                        <p>Acute concerns are covered too: flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, and the sprains and strains that come with a weekend on the trails below the Rimrocks or along the Yellowstone River.</p>
                        <p>Labs can be drawn at your preferred local hospital, results reviewed together over video, and specialty referrals sent along whenever a concern needs more than telehealth can offer.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany has seen firsthand what GLP-1 medications can do, and she builds an individualized weight-management plan around that experience: Semaglutide or Tirzepatide therapy, paired with coaching and nutritional guidance, all from home. Working with local compounding pharmacies keeps these medications within reach for non-diabetics and more affordable than ever, no trip across Billings required.</p>
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
                    <h2>Serving Billings and Yellowstone County</h2>
                    <p>Our Montana-licensed telehealth services reach Billings, Laurel, Lockwood, Shepherd, Huntley, and the surrounding Yellowstone County communities. Billings is also home to Billings Clinic, the largest healthcare system in Montana and Wyoming, and our telehealth visits are designed to complement the imaging, labs, and specialty referrals available there when in-person care is needed. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We're in-network with most major insurance plans — see the full list of accepted providers below.</p>
                    <ul>
                        <li><strong>Montana-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Montana license and treats Montana residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Billings area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Billings pharmacy immediately.</li>
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
                    <h3>Do I need to already be a Billings Clinic patient to use RMMH telehealth?</h3>
                    <p>No. Redmond Medical and Mental Health is an independent telehealth practice, not affiliated with Billings Clinic or any hospital system. You don't need to be an existing patient anywhere to schedule with Tiffany, and we're happy to send referrals or coordinate with your local providers if in-person care is ever needed.</p>
                    <h3>Can I get labs drawn locally in Billings after a virtual visit?</h3>
                    <p>Yes. We can order labs to be drawn at your preferred Billings-area hospital or lab, review the results with you over telehealth, and send a specialty referral if your care needs more than a virtual visit can provide.</p>
                    <h3>Does winter weather in Yellowstone County ever disrupt telehealth appointments?</h3>
                    <p>No. Because visits happen over a secure video connection from your own home, winter storms and icy roads around Billings don't cause the delays or cancellations that in-person appointments sometimes do.</p>
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
