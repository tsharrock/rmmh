{{--
    One photo capture tile.

    Props: $name (unique id), $label, $hint, $endpoint, $extra (array of extra
    POST fields), $done (bool).

    The file never reaches the server as a file. It is read in the browser,
    resized onto a canvas, re-encoded as JPEG and posted as base64 JSON — so
    PHP never creates a temp upload and nothing sensitive lands on disk.
--}}
@php
    $extra = $extra ?? [];
@endphp

<div class="photo-capture @if($done ?? false) is-done @endif"
     data-photo-capture
     data-endpoint="{{ $endpoint }}"
     data-extra='@json($extra)'>

    <label class="photo-capture__label" for="photo-{{ $name }}">{{ $label }}</label>

    @if (! empty($hint))
        <p class="photo-capture__hint">{{ $hint }}</p>
    @endif

    <div class="photo-capture__frame">
        <img class="photo-capture__preview" alt="" hidden>

        <div class="photo-capture__empty">
            <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="1.5" aria-hidden="true">
                <path d="M3 8.5A1.5 1.5 0 0 1 4.5 7h2l1.2-2h8.6L17.5 7h2A1.5 1.5 0 0 1 21 8.5v9A1.5 1.5 0 0 1 19.5 19h-15A1.5 1.5 0 0 1 3 17.5v-9Z"/>
                <circle cx="12" cy="12.5" r="3.5"/>
            </svg>
            <span>No photo yet</span>
        </div>

        <div class="photo-capture__tick" aria-hidden="true">✓</div>
    </div>

    {{-- capture="environment" opens the rear camera straight away on a phone --}}
    <input type="file"
           id="photo-{{ $name }}"
           class="photo-capture__input"
           accept="image/*"
           capture="environment">

    <div class="photo-capture__actions">
        <button type="button" class="btn rmmh_button_secondary photo-capture__pick">
            {{ ($done ?? false) ? 'Replace photo' : 'Take photo' }}
        </button>
        <span class="photo-capture__status" role="status" aria-live="polite">
            @if ($done ?? false) Saved @endif
        </span>
    </div>
</div>
