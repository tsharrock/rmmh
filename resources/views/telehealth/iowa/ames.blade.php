@extends('layout')

@section('title', 'Telehealth Ames | Online Mental Health & Psychiatry in IA | Redmond MMH')
@section('description', 'Iowa-licensed psychiatric care, family medicine, and weight loss treatment for Ames and Story County via secure telehealth.')
@section('keywords', 'Telehealth Ames, Online Psychiatrist Ames IA, Mental Health Story County, Telehealth Iowa, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Ames Telehealth",
    "description": "Iowa-licensed online psychiatry, primary care, and weight loss services for Ames and Story County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/iowa/ames",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Ames",
        "addressRegion": "IA"
    },
    "areaServed": {
        "@type": "City",
        "name": "Ames, IA"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 42.0308,
            "longitude": -93.6319
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
            "name": "Do you work around Iowa State University's academic calendar?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Whether you're a student, faculty member, or staff at Iowa State University, telehealth visits fit around finals weeks, lab schedules, and academic-year moves in and out of Ames without requiring an in-person office visit."
            }
        },
        {
            "@type": "Question",
            "name": "I live outside Ames in a smaller Story County town. Can I still get psychiatric care?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Many smaller communities in Story County and the surrounding region have limited local access to psychiatric providers, and telehealth lets you see Tiffany from home no matter how far you are from Ames."
            }
        },
        {
            "@type": "Question",
            "name": "Can I get labs drawn locally if I'm an Ames patient?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. We can order labs to be drawn at Mary Greeley Medical Center or another lab near you in the Ames area, and Tiffany will review the results with you at your next visit."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero ames hero-ia-5 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Ames</h1>
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
                    <h2>Accessible Care for Ames, IA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Between Iowa State University's demanding academic calendar and the pace of life across Story County, finding a psychiatric provider in Ames who has real openings can be a challenge.  Tiffany typically sees patients the same day or next, so care fits your schedule instead of the other way around.</p>
                        <p>Tiffany holds an active Iowa license and brings over 30 years of psychiatric experience to conditions including ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions.  Every visit happens from wherever you're most comfortable, whether that's a dorm room, farmhouse, or home office.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>From managing high blood pressure and diabetes to hormonal imbalances (including menopausal therapy and low testosterone), erectile issues, PCOS and thyroid conditions, we handle the chronic issues that keep Story County residents coming back year after year.</p>
                        <p>Central Iowa's farm country brings its own seasonal challenges, from corn and soybean pollen allergies to acute concerns like the flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, injuries and acute pain.</p>
                        <p>We can easily order labs to be drawn at Mary Greeley Medical Center or another lab near you, review the results, and send specialty referrals if needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Iowa consistently ranks among the higher-obesity states in the country, and Tiffany has seen firsthand how much GLP-1 therapy can change that trajectory for Ames-area patients.  Our individualized programs, built around Semaglutide and Tirzepatide, pair the medication with coaching and nutritional guidance from home.  Working with local compounding pharmacies keeps these treatments accessible to non-diabetics and more affordable than ever.</p>
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
                    <h2>Serving Ames and Story County</h2>
                    <p>Our Iowa-licensed telehealth services reach Ames, Nevada, Gilbert, Huxley, Story City, and the surrounding Story County communities. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  Most major insurance plans are accepted; our in-network providers are listed below.</p>
                    <p>From the South Skunk River corridor running through campus town to the farmland surrounding Iowa State University, Ames anchors a region served locally by Mary Greeley Medical Center, one of Story County's largest employers — and our telehealth visits complement the care you already receive there.</p>
                    <ul>
                        <li><strong>Iowa-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Iowa license and treats Iowa residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Ames area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Ames pharmacy immediately.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="divider-line"></div>
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Local FAQ</h2>
                    <h3>Do you work around Iowa State University's academic calendar?</h3>
                    <p>Yes. Whether you're a student, faculty member, or staff at Iowa State University, telehealth visits fit around finals weeks, lab schedules, and academic-year moves in and out of Ames without requiring an in-person office visit.</p>
                    <h3>I live outside Ames in a smaller Story County town. Can I still get psychiatric care?</h3>
                    <p>Yes. Many smaller communities in Story County and the surrounding region have limited local access to psychiatric providers, and telehealth lets you see Tiffany from home no matter how far you are from Ames.</p>
                    <h3>Can I get labs drawn locally if I'm an Ames patient?</h3>
                    <p>Yes. We can order labs to be drawn at Mary Greeley Medical Center or another lab near you in the Ames area, and Tiffany will review the results with you at your next visit.</p>
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
