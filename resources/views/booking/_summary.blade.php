<div class="booking-summary">
    <h2 class="booking-summary__title">Your appointment</h2>
    <dl>
        <dt>Provider</dt>
        <dd>{{ $provider['name'] }}</dd>

        <dt>When</dt>
        <dd>{{ $slot->format('l, F j, Y') }}<br>
            <strong>{{ strtolower($slot->format('g:ia')) }} {{ config('booking.timezone_label') }}</strong></dd>

        <dt>Reason for visit</dt>
        <dd>{{ $reasonLabel }}</dd>

        <dt>Where</dt>
        <dd>{{ config('booking.practice.address') }}<br>
            <a href="tel:{{ config('booking.practice.phone_link') }}">{{ config('booking.practice.phone') }}</a></dd>
    </dl>
</div>
