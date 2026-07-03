
    <div class="text-black call-header">
        <div class="container">
            <div class="row" style="height: 30px">
                <div class="col text-end fs-14 text-end">
                    <p class="py-1">Phone or Text: <a class="text-black" href="tel:4359381440">(435) 938-1440</a></p>
                </div>
            </div>
        </div>

    </div>
    <nav class="navbar navbar-expand-lg border-bottom" aria-label="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route("home") }}"><img src="/img/logo.png" alt="Redmond Medical and Mental Health" width="175" height="44" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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

                    <li class="nav-item pt-3 pt-lg-0 ps-lg-4 text-center"><a href="https://nextpatient.co/p/redmondmedical/schedule" class="nav-link appt" target="_blank">Schedule an Appointment</a></li>

                </ul>
            </div>
        </div>
    </nav>



