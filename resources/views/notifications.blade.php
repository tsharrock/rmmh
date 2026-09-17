@extends('layout')

@section('title', "We're Moving | Redmond Medical & Mental Health")
@section('description', 'Redmond Medical & Mental Health is moving to a new location in Logan, Utah.')
@section('keywords', 'Redmond Medical and Mental Health new address, Logan Utah clinic')
@section('robots', 'noindex, follow')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1>We're Moving!</h1>
            <div class="row align-items-start">
                <div class="col-md-7">
                    <p>
                        We're excited to share that Redmond Medical & Mental Health is moving to a new
                        location in Logan, Utah. Our last day at our current address is
                        <strong>October 12th, 2026</strong>.
                    </p>
                    <p>
                        Our phone number, provider and services will mostly remain the same.  Our new location will serve as our home for ketamine treatments and in-person appointments, as needed.  The majority of appointments will now be scheduled as telehealth.  If you need a telehealth or ketamine appointment, please continue to use the online scheduler.
                    </p>
                    <p style="font-weight: 800; font-size: 18px">
                        If you need an in-person appointment for injections, diabetes checks, drug tests, etc., please text us and we will schedule the appointment for you.
                    </p>
                    <p>
                        <strong>Our new address (starting October 12th):</strong><br>
                        Redmond Medical & Mental Health<br>
                        196 South 100 West<br>
                        Logan, Utah 84321
                    </p>
                    <p>
                        If you have an upcoming appointment or questions about the move, <br class="d-none d-lg-block"/> please
                        call or text us at <a href="tel:4359381440">(435) 938-1440</a>.
                    </p>
                </div>
                <div class="col-md-5 mt-4 mt-md-0">
                    <div class="ratio ratio-16x9 border">
                        <iframe title="Map to our new location at 196 South 100 West, Suite 101, Logan, UT 84321"
                            src="https://www.google.com/maps?q=196+South+100+West+Suite+101+Logan+UT+84321&output=embed"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
