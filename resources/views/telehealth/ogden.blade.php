@extends('layout')

@section('title', 'Online Therapy & Telehealth Ogden | Redmond Medical & Mental Health')
@section('description', 'Connect with expert mental health providers in Ogden via secure telehealth. Specialized in online therapy, psychiatry, and family medicine for Weber County.')
@section('keywords', '<meta name="keywords" content="Online Therapy Ogden, Telehealth Ogden, Mental Health Weber County, Ogden Psychiatrist Online, Redmond Medical and Mental Health">')

@section('content')

    <div class="hero ogden border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-lg-1">
                    <h1>Online Therapy & Telehealth in Ogden</h1>
                    <p>Providing Weber County with expert Psychiatric Care and Family Medicine from the convenience of your home.</p>
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
                    <h2>Personalized Virtual Care for Ogden Residents</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Mental Health & Online Therapy</h3>
                        <p>We specialize in treating Anxiety, Depression, and ADHD through HIPAA-compliant video sessions. Our approach focuses on evidence-based medication management and supportive care tailored to the Ogden community.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('telehealth') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Family Medicine</h3>
                        <p>Consult with a medical professional regarding wellness concerns, lab reviews, or chronic condition management—all via your smartphone or computer.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatry Services</h3>
                        <p>Expert psychiatric evaluations and ongoing care managed by Tiffany Redmond, PA-C. We bridge the gap for those seeking specialized mental health support without the long wait times of traditional clinics.</p>
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
                    <h2>Expert care is just a click away. Comprehensive care in Southern Utah.</h2>
                    <p>Serving St. George, Washington, Santa Clara, and Ivins via Telehealth. Redmond Medical & Mental Health (Redmond MMH) is proud to offer residents of St. George, Utah, a modern approach to healthcare. By utilizing telehealth, we bridge the gap between Northern and Southern Utah, providing "psychiatry near me" and "online weight loss clinics" to the entire Washington County area. Our focus is on the integration of physical and mental health to ensure lasting wellness for every patient.</p>
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
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Bridging the Gap in Ogden Healthcare</h2>
                    <p>Most major insurance plans accepted. Virtual visits are secure and private.</p>
                    <a href="tel:4359381440" class="btn-primary">Call (435) 938-1440</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4>Serving Weber County and Beyond</h4>
                    <p>Redmond Medical & Mental Health (Redmond MMH) is dedicated to expanding access to healthcare through Telehealth in Ogden, Utah. Whether you are a student at Weber State or a resident in North Ogden or South Ogden, our virtual doors are open. We specialize in "online therapy Ogden" and "telehealth psychiatry Utah" to ensure that quality mental and physical health services are never out of reach for our Northern Utah neighbors.</p>
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
          "name": "Redmond Medical & Mental Health - Ogden Telehealth",
          "alternateName": "Redmond MMH",
          "description": "Providing expert online therapy, psychiatry, and family medicine services to the Ogden area through secure telehealth.",
          "url": "https://www.redmondmmh.com/telehealth/ogden",
          "telephone": "+1-435-938-1440",
          "priceRange": "$$",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Ogden",
            "addressRegion": "UT",
            "addressCountry": "US"
          },
          "serviceArea": {
            "@type": "GeoCircle",
            "geoMidpoint": {
              "@type": "GeoCoordinates",
              "latitude": 41.2230,
              "longitude": -111.9738
            },
            "geoRadius": "25000"
          },
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Telehealth Services",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Online Therapy"
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
