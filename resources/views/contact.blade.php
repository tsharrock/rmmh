@extends('layout')

@section('title', 'Contact Us | Redmond Medical & Mental Health in Hyde Park, UT')
@section('description', 'Visit Redmond Medical & Mental Health at our Hyde Park office or visit us online with a telehealth appointment. Serving Logan and Cache Valley with integrated primary and mental health care. Book your appointment today.')

@section('content')
    <div class="hero telehealth border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-lg-1">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container contact my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a> <span>></span> Contact Us
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 offset-lg-2">
                <h4 class="mt-4">Redmond Medical and Mental Health</h4>
                <p>3935 N. 75 W., Hyde Park, UT 84318</p>
                <a href="tel:4359381440">(435) 938-1440</a>

                <h4 class="mt-4">Email us at:</h4>
                <p><a href="mailto:PatientSupport@RedmondMMH.com" target="_blank">PatientSupport@RedmondMMH.com</a></p>

                <div class="ratio ratio-16x9 border">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2974.101529562913!2d-111.83606019999999!3d41.8045732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87547db546537017%3A0x4f9d9c9e48698725!2sRedmond%20Medical%20and%20Mental%20Health!5e0!3m2!1sen!2sus!4v1769358269542!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <p class="mt-4">Fax: (833) 3591642</p>

            </div>
            <div class="col-lg-3 offset-lg-1">
                <h4 class="mt-4">Send us an email</h4>
                <div class="form-wrapper">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="mt-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}" >
                            @error('name') <span class="form-error">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" >
                            @error('email') <span class="form-error">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="form-label" for="phone">Phone Number</label>
                            <input class="form-control" id="phone" type="text" name="phone" value="{{ old('phone') }}" >
                            @error('phone') <span class="form-error">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" >{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="btn rmmh_button_primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
