@extends('layout')

@section('title', 'Medical Weight Loss | Semaglutide & Tirzepatide in Utah | Redmond Medical and Mental Health | Tiffany Redmond PA-C')
@section('description', 'Start your journey to a healthier you with RedmondMMH. We offer physician-supervised medical weight loss, GLP-1 treatments, and behavioral support in Utah.')

@section('content')
    <div class="hero weight border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-lg-1">
                    <h1>Medical Weight Loss: A Science-Based Approach to Lasting Change</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a> <span>></span> Medical Weight Loss
                </div>

                <h2>Why Medical Weight Loss?</h2>
                <p>Losing weight isn't just about "willpower"—it’s about biology. At RedmondMMH, we treat weight management as a medical condition, addressing the hormonal, metabolic, and psychological factors that often make traditional dieting unsuccessful.</p>

                <p>Our program is designed to help you lose weight safely under the supervision of medical professionals while improving your energy levels and overall quality of life.</p>

                <div class="divider-line"></div>

                <h2>Our Comprehensive Treatment Pillars</h2>
                <div class="bg_rmmh_gray">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Pillar</th>
                            <th scope="col">How it helps</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Metabolic Evaluation</th>
                            <td>We use blood work to check for insulin resistance, thyroid issues, and hormonal imbalances.</td>
                        </tr>
                        <tr>
                            <th scope="row">Medical Management</th>
                            <td>Access to FDA-approved weight loss medications (such as GLP-1 agonists like Semaglutide or Tirzepatide) if clinically appropriate.</td>
                        </tr>
                        <tr>
                            <th scope="row">Nutritional Guidance</th>
                            <td>Realistic, sustainable eating plans—no "crash diets."</td>
                        </tr>
                        <tr>
                            <th scope="row">Behavioral Support</th>
                            <td>Addressing the "why" behind eating habits, including emotional eating and stress management.</td>
                        </tr>
                    </tbody>
                </table>
                </div>

                <div class="divider-line"></div>

                <h2>How the Program Works</h2>
                <ul>
                    <li><strong>Initial Consultation:</strong> A deep dive into your medical history, previous weight loss attempts, and current goals.</li>
                    <li><strong>Clinical Assessment:</strong> We perform a comprehensive physical and metabolic panel to understand your unique baseline.</li>
                    <li><strong>Customized Plan:</strong> You receive a tailored protocol that may include medication, lifestyle shifts, and regular check-ins.</li>
                    <li><strong>Ongoing Support:</strong> Monthly telehealth or in-person visits to monitor progress, manage side effects, and adjust your plan for long-term maintenance.</li>
                </ul>

                <div class="divider-line"></div>

                <h2>The Connection Between Weight and Mental Health</h2>
                <p>At RedmondMMH, we understand that how you feel physically affects how you feel mentally. Obesity is often linked with depression, anxiety, and low self-esteem. Our integrated approach ensures that as your body heals, your mental health is prioritized as well.</p>

                <div class="divider-line"></div>

                <h2>Frequently Asked Questions</h2>
                <p><span class="question">Is medication required?</span><br />
                No. Medication is a tool we use for those who meet clinical criteria, but we focus on a holistic approach for everyone.</p>

                <p><span class="question">Is this covered by insurance?</span><br />
                Coverage varies by provider and plan. We can provide documentation for you to submit to your insurance or discuss our self-pay options.</p>

                <p><span class="question">How much weight will I lose?</span><br />
                Results vary, but our goal is a safe, sustainable loss of 1–2 lbs per week to ensure the weight stays off.</p>

            </div>

            <div class="col-md-4">
                @include('partials.sidebar-booking')
            </div>

        </div>
    </div>
@endsection
