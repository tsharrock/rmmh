@extends('layout')

@section('title', 'Telehealth Vernal | Online Mental Health & Psychiatry | Redmond Medical & Mental Health')
@section('description', 'Skip the drive over the mountains. Redmond MMH provides expert psychiatric care, family medicine, and weight loss treatment to Vernal and the Uintah Basin via secure telehealth.')
@section('keywords', 'Telehealth Vernal, Online Psychiatry Vernal, Mental Health Uintah County, Telehealth Utah, Redmond MMH')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "name": "Redmond Medical & Mental Health - Vernal Telehealth",
  "description": "Online psychiatry, primary care, and weight loss services for Vernal and the Uintah Basin through secure telehealth.",
  "url": "https://www.redmondmmh.com/telehealth/utah/vernal",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Vernal",
    "addressRegion": "UT"
  },
  "areaServed": {
    "@type": "City",
    "name": "Vernal, UT"
  },
  "serviceArea": {
    "@type": "GeoCircle",
    "geoMidpoint": {
      "@type": "GeoCoordinates",
      "latitude": 40.4555,
      "longitude": -109.5287
    },
    "geoRadius": "40000"
  }
}
</script>
@endsection

@section('content')
    <div class="hero vernal border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Telehealth in Vernal</h1>
                    <p>Specialty Mental Health and Medical Care for the Uintah Basin—no mountain pass required.</p>
                    <a class="btn rmmh_button_primary me-3" href="https://nextpatient.co/p/redmondmedical/schedule" target="_blank">Schedule Your Visit</a>
                </div>
            </div>
        </div>
    </div>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Accessible Care for the Uintah Basin</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Tiffany has over 30 years of experience treating ADHD, anxiety, depression, bipolar disorders, eating disorders, and addiction. Vernal residents can access a psychiatric specialist without the four-hour drive over the Wasatch to the Salt Lake Valley.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Manage chronic conditions like hypertension or thyroid issues, handle acute concerns such as UTIs and the flu, and review lab results from your home in Vernal, Naples, Roosevelt, or anywhere in Uintah County.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Access individualized weight management programs from home. We offer initial screenings and follow-ups for Semaglutide and Tirzepatide therapy, plus coaching and nutritional guidance.</p>
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
                    <h2>Serving Vernal and the Uintah Basin</h2>
                    <p>Our telehealth services reach Vernal, Naples, Roosevelt, Ballard, Tridell, and the surrounding Uintah and Duchesne County communities. Whether you are looking for an "online psychiatrist near Vernal" or "telehealth weight loss in eastern Utah," Redmond MMH delivers integrated medical and mental health care to a region where in-person specialists are scarce.</p>
                    <ul>
                        <li><strong>Local Pharmacy Partnerships:</strong> We send prescriptions electronically to your preferred Vernal pharmacy so they're ready for pickup.</li>
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
                        <li><strong>Prescriptions & Follow-up:</strong> Any necessary medications are sent to your preferred Vernal pharmacy immediately.</li>
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
