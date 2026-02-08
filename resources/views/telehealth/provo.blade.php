@extends('layout')

@section('title', 'Psychiatry Services Provo | Online Mental Health | Redmond Medical & Mental Health')
@section('description', 'Expert psychiatric care and medication management for Provo residents. Redmond MMH offers secure telehealth services for ADHD, depression, and anxiety in Utah County.')
@section('keywords', '<meta name="keywords" content="Provo Psychiatry, Online Mental Health Provo, Utah County Telehealth, Psychiatrist Provo UT, Redmond Medical and Mental Health">')

@section('content')

    <div class="hero provo border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Psychiatry Services in Provo</h1>
                    <p>Expert Mental Health Care and Medication Management for Utah County Residents<br class="d-lg-block" /> via Secure Telehealth.</p>
                    <a class="btn rmmh_button_primary me-3" href="#">Schedule Your Virtual Visit</a>
                    <a class="btn rmmh_button_secondary" href="#">Browse Virtual Services</a>
                </div>
            </div>
        </div>
    </div>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Specialized Mental Health Care for Provo</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>We provide comprehensive evaluations and ongoing medication management for ADHD, Depression, Anxiety, and Bipolar Disorder. Our goal is to find the right balance for your unique needs.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('telehealth') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Integrated Mental Health</h3>
                        <p>At Redmond MMH, we look at the whole person. Our telehealth psychiatry services in Provo integrate physical wellness with mental health for more effective, long-term results.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Student & Professional Care</h3>
                        <p>Tailored mental health support for the Provo community. Our virtual appointments fit into your busy schedule, whether you're at BYU, UVU, or working in the Silicon Slopes.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Medical Weight Loss</h3>
                        <p>Access our specialized weight management programs from home. We offer virtual consultations for Semaglutide and Tirzepatide, combined with personalized medical oversight to help you reach your goals in the St. George heat.</p>
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
                    <h2>Serving Provo, Orem, and Utah County</h2>
                    <p>Redmond Medical & Mental Health (Redmond MMH) provides specialized psychiatry in Provo, Utah, via our advanced telehealth platform. We are committed to making mental health care accessible to everyone in Utah County, from Orem to Spanish Fork. If you are searching for an "online psychiatrist Provo" or "mental health services in Utah County," Tiffany Redmond, PA-C and our team offer the integrated medical and psychiatric support you need to thrive.</p>
                    <ul>
                        <li><strong>Local Pharmacy Partnerships:</strong> We work with Salt Lake City pharmacies to ensure your prescriptions are filled quickly and conveniently.</li>

                        <li><strong>Integrated Care:</strong> Address both your physical and mental health needs in one appointment, saving you time and effort.</li>

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
                        <li><strong>Prescriptions & Follow-up:</strong> Any necessary medications are sent to your preferred Salt Lake City pharmacy immediately.</li>
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
                    <p>After graduating from Arizona State University, Tiffany began her career working in juvenile correctional facilities, overseeing treatment groups for adolescent violent offenders, sex offenders, and substance abusers. She also spent time working in adolescent and adult group homes and a residential treatment facility in inner-city Los Angeles. She then went on to earn a Master's in Counseling Psychology, after which she spent four years in Nebraska providing therapeutic services for foster children with severe psychiatric issues. Tiffany then went on to work as a civilian for the U.S. Army, conducting neuropsychological assessments of service members returning from the Middle East with traumatic brain injuries.  Upon graduating from the University of Alabama's surgical Physician Assistant Program in 2016, Tiffany moved to Utah, where she has since been providing family medicine and psychiatric services to the Cache Valley community.</p>
                    <p>Tiffany is currently accepting new patients both in person and via <a href="{{ route('telehealth') }}">Telehealth services</a>. Whether you are seeking mental health support or a new primary care home, she is ready to partner with you on your journey.</p>
                </div>
            </div>
        </div>
    </section>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "MedicalBusiness",
          "name": "Redmond Medical & Mental Health - Provo Psychiatry",
          "alternateName": "Redmond MMH",
          "description": "Specialized online psychiatry and mental health medication management for Provo and Utah County residents via secure telehealth.",
          "url": "https://www.redmondmmh.com/telehealth/provo",
          "telephone": "+1-435-938-1440",
          "priceRange": "$$",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Provo",
            "addressRegion": "UT",
            "addressCountry": "US"
          },
          "serviceArea": {
            "@type": "GeoCircle",
            "geoMidpoint": {
              "@type": "GeoCoordinates",
              "latitude": 40.2338,
              "longitude": -111.6585
            },
            "geoRadius": "30000"
          },
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Provo Mental Health Services",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Psychiatric Medication Management"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "ADHD Treatment"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Telehealth Psychiatry"
                }
              }
            ]
          }
        }
    </script>
@endsection
