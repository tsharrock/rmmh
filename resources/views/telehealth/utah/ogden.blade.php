@extends('layout')

@section('title', 'Online Therapy & Telehealth Ogden | Redmond Medical & Mental Health')
@section('description', 'Connect with expert mental health providers in Ogden via secure telehealth. Specialized in online therapy, psychiatry, and family medicine for Weber County.')
@section('keywords', 'Online Therapy Ogden, Telehealth Ogden, Mental Health Weber County, Ogden Psychiatrist Online, Redmond Medical and Mental Health')

@section('content')

    <div class="hero ogden border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Online Therapy & Telehealth in Ogden</h1>
                    <p>Providing Weber County with expert Psychiatric Care and Family Medicine from the convenience of your home.</p>
                    <a class="btn rmmh_button_primary me-3" href="https://nextpatient.co/p/redmondmedical/schedule" target="_blank">Schedule Your Visit</a>
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
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>At Redmond Medical and Mental Health, we offer expert telepsychiatry services to patients of all ages. Tiffany has over 30 years of experience working in mental health and treating conditions such as ADHD, Anxiety, Depression, Bipolar Disorders, eating disorders, addictions issues and more. We bridge the gap for those seeking specialized mental health support without the long wait times of traditional clinics.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Manage chronic conditions like hypertension or thyroid issues, acute conditions such as urinary tract infections and the flu, discuss lab results, and receive specialist referrals without leaving Weber County.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Access our individualized weight management programs from home! We offer initial screenings and follow-ups for Semaglutide and Tirzepatide therapy. We specialize in coaching, nutritional guidance and weight loss medications to help you look and feel your best.</p>
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
                    <h2>Expert care is just a click away.</h2>
                    <p>Redmond Medical & Mental Health (Redmond MMH) is proud to offer residents of Ogden, Utah, a modern approach to healthcare. By utilizing telehealth, we make healthcare and mental health services convenient and affordable. Most patients can be seen either the same day or next! Our focus is on the integration of physical and mental health to ensure lasting wellness for every patient.</p>
                    <ul>
                        <li><strong>Local Pharmacy Partnerships:</strong> We work with Ogden pharmacies to ensure your prescriptions are filled quickly and conveniently.</li>

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
                        <li><strong>Prescriptions & Follow-up:</strong> Any necessary medications are sent to your preferred Ogden pharmacy immediately.</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Bridging the Gap in Ogden Healthcare</h2>
                    <p>Most major insurance plans accepted. Virtual visits are secure and private.</p>
                    <a href="tel:4359381440" class="btn rmmh_button_primary">Call (435) 938-1440</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 mt-5">
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
                    <p>After graduating from Arizona State University in 1997, Tiffany began her career working in juvenile correctional facilities, overseeing treatment groups for adolescent violent offenders, sex offenders, and substance abusers. She also spent time working in adolescent and adult group homes and a residential treatment facility in inner-city Los Angeles. She then went on to earn a Master's in Counseling Psychology, after which she spent four years in Nebraska providing therapeutic services for foster children with severe psychiatric issues. Tiffany then went on to work as a civilian for the U.S. Army, conducting neuropsychological assessments of service members returning from the Middle East with traumatic brain injuries. Upon graduating from the University of Alabama's surgical Physician Assistant Program in 2016, Tiffany moved to Utah, where she has since been providing family medicine and psychiatric services to the Cache Valley community.</p>
                    <p>Tiffany is licensed to see patients in Utah and Arizona and currently accepting new patients for both in person and telehealth services. Whether you are seeking mental health support or a new primary care home, she is ready to partner with you on your journey.</p>
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
