@extends('layout')

@section('title', 'Telehealth Kalispell | Online Mental Health & Psychiatry in MT | Redmond MMH')
@section('description', 'Montana-licensed psychiatric care, family medicine, and weight loss treatment for Kalispell and the Flathead Valley via secure telehealth.')
@section('keywords', 'Telehealth Kalispell, Online Psychiatrist Kalispell MT, Mental Health Flathead County, Telehealth Montana, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Kalispell Telehealth",
    "description": "Montana-licensed online psychiatry, primary care, and weight loss services for Kalispell and the Flathead Valley through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/montana/kalispell",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Kalispell",
        "addressRegion": "MT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Kalispell, MT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 48.1958,
            "longitude": -114.3129
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
            "name": "Do you see patients who work seasonally near Glacier National Park?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, telehealth visits are available to Flathead Valley residents of all kinds, including seasonal workers connected to Glacier National Park and the local tourism industry."
            }
        },
        {
            "@type": "Question",
            "name": "Where can I get labs drawn in Kalispell?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We can order labs to be drawn at Logan Health or another local facility and review the results with you remotely."
            }
        },
        {
            "@type": "Question",
            "name": "Do you treat injuries from boating or hiking around Flathead Lake and Glacier National Park?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, acute injuries and pain from boating, hiking or other outdoor recreation around Flathead Lake and Glacier National Park are a common reason patients schedule a virtual primary care visit."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero kalispell hero-mt-3 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Kalispell</h1>
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
                    <h2>Accessible Care for Kalispell, MT</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Kalispell sits at the center of the Flathead Valley, but psychiatric providers with real availability can still be hard to find, especially during the busy summer season near Glacier National Park. Tiffany typically offers same-day or next-day telehealth visits.</p>
                        <p>Licensed in Montana with more than 30 years of psychiatric experience, Tiffany treats ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions — all without adding a drive to your week.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>We diagnose and manage chronic conditions such as high blood pressure, diabetes, hormonal imbalances (including menopausal therapy and low testosterone), erectile issues, PCOS and thyroid conditions.</p>
                        <p>We also treat acute concerns — the flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, and the injuries that come with boating on Flathead Lake or hiking in Glacier National Park.</p>
                        <p>Labs can be ordered through Logan Health or another Kalispell-area facility, with results reviewed remotely and specialty referrals sent when needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany has helped patients succeed with GLP-1 medications and can do the same for you. Our individualized weight management programs run entirely through telehealth, pairing Semaglutide or Tirzepatide therapy with coaching and nutritional guidance. Because we partner with local compounding pharmacies, these medications are within reach for non-diabetic patients and more affordable than many expect.</p>
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
                    <h2>Serving Kalispell and the Flathead Valley</h2>
                    <p>Our Montana-licensed telehealth services reach Kalispell, Whitefish, Columbia Falls, Evergreen, Bigfork, and the surrounding Flathead Valley communities. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We're in-network with Blue Cross Blue Shield through the BlueCard program and with Curative Health Plan, and we accept most major insurance plans. Kalispell is home to Logan Health, the region's largest hospital system, and serves as a gateway to both Flathead Lake and Glacier National Park.</p>
                    <ul>
                        <li><strong>Montana-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Montana license and treats Montana residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Kalispell area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Kalispell pharmacy immediately.</li>
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
                    <h3>Do you see patients who work seasonally near Glacier National Park?</h3>
                    <p>Yes, telehealth visits are available to Flathead Valley residents of all kinds, including seasonal workers connected to Glacier National Park and the local tourism industry.</p>
                    <h3>Where can I get labs drawn in Kalispell?</h3>
                    <p>We can order labs to be drawn at Logan Health or another local facility and review the results with you remotely.</p>
                    <h3>Do you treat injuries from boating or hiking around Flathead Lake and Glacier National Park?</h3>
                    <p>Yes, acute injuries and pain from boating, hiking or other outdoor recreation around Flathead Lake and Glacier National Park are a common reason patients schedule a virtual primary care visit.</p>
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
