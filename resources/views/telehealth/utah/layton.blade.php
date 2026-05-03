@extends('layout')

@section('title', 'Telehealth Layton | Online Mental Health & Psychiatry | Redmond Medical & Mental Health')
@section('description', 'Skip the wait list and the I-15 commute. Redmond MMH offers expert psychiatric care, family medicine, and weight loss treatment to Layton and Davis County via secure telehealth.')
@section('keywords', 'Telehealth Layton, Online Psychiatry Davis County, Mental Health Layton, Telehealth Utah, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "name": "Redmond Medical & Mental Health - Layton Telehealth",
  "description": "Online psychiatry, primary care, and weight loss services for Layton and Davis County through secure telehealth.",
  "url": "https://www.redmondmmh.com/telehealth/utah/layton",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Layton",
    "addressRegion": "UT"
  },
  "areaServed": {
    "@type": "City",
    "name": "Layton, UT"
  },
  "serviceArea": {
    "@type": "GeoCircle",
    "geoMidpoint": {
      "@type": "GeoCoordinates",
      "latitude": 41.0602,
      "longitude": -111.9711
    },
    "geoRadius": "20000"
  }
}
</script>
@endsection

@section('content')
    <div class="hero layton border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Layton</h1>
                    <p>Expert Mental Health and Medical Care from the Comfort of Your Layton Home.</p>
                    <a class="btn rmmh_button_primary me-3" href="https://nextpatient.co/p/redmondmedical/schedule" target="_blank">Schedule Your Visit</a>
                </div>
            </div>
        </div>
    </div>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for Layton</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Tiffany has over 30 years of experience treating ADHD, anxiety, depression, bipolar disorders, eating disorders, and addiction. Layton residents—including Hill AFB families—skip the long Davis County wait lists for direct access to specialty mental health care.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Manage chronic conditions, address acute concerns, and review lab results from your home in Layton without sitting in I-15 traffic between Salt Lake and Ogden.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Access individualized weight management programs from home, including Semaglutide and Tirzepatide therapy with coaching and nutritional guidance.</p>
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
                    <h2>Serving Layton and Davis County</h2>
                    <p>Our telehealth services reach Layton, Kaysville, Clearfield, Syracuse, Farmington, and the surrounding Davis County communities. Whether you are searching for an "online psychiatrist in Layton" or "telehealth weight loss near Hill AFB," Redmond MMH provides integrated medical and mental health care.</p>
                    <ul>
                        <li><strong>Local Pharmacy Partnerships:</strong> We work with Layton pharmacies to ensure your prescriptions are filled quickly.</li>
                        <li><strong>Integrated Care:</strong> Address both your physical and mental health needs in one appointment.</li>
                        <li><strong>Experienced Provider:</strong> Tiffany Redmond, PA-C, has extensive experience in both family medicine and psychiatric care, ensuring comprehensive treatment.</li>
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
                        <li><strong>Prescriptions & Follow-up:</strong> Any necessary medications are sent to your preferred Layton pharmacy immediately.</li>
                    </ol>
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
                    <p>Tiffany is licensed to see patients in Utah and Arizona and is currently accepting new patients for both in-person and telehealth services. Whether you are seeking mental health support or a new primary care home, she is ready to partner with you on your journey.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
