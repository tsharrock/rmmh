@extends('layout')

@section('title', "We're Moving | Redmond Medical & Mental Health")
@section('description', 'Redmond Medical & Mental Health is moving to a new location in Logan, Utah.')
@section('keywords', 'Redmond Medical and Mental Health new address, Logan Utah clinic')
@section('robots', 'noindex, follow')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1>We're Moving!</h1>

            <div class="row">
                <div class="col-md-7 mt-3">

                    <p>Dear Patients,</p>

                    <p>
                        I am writing to let you all know about some exciting upcoming changes with our
                        clinic! As you know, we have been at our Hyde Park location for the past 5 years.
                        <strong>Starting on October 12, 2026, we will be at a new location directly
                            across the street from the Logan High School Aquatic Center</strong>. There is
                        a parking lot behind the building, and you will enter through the north doors.
                        Our iPad check-in stand will be to the left of the main door for check-in. The new
                        address is:
                    </p>

                    <p class="fw-bold">
                        196 S. 100 W<br>
                        Logan, UT 84321
                    </p>

                    <p>
                        Due to the overwhelming popularity of telehealth, we are downsizing our space to a
                        small office within a larger building. Within that office,
                        <strong>we will still be providing ketamine treatments, injections, hormone
                            therapy, drug testing, A1C checks, IV fluids and most of the services that we
                            have provided in the past.</strong> For PAPs and implantable birth control
                        implants/removal, we will refer you to a favorite PA colleague who specializes in
                        those services.
                    </p>

                    <p>
                        Most appointments for new concerns and routine medication management will be
                        continued through telehealth. Ketamine treatments and telehealth appointments will
                        be available for scheduling through our usual website scheduler. If you are
                        needing an in-person appointment, we ask that you send us a text message so that
                        we may add you to the schedule manually. In-person visits (other than ketamine
                        appointments) will not be available on the website scheduler.
                    </p>

                    <p class="fw-bold mb-0">Telehealth Visits:</p>
                    <p>
                        Most of you have experience with telehealth appointments and nothing will change
                        here. You all know that I take pride in being very available for my patients. If
                        you need a telehealth appointment and do not see any availability on a particular
                        day, please text us and we will do our best to accommodate. It may be from the
                        car, while sitting on a beach, or camping in the woods, but I will always do my
                        best to help you when you need it!
                    </p>

                    <p class="fw-bold mb-0">Ketamine Visits:</p>
                    <p>
                        In the new space, every patient will have the entire room to themselves! There
                        will be two chairs, so if you would like to bring a companion or schedule a
                        session with another patient, just let us know! Appointments will be staggered
                        throughout the day and there will be more appointment times to choose from. We may
                        even have some Saturday hours available, so look for those! There is lots of
                        natural light in the new space which will make for a whole new experience. If you
                        prefer a very dark room, we will have eye masks available, or you can bring your
                        own. As always, we will continue to bill insurance for ketamine appointments
                        whenever possible.
                    </p>

                    <p class="fw-bold mb-0">In-Person Visits:</p>
                    <p>
                        I have a handful of patients who regularly require in-person visits for
                        injections, diabetes checks and drug testing. The only change for you will be that
                        we will manually schedule your appointments at the new location as you need them.
                        Please just text us and we'll get you scheduled! If your insurance requires you to
                        be seen in-person, we will arrange this, as well.
                    </p>

                    <p>
                        If you have any questions at all, don't hesitate to contact us via phone or text
                        at <a href="tel:4359381440">(435) 938-1440</a>, or via email at
                        <a href="mailto:PatientSupport@RedmondMMH.com">PatientSupport@RedmondMMH.com</a>.
                        We can also be reached through our website at
                        <a href="{{ url('/') }}">RedmondMMH.com</a>.
                    </p>

                    <p>We look forward to seeing you soon!</p>

                    <p>
                        Sincerely,<br>
                        Tiffany Redmond, PA-C
                    </p>
                </div>
                <div class="col-md-5 mt-4 mt-md-0">
                    <div class="ratio ratio-16x9 border sticky-md-top" style="top: 1rem;">
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
