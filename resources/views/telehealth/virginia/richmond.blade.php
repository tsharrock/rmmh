@extends('layout')

@section('title', 'Telehealth in Richmond, VA | Redmond MMH')
@section('description', 'Virginia-licensed psychiatric care, family medicine, and weight loss treatment for Richmond and the surrounding metro area via secure telehealth.')
@section('keywords', 'Telehealth Richmond, Online Psychiatrist Richmond VA, Mental Health Central Virginia, Telehealth Virginia, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Richmond Telehealth",
    "description": "Virginia-licensed online psychiatry, primary care, and weight loss services for Richmond and Central Virginia through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/virginia/richmond",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Richmond",
        "addressRegion": "VA"
    },
    "areaServed": {
        "@type": "City",
        "name": "Richmond, VA"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 37.5407,
            "longitude": -77.4360
        },
        "geoRadius": "35000"
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
            "name": "Is telehealth psychiatric care available to Richmond residents?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Tiffany Redmond, PA-C is licensed in Virginia and treats Richmond-area patients for psychiatric medication management, primary care, and weight loss by secure video visit."
            }
        },
        {
            "@type": "Question",
            "name": "Does telehealth reach the Richmond suburbs too?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Because visits happen over secure video, patients throughout Henrico, Chesterfield, and the wider Richmond metro area can be seen without a drive downtown or across town during rush hour."
            }
        },
        {
            "@type": "Question",
            "name": "Will my insurance cover a Richmond telehealth visit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We're currently credentialed with BCBS Blue Card in Virginia. Call the number on the back of your card to confirm your telemedicine benefit, or ask about our cash-pay rates."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero richmond border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Richmond</h1>
                    <p>Virginia-licensed Mental Health and medical care from the comfort of your home.</p>
                    <a class="btn rmmh_button_primary me-3" href="https://nextpatient.co/p/redmondmedical/schedule" target="_blank">Schedule Your Visit</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('telehealth') }}">Telehealth</a></li>
                <li class="breadcrumb-item active" aria-current="page">Richmond</li>
            </ol>
        </nav>
    </div>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://redmondmmh.com/" },
        { "@type": "ListItem", "position": 2, "name": "Telehealth", "item": "https://redmondmmh.com/telehealth" },
        { "@type": "ListItem", "position": 3, "name": "Richmond", "item": "https://redmondmmh.com/telehealth/virginia/richmond" }
      ]
    }
    </script>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Richmond, VA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Richmond may be Virginia's capital, but a psychiatric appointment here can still mean a months-long wait, especially if you're not already established with a large clinic. Tiffany offers a more direct path: most patients are seen the same day or next.</p>
                        <p>Licensed in Virginia with more than 30 years of experience, Tiffany treats ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions, all from a secure video visit at home.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Chronic conditions like high blood pressure, diabetes, hormonal imbalances (including menopausal therapy and low testosterone), PCOS and thyroid disorders are managed the same way they would be in an office visit, just without the drive or the parking.</p>
                        <p>Acute concerns are covered too: flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, and minor injuries. Labs can be drawn near you, results reviewed together over video, and referrals sent whenever a concern needs more than telehealth can offer.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany builds an individualized weight-management plan around GLP-1 therapy: Semaglutide or Tirzepatide, paired with coaching and nutritional guidance, all from home.</p>
                        <p>Working with local compounding pharmacies keeps these medications within reach for non-diabetics and more affordable than ever, no trip across Richmond required.</p>
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
                    <h2>Serving Richmond and the Metro Area</h2>
                    <p>Our Virginia-licensed telehealth services reach Richmond, Henrico, Chesterfield, Midlothian, Short Pump, and the surrounding Central Virginia communities. Set on the James River and home to Virginia Commonwealth University and the state capitol, Richmond's growth hasn't always come with matching growth in psychiatric appointment availability. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages. We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients. We're in-network with the insurance plan listed below.</p>
                    <ul>
                        <li><strong>Virginia-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Virginia license and treats Virginia residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Richmond area pharmacy.</li>
                        <li><strong>Integrated Care:</strong> Address both your physical and mental health needs in one convenient appointment. Scheduling is easy and most patients can be seen the same day or next. We allow you to save time and save copays.</li>
                    </ul>

                    <h3>Accepted Insurance Plans</h3>
                    <ul>
                        <li>BCBS Blue Card</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Richmond pharmacy immediately.</li>
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
                    <h3>Is telehealth psychiatric care available to Richmond residents?</h3>
                    <p>Yes. Tiffany Redmond, PA-C is licensed in Virginia and treats Richmond-area patients for psychiatric medication management, primary care, and weight loss by secure video visit.</p>
                    <h3>Does telehealth reach the Richmond suburbs too?</h3>
                    <p>Yes. Because visits happen over secure video, patients throughout Henrico, Chesterfield, and the wider Richmond metro area can be seen without a drive downtown or across town during rush hour.</p>
                    <h3>Will my insurance cover a Richmond telehealth visit?</h3>
                    <p>We're currently credentialed with BCBS Blue Card in Virginia. Call the number on the back of your card to confirm your telemedicine benefit, or ask about our cash-pay rates.</p>
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
                    <p>Tiffany is licensed to see patients in Virginia and is currently accepting new patients for telehealth services. Whether you are seeking mental health support or a new primary care home, she is ready to partner with you on your journey.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
