@extends('layout')

@section('title', 'Telehealth Services | Utah & Arizona | Redmond MMH')
@section('description', 'RedmondMMH provides expert telehealth services in Utah and Arizona. Secure, private, and effective online mental health and primary care tailored to you.')
@section('keywords', 'Telehealth Utah, Telehealth Arizona, Online Psychiatry, Virtual Primary Care, Secure Video Therapy')

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
                    <li><strong>Schedule Your Appointment</strong><br />
                    Call or text our office or use our website to book a time that fits your schedule. Specify that you would like a Telehealth visit using the dropdown menu.</li>

                    <li><strong>Receive Your Secure Link</strong><br />
                    A few minutes before your appointment, you will receive a HIPAA-compliant link via email or text. There is no complicated software or apps to download—it works right in with your phone’s web browser.</li>

                    <li><strong>Find a Private Space</strong><br />
                    At the time of your visit, find a quiet, well-lit area with a stable internet connection. You can use your smartphone, tablet, or computer.</li>

                    <li><strong>Connect with Your Provider</strong><br />
                    Click the link to enter our "virtual waiting room." Your provider will join you shortly to begin your consultation, just as they would in person.</li>

                    <li><strong>Follow-Up & Pharmacy</strong><br />
                    If any prescriptions are needed, they will be sent electronically to your preferred pharmacy immediately following your visit. Lab and radiology orders will be faxed to a location close to you. Specialist referrals will also be submitted electronically, if needed.</li>
                </ol>

                <div class="divider-line"></div>

                <h3>Why Choose Telehealth?</h3>
                <ul>
                    <li><strong>Accessibility:</strong> Perfect for patients across Utah and Arizona who may have difficulty commuting to our clinic.</li>

                    <li><strong>Privacy:</strong> Discuss sensitive mental health or medical concerns from the environment where you feel most safe.</li>

                    <li><strong>Efficiency:</strong> Eliminate travel time and waiting room stays, making it easier to fit care into a busy workday.</li>
                </ul>

                <div class="divider-line"></div>

                <h3>Telehealth Service Areas</h3>
                <p>Tiffany Redmond, PA-C, is licensed in Utah and Arizona. Pick your city below for an overview of how telehealth fits your area:</p>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mt-3">Utah</h4>
                        <ul>
                            <li><a href="{{ route('logan-cache-valley') }}">Logan & Cache Valley</a> (in-person & telehealth)</li>
                            <li><a href="{{ route('telehealth.utah.salt-lake-city') }}">Salt Lake City</a></li>
                            <li><a href="{{ route('telehealth.utah.ogden') }}">Ogden</a></li>
                            <li><a href="{{ route('telehealth.utah.layton') }}">Layton</a></li>
                            <li><a href="{{ route('telehealth.utah.sandy') }}">Sandy</a></li>
                            <li><a href="{{ route('telehealth.utah.provo') }}">Provo</a></li>
                            <li><a href="{{ route('telehealth.utah.orem') }}">Orem</a></li>
                            <li><a href="{{ route('telehealth.utah.spanish-fork') }}">Spanish Fork</a></li>
                            <li><a href="{{ route('telehealth.utah.park-city') }}">Park City</a></li>
                            <li><a href="{{ route('telehealth.utah.heber-city') }}">Heber City</a></li>
                            <li><a href="{{ route('telehealth.utah.st-george') }}">St. George</a></li>
                            <li><a href="{{ route('telehealth.utah.cedar-city') }}">Cedar City</a></li>
                            <li><a href="{{ route('telehealth.utah.beaver') }}">Beaver</a></li>
                            <li><a href="{{ route('telehealth.utah.moab') }}">Moab</a></li>
                            <li><a href="{{ route('telehealth.utah.blanding') }}">Blanding</a></li>
                            <li><a href="{{ route('telehealth.utah.price') }}">Price</a></li>
                            <li><a href="{{ route('telehealth.utah.helper') }}">Helper</a></li>
                            <li><a href="{{ route('telehealth.utah.vernal') }}">Vernal</a></li>
                            <li><a href="{{ route('telehealth.utah.dutch-john') }}">Dutch John</a></li>
                            <li><a href="{{ route('telehealth.utah.wendover') }}">Wendover</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mt-3">Arizona</h4>
                        <ul>
                            <li><a href="{{ route('telehealth.arizona.phoenix') }}">Phoenix</a></li>
                            <li><a href="{{ route('telehealth.arizona.tucson') }}">Tucson</a></li>
                            <li><a href="{{ route('telehealth.arizona.mesa') }}">Mesa</a></li>
                            <li><a href="{{ route('telehealth.arizona.scottsdale') }}">Scottsdale</a></li>
                            <li><a href="{{ route('telehealth.arizona.tempe') }}">Tempe</a></li>
                            <li><a href="{{ route('telehealth.arizona.goodyear') }}">Goodyear</a></li>
                            <li><a href="{{ route('telehealth.arizona.buckeye') }}">Buckeye</a></li>
                            <li><a href="{{ route('telehealth.arizona.surprise') }}">Surprise</a></li>
                            <li><a href="{{ route('telehealth.arizona.queen-creek') }}">Queen Creek</a></li>
                            <li><a href="{{ route('telehealth.arizona.san-tan-valley') }}">San Tan Valley</a></li>
                            <li><a href="{{ route('telehealth.arizona.maricopa') }}">Maricopa</a></li>
                            <li><a href="{{ route('telehealth.arizona.casa-grande') }}">Casa Grande</a></li>
                            <li><a href="{{ route('telehealth.arizona.flagstaff') }}">Flagstaff</a></li>
                            <li><a href="{{ route('telehealth.arizona.prescott') }}">Prescott</a></li>
                            <li><a href="{{ route('telehealth.arizona.sierra-vista') }}">Sierra Vista</a></li>
                            <li><a href="{{ route('telehealth.arizona.yuma') }}">Yuma</a></li>
                            <li><a href="{{ route('telehealth.arizona.kingman') }}">Kingman</a></li>
                            <li><a href="{{ route('telehealth.arizona.lake-havasu-city') }}">Lake Havasu City</a></li>
                            <li><a href="{{ route('telehealth.arizona.page') }}">Page</a></li>
                            <li><a href="{{ route('telehealth.arizona.tuba-city') }}">Tuba City</a></li>
                        </ul>
                    </div>
                </div>

                <div class="divider-line"></div>

                <h3>Telehealth Frequently Asked Questions</h3>
                <p><span class="question">Is my telehealth visit secure?</span><br />
                Yes. We use HIPAA-compliant video platforms that encrypt all data. Your session is private and is never recorded, ensuring the same level of confidentiality as an in-office visit.</p>

                <p><span class="question">Does insurance cover telehealth?</span><br />
                Most major insurance plans in Utah and Arizona cover telehealth for mental health and primary care. However, coverage can vary by plan. We recommend calling the number on the back of your card to confirm your "telemedicine benefit."</p>

                <p><span class="question">Can I get prescriptions through a virtual visit?</span><br />
                Yes. For most conditions, we can send prescriptions electronically to your pharmacy during the call. Certain controlled substances may require an initial in-person evaluation or periodic face-to-face visits per state and federal regulations.</p>

                <p><span class="question">What if I have technical issues during my call?</span><br />
                Don't worry! If the connection drops or the video freezes:</p>
                <ul>
                    <li>Try refreshing your browser page.</li>
                    <li>Ensure you are not on public Wi-Fi (use a private, stable connection).</li>
                    <li>If we still can't connect, Tiffany will call the phone number in your file to continue the session via audio or to help you troubleshoot.</li>
                </ul>


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
