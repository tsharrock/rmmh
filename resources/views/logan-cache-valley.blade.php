@extends('layout')

@section('title', 'Psychiatry & Primary Care | Logan & Cache Valley, UT | Redmond MMH')
@section('description', 'Serving Logan, Smithfield, Nibley, Hyde Park and all of Cache Valley with comprehensive in-person or telehealth care. From Ketamine to Family Medicine.')
@section('keywords', 'Logan UT Psychiatry, Cache Valley Primary Care, Mental Health Logan Utah, Hyde Park Clinic, Integrated Care Cache Valley')

@section('content')
    <div class="hero logan-cache-valley border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1 class="text-white">Integrated Medical & Mental Health in Cache Valley</h1>
                    <p class="text-white">Serving Logan, Smithfield, Nibley, Hyde Park and all of Cache Valley with comprehensive in-person or telehealth care. </p>
                    <a class="btn rmmh_button_primary me-3" href="https://nextpatient.co/p/redmondmedical/schedule" target="_blank">Schedule Your Visit</a>
                </div>
            </div>
        </div>
    </div>
    <section id="page-content">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col">
                    <h2>Complete Care, Right Here in Hyde Park</h2>
                    <p>While we serve all of Utah and Arizona via telehealth, our Cache Valley patients have exclusive access to our full suite of hands-on treatments and clinical therapies.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Psychiatric Care</h3>
                        <p>In-person evaluations and medication management for Anxiety, Depression, ADHD, and Bipolar Disorder. Meet face-to-face with Tiffany Redmond, PA-C, in the most comfortable doctor’s office you’ve ever experienced!</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">IM Ketamine Therapy</h3>
                        <p>**Exclusive to our clinic.** A breakthrough treatment for treatment-resistant depression and PTSD. Experience rapid relief with medically supervised intramuscular sessions.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('ketamine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Family Medicine</h3>
                        <p>Your local "medical home." We handle annual physicals, sick visits, chronic disease management, and women's health for the whole family in Smithfield and Logan.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mt-lg-3 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">IV Nutrition</h3>
                        <p>Rehydrate and recover with our menu of vitamin drips. From the "Immunity Booster" to the "Energy Infusion," feel your best in 45 minutes.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('iv-fluids') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mt-lg-3 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Medical Weight Loss</h3>
                        <p>In-office metabolic analysis and weekly check-ins for Semaglutide (GLP-1) therapy. We provide the accountability and medical oversight you need to succeed.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('weight-loss') }}">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 mt-lg-3 mb-lg-0">
                    <div class="info-card">
                        <h3 class="text-center">Hybrid Telehealth</h3>
                        <p>Can't make it to Hyde Park? Local patients can still switch between in-person visits and convenient video calls for follow-ups and medication refills.</p>
                        <p class="mb-0 link"><a class="rmmh_red" href="{{ route('telehealth') }}">How it works</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="py-20 bg-white">
            <div class="container">
                <div class="row py-5">
                    <h2>Your Neighbors in Health</h2>
                    <p class="">
                        Redmond Medical & Mental Health is proud to call Cache Valley home. Located conveniently in <strong>Hyde Park</strong>, we are just a short drive for residents of <strong>Logan</strong>, <strong>North Logan</strong>, <strong>Smithfield</strong>, <strong>Nibley</strong>, <strong>Providence</strong>, <strong>Richmond</strong>, and <strong>Wellsville</strong>.
                    </p>
                    <p class="">
                        We believe that rural and suburban communities deserve the same high-quality, integrated healthcare found in big cities. By combining psychiatry and primary care under one roof, we save you time and provide a level of coordinated care that is hard to find elsewhere.
                    </p>

                    <div class="col-lg-4 py-5 ">
                        <h4 class="font-bold text-teal-900 mb-2">Clinic Location:</h4>
                        <p class="text-gray-800">245 N 700 W, Hyde Park, UT 84318</p>
                        <p class="text-gray-600 text-sm mt-2">(Just off Hwy 91 behind Freckle Farm Nursery and near Castle Manor)</p>
                    </div>
                    <div class="col-lg-8 py-5">
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2974.101530897449!2d-111.83863512326047!3d41.804573171249885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87547db546537017%3A0x4f9d9c9e48698725!2sRedmond%20Medical%20and%20Mental%20Health!5e0!3m2!1sen!2sus!4v1771086788276!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
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
@endsection
