@extends('layout')

@section('title', 'Telehealth Cedar Rapids | Online Mental Health & Psychiatry in IA | Redmond MMH')
@section('description', 'Iowa-licensed psychiatric care, family medicine, and weight loss treatment for Cedar Rapids and Linn County via secure telehealth.')
@section('keywords', 'Telehealth Cedar Rapids, Online Psychiatrist Cedar Rapids IA, Mental Health Linn County, Telehealth Iowa, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Cedar Rapids Telehealth",
    "description": "Iowa-licensed online psychiatry, primary care, and weight loss services for Cedar Rapids and Linn County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/iowa/cedar-rapids",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Cedar Rapids",
        "addressRegion": "IA"
    },
    "areaServed": {
        "@type": "City",
        "name": "Cedar Rapids, IA"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 41.9779,
            "longitude": -91.6656
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
            "name": "Cedar Rapids already has hospitals like St. Luke's and Mercy. Do you replace my existing doctor?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, we complement the care you already receive. We can order labs to be drawn locally, review results with you, and send specialty referrals to Cedar Rapids providers when needed."
            }
        },
        {
            "@type": "Question",
            "name": "I work rotating shifts at one of Cedar Rapids's food-processing or manufacturing plants. Can I schedule around that?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Telehealth visits are typically available the same day or next, and appointments can be scheduled around non-traditional shift work common to Cedar Rapids's manufacturing and food-processing employers."
            }
        },
        {
            "@type": "Question",
            "name": "Do you see patients throughout Linn County, not just inside Cedar Rapids?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Our Iowa-licensed telehealth services reach Cedar Rapids, Marion, Hiawatha, Robins, Fairfax, and the surrounding Linn County communities."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero cedar-rapids hero-ia-5 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Cedar Rapids</h1>
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
                    <h2>Accessible Care for Cedar Rapids, IA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Even in a city the size of Cedar Rapids, psychiatric providers with real openings can be hard to find.  Tiffany is easy to schedule with and can typically see patients the same day or next, whether you're near downtown or out toward Marion.</p>
                        <p>Tiffany holds an active Iowa license and brings over 30 years of psychiatric experience to conditions including ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions.  Get all of your mental health concerns addressed from the comfort of home.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>We diagnose and manage chronic medical issues such as high blood pressure, diabetes, hormonal imbalances (including menopausal therapy and low testosterone), erectile issues, PCOS and thyroid conditions for patients across Linn County.</p>
                        <p>We can also address acute concerns such as the flu, rashes or urinary tract infections, sexually transmitted infections, eye problems, injuries and acute pain — including the kind of on-the-job strains and repetitive injuries common among Cedar Rapids's manufacturing and food-processing workforce.</p>
                        <p>We can easily order labs to be drawn at UnityPoint Health-St. Luke's Hospital, Mercy Medical Center, or another lab near you, review the results, and send specialty referrals if needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Iowa consistently ranks among the higher-obesity states in the country, and Tiffany has seen firsthand how much GLP-1 therapy can change that trajectory for patients throughout Cedar Rapids and Linn County.  Our individualized programs, built around Semaglutide and Tirzepatide, pair the medication with coaching and nutritional guidance from home.  Working with local compounding pharmacies keeps these treatments accessible to non-diabetics and more affordable than ever.</p>
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
                    <h2>Serving Cedar Rapids and Linn County</h2>
                    <p>Our Iowa-licensed telehealth services reach Cedar Rapids, Marion, Hiawatha, Robins, Fairfax, and the surrounding Linn County communities. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  Our current in-network insurance providers are listed below.</p>
                    <p>Known as the "City of Five Seasons" and home to the world's largest cereal plant along the Cedar River, Cedar Rapids is served locally by UnityPoint Health-St. Luke's Hospital and Mercy Medical Center — and our telehealth visits complement the care you already receive there.</p>
                    <ul>
                        <li><strong>Iowa-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Iowa license and treats Iowa residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Cedar Rapids area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Cedar Rapids pharmacy immediately.</li>
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
                    <h3>Cedar Rapids already has hospitals like St. Luke's and Mercy. Do you replace my existing doctor?</h3>
                    <p>No, we complement the care you already receive. We can order labs to be drawn locally, review results with you, and send specialty referrals to Cedar Rapids providers when needed.</p>
                    <h3>I work rotating shifts at one of Cedar Rapids's food-processing or manufacturing plants. Can I schedule around that?</h3>
                    <p>Yes. Telehealth visits are typically available the same day or next, and appointments can be scheduled around non-traditional shift work common to Cedar Rapids's manufacturing and food-processing employers.</p>
                    <h3>Do you see patients throughout Linn County, not just inside Cedar Rapids?</h3>
                    <p>Yes. Our Iowa-licensed telehealth services reach Cedar Rapids, Marion, Hiawatha, Robins, Fairfax, and the surrounding Linn County communities.</p>
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
