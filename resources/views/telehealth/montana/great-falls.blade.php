@extends('layout')

@section('title', 'Telehealth Great Falls | Online Mental Health & Psychiatry in MT | Redmond MMH')
@section('description', 'Montana-licensed psychiatric care, family medicine, and weight loss treatment for Great Falls and Cascade County via secure telehealth.')
@section('keywords', 'Telehealth Great Falls, Online Psychiatrist Great Falls MT, Mental Health Cascade County, Telehealth Montana, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Great Falls Telehealth",
    "description": "Montana-licensed online psychiatry, primary care, and weight loss services for Great Falls and Cascade County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/montana/great-falls",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Great Falls",
        "addressRegion": "MT"
    },
    "areaServed": {
        "@type": "City",
        "name": "Great Falls, MT"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 47.5053,
            "longitude": -111.3008
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
            "name": "Do you see patients connected to Malmstrom Air Force Base?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Our telehealth visits are open to Great Falls-area residents of all backgrounds, including active-duty service members' families and civilians who work at Malmstrom Air Force Base."
            }
        },
        {
            "@type": "Question",
            "name": "Where can I get labs drawn if my visit requires bloodwork?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We can order labs to be drawn at Benefis Health System or another Great Falls-area facility, then review the results with you by telehealth."
            }
        },
        {
            "@type": "Question",
            "name": "Can telehealth help with seasonal mood changes during Montana winters?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Many patients notice their mood shifts as Great Falls' long, dark winters set in. Regular telehealth visits make it easier to stay on top of psychiatric care without having to travel on icy roads."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero great-falls hero-mt-4 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Great Falls</h1>
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
                    <h2>Accessible Care for Great Falls, MT</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Between Malmstrom Air Force Base families, shift workers, and residents scattered across Cascade County's rolling plains, many Great Falls patients tell us it's hard to find a psychiatric provider with real openings. Tiffany typically offers same-day or next-day telehealth visits, so getting started doesn't mean months on a waitlist.</p>
                        <p>Licensed in Montana with more than 30 years of psychiatric experience, Tiffany treats ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation and addictions. Long Montana winters can take a toll on mood, and telehealth means you never have to brave icy roads to keep an appointment.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>From high blood pressure and diabetes to hormonal imbalances, menopausal therapy, low testosterone, erectile issues, PCOS and thyroid conditions, we manage the chronic issues Great Falls patients live with day to day.</p>
                        <p>Acute concerns don't wait for office hours, either — we treat the flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, injuries and acute pain over telehealth.</p>
                        <p>Need bloodwork? We can order labs to be drawn at Benefis Health System or another Great Falls-area facility, review the results with you, and send specialty referrals when needed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany has helped patients succeed with GLP-1 medications, and she can build a plan around your goals, too. Our individualized weight management programs, delivered entirely by telehealth, combine Semaglutide or Tirzepatide therapy with ongoing coaching and nutritional guidance. Because we work with local compounding pharmacies, these medications are within reach for non-diabetic patients and more affordable than many expect.</p>
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
                    <h2>Serving Great Falls and Cascade County</h2>
                    <p>Our Montana-licensed telehealth services reach Great Falls, Black Eagle, Belt, Cascade, Vaughn, and the surrounding Cascade County communities. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We accept most major insurance plans; our current list of in-network providers is below. Great Falls is also home to Benefis Health System, the region's largest hospital network, and to Malmstrom Air Force Base, giving the community deep ties to both healthcare and military families.</p>
                    <ul>
                        <li><strong>Montana-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Montana license and treats Montana residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Great Falls area pharmacy.</li>
                        <li><strong>Integrated Care:</strong> Address both your physical and mental health needs in one convenient appointment.  Scheduling is easy and most patients can be seen the same day or next.  We allow you to save time and save copays.</li>
                    </ul>

                    <h3>Accepted Insurance Plans</h3>
                    <ul>
                        <li>BCBS Blue Card</li>
                        <li>Moutain Health CO-OP</li>
                        <li>Curative Health</li>
                        <li>Allegiance Benefit Management Plan</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Great Falls pharmacy immediately.</li>
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
                    <h3>Do you see patients connected to Malmstrom Air Force Base?</h3>
                    <p>Yes. Our telehealth visits are open to Great Falls-area residents of all backgrounds, including active-duty service members' families and civilians who work at Malmstrom Air Force Base.</p>
                    <h3>Where can I get labs drawn if my visit requires bloodwork?</h3>
                    <p>We can order labs to be drawn at Benefis Health System or another Great Falls-area facility, then review the results with you by telehealth.</p>
                    <h3>Can telehealth help with seasonal mood changes during Montana winters?</h3>
                    <p>Many patients notice their mood shifts as Great Falls' long, dark winters set in. Regular telehealth visits make it easier to stay on top of psychiatric care without having to travel on icy roads.</p>
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
