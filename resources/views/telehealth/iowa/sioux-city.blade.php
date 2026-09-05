@extends('layout')

@section('title', 'Telehealth Sioux City | Online Mental Health & Psychiatry in IA | Redmond MMH')
@section('description', 'Iowa-licensed psychiatric care, family medicine, and weight loss treatment for Sioux City and Woodbury County via secure telehealth.')
@section('keywords', 'Telehealth Sioux City, Online Psychiatrist Sioux City IA, Mental Health Woodbury County, Telehealth Iowa, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Sioux City Telehealth",
    "description": "Iowa-licensed online psychiatry, primary care, and weight loss services for Sioux City and Woodbury County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/iowa/sioux-city",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Sioux City",
        "addressRegion": "IA"
    },
    "areaServed": {
        "@type": "City",
        "name": "Sioux City, IA"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 42.4999,
            "longitude": -96.4003
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
            "name": "Can patients from smaller Woodbury County towns use telehealth psychiatric care?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Patients in Sergeant Bluff, Le Mars, Sloan, Moville, and greater Sioux City can see Tiffany by secure video, which helps since many smaller communities in the region have limited local access to psychiatric providers."
            }
        },
        {
            "@type": "Question",
            "name": "Where can I have labs drawn for a virtual primary care visit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Labs can typically be drawn at UnityPoint Health–St. Luke's or another lab convenient to you, with results reviewed and referrals sent during your telehealth follow-up."
            }
        },
        {
            "@type": "Question",
            "name": "Is weight-loss treatment with GLP-1 medications available in Sioux City?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Iowa has one of the higher adult obesity rates in the country, and Tiffany's local compounding pharmacy partnerships help make Semaglutide and Tirzepatide more affordable, including for patients who are not diabetic."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero sioux-city hero-ia-4 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Sioux City</h1>
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
                    <h2>Accessible Care for Sioux City, IA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Even in a regional hub like Sioux City, psychiatric appointments can be booked out for weeks, and patients in the surrounding Woodbury County towns often have even fewer options close to home. Tiffany typically sees new patients same-day or next-day, cutting that wait dramatically.</p>
                        <p>Licensed in Iowa with 30-plus years of psychiatric experience, she manages ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation, and addiction through a secure video visit.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>High blood pressure, diabetes, thyroid disorders, PCOS, and hormonal shifts such as menopause and low testosterone are managed with ongoing, in-person-style continuity, just delivered by video.</p>
                        <p>Acute concerns &mdash; flu, rashes, urinary or sexually transmitted infections, eye problems, injuries, and acute pain &mdash; are also seen promptly.</p>
                        <p>Labs can be drawn at UnityPoint Health&ndash;St. Luke's or another lab near you, with results reviewed and specialty referrals sent as needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Semaglutide and Tirzepatide have helped many patients see real, lasting change, and Tiffany pairs each plan with coaching and nutritional guidance built around your life.</p>
                        <p>Partnering with local compounding pharmacies keeps GLP-1 therapy more affordable and available to non-diabetic patients across the Sioux City area.</p>
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
                    <h2>Serving Sioux City and Woodbury County</h2>
                    <p>Our Iowa-licensed telehealth services reach Sioux City, Sergeant Bluff, Le Mars, Sloan, Moville, and the surrounding Woodbury County communities. Sioux City sits where the Missouri, Big Sioux, and Floyd Rivers meet near the Iowa-Nebraska-South Dakota border, close to the landmark Woodbury County Courthouse and Morningside University. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We accept most major insurance carriers, with details listed below.</p>
                    <ul>
                        <li><strong>Iowa-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Iowa license and treats Iowa residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Sioux City area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Sioux City pharmacy immediately.</li>
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
                    <h3>Can patients from smaller Woodbury County towns use telehealth psychiatric care?</h3>
                    <p>Yes. Patients in Sergeant Bluff, Le Mars, Sloan, Moville, and greater Sioux City can see Tiffany by secure video, which helps since many smaller communities in the region have limited local access to psychiatric providers.</p>
                    <h3>Where can I have labs drawn for a virtual primary care visit?</h3>
                    <p>Labs can typically be drawn at UnityPoint Health&ndash;St. Luke's or another lab convenient to you, with results reviewed and referrals sent during your telehealth follow-up.</p>
                    <h3>Is weight-loss treatment with GLP-1 medications available in Sioux City?</h3>
                    <p>Yes. Iowa has one of the higher adult obesity rates in the country, and Tiffany's local compounding pharmacy partnerships help make Semaglutide and Tirzepatide more affordable, including for patients who are not diabetic.</p>
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
