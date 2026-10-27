@extends('layout')

@section('title', 'Contact Us | Redmond Medical & Mental Health')
@section('description', 'Contact Redmond Medical & Mental Health at our Logan office or via telehealth in Utah and Arizona. Serving the Cache Valley and beyond with integrated care.')
@section('keywords', 'Contact Redmond MMH, Logan Clinic Address, Utah Mental Health, Arizona Telehealth, Book Appointment')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "url": "https://redmondmmh.com/contact",
  "mainEntity": {
    "@type": "MedicalBusiness",
    "@id": "https://redmondmmh.com/#organization",
    "name": "Redmond Medical & Mental Health",
    "telephone": "+1-435-938-1440",
    "email": "PatientSupport@RedmondMMH.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "196 South 100 West",
      "addressLocality": "Logan",
      "addressRegion": "UT",
      "postalCode": "84321",
      "addressCountry": "US"
    }
  }
}
</script>
@endsection

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
                <h2 class="h4 mt-4">Redmond Medical and Mental Health</h2>
                <p>196 South 100 West, Logan, UT 84321</p>
                <a href="tel:4359381440">(435) 938-1440</a>

                <h2 class="h4 mt-4">Email us at:</h2>
                <p><a href="mailto:PatientSupport@RedmondMMH.com" target="_blank">PatientSupport@RedmondMMH.com</a></p>

                <div class="ratio ratio-16x9 border">
                    <iframe title="Map to Redmond Medical and Mental Health" src="https://www.google.com/maps?q=196+South+100+West+Suite+101+Logan+UT+84321&amp;output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <p class="mt-4">Fax: (833) 359-1642</p>

            </div>
            <div class="col-lg-4 offset-lg-1">
                <h2 class="h4 my-4">Send us an email</h2>
                <div class="form-wrapper">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        <script>
                            if (typeof gtag === 'function') {
                                gtag('event', 'contact_form_submit');
                            }
                        </script>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div>
                            <label class="form-label mt-0" for="name">Name</label>
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

                        <div class="mt-3">
                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                            @error('g-recaptcha-response') <span class="form-error">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn rmmh_button_primary mt-3">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush
