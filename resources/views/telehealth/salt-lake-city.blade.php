@extends('layout')

@section('title', 'Telehealth Salt Lake City | Online Mental Health & Psychiatry | Redmond Medical & Mental Health')
@section('description', 'Access expert psychiatric care, mental health services, and medical weight loss from home. Redmond MMH offers secure telehealth for Salt Lake City residents. Schedule your virtual visit today.')

@section('content')
    <div class="hero salt-lake-city border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-lg-1">
                    <h1>Telehealth in Salt Lake City</h1>
                    <p>Expert Mental Health and Medical Care from the Comfort of Your SLC Home.</p>
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
                    <h2>Accessible Care for Salt Lake City</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatry & Mental Health</h3>
                        <p>Specialized treatment for Depression, Anxiety, ADHD, Bipolar Disorder, and OCD. We provide comprehensive medication management and psychiatric evaluations online.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Family Medicine</h3>
                        <p>From annual wellness consults to managing chronic conditions, our telehealth platform allows for thorough medical consultations without the commute to Hyde Park.</p>
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
                        <h3 class="text-center">Medical Weight Loss</h3>
                        <p>Residents of Salt Lake City can now access our Weight Loss programs, including Semaglutide/Tirzepatide therapy consultations, through virtual appointments.</p>
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
                    <h2>Serving the Salt Lake Valley</h2>
                    <p>Our telehealth services are available to all residents of Salt Lake City, West Valley City, Murray, Sandy, and Draper. Whether you are looking for an "online psychiatrist near me" or "telehealth weight loss in SLC," Redmond MMH is here to provide integrated medical and mental health solutions across Utah.</p>
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
@endsection
