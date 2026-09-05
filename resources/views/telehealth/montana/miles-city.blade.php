@extends('layout')

@section('title', 'Telehealth Miles City | Online Mental Health & Psychiatry in MT | Redmond MMH')
@section('description', 'Montana-licensed psychiatric care, family medicine, and weight loss treatment for Miles City and Eastern Montana via secure telehealth.')
@section('keywords', 'Telehealth Miles City, Online Psychiatrist Miles City MT, Mental Health Custer County, Telehealth Montana, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Miles City Telehealth",
    "description": "Montana-licensed online psychiatry, primary care, and weight loss services for Miles City and Eastern Montana through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/montana/miles-city",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Miles City",
        "addressRegion": "MT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Miles City, MT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 46.4083,
            "longitude": -105.8406
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
            "name": "Is psychiatric care available without driving to Billings or Bismarck?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Holy Rosary Healthcare anchors medical care for this 11-county region, but psychiatric specialists are limited locally. Tiffany provides psychiatric medication management by secure video, so Custer County residents can be seen without the long drive."
            }
        },
        {
            "@type": "Question",
            "name": "Do you treat injuries related to ranch or agricultural work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Virtual primary care covers everyday injuries and acute pain that come with ranching and outdoor work, along with chronic condition management, and we can order labs locally at Holy Rosary Healthcare."
            }
        },
        {
            "@type": "Question",
            "name": "Can telehealth help with the isolation of eastern Montana's long winters?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Seasonal mood changes are common across eastern Montana's long winters, and Tiffany treats anxiety, depression, and related conditions as part of ongoing psychiatric care."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero miles-city hero-mt-6 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Miles City</h1>
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
                    <h2>Accessible Care for Miles City, MT</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Eastern Montana's 11-county region relies heavily on Holy Rosary Healthcare here in Miles City, but psychiatric specialists remain hard to find and appointments can mean a long wait. Tiffany offers a faster path — secure video visits that can usually be scheduled within a day or two, no trip to Billings required.</p>
                        <p>Licensed in Montana with more than 30 years in psychiatry, Tiffany treats ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions — comprehensive mental health care from wherever you call home in Custer County.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>We manage chronic conditions common in ranching communities — high blood pressure, diabetes, hormonal imbalances (including menopausal therapy and low testosterone), erectile issues, PCOS and thyroid conditions.</p>
                        <p>Acute concerns are covered too: the flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, and the cuts, sprains and strains that come with ranch and rodeo work.</p>
                        <p>Lab work can be drawn locally at Holy Rosary Healthcare, with results reviewed and specialty referrals sent when needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany's individualized weight-management program — Semaglutide and Tirzepatide therapy, paired with coaching and nutritional guidance — is available to Miles City and the surrounding Cowboy Capital region by video visit. Working with local compounding pharmacies keeps these medications accessible for non-diabetic patients and more affordable than ever.</p>
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
                    <h2>Serving Miles City and Eastern Montana</h2>
                    <p>Our Montana-licensed telehealth services reach Miles City, Forsyth, Terry, Baker, Broadus, and the surrounding ranching communities of eastern Montana. Miles City sits where the Tongue River meets the Yellowstone, home to Holy Rosary Healthcare, the region's hospital for an 11-county stretch of eastern Montana. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We accept most major insurance plans, with our current in-network providers listed below.</p>
                    <ul>
                        <li><strong>Montana-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Montana license and treats Montana residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Miles City area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Miles City pharmacy immediately.</li>
                    </ol>
                </div>
            </div>
            <div class="divider-line"></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Local FAQ: Telehealth in Miles City &amp; Eastern Montana</h2>
                    <h3>Is psychiatric care available without driving to Billings or Bismarck?</h3>
                    <p>Yes. Holy Rosary Healthcare anchors medical care for this 11-county region, but psychiatric specialists are limited locally. Tiffany provides psychiatric medication management by secure video, so Custer County residents can be seen without the long drive.</p>
                    <h3>Do you treat injuries related to ranch or agricultural work?</h3>
                    <p>Yes. Virtual primary care covers everyday injuries and acute pain that come with ranching and outdoor work, along with chronic condition management, and we can order labs locally at Holy Rosary Healthcare.</p>
                    <h3>Can telehealth help with the isolation of eastern Montana's long winters?</h3>
                    <p>Yes. Seasonal mood changes are common across eastern Montana's long winters, and Tiffany treats anxiety, depression, and related conditions as part of ongoing psychiatric care.</p>
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
