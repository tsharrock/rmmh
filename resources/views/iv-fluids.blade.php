@extends('layout')

@section('title', 'IV Therapy & Injectables | Nutrient Infusion in Utah & Arizona')
@section('description', 'Revitalize your body with custom IV nutrition therapy and injectables in Utah and Arizona. We offer energy infusions, immunity boosts, and recovery drips.')
@section('keywords', 'IV Therapy Utah, IV Nutrition Arizona, Vitamin Injections, Immunity Boost Drip, Energy Infusion, Hyde Park Clinic')

@section('content')
    <div class="hero iv border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-lg-1">
                    <h1>Revitalize Your Body from the Inside Out</h1>
                    <p>Custom IV Nutrition Therapy and Injectables designed to boost energy, fight fatigue, and improve your overall well-being.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a> <span>></span> IV Nutrition & Injectables
                </div>
                <h2>Why Choose IV Therapy at RedmondMMH?</h2>
                <p>Oral vitamins often lose potency during the digestion process. IV Nutrition Therapy delivers high doses of essential vitamins, minerals, and amino acids directly into your bloodstream, ensuring 100% absorption and immediate results.</p>

                <p>Whether you are recovering from an illness, training for an event, or managing a chronic condition, our medical team provides a safe, clinical environment for your revitalization.</p>

                <div class="divider-line"></div>

                <h3>Our Customizable Drip Menu</h3>
                <p>Choose from our seven specialized formulas tailored to your specific health goals:</p>
                <ul>
                    <li>⚡ <strong>The Energy Infusion:</strong> Packed with B vitamins and amino acids to fight chronic fatigue and dehydration.</li>

                    <li>🛡️ <strong>The Immunity Drip:</strong> Your best defense against cold and flu season. Loaded with Vitamin C, Zinc, and B vitamins.</li>

                    <li>✨ <strong>The Fountain of Youth:</strong> The "mother of all drips" for healthy skin, hair, and nails. Designed to fight aging from a cellular level.</li>

                    <li>🏋️ <strong>The Ironman:</strong> Performance and recovery for athletes. Loaded with minerals, amino acids, and Vitamin C to get you back in the gym faster.</li>

                    <li>💊 <strong>The Pain Pill:</strong> A "stacked" drip for fast recovery. Contains fluids, B vitamins, and anti-nausea/pain medications to relieve headaches and muscle spasms.</li>

                    <li>💧 <strong>The Hydration Elixir:</strong> Pure, effective hydration to combat the symptoms of dehydration and brain fog.</li>

                    <li>🔥 <strong>The Skinny Shot:</strong> A potent formula to kickstart fat loss and maintain results after Semaglutide or Tirzepatide therapy.</li>
                </ul>

                <div class="divider-line"></div>

                <h3>Injectables & Quick Boosters</h3>
                <p>Don’t have time for a full IV? Our targeted injectables provide a quick clinical boost in minutes:</p>
                <ul>
                    <li><strong>Wellness:</strong> Vitamin B12, Vitamin D3 (50,000 IU), Vitamin C</li>
                    <li><strong>Beauty & Detox:</strong> Biotin, Glutathione, Taurine</li>
                    <li><strong>Recovery:</strong> Toradol (Pain), Zofran (Nausea), NAD+</li>
                    <li><strong>Immunity:</strong> Immunity Booster (C, Glutathione, & Zinc)</li>
                </ul>

                <div class="divider-line"></div>

                <h3>What to Expect</h3>
                <ul>
                    <li><strong>Consultation:</strong> We review your medical history and wellness goals to recommend the perfect drip.</li>
                    <li><strong>The Experience:</strong> Relax in our comfortable clinic while your infusion takes place (typically 30–45 minutes).</li>
                    <li><strong>The Result:</strong> Many patients feel an immediate "lift" in mood and energy that can last for days or weeks.</li>
                </ul>

                <div class="divider-line"></div>

                <h3>Integrated Care in Hyde Park</h3>
                <p>Because we are a full-service medical and mental health clinic, we can integrate your IV therapy with other treatments, such as Ketamine therapy or Medical Weight Loss, to provide a truly comprehensive path to health.</p>

                <div class="divider-line"></div>

                <h3>Ready to feel your best?</h3>
                <p>Visit us in Hyde Park or schedule your appointment online.</p>
                <a class="btn rmmh_button_primary" href="https://nextpatient.co/p/redmondmedical/schedule" target="_blank">Schedule and appointment</a> <a class="btn rmmh_button_secondary" href="tel:4359381440">Call/Text (435) 938-1440</a>
            </div>

            <div class="col-md-4">
                @include('partials.sidebar-booking')
            </div>

        </div>
    </div>
@endsection
