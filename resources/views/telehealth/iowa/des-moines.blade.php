@extends('layout')

@section('title', 'Telehealth Des Moines | Online Mental Health & Psychiatry in IA | Redmond MMH')
@section('description', 'Iowa-licensed psychiatric care, family medicine, and weight loss treatment for Des Moines and Polk County via secure telehealth.')
@section('keywords', 'Telehealth Des Moines, Online Psychiatrist Des Moines IA, Mental Health Polk County, Telehealth Iowa, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Des Moines Telehealth",
    "description": "Iowa-licensed online psychiatry, primary care, and weight loss services for Des Moines and Polk County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/iowa/des-moines",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Des Moines",
        "addressRegion": "IA"
    },
    "areaServed": {
        "@type": "City",
        "name": "Des Moines, IA"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 41.5868,
            "longitude": -93.625
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
            "name": "I work downtown near the Capitol — can I fit a telehealth visit into a lunch break?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Visits are scheduled online and take place over a secure video link, so many Des Moines patients join from their office or home during a break in the day."
            }
        },
        {
            "@type": "Question",
            "name": "Does Redmond Medical and Mental Health serve the whole Des Moines metro, or just the city itself?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our Iowa license covers the whole state, so patients throughout the metro — West Des Moines, Ankeny, Urbandale, Altoona, and beyond — can schedule the same telehealth visit as those in Des Moines proper."
            }
        },
        {
            "@type": "Question",
            "name": "Can I have labs drawn locally before a virtual primary care visit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. We can order labs at a hospital or lab near you, including MercyOne Des Moines or UnityPoint Health facilities, and review the results together during your telehealth appointment."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero des-moines hero-ia-2 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Des Moines</h1>
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
                    <h2>Accessible Care for Des Moines, IA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Des Moines' insurance, financial services, and government workforce keeps schedules packed, and it can be hard to fit in an in-person psychiatric appointment. Tiffany makes scheduling simple and typically sees patients the same day or next.</p>
                        <p>Tiffany is licensed in Iowa with more than 30 years of psychiatric experience treating ADD/ADHD, anxiety, depression, bipolar disorder, eating disorders, smoking cessation, and addiction, delivered virtually so you never have to leave the office or home.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>We manage chronic conditions such as high blood pressure, diabetes, hormonal imbalances (including menopause and low testosterone), erectile issues, PCOS, and thyroid disorders.</p>
                        <p>Acute needs, including flu, rashes, urinary tract infections, sexually transmitted infections, eye problems, injuries, and acute pain, are handled the same way, without a trip downtown.</p>
                        <p>When you need labs, we can order them drawn at a hospital or lab near you, including MercyOne Des Moines or UnityPoint Health facilities, then review results and coordinate specialist referrals.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Tiffany has helped patients across Iowa succeed with GLP-1 therapy, and she can do the same for you. Programs are built around Semaglutide and Tirzepatide, paired with coaching and nutrition guidance, a valuable option in a state that consistently ranks among the nation's higher rates of adult obesity.</p>
                        <p>Partnering with local compounding pharmacies keeps these medications accessible for non-diabetic patients and more affordable than many expect.</p>
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
                    <h2>Serving Des Moines and Polk County</h2>
                    <p>Our Iowa-licensed telehealth services reach Des Moines, West Des Moines, Ankeny, Urbandale, Altoona, and the surrounding Polk County communities. Redmond Medical and Mental Health brings virtual psychiatric services and specialty care to patients of all ages.  We treat children as young as 4 years old, as well as adolescents, adults and geriatric patients.  We're in-network with most major insurance plans; see the accepted list below. Des Moines sits at the confluence of the Des Moines and Raccoon Rivers near the Iowa State Capitol, and is home to major employers like MercyOne Des Moines Medical Center.</p>
                    <ul>
                        <li><strong>Iowa-Licensed Provider:</strong> Tiffany Redmond, PA-C, holds an active Iowa license and treats Iowa residents directly via secure telehealth.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions are sent electronically to your preferred Des Moines area pharmacy.</li>
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
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any necessary medications are sent to your preferred Des Moines pharmacy immediately.</li>
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
                    <h3>I work downtown near the Capitol &mdash; can I fit a telehealth visit into a lunch break?</h3>
                    <p>Yes. Visits are scheduled online and take place over a secure video link, so many Des Moines patients join from their office or home during a break in the day.</p>
                    <h3>Does Redmond Medical and Mental Health serve the whole Des Moines metro, or just the city itself?</h3>
                    <p>Our Iowa license covers the whole state, so patients throughout the metro &mdash; West Des Moines, Ankeny, Urbandale, Altoona, and beyond &mdash; can schedule the same telehealth visit as those in Des Moines proper.</p>
                    <h3>Can I have labs drawn locally before a virtual primary care visit?</h3>
                    <p>Yes. We can order labs at a hospital or lab near you, including MercyOne Des Moines or UnityPoint Health facilities, and review the results together during your telehealth appointment.</p>
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
