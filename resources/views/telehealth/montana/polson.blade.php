@extends('layout')

@section('title', 'Telehealth Polson | Online Mental Health & Psychiatry in MT | Redmond MMH')
@section('description', 'Montana-licensed psychiatric care, family medicine, and weight loss treatment for Polson and the Flathead Reservation via secure telehealth.')
@section('keywords', 'Telehealth Polson, Online Psychiatrist Polson MT, Mental Health Lake County, Telehealth Montana, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Polson Telehealth",
    "description": "Montana-licensed online psychiatry, primary care, and weight loss services for Polson and the Flathead Reservation through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/montana/polson",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Polson",
        "addressRegion": "MT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Polson, MT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 47.6935,
            "longitude": -114.1631
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
            "name": "Do you serve communities on the Flathead Indian Reservation, like Ronan, Pablo, or St. Ignatius?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Our Montana-licensed telehealth services are available throughout Lake County, including Ronan, Pablo, Bigfork, St. Ignatius, and the rest of the Flathead Lake area."
            }
        },
        {
            "@type": "Question",
            "name": "Can telehealth help during Flathead Lake's quiet winter months?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. The off-season around Flathead Lake can bring isolation and seasonal mood changes; Tiffany treats anxiety, depression, and related conditions as part of ongoing psychiatric care."
            }
        },
        {
            "@type": "Question",
            "name": "Do you treat injuries from lake recreation or orchard work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Virtual primary care covers the boating and outdoor injuries common around Flathead Lake, along with chronic condition management and lab coordination."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero polson hero-mt-3 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Polson</h1>
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
                    <h2>Accessible Care for Polson, MT</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Communities around Flathead Lake and throughout Lake County have limited local access to psychiatric providers, often meaning a long drive to Missoula or Kalispell. Tiffany offers a closer option: secure video visits, typically scheduled within a day or two, from wherever you are on the lake.</p>
                        <p>Licensed in Montana with more than 30 years in psychiatry, Tiffany treats ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions — comprehensive mental health care from the comfort of home.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>We diagnose and manage chronic conditions such as high blood pressure, diabetes, hormonal imbalances (including menopausal therapy and low testosterone), erectile issues, PCOS and thyroid conditions for patients throughout the Mission Valley and around Flathead Lake.</p>
                        <p>Acute concerns are covered too: the flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, and the boating and outdoor injuries common to the Flathead Lake area, including during cherry harvest season.</p>
                        <p>We can order labs locally, review the results and send specialty referrals, if needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany's individualized weight-management program — Semaglutide and Tirzepatide therapy, paired with coaching and nutritional guidance — is now available to Polson and the Flathead Lake area by video visit. Local compounding pharmacy partnerships keep these medications accessible for non-diabetic patients and more affordable than ever.</p>
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
                    <h2>Serving Polson and the Flathead Reservation</h2>
                    <p>Our Montana-licensed telehealth services reach Polson, Ronan, Pablo, Bigfork, St. Ignatius, and the surrounding communities around Flathead Lake. Polson sits at the southern tip of Flathead Lake — the largest natural freshwater lake in the western United States — within the Flathead Indian Reservation, home to the Confederated Salish and Kootenai Tribes, with the Mission Mountains rising to the south. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  Our in-network insurance plans are listed below, and we accept most other major carriers as well.</p>
                    <ul>
                        <li><strong>Montana-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Montana license and treats Montana residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Polson area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Polson pharmacy immediately.</li>
                    </ol>
                </div>
            </div>
            <div class="divider-line"></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Local FAQ: Telehealth in Polson &amp; the Flathead Lake Area</h2>
                    <h3>Do you serve communities on the Flathead Indian Reservation, like Ronan, Pablo, or St. Ignatius?</h3>
                    <p>Yes. Our Montana-licensed telehealth services are available throughout Lake County, including Ronan, Pablo, Bigfork, St. Ignatius, and the rest of the Flathead Lake area.</p>
                    <h3>Can telehealth help during Flathead Lake's quiet winter months?</h3>
                    <p>Yes. The off-season around Flathead Lake can bring isolation and seasonal mood changes; Tiffany treats anxiety, depression, and related conditions as part of ongoing psychiatric care.</p>
                    <h3>Do you treat injuries from lake recreation or orchard work?</h3>
                    <p>Yes. Virtual primary care covers the boating and outdoor injuries common around Flathead Lake, along with chronic condition management and lab coordination.</p>
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
