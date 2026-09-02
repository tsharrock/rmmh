@extends('layout')

@section('title', 'Telehealth Mason City | Online Mental Health & Psychiatry in IA | Redmond MMH')
@section('description', 'Iowa-licensed psychiatric care, family medicine, and weight loss treatment for Mason City and North Central Iowa via secure telehealth.')
@section('keywords', 'Telehealth Mason City, Online Psychiatrist Mason City IA, Mental Health Cerro Gordo County, Telehealth Iowa, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Mason City Telehealth",
    "description": "Iowa-licensed online psychiatry, primary care, and weight loss services for Mason City and North Central Iowa through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/iowa/mason-city",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Mason City",
        "addressRegion": "IA"
    },
    "areaServed": {
        "@type": "City",
        "name": "Mason City, IA"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 43.1536,
            "longitude": -93.201
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
            "name": "Can patients throughout Cerro Gordo County use telehealth for psychiatric care?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Residents of Mason City, Clear Lake, Charles City, Nora Springs, Rockwell, and the wider north central Iowa region can see Tiffany by secure video — helpful in a part of the state where many rural communities have limited local access to psychiatric providers."
            }
        },
        {
            "@type": "Question",
            "name": "Do I need to travel to see a doctor for lab work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Labs can typically be drawn at MercyOne North Iowa Medical Center or another lab near you, with results and any specialty referrals handled during your telehealth follow-up."
            }
        },
        {
            "@type": "Question",
            "name": "Is GLP-1 weight-loss treatment available to Mason City patients?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Iowa has one of the higher adult obesity rates in the country, and Tiffany's use of local compounding pharmacies helps keep Semaglutide and Tirzepatide accessible and affordable, including for patients who aren't diabetic."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero mason-city hero-ia-2 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Mason City</h1>
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
                    <h2>Accessible Care for Mason City, IA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Rural stretches of north central Iowa often mean a long drive &mdash; or a long wait &mdash; to see a psychiatric provider in person. Tiffany typically has same-day or next-day openings, so Mason City-area patients aren't left waiting weeks just to get started.</p>
                        <p>With more than 30 years of psychiatric experience and an active Iowa license, she treats ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation, and addiction, all through a secure video visit.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Chronic conditions such as high blood pressure, diabetes, thyroid disease, PCOS, and hormonal changes &mdash; including menopause and low testosterone &mdash; are monitored and adjusted over time, just as they would be at an in-person clinic.</p>
                        <p>Acute concerns are also welcome: flu symptoms, rashes, urinary or sexually transmitted infections, eye issues, minor injuries, and acute pain can all be evaluated by video.</p>
                        <p>Labs can be ordered at MercyOne North Iowa Medical Center or another lab convenient to you, with results reviewed and any needed specialty referrals sent directly.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Semaglutide and Tirzepatide have given many patients real, sustainable success, and Tiffany builds each plan around your goals with ongoing coaching and nutritional guidance.</p>
                        <p>By partnering with local compounding pharmacies, these GLP-1 medications stay within reach &mdash; including for non-diabetic patients &mdash; at a more affordable price point than many Mason City-area patients expect.</p>
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
                    <h2>Serving Mason City and North Central Iowa</h2>
                    <p>Our Iowa-licensed telehealth services reach Mason City, Clear Lake, Charles City, Nora Springs, Rockwell, and the surrounding communities of north central Iowa. Mason City's Historic Park Inn Hotel and Stockman House &mdash; designed by Frank Lloyd Wright &mdash; anchor a downtown that helped inspire native son Meredith Willson's nickname for the city, "River City." Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We're in-network with Blue Cross Blue Shield through the BlueCard program and with Curative Health Plan, and we accept most major insurance plans.</p>
                    <ul>
                        <li><strong>Iowa-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Iowa license and treats Iowa residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Mason City area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Mason City pharmacy immediately.</li>
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
                    <h3>Can patients throughout Cerro Gordo County use telehealth for psychiatric care?</h3>
                    <p>Yes. Residents of Mason City, Clear Lake, Charles City, Nora Springs, Rockwell, and the wider north central Iowa region can see Tiffany by secure video &mdash; helpful in a part of the state where many rural communities have limited local access to psychiatric providers.</p>
                    <h3>Do I need to travel to see a doctor for lab work?</h3>
                    <p>No. Labs can typically be drawn at MercyOne North Iowa Medical Center or another lab near you, with results and any specialty referrals handled during your telehealth follow-up.</p>
                    <h3>Is GLP-1 weight-loss treatment available to Mason City patients?</h3>
                    <p>Yes. Iowa has one of the higher adult obesity rates in the country, and Tiffany's use of local compounding pharmacies helps keep Semaglutide and Tirzepatide accessible and affordable, including for patients who aren't diabetic.</p>
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
