@extends('layout')

@section('title', '')
@section('description', '')


@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="hero family-medicine border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-lg-1">
                    <h1 class="text-white">Family Medicine and<br /> Women's Health</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a> <span>></span> Family Medicine and Women's Health
                </div>

                <h2>Comprehensive Primary Care for the Cache Valley Community</h2>
                <p>At Redmond Medical & Mental Health, we believe that primary care is the foundation of a healthy life.
                    Our clinic provides a "medical home" where your physical health is managed with the same level of
                    expertise and compassion as your mental well-being. From routine wellness checks to specialized
                    women’s services, we are here to support every stage of your journey.</p>

                <div class="divider-line"></div>

                <h2>Family Medicine: Care for the Whole Person</h2>
                <p>Our family medicine services focus on prevention, early detection, and the management of chronic
                    conditions. We treat you as an individual, not a set of symptoms.
                    Annual Wellness Exams: Comprehensive physicals to monitor your health benchmarks and catch potential
                    issues early.</p>
                <ul>
                    <li><strong>Chronic Disease Management:</strong> Expert care for ongoing conditions such as hypertension, Type 2 diabetes,
                    asthma, and thyroid disorders.</li>
                    <li><strong>Minor Procedures:</strong> In-office treatments for skin concerns, minor injuries, and preventative
                    screenings.</li>
                    <li><strong>Acute Care:</strong> Fast, effective treatment for "sick visits," including respiratory infections, UTIs, and
                    minor illnesses.</li>
                </ul>

                <div class="divider-line"></div>

                <h2>Women’s Health: Specialized & Compassionate</h2>
                <p>We understand that women’s healthcare needs are unique and evolve throughout their lives. Our
                    providers offer a safe, comfortable environment to discuss and treat reproductive and hormonal
                    health.</p>
                <h3 class="mt-4">Our Specialized Services include:</h3>
                <ul>
                    <li><strong>Preventative Screenings:</strong> Well-woman exams, including Pap smears and breast health referrals.</li>
                    <li><strong>Contraception Counseling:</strong> Expert guidance on birth control options, including prescriptions and long-term solutions.</li>
                    <li><strong>Hormonal Management:</strong> Treatment for PCOS, endometriosis, and menstrual irregularities.</li>
                    <li><strong>Menopause Support:</strong> Helping you navigate the transition of menopause with hormone replacement therapy (HRT) and lifestyle adjustments.</li>
                    <li><strong>Sexual Health:</strong> Compassionate care for STI testing, treatment, and sexual wellness concerns.</li>
                </ul>

                <div class="divider-line"></div>

                <h2>Why Choose RMMH for Primary Care?</h2>
                <ol>
                    <li><strong>Integrated Mental Health:</strong> Because our clinic also specializes in psychiatry, we are uniquely equipped to handle the intersection of physical health and mental wellness (such as postpartum depression or the physical effects of anxiety).</li>
                    <li><strong>Modern Convenience:</strong> With our Telehealth options, you can often consult with your primary care provider without leaving your home.</li>
                    <li><strong>Affordable & Accessible:</strong> We work with a wide range of insurance providers to ensure that high-quality family medicine is accessible to everyone in Hyde Park and Logan.</li>
                </ol>


                <div class="divider-line"></div>

                <h2>Frequently Asked Questions</h2>
                <p><span class="question">Can I switch my primary care to RMMH if I already see you for Psychiatry?</span><br />
                    Absolutely. Many of our patients find it much more convenient to have their physical and mental
                    health managed by the same team for better coordination of care.</p>

                <p><span class="question">Do you offer same-day appointments?</span><br />
                    We strive to accommodate sick visits as quickly as possible. Please call or text our office at (435)
                    938-1440 to check for daily availability.</p>

                <p><span class="question">Do you treat pediatric patients?</span><br />
                    [Note: Depending on your specific provider's scope, you can specify here if you see children,
                    adolescents, or adults only.]</p>

                <div class="divider-line"></div>

                <h2>Take the Next Step Toward Wellness</h2>
                <p class="mb-3">Whether it’s time for your annual check-up or you have a specific health concern, our team is ready
                    to listen.</p>
                <a class="btn rmmh_button_primary" href="https://nextpatient.co/p/redmondmedical/schedule" target="_blank">Schedule an Appointment</a> <a class="btn rmmh_button_secondary" href="/about#meet-provider">Meet your provider</a>

            </div>

            <div class="col-md-4">
                @include('partials.sidebar-booking')
            </div>

        </div>
    </div>
@endsection
