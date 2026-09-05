@extends('layout')

@section('title', 'Telehealth Dubuque | Online Mental Health & Psychiatry in IA | Redmond MMH')
@section('description', 'Iowa-licensed psychiatric care, family medicine, and weight loss treatment for Dubuque and Dubuque County via secure telehealth.')
@section('keywords', 'Telehealth Dubuque, Online Psychiatrist Dubuque IA, Mental Health Dubuque County, Telehealth Iowa, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Dubuque Telehealth",
    "description": "Iowa-licensed online psychiatry, primary care, and weight loss services for Dubuque and Dubuque County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/iowa/dubuque",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Dubuque",
        "addressRegion": "IA"
    },
    "areaServed": {
        "@type": "City",
        "name": "Dubuque, IA"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 42.5006,
            "longitude": -90.6646
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
            "name": "Is telehealth a good option if I live outside Dubuque proper, like Asbury or Peosta?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Tiffany's Iowa license covers the whole state, so patients throughout Dubuque County — including Asbury, Peosta, Dyersville, and Farley — can book the same telehealth visit."
            }
        },
        {
            "@type": "Question",
            "name": "How hard is it to get a psychiatric appointment through Redmond Medical and Mental Health compared to local wait times?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Much easier. Many communities in the Dubuque area have limited local access to psychiatric care with long waits. Tiffany typically sees patients the same day or next."
            }
        },
        {
            "@type": "Question",
            "name": "Can I still use my regular hospital for lab work if I switch to telehealth visits?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. We can order labs to be drawn at a hospital or lab near you, including MercyOne Dubuque Medical Center or UnityPoint Health-Finley Hospital, and review the results together virtually."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero dubuque hero-ia-1 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Dubuque</h1>
                    <p>Iowa-licensed Mental Health and medical care from the comfort of your home.</p>
                    <a class="btn rmmh_button_primary me-3" href="https://nextpatient.co/p/redmondmedical/schedule" target="_blank">Schedule Your Visit</a>
                </div>
            </div>
        </div>
    </div>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Dubuque, IA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Dubuque and the surrounding tri-state area have long faced a shortage of psychiatric providers with short wait times, and many communities in the region have limited local access to psychiatric care. Tiffany keeps scheduling simple and typically sees patients the same day or next.</p>
                        <p>Tiffany is licensed in Iowa with over 30 years of psychiatric experience treating ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation, and addiction, all from home along the bluffs of the Mississippi.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>We diagnose and manage chronic conditions such as high blood pressure, diabetes, hormonal imbalances (including menopause and low testosterone), erectile issues, PCOS, and thyroid disorders.</p>
                        <p>Acute concerns, including flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, injuries, and acute pain, are addressed virtually as well.</p>
                        <p>We can order labs to be drawn at a hospital or lab near you, including MercyOne Dubuque Medical Center or UnityPoint Health-Finley Hospital, then review results and send specialty referrals if needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany has helped patients throughout eastern Iowa succeed with GLP-1 medications, and she can help you get started too. Programs are individualized around Semaglutide and Tirzepatide, combined with coaching and nutritional guidance, all from home.</p>
                        <p>Working with local compounding pharmacies keeps these medications within reach for non-diabetic patients and more affordable than many people expect.</p>
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
                    <h2>Serving Dubuque and Dubuque County</h2>
                    <p>Our Iowa-licensed telehealth services reach Dubuque, Asbury, Peosta, Dyersville, Farley, and the surrounding Dubuque County communities. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We accept most major insurance plans, and our current providers are listed below. Dubuque rises along the bluffs of the Mississippi River, home to landmarks like the Fenelon Place Elevator and the National Mississippi River Museum and Aquarium, as well as regional hospitals such as MercyOne Dubuque Medical Center and UnityPoint Health-Finley Hospital.</p>
                    <ul>
                        <li><strong>Iowa-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Iowa license and treats Iowa residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Dubuque area pharmacy.</li>
                        <li><strong>Integrated Care:</strong> Address both your physical and mental health needs in one convenient appointment.  Scheduling is easy and most patients can be seen the same day or next.  We allow you to save time and save copays.</li>
                    </ul>

                    <h3>Accepted Insurance Plans</h3>
                    <ul>
                        <li>BCBS Wellmark of Iowa</li>
                        <li>BCBS Blue Card</li>
                        <li>Curative Health</li>
                        <li>Midlands Choice (Cigna)</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Dubuque pharmacy immediately.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-5">
            <div class="divider-line"></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Local FAQ</h2>
                    <h3>Is telehealth a good option if I live outside Dubuque proper, like Asbury or Peosta?</h3>
                    <p>Yes. Tiffany's Iowa license covers the whole state, so patients throughout Dubuque County &mdash; including Asbury, Peosta, Dyersville, and Farley &mdash; can book the same telehealth visit.</p>
                    <h3>How hard is it to get a psychiatric appointment through Redmond Medical and Mental Health compared to local wait times?</h3>
                    <p>Much easier. Many communities in the Dubuque area have limited local access to psychiatric care with long waits. Tiffany typically sees patients the same day or next.</p>
                    <h3>Can I still use my regular hospital for lab work if I switch to telehealth visits?</h3>
                    <p>Yes. We can order labs to be drawn at a hospital or lab near you, including MercyOne Dubuque Medical Center or UnityPoint Health-Finley Hospital, and review the results together virtually.</p>
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
                    <p>Tiffany is licensed to see patients in Iowa and is currently accepting new patients for telehealth services. Whether you are seeking mental health support or a new primary care home, she is ready to partner with you on your journey.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
