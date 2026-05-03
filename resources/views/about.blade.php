@extends('layout')

@section('title', 'About Redmond Medical & Mental Health | Utah & Arizona')
@section('description', 'Meet Tiffany Redmond, PA-C, providing integrated primary care and psychiatric services in Utah and Arizona. Learn about our holistic approach to mental and physical wellness.')
@section('keywords', 'Tiffany Redmond PA-C, Redmond Medical and Mental Health, Hyde Park Clinic, Cache Valley Healthcare, Integrated Medicine Utah, Arizona Telehealth')

@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="hero about border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-lg-1">
                    <h1 class="text-white">About Redmond Medical & Mental Health</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="about-page-content py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h2>Bridging the Gap Between Body and Mind</h2>
                    <p class="my-4">At Redmond Medical & Mental Health (RMMH), we believe that true wellness cannot be achieved by treating the body and mind in isolation. Located in the heart of the Cache Valley, our clinic was founded on a simple but powerful mission: to provide integrated, compassionate, and cutting-edge care that addresses the whole person.</p>

                    <div class="divider-line"></div>

                    <h3>Our Philosophy</h3>
                    <p class="my-4">Most healthcare systems force patients to navigate separate worlds for their physical and mental needs. We’ve removed those barriers. By housing Primary Care, Psychiatry, and Innovative Wellness under one roof, we ensure that your care is coordinated, efficient, and deeply personalized. Whether you are seeking relief from treatment-resistant depression or managing a chronic medical condition, we look at the full picture of your health.</p>

                    <div class="divider-line"></div>

                    <h3>What Makes Us Different?</h3>
                    <p class="my-4">By housing primary care, psychiatry, and innovative wellness under one roof, we ensure that your care is coordinated, efficient, and deeply personalized. We have removed the barriers that many patients face when seeking treatment; having to schedule with multiple providers who only treat specific problems. Being told that your high blood pressure will need to be treated elsewhere because your psychiatrist can’t prescribe those medications. Being told that your psychiatrist will need to refill your ADD medication because GYN providers can’t do that. It’s a lot, so let us help simplify things for you.</p>

                    <div class="divider-line"></div>

                    <h3>Commitment to Our Community</h3>
                    <p>Based in Hyde Park, Utah, we are more than just a clinic—we are your neighbors. We are dedicated to expanding access to high-quality healthcare for the residents of Logan and the surrounding areas. We believe that everyone deserves a provider who listens, respects their journey, and uses the best available science to help them feel their best.</p>
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
