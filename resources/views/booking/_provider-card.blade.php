<div class="booking-provider">
    <img src="{{ $provider['photo'] }}" alt="{{ $provider['name'] }}" class="booking-provider__photo">
    <div class="booking-provider__meta">
        <h2 class="booking-provider__name">{{ $provider['name'] }}</h2>
        <p class="booking-provider__practice mb-0">
            {{ config('booking.practice.address') }}<br>
            <a href="tel:{{ config('booking.practice.phone_link') }}">{{ config('booking.practice.phone') }}</a>
        </p>
    </div>
</div>
