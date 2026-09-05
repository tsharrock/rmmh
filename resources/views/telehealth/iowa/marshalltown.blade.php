@extends('layout')

@section('title', 'Telehealth Marshalltown | Online Mental Health & Psychiatry in IA | Redmond MMH')
@section('description', 'Iowa-licensed psychiatric care, family medicine, and weight loss treatment for Marshalltown and Marshall County via secure telehealth.')
@section('keywords', 'Telehealth Marshalltown, Online Psychiatrist Marshalltown IA, Mental Health Marshall County, Telehealth Iowa, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Marshalltown Telehealth",
    "description": "Iowa-licensed online psychiatry, primary care, and weight loss services for Marshalltown and Marshall County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/iowa/marshalltown",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Marshalltown",
        "addressRegion": "IA"
    },
    "areaServed": {
        "@type": "City",
        "name": "Marshalltown, IA"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 42.0493,
            "longitude": -92.908
        },
        "geoRadius": "45000"
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
            "name": "Is telehealth psychiatric care really an option if I live outside Marshalltown proper?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Patients throughout Marshall County — including State Center, Toledo, Tama, and Gladbrook — can meet with Tiffany by secure video from home, which matters in a rural, agricultural region where many communities have limited local access to psychiatric providers."
            }
        },
        {
            "@type": "Question",
            "name": "Can I get labs done locally as part of a virtual primary care visit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Labs can be drawn at UnityPoint Health–Marshalltown Hospital or another lab near you, with results reviewed during a follow-up telehealth visit."
            }
        },
        {
            "@type": "Question",
            "name": "Are weight-loss medications like Semaglutide and Tirzepatide accessible in Marshalltown?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Iowa has one of the higher rates of adult overweight and obesity in the country, and by working with local compounding pharmacies, Tiffany is able to offer GLP-1 therapy at a more accessible cost for non-diabetic patients in the Marshalltown area."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero marshalltown hero-ia-2 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Marshalltown</h1>
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
                    <h2>Accessible Care for Marshalltown, IA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Finding a psychiatric provider in Marshall County with real openings can be a challenge &mdash; many central Iowa communities along the Iowa River have limited local access to psychiatric care, and waitlists for a new appointment can stretch for weeks. Tiffany typically offers same-day or next-day scheduling, so you're not stuck waiting months just to get started.</p>
                        <p>Licensed in Iowa with more than 30 years in psychiatric practice, she manages ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation, and addiction &mdash; all from a secure video visit at home.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Ongoing conditions like high blood pressure, diabetes, thyroid disorders, PCOS, and hormonal changes &mdash; including menopause and low testosterone &mdash; are managed with the same continuity of care you'd expect from an in-person clinic.</p>
                        <p>Same-week visits are also available for acute issues: flu symptoms, a stubborn rash, a urinary or sexually transmitted infection, an eye concern, a minor injury, or unexplained pain.</p>
                        <p>When labs are needed, they can be drawn locally at UnityPoint Health&ndash;Marshalltown Hospital or another lab of your choosing, with results reviewed and specialty referrals arranged as needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>GLP-1 therapy &mdash; Semaglutide and Tirzepatide &mdash; has helped many of Tiffany's patients reach sustainable results, paired with individualized coaching and nutrition guidance built around your goals.</p>
                        <p>Working with local compounding pharmacies keeps these medications accessible and affordable for non-diabetic patients, so a Marshalltown-area weight-loss plan no longer has to start with a long drive or an insurance fight.</p>
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
                    <h2>Serving Marshalltown and Marshall County</h2>
                    <p>Our Iowa-licensed telehealth services reach Marshalltown, State Center, Toledo, Tama, Gladbrook, and the surrounding Marshall County communities. The Iowa River runs directly through downtown Marshalltown, near the historic Marshall County Courthouse, one of the county's most recognizable landmarks. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  Insurance coverage here includes most major plans, detailed in the list below.</p>
                    <ul>
                        <li><strong>Iowa-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Iowa license and treats Iowa residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Marshalltown area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Marshalltown pharmacy immediately.</li>
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
                    <h3>Is telehealth psychiatric care really an option if I live outside Marshalltown proper?</h3>
                    <p>Yes. Patients throughout Marshall County &mdash; including State Center, Toledo, Tama, and Gladbrook &mdash; can meet with Tiffany by secure video from home, which matters in a rural, agricultural region where many communities have limited local access to psychiatric providers.</p>
                    <h3>Can I get labs done locally as part of a virtual primary care visit?</h3>
                    <p>Yes. Labs can be drawn at UnityPoint Health&ndash;Marshalltown Hospital or another lab near you, with results reviewed during a follow-up telehealth visit.</p>
                    <h3>Are weight-loss medications like Semaglutide and Tirzepatide accessible in Marshalltown?</h3>
                    <p>Yes. Iowa has one of the higher rates of adult overweight and obesity in the country, and by working with local compounding pharmacies, Tiffany is able to offer GLP-1 therapy at a more accessible cost for non-diabetic patients in the Marshalltown area.</p>
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
