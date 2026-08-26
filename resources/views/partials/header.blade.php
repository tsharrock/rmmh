    <nav class="navbar navbar-expand-lg border-bottom site-navbar" aria-label="navbar">
        <div class="container">
            <div class="navbar-top-row">
                <a class="navbar-brand" href="{{ route("home") }}"><img src="/img/wide-logo.svg" alt="Redmond Medical and Mental Health" class="site-logo" /></a>

                <div class="nav-cta d-none d-lg-flex">
                    <div class="nav-phone text-black">Phone or Text: <a class="text-black" href="tel:4359381440">(435) 938-1440</a></div>
                    <a href="https://nextpatient.co/p/redmondmedical/schedule" class="appt appt-sm" target="_blank">Schedule an Appointment</a>
                </div>

                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="{{ route("home") }}" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('psychiatric-care') }}">Psychiatric Care</a></li>
                            <li><a class="dropdown-item" href="{{ route("family-medicine") }}">Family Medicine</a></li>
                            <li><a class="dropdown-item" href="{{ route("ketamine") }}">Ketamine</a></li>
                            <li><a class="dropdown-item" href="{{ route("weight-loss") }}">Medical Weight Loss</a></li>
                            <li><a class="dropdown-item" href="{{ route("iv-fluids") }}">IV Nutrition & Injectables</a></li>
                            <li><a class="dropdown-item" href="{{ route("telehealth") }}">Telehealth Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{ route("about") }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ route("telehealth") }}" class="nav-link">Telehealth</a></li>
                    <li class="nav-item"><a href="{{ route("insurance") }}" class="nav-link">Insurance Credentials</a></li>
                    <li class="nav-item"><a href="{{ route("contact") }}" class="nav-link">Contact</a></li>
                </ul>

                <div class="nav-cta nav-cta-mobile d-lg-none">
                    <div class="nav-phone text-black">Phone or Text: <a class="text-black" href="tel:4359381440">(435) 938-1440</a></div>
                    <a href="https://nextpatient.co/p/redmondmedical/schedule" class="appt appt-sm" target="_blank">Schedule an Appointment</a>
                </div>
            </div>
        </div>
    </nav>
