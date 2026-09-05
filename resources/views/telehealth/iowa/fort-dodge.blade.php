@extends('layout')

@section('title', 'Telehealth Fort Dodge | Online Mental Health & Psychiatry in IA | Redmond MMH')
@section('description', 'Iowa-licensed psychiatric care, family medicine, and weight loss treatment for Fort Dodge and Webster County via secure telehealth.')
@section('keywords', 'Telehealth Fort Dodge, Online Psychiatrist Fort Dodge IA, Mental Health Webster County, Telehealth Iowa, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Fort Dodge Telehealth",
    "description": "Iowa-licensed online psychiatry, primary care, and weight loss services for Fort Dodge and Webster County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/iowa/fort-dodge",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Fort Dodge",
        "addressRegion": "IA"
    },
    "areaServed": {
        "@type": "City",
        "name": "Fort Dodge, IA"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 42.4975,
            "longitude": -94.168
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
            "name": "I live on a farm outside Fort Dodge — can I still get care without driving into town?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. As long as you're in Iowa at the time of your visit, you can connect from anywhere in Webster County or the surrounding farming communities — no drive required."
            }
        },
        {
            "@type": "Question",
            "name": "Does allergy season around the corn and soybean fields affect the kind of care you provide?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We regularly help patients manage the seasonal allergy and respiratory symptoms that come with living in farming country, alongside ongoing chronic conditions like blood pressure and diabetes."
            }
        },
        {
            "@type": "Question",
            "name": "How does Redmond Medical and Mental Health help with the psychiatric provider shortage in this area?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Many communities in north central Iowa have limited local access to psychiatric care. Tiffany is licensed in Iowa and typically sees patients the same day or next, cutting down the wait common at many local practices."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero fort-dodge hero-ia-3 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Fort Dodge</h1>
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
                    <h2>Accessible Care for Fort Dodge, IA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Fort Dodge and the farming communities across Webster County have long dealt with limited local access to psychiatric care, with many patients facing long waits or long drives just to be seen. Tiffany makes scheduling simple and typically sees patients the same day or next.</p>
                        <p>Tiffany is licensed in Iowa with over 30 years of psychiatric experience treating ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation, and addiction, all without leaving home in north central Iowa.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>We diagnose and manage chronic conditions such as high blood pressure, diabetes, hormonal imbalances (including menopause and low testosterone), erectile issues, PCOS, and thyroid disorders, common concerns among farming and working families across Webster County.</p>
                        <p>We also treat acute issues such as the flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, injuries, and acute pain.</p>
                        <p>We can order labs to be drawn at a hospital or lab near you, including UnityPoint Health - Trinity Regional Medical Center, then review results and send specialty referrals if needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany has helped patients throughout Iowa succeed with GLP-1 medications, and she can help you get started too. Individualized programs built around Semaglutide and Tirzepatide, paired with coaching and nutritional guidance, are delivered from your own home.</p>
                        <p>Local compounding pharmacies keep these medications accessible for non-diabetic patients and more affordable than many people expect.</p>
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
                    <h2>Serving Fort Dodge and Webster County</h2>
                    <p>Our Iowa-licensed telehealth services reach Fort Dodge, Humboldt, Webster City, Gowrie, Eagle Grove, and the surrounding communities of north central Iowa. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  Our accepted insurance plans are detailed below, alongside most other major carriers. Long known as "The Gypsum City" for its historic gypsum and agricultural industries, Fort Dodge serves as the regional hub for north central Iowa and is home to UnityPoint Health - Trinity Regional Medical Center.</p>
                    <ul>
                        <li><strong>Iowa-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Iowa license and treats Iowa residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Fort Dodge area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Fort Dodge pharmacy immediately.</li>
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
                    <h3>I live on a farm outside Fort Dodge &mdash; can I still get care without driving into town?</h3>
                    <p>Yes. As long as you're in Iowa at the time of your visit, you can connect from anywhere in Webster County or the surrounding farming communities &mdash; no drive required.</p>
                    <h3>Does allergy season around the corn and soybean fields affect the kind of care you provide?</h3>
                    <p>We regularly help patients manage the seasonal allergy and respiratory symptoms that come with living in farming country, alongside ongoing chronic conditions like blood pressure and diabetes.</p>
                    <h3>How does Redmond Medical and Mental Health help with the psychiatric provider shortage in this area?</h3>
                    <p>Many communities in north central Iowa have limited local access to psychiatric care. Tiffany is licensed in Iowa and typically sees patients the same day or next, cutting down the wait common at many local practices.</p>
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
