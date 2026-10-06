@extends('layout')

@section('title', 'IV Therapy & Injectables | Redmond MMH')
@section('description', 'Revitalize your body with custom IV nutrition therapy and injectables in Utah and Arizona. We offer energy infusions, immunity boosts, and recovery drips.')
@section('keywords', 'IV Therapy Utah, IV Nutrition Arizona, Vitamin Injections, Immunity Boost Drip, Energy Infusion, Hyde Park Clinic')

@section('jsonld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "name": "Redmond Medical & Mental Health - IV Nutrition Therapy",
  "description": "Custom IV nutrition therapy and injectables, including energy infusions, immunity boosts, and recovery drips, at our Hyde Park, Utah clinic.",
  "url": "https://redmondmmh.com/iv-fluids",
  "provider": {
    "@type": "MedicalBusiness",
    "@id": "https://redmondmmh.com/#organization",
    "name": "Redmond Medical & Mental Health",
    "telephone": "+1-435-938-1440",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "245 N. 700 W.",
      "addressLocality": "Hyde Park",
      "addressRegion": "UT",
      "postalCode": "84318",
      "addressCountry": "US"
    }
  },
  "areaServed": [
    { "@type": "State", "name": "Utah" },
    { "@type": "State", "name": "Arizona" }
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "IV Nutrition & Injectables Menu",
    "itemListElement": [
      { "@type": "Offer", "itemOffered": { "@type": "MedicalTherapy", "name": "Energy Infusion IV Drip" } },
      { "@type": "Offer", "itemOffered": { "@type": "MedicalTherapy", "name": "Immunity IV Drip" } },
      { "@type": "Offer", "itemOffered": { "@type": "MedicalTherapy", "name": "Fountain of Youth IV Drip" } },
      { "@type": "Offer", "itemOffered": { "@type": "MedicalTherapy", "name": "Ironman Recovery IV Drip" } },
      { "@type": "Offer", "itemOffered": { "@type": "MedicalTherapy", "name": "Hydration Elixir IV Drip" } },
      { "@type": "Offer", "itemOffered": { "@type": "MedicalTherapy", "name": "Vitamin & Wellness Injectables" } }
    ]
  }
}
</script>
@endsection

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

                <h3>IV Nutrition &amp; Injectables</h3>
                <p>Experience the benefits of:</p>
                <ul class="iv-checklist">
                    <li>Rapid Rehydration &amp; Nutrient Absorption</li>
                    <li>Anti-Aging Benefit</li>
                    <li>Boosts Energy</li>
                    <li>Supports Athletic Performance</li>
                    <li>Improves Overall Wellness</li>
                </ul>

                <div class="drip-grid">
                    <div class="drip fountain">
                        <span class="drip-name">fountain of youth</span>
                        <p>The ultimate drip for radiant, strong &amp; healthy skin, hair &amp; nails</p>
                        <span class="drip-price">$149</span>
                    </div>
                    <div class="drip ironman">
                        <span class="drip-name">the ironman</span>
                        <p>Recover faster with our packed drip formulated for muscle, energy &amp; stress recovery</p>
                        <span class="drip-price">$129</span>
                    </div>
                    <div class="drip skinny">
                        <span class="drip-name">skinny shot</span>
                        <p>Vitamins &amp; nutrients that target fat. Jump start your metabolism or enhance your current weight loss regimen</p>
                        <span class="drip-price">$129</span>
                    </div>
                    <div class="drip pain">
                        <span class="drip-name">pain pill</span>
                        <p>Recover from the party with a drip formulated for headaches, nausea, pain, dehydration, muscle spasms, &amp; fatigue</p>
                        <span class="drip-price">$149</span>
                    </div>
                    <div class="drip hydration">
                        <span class="drip-name">hydration elixir</span>
                        <p>Relieve symptoms of dehydration like thirst &amp; fatigue to feel better fast</p>
                        <span class="drip-price">$109</span>
                    </div>
                    <div class="drip immunity">
                        <span class="drip-name">immunity drip</span>
                        <p>Boost your immune system fast with Vitamin C, Zinc, and B-Vitamins</p>
                        <span class="drip-price">$99</span>
                    </div>
                </div>

                <div class="im-injectables">
                    <h3>IM Injectables</h3>
                    <ul class="im-list">
                        <li><span>Ascorbic Acid (Vitamin C)</span><span class="price">$25</span></li>
                        <li><span>B12</span><span class="price">$25</span></li>
                        <li><span>Biotin</span><span class="price">$30</span></li>
                        <li><span>Glutathione</span><span class="price">$35</span></li>
                        <li><span>Immunity Booster<small>(Glutathione, Zinc, Vitamin C)</small></span><span class="price">$35</span></li>
                        <li><span>Kenalog</span><span class="price">$35</span></li>
                        <li><span>NAD+</span><span class="price">$100</span></li>
                        <li><span>Ondansetron</span><span class="price">$18</span></li>
                        <li><span>Taurine</span><span class="price">$25</span></li>
                        <li><span>Toradol</span><span class="price">$35</span></li>
                        <li><span>Vitamin D 50,000 IU</span><span class="price">$35</span></li>
                    </ul>
                </div>

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
                <a class="btn rmmh_button_primary" href="{{ route('book') }}">Schedule and appointment</a> <a class="btn rmmh_button_secondary" href="tel:4359381440">Call/Text (435) 938-1440</a>
            </div>

            <div class="col-md-4">
                @include('partials.sidebar-booking')
            </div>

        </div>
    </div>
@endsection
