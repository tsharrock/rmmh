@php($insurance = config('insurance.' . $state))
<section id="insurance" class="insurance-strip">
    <div class="container">
        <h2 class="insurance-strip-title">Accepted insurance in {{ $insurance['name'] }}</h2>
        <ul class="insurance-strip-plans list-unstyled">
            @foreach ($insurance['plans'] as $plan)
                <li class="insurance-pill">{{ $plan }}</li>
            @endforeach
        </ul>
        <p class="insurance-strip-note">Coverage may vary by plan. Call the number on your card to confirm your telemedicine benefit. Cash pay is also available for all services.</p>
    </div>
</section>
