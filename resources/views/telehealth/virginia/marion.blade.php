@extends('layout')

@section('title', 'Telehealth in Marion, VA | Redmond MMH')
@section('description', 'No more long drives for care. Redmond MMH provides Virginia-licensed psychiatric care, family medicine, and weight-loss treatment to Marion and Smyth County.')
@section('keywords', 'Telehealth Marion, Online Psychiatrist Smyth County VA, Mental Health Rural Virginia, Telehealth Virginia, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Redmond Medical & Mental Health - Marion Telehealth",
    "description": "Virginia-licensed online psychiatry, primary care, and weight loss services for Marion and Smyth County through secure telehealth.",
    "url": "https://redmondmmh.com/telehealth/virginia/marion",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Marion",
        "addressRegion": "VA"
    },
    "areaServed": {
        "@type": "City",
        "name": "Marion, VA"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": 36.8351,
            "longitude": -81.5145
        },
        "geoRadius": "40000"
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
            "name": "Is telehealth psychiatric care available to Marion residents?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Tiffany Redmond, PA-C is licensed in Virginia and treats Marion and Smyth County patients for psychiatric medication management, primary care, and weight loss by secure video visit."
            }
        },
        {
            "@type": "Question",
            "name": "How soon can I get an appointment in Marion?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Rural southwest Virginia usually means a long wait or a long drive for psychiatric care. We typically offer new telehealth patients a visit within a few days &mdash; often the same day or the next."
            }
        },
        {
            "@type": "Question",
            "name": "Do I ever need to come into an office?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Psychiatric, primary care, and weight-loss visits happen entirely by video. Only hands-on services like Ketamine therapy and IV nutrition are done in person at our Hyde Park, UT clinic."
            }
        }
    ]
}
</script>
@endsection

@section('content')
    <div class="hero marion hero-va-2 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Marion</h1>
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
                <li class="breadcrumb-item active" aria-current="page">Marion</li>
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
        { "@type": "ListItem", "position": 3, "name": "Marion", "item": "https://redmondmmh.com/telehealth/virginia/marion" }
      ]
    }
    </script>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Marion, VA</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Finding an experienced psychiatric provider in Smyth County can mean a long waitlist or a long drive toward Bristol or Wytheville. Tiffany is easy to schedule with and often sees new patients the same day or next.</p>
                        <p>She is licensed in Virginia with more than 30 years in psychiatry, treating ADHD, anxiety, depression, bipolar disorder, eating disorders, addiction, and smoking cessation &mdash; every concern handled from the comfort of home.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>We diagnose and manage the chronic conditions that shouldn't require a trip out of Smyth County &mdash; high blood pressure, diabetes, thyroid disease, PCOS, and hormone concerns including menopause and low testosterone.</p>
                        <p>Acute problems like infections, rashes, UTIs, and minor injuries are handled by video too, with labs ordered near you and referrals sent wherever you need them.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Our individualized weight-management programs bring GLP-1 therapy &mdash; Semaglutide and Tirzepatide &mdash; to Marion without a single trip to a big-city clinic. Coaching and nutrition guidance are built in.</p>
                        <p>Working with local compounding pharmacies keeps these medications more affordable and finally within reach, even for non-diabetic patients.</p>
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
                    <h2>Serving Marion and Smyth County</h2>
                    <p>Our telehealth services reach Marion and the surrounding communities of Chilhowie, Saltville, and Sugar Grove across Smyth County. Set along the Middle Fork Holston River near Hungry Mother State Park and the Iron Mountains, Marion anchors a mountainous, largely rural stretch of I-81 where reaching a specialist has always meant a long drive. Redmond Medical and Mental Health brings psychiatric care, primary care, and weight-loss treatment to patients of every age &mdash; we see children as young as 4, as well as adolescents, adults, and seniors.</p>
                    <ul>
                        <li><strong>Virginia-Licensed Provider:</strong> Tiffany Redmond, PA-C holds an active Virginia license and treats Marion residents directly by secure video.</li>
                        <li><strong>Local Pharmacy Partnerships:</strong> Prescriptions go electronically to the Marion-area pharmacy you already use.</li>
                        <li><strong>Integrated Care:</strong> Cover physical and mental health in one visit &mdash; same-day or next-day scheduling saves you both time and copays.</li>
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
                        <li><strong>Book Online:</strong> Choose a "Telehealth" appointment in our secure portal.</li>
                        <li><strong>Secure Connection:</strong> A HIPAA-compliant video link arrives by email or text.</li>
                        <li><strong>The Visit:</strong> Meet with Tiffany Redmond, PA-C to talk through your goals and treatment plan from home.</li>
                        <li><strong>Prescriptions &amp; Follow-up:</strong> Any medications are sent to your Marion pharmacy right away.</li>
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
                    <h3>Is telehealth psychiatric care available to Marion residents?</h3>
                    <p>Yes. Tiffany Redmond, PA-C is licensed in Virginia and treats Marion and Smyth County patients for psychiatric medication management, primary care, and weight loss by secure video visit.</p>
                    <h3>How soon can I get an appointment in Marion?</h3>
                    <p>Rural southwest Virginia usually means a long wait or a long drive for psychiatric care. We typically offer new telehealth patients a visit within a few days &mdash; often the same day or the next.</p>
                    <h3>Do I ever need to come into an office?</h3>
                    <p>No. Psychiatric, primary care, and weight-loss visits happen entirely by video. Only hands-on services like Ketamine therapy and IV nutrition are done in person at our Hyde Park, UT clinic.</p>
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
