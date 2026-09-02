@extends('layout')

@section('title', 'Telehealth Hamilton | Online Mental Health & Psychiatry in MT | Redmond MMH')
@section('description', 'Montana-licensed psychiatric care, family medicine, and weight loss treatment for Hamilton and the Bitterroot Valley via secure telehealth.')
@section('keywords', 'Telehealth Hamilton, Online Psychiatrist Hamilton MT, Mental Health Ravalli County, Telehealth Montana, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Hamilton Telehealth",
    "description": "Montana-licensed online psychiatry, primary care, and weight loss services for Hamilton and the Bitterroot Valley through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/montana/hamilton",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Hamilton",
        "addressRegion": "MT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Hamilton, MT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 46.2467,
            "longitude": -114.1601
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
            "name": "Is it hard to find a psychiatric provider in the Bitterroot Valley?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Many communities in Ravalli County have limited local access to psychiatric care, which often means a long drive to Missoula. Telehealth lets you see Tiffany from home instead."
            }
        },
        {
            "@type": "Question",
            "name": "Can I get labs drawn locally in Hamilton?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. We can order labs to be drawn at Bitterroot Health-Daly Hospital or another Ravalli County facility and review the results with you remotely."
            }
        },
        {
            "@type": "Question",
            "name": "Do you treat injuries from ranch work or outdoor recreation in the Bitterroot Mountains?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, acute injuries and pain from ranch work, hiking, hunting or other outdoor activity in the Bitterroot and Sapphire Mountains are a common reason patients schedule a virtual primary care visit."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero hamilton hero-mt-2 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Hamilton</h1>
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
                    <h2>Accessible Care for Hamilton, MT</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Ravalli County's Bitterroot Valley is beautiful, but it's also rural, and many residents make the drive north to Missoula just to see a psychiatric provider. Tiffany's telehealth visits close that gap, with same-day or next-day scheduling available right from home.</p>
                        <p>Licensed in Montana with more than 30 years of psychiatric experience, Tiffany treats ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions — no trip over the valley required.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>We diagnose and manage chronic conditions like high blood pressure, diabetes, hormonal imbalances (including menopausal therapy and low testosterone), erectile issues, PCOS and thyroid disorders.</p>
                        <p>Ranch work and time spent hiking or hunting in the Bitterroot and Sapphire Mountains can also mean acute needs — the flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, injuries and acute pain are all things we treat by telehealth.</p>
                        <p>When bloodwork is needed, we can order labs through Bitterroot Health-Daly Hospital or another local facility, review results with you, and send specialty referrals if needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany has seen real success helping patients with GLP-1 medications, and she'll build a plan around yours. Our individualized weight management programs are delivered entirely by telehealth and combine Semaglutide or Tirzepatide therapy with coaching and nutritional guidance. Working with local compounding pharmacies keeps these medications accessible for non-diabetic patients and more affordable than many expect.</p>
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
                    <h2>Serving Hamilton and the Bitterroot Valley</h2>
                    <p>Our Montana-licensed telehealth services reach Hamilton, Corvallis, Stevensville, Darby, Victor, and the surrounding Bitterroot Valley communities. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We're in-network with Blue Cross Blue Shield through the BlueCard program and with Curative Health Plan, and we accept most major insurance plans. Hamilton is also home to Rocky Mountain Laboratories, a National Institutes of Health biomedical research facility, and to Bitterroot Health-Daly Hospital, the valley's critical access hospital.</p>
                    <ul>
                        <li><strong>Montana-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Montana license and treats Montana residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Hamilton area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Hamilton pharmacy immediately.</li>
                    </ol>
                </div>
            </div>
            <div class="divider-line"></div>
        </div>
    </section>
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Local FAQ</h2>
                    <h3>Is it hard to find a psychiatric provider in the Bitterroot Valley?</h3>
                    <p>Many communities in Ravalli County have limited local access to psychiatric care, which often means a long drive to Missoula. Telehealth lets you see Tiffany from home instead.</p>
                    <h3>Can I get labs drawn locally in Hamilton?</h3>
                    <p>Yes. We can order labs to be drawn at Bitterroot Health-Daly Hospital or another Ravalli County facility and review the results with you remotely.</p>
                    <h3>Do you treat injuries from ranch work or outdoor recreation in the Bitterroot Mountains?</h3>
                    <p>Yes, acute injuries and pain from ranch work, hiking, hunting or other outdoor activity in the Bitterroot and Sapphire Mountains are a common reason patients schedule a virtual primary care visit.</p>
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
