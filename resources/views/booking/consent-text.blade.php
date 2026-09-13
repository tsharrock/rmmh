{{--
    Renders every configured consent document in order.

    Used by the PDF. The on-screen step renders the same documents individually
    so each can carry its own "I agree", but both paths pull from
    config('booking.consent.documents') — so what is signed is always exactly
    what was shown.
--}}
@foreach (config('booking.consent.documents', []) as $key => $document)
    <section class="consent-doc" id="consent-doc-{{ $key }}">
        @include($document['view'])
    </section>
@endforeach
