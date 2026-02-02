@extends('layout')

@section('title', 'Telehealth Psychiatry & Primary Care | Cedar City, UT | Redmond Medical & Mental Health')
@section('description', 'Skip the drive to Logan. Redmond Medical and Mental Health offers secure, integrated telehealth services for Cedar City residents. Specializing in ADHD, Anxiety, and Primary Care.')

@section('content')
    <div class="hero cedar-city border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-lg-1">
                    <h1>Expert Psychiatric & Medical Care for Cedar City—From the Comfort of Home.</h1>
                    <p>Quality healthcare shouldn't require a 4-hour drive. Tiffany Redmond, PA-C, provides integrated telehealth services to patients across Southern Utah and the Cedar City area.</p>
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
                    <h2>Services offered</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Medication Management</h3>
                        <p>Expert treatment for ADHD, Anxiety, Depression, and Bipolar Disorder. We send your prescriptions directly to local Cedar City pharmacies (like Bulloch's or Smith's).</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Virtual Primary Care</h3>
                        <p>Manage chronic conditions like hypertension or thyroid issues, discuss lab results, and receive specialist referrals without leaving Iron County.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Mental Health<br /> "One-Stop-Shop"</h3>
                        <p>The unique ability to handle your medical and mental health needs in a single integrated video appointment.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('telehealth') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Weight Loss Consultations</h3>
                        <p>Initial screenings and follow-ups for Semaglutide/Tirzepatide programs.</p>
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
                    <h2>Why Cedar City Patients Choose Redmond MMH Telehealth</h2>
                    <ul>
                        <li><strong>Local Pharmacy Partnerships:</strong> We work with Cedar City pharmacies to ensure your prescriptions are filled quickly and conveniently.</li>

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
                        <li><strong>Prescriptions & Follow-up:</strong> Any necessary medications are sent to your preferred Cedar City pharmacy immediately.</li>
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
@endsection
