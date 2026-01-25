@extends('layout')

@section('title', 'Telehealth Services | Online Mental Health Counseling & Psychiatry  | Redmond Medical & Mental Health | Hyde Park, UT')
@section('description', 'RedmondMMH provides expert telehealth services for depression, anxiety, and more. Secure, private, and effective online mental health care tailored to you. Schedule an appointment now.')

@section('content')
    <div class="hero telehealth border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-lg-1">
                    <h1>Getting started with Telehealth</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a> <span>></span> Telehealth Services
                </div>
                <h2>Expert care is just one click away</h2>
                <p>We’ve made our virtual visits simple, secure, and accessible so you can focus on your health rather than the technology.</p>
                <ol>
                    <li>Schedule Your Appointment<br />
                    Call our office or use our online portal to book a time that fits your schedule. Specify that you would like a Telehealth visit.</li>

                    <li>Receive Your Secure Link<br />
                    Prior to your appointment, you will receive a HIPAA-compliant link via email or text. There is no complicated software to download—it works right in your web browser.</li>

                    <li>Find a Private Space<br />
                    At the time of your visit, find a quiet, well-lit area with a stable internet connection. You can use your smartphone, tablet, or computer.</li>

                    <li>Connect with Your Provider<br />
                    Click the link to enter our "virtual waiting room." Your provider will join you shortly to begin your consultation, just as they would in person.</li>

                    <li>Follow-Up & Pharmacy<br />
                    If any prescriptions are needed, they will be sent electronically to your preferred pharmacy immediately following the call.</li>
                </ol>

                <div class="divider-line"></div>

                <h3>Why Choose Telehealth?</h3>
                <ul>
                    <li><strong>Accessibility:</strong> Perfect for patients across Utah who may have difficulty commuting to Hyde Park.</li>

                    <li><strong>Privacy:</strong> Discuss sensitive mental health or medical concerns from the environment where you feel most safe.</li>

                    <li><strong>Efficiency:</strong> Eliminate travel time and waiting room stays, making it easier to fit care into a busy workday.</li>
                </ul>

                <div class="divider-line"></div>

                <h3>Telehealth Frequently Asked Questions</h3>
                <p><span class="question">Is my telehealth visit secure?</span><br />
                Yes. We use HIPAA-compliant video platforms that encrypt all data. Your session is private and is never recorded, ensuring the same level of confidentiality as an in-office visit.</p>

                <p><span class="question">Does insurance cover telehealth?</span><br />
                Most major insurance plans in Utah (including SelectHealth, BCBS, and Medicaid/Medicare) cover telehealth for mental health and primary care. However, coverage can vary by plan. We recommend calling the number on the back of your card to confirm your "telemedicine benefit."</p>

                <p><span class="question">Can I get prescriptions through a virtual visit?</span><br />
                Yes. For most conditions, we can send prescriptions electronically to your pharmacy during the call.</p>

                <p>Note: Certain controlled substances may require an initial in-person evaluation or periodic face-to-face visits per state and federal regulations.</p>

                <p><span class="question">What if I have technical issues during my call?</span><br />
                Don't worry! If the connection drops or the video freezes:</p>
                <ol>
                    <li>Try refreshing your browser page.</li>
                    <li>Ensure you are not on public Wi-Fi (use a private, stable connection).</li>
                    <li>If we still can't connect, your provider will call the phone number on your file to continue the session via audio or to help you troubleshoot.</li>
                </ol>


                <p><span class="question">Can new patients start with telehealth?</span><br />
                In many cases, yes. We can conduct initial psychiatric or medical consultations virtually. However, some services—like Ketamine Therapy, IV Nutrition, or certain physical exams—must be done in person at our Hyde Park clinic.</p>

                <div class="divider-line"></div>

                <h3>Pro-Tips for a Great Visit</h3>
                <ul>
                    <li><strong>Check Your Lighting:</strong> Make sure the light source is in front of you, not behind you, so your provider can see you clearly.</li>
                    <li><strong>Use Headphones:</strong> This improves audio quality and adds an extra layer of privacy.</li>
                    <li><strong>Close Other Apps:</strong> Close Netflix, gaming apps, or large downloads on your device to ensure all your internet speed goes toward the video call.</li>
                </ul>
                <div class="divider-line"></div>

            </div>

            <div class="col-md-4">
                @include('partials.sidebar-booking')
            </div>

        </div>
    </div>




@endsection
