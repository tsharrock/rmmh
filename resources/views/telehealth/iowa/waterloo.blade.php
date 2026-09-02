@extends('layout')

@section('title', 'Telehealth Waterloo | Online Mental Health & Psychiatry in IA | Redmond MMH')
@section('description', 'Iowa-licensed psychiatric care, family medicine, and weight loss treatment for Waterloo and the Cedar Valley via secure telehealth.')
@section('keywords', 'Telehealth Waterloo, Online Psychiatrist Waterloo IA, Mental Health Black Hawk County, Telehealth Iowa, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Waterloo Telehealth",
    "description": "Iowa-licensed online psychiatry, primary care, and weight loss services for Waterloo and the Cedar Valley through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/iowa/waterloo",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Waterloo",
        "addressRegion": "IA"
    },
    "areaServed": {
        "@type": "City",
        "name": "Waterloo, IA"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 42.4928,
            "longitude": -92.3426
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
            "name": "Is telehealth psychiatric care available throughout the Cedar Valley?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Patients in Waterloo, Cedar Falls, Evansdale, Elk Run Heights, Hudson, and the surrounding Cedar Valley can see Tiffany by secure video, which helps in a region where many smaller communities have limited local access to psychiatric providers."
            }
        },
        {
            "@type": "Question",
            "name": "Where can I get labs drawn for a virtual primary care visit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Labs can typically be drawn at UnityPoint Health – Allen Hospital or another local lab, with results reviewed and any referrals sent during your telehealth follow-up."
            }
        },
        {
            "@type": "Question",
            "name": "Are GLP-1 weight-loss medications available to Waterloo-area patients?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Iowa has one of the higher adult obesity rates in the country, and Tiffany's local compounding pharmacy partnerships help keep Semaglutide and Tirzepatide more affordable, including for patients who are not diabetic."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero waterloo hero-ia-5 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Waterloo</h1>
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
                    <h2>Accessible Care for Waterloo, IA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Even with two hospital systems in town, psychiatric appointments in the Cedar Valley can book out for weeks. Tiffany typically sees new patients same-day or next-day, so getting started doesn't mean months of waiting.</p>
                        <p>Licensed in Iowa with more than 30 years of psychiatric experience, she treats ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation, and addiction &mdash; all from a secure video visit at home.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Chronic conditions such as high blood pressure, diabetes, thyroid disorders, PCOS, and hormonal changes &mdash; including menopause and low testosterone &mdash; are managed with the same ongoing attention as an in-person practice.</p>
                        <p>Acute concerns are welcome too: flu, rashes, urinary or sexually transmitted infections, eye problems, injuries, and acute pain can all be evaluated by video.</p>
                        <p>Labs can be drawn at UnityPoint Health &ndash; Allen Hospital or another lab near you, with results reviewed and specialty referrals sent as needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Semaglutide and Tirzepatide have delivered real, lasting results for many patients, and Tiffany builds each plan around individualized coaching and nutrition guidance.</p>
                        <p>Local compounding pharmacy partnerships keep GLP-1 therapy more affordable and available to non-diabetic patients throughout the Cedar Valley.</p>
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
                    <h2>Serving Waterloo and the Cedar Valley</h2>
                    <p>Our Iowa-licensed telehealth services reach Waterloo, Cedar Falls, Evansdale, Elk Run Heights, Hudson, and the surrounding Cedar Valley communities. Waterloo sits along the Cedar River next to Cedar Falls, home to the University of Northern Iowa, and has long been anchored by major employers like John Deere Waterloo Works. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We're in-network with Blue Cross Blue Shield through the BlueCard program and with Curative Health Plan, and we accept most major insurance plans.</p>
                    <ul>
                        <li><strong>Iowa-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Iowa license and treats Iowa residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Waterloo area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Waterloo pharmacy immediately.</li>
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
                    <h3>Is telehealth psychiatric care available throughout the Cedar Valley?</h3>
                    <p>Yes. Patients in Waterloo, Cedar Falls, Evansdale, Elk Run Heights, Hudson, and the surrounding Cedar Valley can see Tiffany by secure video, which helps in a region where many smaller communities have limited local access to psychiatric providers.</p>
                    <h3>Where can I get labs drawn for a virtual primary care visit?</h3>
                    <p>Labs can typically be drawn at UnityPoint Health &ndash; Allen Hospital or another local lab, with results reviewed and any referrals sent during your telehealth follow-up.</p>
                    <h3>Are GLP-1 weight-loss medications available to Waterloo-area patients?</h3>
                    <p>Yes. Iowa has one of the higher adult obesity rates in the country, and Tiffany's local compounding pharmacy partnerships help keep Semaglutide and Tirzepatide more affordable, including for patients who are not diabetic.</p>
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
