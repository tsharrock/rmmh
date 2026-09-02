@extends('layout')

@section('title', 'Telehealth Davenport | Online Mental Health & Psychiatry in IA | Redmond MMH')
@section('description', 'Iowa-licensed psychiatric care, family medicine, and weight loss treatment for Davenport and the Quad Cities via secure telehealth.')
@section('keywords', 'Telehealth Davenport, Online Psychiatrist Davenport IA, Mental Health Scott County, Telehealth Iowa, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Davenport Telehealth",
    "description": "Iowa-licensed online psychiatry, primary care, and weight loss services for Davenport and the Quad Cities through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/iowa/davenport",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Davenport",
        "addressRegion": "IA"
    },
    "areaServed": {
        "@type": "City",
        "name": "Davenport, IA"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 41.5236,
            "longitude": -90.5776
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
            "name": "Do I need to live directly in Davenport to use these services?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Tiffany is licensed throughout Iowa, so patients throughout the Quad Cities — including Bettendorf, Eldridge, LeClaire, and Blue Grass — can schedule the same telehealth visit."
            }
        },
        {
            "@type": "Question",
            "name": "Can I still use a Quad Cities hospital for labs and referrals?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. We can order labs at a hospital or lab near you, including Genesis Health System locations, and send referrals to specialists in the Quad Cities when your care calls for it."
            }
        },
        {
            "@type": "Question",
            "name": "I'm looking for a psychiatric provider with a shorter wait than what's available locally — can telehealth help?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Many patients around the Quad Cities have told us how hard it is to find a psychiatric appointment quickly. Tiffany typically sees patients the same day or next, without the long wait common at many local practices."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero davenport hero-ia-3 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Davenport</h1>
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
                    <h2>Accessible Care for Davenport, IA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Finding an experienced psychiatric provider who can see you soon is a real challenge in much of eastern Iowa, and many communities around the Quad Cities have limited local access to psychiatric care. Tiffany is easy to schedule with and typically sees patients the same day or next.</p>
                        <p>Tiffany is licensed in Iowa and brings over 30 years of psychiatric experience to conditions including ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation, and addiction, all from wherever you are in Davenport or the surrounding Quad Cities.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>We diagnose and manage chronic medical issues such as high blood pressure, diabetes, hormonal imbalances (including menopausal therapy and low testosterone), erectile issues, PCOS and thyroid conditions.</p>
                        <p>Acute concerns don't wait for office hours either, so flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, injuries and acute pain are all handled the same way.</p>
                        <p>When labs are needed, we can order them drawn at a hospital or lab near you, including facilities in the Genesis Health System network that serves the Quad Cities, then review results and send specialty referrals if needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany has seen real success guiding patients through GLP-1 therapy, and she can help you get started too. Weight-management plans are built around Semaglutide and Tirzepatide, paired with coaching and nutritional guidance, all from home.</p>
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
                    <h2>Serving Davenport and the Quad Cities</h2>
                    <p>Our Iowa-licensed telehealth services reach Davenport, Bettendorf, Eldridge, LeClaire, Blue Grass, and the surrounding Quad Cities communities. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We're in-network with Blue Cross Blue Shield through the BlueCard program and with Curative Health Plan, and we accept most major insurance plans. Davenport anchors the Iowa side of the Quad Cities along the Mississippi River and is home to Genesis Health System, the region's largest local hospital network and employer.</p>
                    <ul>
                        <li><strong>Iowa-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Iowa license and treats Iowa residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Davenport area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Davenport pharmacy immediately.</li>
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
                    <h3>Do I need to live directly in Davenport to use these services?</h3>
                    <p>No. Tiffany is licensed throughout Iowa, so patients throughout the Quad Cities &mdash; including Bettendorf, Eldridge, LeClaire, and Blue Grass &mdash; can schedule the same telehealth visit.</p>
                    <h3>Can I still use a Quad Cities hospital for labs and referrals?</h3>
                    <p>Yes. We can order labs at a hospital or lab near you, including Genesis Health System locations, and send referrals to specialists in the Quad Cities when your care calls for it.</p>
                    <h3>I'm looking for a psychiatric provider with a shorter wait than what's available locally &mdash; can telehealth help?</h3>
                    <p>Yes. Many patients around the Quad Cities have told us how hard it is to find a psychiatric appointment quickly. Tiffany typically sees patients the same day or next, without the long wait common at many local practices.</p>
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
