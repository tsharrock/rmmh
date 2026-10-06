{{-- Pre-scheduling questions. $mode: 'link' = show a button to NextPatient, 'widget' = load the NextPatient widget. --}}
@php($gateId = 'gate-' . uniqid())
<div id="{{ $gateId }}" class="booking-gate">
    <div class="mb-4">
        <label for="{{ $gateId }}-patient" class="form-label fw-bold">Are you a new patient or an established patient?</label>
        <select id="{{ $gateId }}-patient" class="form-select" data-role="patient">
            <option value="">Select one…</option>
            <option value="new">New Patient</option>
            <option value="established">Established Patient</option>
        </select>
    </div>

    <div class="mb-4" data-role="state-group" hidden>
        <label for="{{ $gateId }}-state" class="form-label fw-bold">Where are you from?</label>
        <select id="{{ $gateId }}-state" class="form-select" data-role="state">
            <option value="">Select your state…</option>
            @foreach (array_keys(config('booking.states')) as $state)
                <option value="{{ $state }}">{{ $state }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4" data-role="payment-group" hidden>
        <label for="{{ $gateId }}-payment" class="form-label fw-bold">Will you be using insurance or paying out of pocket for your visit?</label>
        <select id="{{ $gateId }}-payment" class="form-select" data-role="payment">
            <option value="">Select one…</option>
            <option value="insurance">Insurance</option>
            <option value="cash">Out of pocket</option>
        </select>
    </div>

    <div class="mb-4" data-role="insurance-group" hidden>
        <label for="{{ $gateId }}-insurance" class="form-label fw-bold">Which insurance will you be using?</label>
        <select id="{{ $gateId }}-insurance" class="form-select" data-role="insurance"></select>
        <div class="form-text mt-3">
            <strong>Don't see your insurance, or not sure if we take it?</strong><br>
            We're not in network with every plan yet, but you can still be seen. Our affordable self-pay rate is $198 for your first visit, and follow-up visits cost substantially less.
            <a href="{{ config('booking.nextpatient_url') }}" target="_blank">Continue to scheduling</a>
        </div>
    </div>

    <div data-role="result" hidden>
        @if ($mode === 'widget')
            <p class="small text-muted mb-2">All appointment times shown are in Mountain Standard Time (MST).</p>
            <div id="nextpatient-widget"></div>
        @else
            <div class="text-center">
                <a href="{{ config('booking.nextpatient_url') }}" class="btn rmmh_button_primary" target="_blank">Continue to Scheduling</a>
            </div>
        @endif
    </div>
</div>

<script>
    (function () {
        const root = document.getElementById(@json($gateId));
        const insuranceByState = @json(config('booking.states'));
        const widgetMode = @json($mode === 'widget');
        const el = (role) => root.querySelector('[data-role="' + role + '"]');
        const patient = el('patient'), stateGroup = el('state-group'), state = el('state'), payment = el('payment'), insurance = el('insurance');
        const paymentGroup = el('payment-group'), insuranceGroup = el('insurance-group'), result = el('result');
        let widgetLoaded = false, completed = false;

        function track(name, params) {
            if (typeof gtag === 'function') gtag('event', name, params);
        }

        function answered(step, value) {
            if (value) track('booking_gate_answer', { step: step, answer: value });
        }

        function update() {
            const isNew = patient.value === 'new';
            stateGroup.hidden = !isNew;
            paymentGroup.hidden = !(isNew && state.value);
            const usingInsurance = isNew && state.value && payment.value === 'insurance';
            insuranceGroup.hidden = !usingInsurance;
            const done = patient.value === 'established'
                || (isNew && state.value && (payment.value === 'cash' || (usingInsurance && insurance.value)));
            result.hidden = !done;
            if (done && !completed) {
                completed = true;
                track('booking_gate_complete', {
                    patient_type: patient.value,
                    state: state.value || undefined,
                    payment: payment.value || undefined,
                    insurance: insurance.value || undefined,
                });
            } else if (!done) {
                completed = false;
            }
            if (done && widgetMode && !widgetLoaded) {
                widgetLoaded = true;
                const s = document.createElement('script');
                s.src = 'https://nextpatient.co/p/2083/provider-search.js';
                s.async = true;
                document.body.appendChild(s);
            }
        }

        function fillInsurance() {
            insurance.innerHTML = '';
            insurance.add(new Option('Select your insurance…', ''));
            (insuranceByState[state.value] || []).forEach((name) => insurance.add(new Option(name, name)));
        }

        patient.addEventListener('change', () => {
            state.value = ''; payment.value = ''; fillInsurance(); answered('patient_type', patient.value); update();
        });
        state.addEventListener('change', () => { payment.value = ''; fillInsurance(); answered('state', state.value); update(); });
        payment.addEventListener('change', () => { insurance.value = ''; answered('payment', payment.value); update(); });
        insurance.addEventListener('change', () => { answered('insurance', insurance.value); update(); });
        track('booking_gate_view');
        update();
    })();
</script>
