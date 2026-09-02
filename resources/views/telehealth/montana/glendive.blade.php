@extends('layout')

@section('title', 'Telehealth Glendive | Online Mental Health & Psychiatry in MT | Redmond MMH')
@section('description', 'Montana-licensed psychiatric care, family medicine, and weight loss treatment for Glendive and Dawson County via secure telehealth.')
@section('keywords', 'Telehealth Glendive, Online Psychiatrist Glendive MT, Mental Health Dawson County, Telehealth Montana, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Glendive Telehealth",
    "description": "Montana-licensed online psychiatry, primary care, and weight loss services for Glendive and Dawson County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/montana/glendive",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Glendive",
        "addressRegion": "MT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Glendive, MT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 47.1053,
            "longitude": -104.7125
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
            "name": "I live far outside Glendive in rural Dawson County — is telehealth still an option?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. As long as you have an internet connection and are physically located in Montana, you can schedule a visit no matter how far you are from Glendive across Dawson County's farm and grazing land."
            }
        },
        {
            "@type": "Question",
            "name": "Do you treat injuries related to farm, ranch, or oilfield work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Our virtual primary care visits address acute injuries and pain, along with chronic conditions, that are common among Dawson County's agricultural and energy-sector workers, ordering labs locally and sending specialty referrals when needed."
            }
        },
        {
            "@type": "Question",
            "name": "Is psychiatric care available if I can't find a local provider in eastern Montana?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Eastern Montana's wide-open distances mean many Dawson County families are hours from the nearest psychiatric provider, and Tiffany's telehealth practice is built to close that gap with same or next-day scheduling."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero glendive hero-mt-1 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Glendive</h1>
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
                    <h2>Accessible Care for Glendive, MT</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Eastern Montana's wide-open distances mean many Dawson County families are hours from the nearest psychiatric provider, if one is even taking new patients. Tiffany's telehealth practice puts an experienced provider within reach, typically with same or next-day scheduling.</p>
                        <p>Licensed in Montana with more than 30 years of experience, she treats ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions, for patients of every age along the Yellowstone River valley.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Chronic conditions such as high blood pressure, diabetes, hormonal imbalances (including menopausal therapy and low testosterone), erectile issues, PCOS and thyroid disorders are managed through the same secure video visits.</p>
                        <p>Acute concerns are covered too: flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, and the injuries and acute pain that come with ranch and field work across Dawson County's farm and grazing land.</p>
                        <p>Labs can be drawn locally, results reviewed together, and specialty referrals sent whenever a concern needs more than telehealth can offer.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany's own experience with GLP-1 medications shapes the individualized weight-management plans she builds: Semaglutide or Tirzepatide therapy, paired with coaching and nutritional guidance, delivered from home, whether your goal is getting back on the trails at Makoshika State Park or simply feeling better day to day. Local compounding pharmacies keep these medications within reach for non-diabetics and more affordable than ever.</p>
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
                    <h2>Serving Glendive and Dawson County</h2>
                    <p>Our Montana-licensed telehealth services reach Glendive, Circle, Wibaux, Terry, Savage, and the surrounding communities of eastern Montana. Glendive is also home to Makoshika State Park, Montana's largest state park, and sits along the Yellowstone River in the heart of Dawson County's agricultural land, and our telehealth visits reach patients throughout that whole service area without requiring a trip into town. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We're in-network with Blue Cross Blue Shield through the BlueCard program and with Curative Health Plan, and we accept most major insurance plans.</p>
                    <ul>
                        <li><strong>Montana-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Montana license and treats Montana residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Glendive area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Glendive pharmacy immediately.</li>
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
                    <h3>I live far outside Glendive in rural Dawson County — is telehealth still an option?</h3>
                    <p>Yes. As long as you have an internet connection and are physically located in Montana, you can schedule a visit no matter how far you are from Glendive across Dawson County's farm and grazing land.</p>
                    <h3>Do you treat injuries related to farm, ranch, or oilfield work?</h3>
                    <p>Yes. Our virtual primary care visits address acute injuries and pain, along with chronic conditions, that are common among Dawson County's agricultural and energy-sector workers, ordering labs locally and sending specialty referrals when needed.</p>
                    <h3>Is psychiatric care available if I can't find a local provider in eastern Montana?</h3>
                    <p>Yes. Eastern Montana's wide-open distances mean many Dawson County families are hours from the nearest psychiatric provider, and Tiffany's telehealth practice is built to close that gap with same or next-day scheduling.</p>
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
