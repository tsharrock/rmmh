@extends('layout')

@section('title', 'Redmond Medical and Mental Health | Tiffany Redmond PA-C | Welcome')
@section('description', 'Find rapid relief from treatment-resistant depression and chronic pain. Learn how our medically supervised Ketamine treatments can help rewire your brain for wellness.')


@section('content')
    <div class="hero ketamine border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-lg-1">
                    <h1>Ketamine Therapy at RMMH</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a> <span>></span> Ketamine Therapy
                </div>
                <h2>A Breakthrough for Treatment-Resistant Conditions</h2>
                <p>If traditional medications have failed to provide the relief you need, you are not alone. At Redmond Medical & Mental Health, we specialize in <strong>Intramuscular (IM) Ketamine Therapy</strong>—a cutting-edge treatment that offers rapid, profound relief for those struggling with severe mental health and chronic pain conditions.</p>

                <div class="divider-line"></div>

                <h2>How Ketamine Works</h2>
                <p>Unlike traditional antidepressants that can take weeks to work, Ketamine acts almost immediately on the brain’s glutamate system.</p>
                <ul>
                    <li><strong>Restoring Connections:</strong> Stress and trauma can damage the neural pathways in your brain. Ketamine helps "re-grow" these connections, essentially rewiring the brain to process emotions more effectively.</li>
                    <li><strong>Rapid Relief:</strong> Many patients experience a significant shift in mood, concentration, and self-esteem within hours or days of their first treatment.</li>
                </ul>

                <div class="col-6 offset-3 my-5">
                    <p class="mb-3">This video explains the biological mechanism of how ketamine works to repair neural pathways in the brain.</p>
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/nW21-AYY_fs?si=-je7h9SsqYFNPgcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="divider-line"></div>

                <h2>What We Treat</h2>
                <p>Our IM Ketamine protocols are designed to address:</p>
                <ul>
                    <li><strong>Treatment-Resistant Depression:</strong> For those who haven't found success with standard prescriptions.</li>
                    <li><strong>Anxiety & Panic Disorders:</strong> Calming the nervous system to restore a sense of peace.</li>
                    <li><strong>PTSD & Trauma:</strong> Helping the brain process and overcome traumatic memories.</li>
                    <li><strong>Chronic Pain & Migraines:</strong> Alleviating physical distress from conditions like fibromyalgia.</li>
                    <li><strong>Suicidal Ideation:</strong> Providing a fast-acting intervention for acute mental health crises.</li>
                </ul>

                <div class="divider-line"></div>

                <h2>Your Treatment Journey</h2>
                <p>We don't believe in a "one-size-fits-all" approach. Your Ketamine experience is medically supervised and tailored to your unique needs.</p>
                <ol>
                    <li><strong>Comprehensive Evaluation:</strong> We begin with a full psychiatric and medical
                        assessment to ensure Ketamine is the right path for you.
                    </li>
                    <li><strong>The Induction Phase:</strong> For psychiatric symptoms, we typically recommend a series
                        of two treatments per week for three consecutive weeks (6 total) to build long-term
                        neuroplasticity.
                    </li>
                    <li><strong>The Dosing Session:</strong> You will receive a precisely calculated IM injection in a
                        calm, clinical environment. Most patients enter a "dissociative" or dream-like state for about
                        40–60 minutes while being closely monitored by our medical team.
                    </li>
                    <li><strong>Integration & Maintenance:</strong> Following your series, we work with you to determine
                        if "booster" sessions are needed to maintain your results over months or years.
                    </li>
                </ol>

                <div class="divider-line"></div>

                <h2>Frequently Asked Questions</h2>
                <p>Is it covered by insurance?<br />
                Possibly! While Ketamine is an "off-label" use for mental health, we are happy to review your specific insurance plan to see if your treatments or consultations can be covered.</p>

                <p>Will I be awake?<br />
                Yes. While you may feel "detached" from your body or surroundings (dissociation), you remain conscious and able to talk throughout the session.</p>

                <p>Can I drive home?<br />
                No. To ensure your safety, you must arrange for a driver to take you home following your appointment. You should not operate machinery or make major decisions until the following day.</p>

                <div class="divider-line"></div>

                <h2>Ready to find a new perspective?</h2>
                <p>Don't wait months for a "maybe." Experience the rapid change that integrated medical and mental health care can provide.</p>
                <a class="btn rmmh_button_primary" href="#">Book Your Evaluation</a> <a class="btn rmmh_button_secondary" href="tel:4359381440">Call/Text (435) 938-1440</a>

            </div>

            <div class="col-md-4">
                @include('partials.sidebar-booking')
            </div>

        </div>
    </div>
@endsection
