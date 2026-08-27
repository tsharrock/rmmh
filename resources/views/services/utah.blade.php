@extends('layout')

@section('title', 'Services & Insurance in Utah | Redmond Medical & Mental Health')
@section('description', 'Explore Redmond Medical and Mental Health\'s full range of services in Utah, including Psychiatric Care, Ketamine Therapy, Family Medicine, Medical Weight Loss, IV Therapy, and Telehealth, plus our accepted insurance plans.')
@section('keywords', 'Utah Medical Services, Utah Mental Health, Ketamine Therapy Utah, IV Therapy Utah, Utah Insurance Credentials, Hyde Park Clinic')

@section('content')
    <div class="hero utah border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Telehealth Services<br class="d-none d-md-block"> in Utah</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a> <span>></span> Utah Services
                </div>
                <p>Our Hyde Park clinic offers the full range of Redmond Medical & Mental Health services in person, alongside telehealth visits for patients across the state.</p>

                <h2>Accepted Insurance Plans in Utah</h2>
                <p>We're credentialed with the following insurance plans in Utah. Coverage can vary by plan, so we recommend confirming your telemedicine or in-office benefit before your visit.</p>
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Current credentials:</h4>
                        <ul>
                            <li>Aetna</li>
                            <li>Altius/Coventry</li>
                            <li>Beacon Health</li>
                            <li>BIND Benefits</li>
                            <li>Blue Cross Blue Shield of Idaho</li>
                            <li>Blue Cross Blue Shield of Utah</li>
                            <li>Blue Cross Federal</li>
                            <li>CHAMPVA</li>
                            <li>Cigna</li>
                            <li>Curative Health</li>
                            <li>Deseret Mutual - DMBA</li>
                            <li>EMI Health</li>
                            <li>Great-West (Cigna)</li>
                            <li>HealthChoice Medicaid</li>
                            <li>HealthEZ</li>
                            <li>HealthNet Tricare</li>
                            <li>HealthUtah Physicians Network</li>
                            <li>HealthWest Administrators</li>
                            <li>Humana</li>
                            <li>Medicaid of Utah</li>
                            <li>Medicaid of Idaho</li>
                            <li>Medicare Part B of Utah</li>
                            <li>Medicare Railroad</li>
                            <li>Molina Medicaid</li>
                            <li>Motiv Health</li>
                            <li>MultiPlan/PHCS (Beech Street)</li>
                            <li>Optum Behavioral Health</li>
                            <li>PEHP</li>
                            <li>Regence Blue Cross Blue Shield</li>
                            <li>Samera Health</li>
                            <li>Select Health</li>
                            <li>UMR</li>
                            <li>United Healthcare</li>
                            <li>University of Utah Health Plan / Healthy U</li>
                            <li>Wise</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h4>Pending credentials:</h4>
                        <ul>
                            <li>Triwest Healthcare Alliance</li>
                        </ul>
                    </div>
                </div>
                <p>Don't have insurance, or prefer not to bill your plan? We also accept cash pay for all services.</p>

                <div class="divider-line"></div>

                <h2>Services offered in Utah</h2>
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <h3 class="text-center">Psychiatric Care</h3>
                            <p>Comprehensive diagnosis and medication management for conditions ranging from anxiety and depression to ADHD, bipolar disorder, and addictions.</p>
                            <p class="link"><a class="rmmh_red" href="{{ route('psychiatric-care') }}">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <h3 class="text-center">Ketamine Therapy</h3>
                            <p>An innovative, rapid-acting treatment using intramuscular injections to help repair neural pathways for patients struggling with treatment-resistant depression and suicidal ideation, PTSD, migraine headaches, addictions, and chronic pain.</p>
                            <p class="link"><a class="rmmh_red" href="{{ route('ketamine') }}">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <h3 class="text-center">Family Medicine & Women's Health</h3>
                            <p>Holistic primary care that integrates annual wellness exams, labs and acute and chronic disease management. Specialized women's services include contraception and hormonal health.</p>
                            <p class="link"><a class="rmmh_red" href="{{ route('family-medicine') }}">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <h3 class="text-center">Medical Weight Loss</h3>
                            <p>Evidence-based weight management programs featuring GLP-1 medications (like semaglutide and tirzepatide) combined with nutritional support to help you achieve and maintain a healthy weight.</p>
                            <p class="link"><a class="rmmh_red" href="{{ route('weight-loss') }}">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <h3 class="text-center">IV Therapy & Injectables</h3>
                            <p>Customizable nutrient infusions and vitamin injections designed to instantly boost energy, enhance immunity, decrease pain and accelerate physical recovery.</p>
                            <p class="link"><a class="rmmh_red" href="{{ route('iv-fluids') }}">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="info-card">
                            <h3 class="text-center">Telehealth Services</h3>
                            <p>Convenient virtual consultations that allow you to receive high-quality primary care and psychiatric services, medication management, and medical follow-ups from the comfort and privacy of your own home.</p>
                            <p class="link"><a class="rmmh_red" href="{{ route('telehealth') }}">Read More</a></p>
                        </div>
                    </div>
                </div>

                <div class="divider-line"></div>

                <h2>Telehealth by City in Utah</h2>
                <p>Pick your city below for an overview of how our services fit your area:</p>
                <div class="row">
                    <div class="col-md-6">
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
                            <li><a href="{{ route('telehealth.utah.richfield') }}">Richfield</a></li>
                            <li><a href="{{ route('telehealth.utah.roosevelt') }}">Roosevelt</a></li>
                            <li><a href="{{ route('telehealth.utah.nephi') }}">Nephi</a></li>
                            <li><a href="{{ route('telehealth.utah.delta') }}">Delta</a></li>
                            <li><a href="{{ route('telehealth.utah.kanab') }}">Kanab</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li><a href="{{ route('telehealth.utah.monticello') }}">Monticello</a></li>
                            <li><a href="{{ route('telehealth.utah.ephraim') }}">Ephraim</a></li>
                            <li><a href="{{ route('telehealth.utah.tremonton') }}">Tremonton</a></li>
                            <li><a href="{{ route('telehealth.utah.tooele') }}">Tooele</a></li>
                            <li><a href="{{ route('telehealth.utah.brigham-city') }}">Brigham City</a></li>
                            <li><a href="{{ route('telehealth.utah.fillmore') }}">Fillmore</a></li>
                            <li><a href="{{ route('telehealth.utah.panguitch') }}">Panguitch</a></li>
                            <li><a href="{{ route('telehealth.utah.gunnison') }}">Gunnison</a></li>
                            <li><a href="{{ route('telehealth.utah.mount-pleasant') }}">Mount Pleasant</a></li>
                            <li><a href="{{ route('telehealth.utah.green-river') }}">Green River</a></li>
                            <li><a href="{{ route('telehealth.utah.castle-dale') }}">Castle Dale</a></li>
                            <li><a href="{{ route('telehealth.utah.duchesne') }}">Duchesne</a></li>
                            <li><a href="{{ route('telehealth.utah.milford') }}">Milford</a></li>
                            <li><a href="{{ route('telehealth.utah.hurricane') }}">Hurricane</a></li>
                            <li><a href="{{ route('telehealth.utah.escalante') }}">Escalante</a></li>
                            <li><a href="{{ route('telehealth.utah.loa') }}">Loa</a></li>
                            <li><a href="{{ route('telehealth.utah.garden-city') }}">Garden City</a></li>
                            <li><a href="{{ route('telehealth.utah.roy') }}">Roy</a></li>
                            <li><a href="{{ route('telehealth.utah.american-fork') }}">American Fork</a></li>
                            <li><a href="{{ route('telehealth.utah.murray') }}">Murray</a></li>
                            <li><a href="{{ route('telehealth.utah.west-valley-city') }}">West Valley City</a></li>
                            <li><a href="{{ route('telehealth.utah.coalville') }}">Coalville</a></li>
                            <li><a href="{{ route('telehealth.utah.bluff') }}">Bluff</a></li>
                            <li><a href="{{ route('telehealth.utah.hanksville') }}">Hanksville</a></li>
                            <li><a href="{{ route('telehealth.utah.parowan') }}">Parowan</a></li>
                            <li><a href="{{ route('telehealth.utah.morgan') }}">Morgan</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                @include('partials.sidebar-booking')
            </div>
        </div>
    </div>
@endsection
