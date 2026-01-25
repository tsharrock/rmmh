@extends('layout')

@section('title', 'Psychiatric Medication Management & ADHD Treatment | Redmond Medical & Mental Health | Hyde Park, UT')
@section('description', 'Specialized mental health care in Redmond. We provide expert diagnosis and medication management for ADHD, anxiety, depression, and bipolar disorder. Accepting new patients.')

@section('content')
    <div class="hero psychiatric-care border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-lg-1">
                    <h1>Psychiatric care</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <p>At Redmond Medical and Mental Health, we care for our patients. Tiffany offers compassionate support for a wide range of mental health concerns. With integrated care, patients can receive medication management and routine health services all in one convenient, welcoming location. We're here to help you and your family feel your best—every day.</p></p>
                <ul>
                    <li>Depression</li>
                    <li>IM Ketamine Therapy</li>
                    <li>Anxiety and Panic Disorders</li>
                    <li>Drug/Alcohol Addiction</li>
                    <li>Suboxone Treatment</li>
                    <li>Bipolar Disorder</li>
                    <li>Schizophrenia</li>
                    <li>Schizoaffective Disorder</li>
                    <li>Borderline Personality Disorder</li>
                    <li>Obesity and Weight Loss (Semaglutide therapy)</li>
                    <li>Obsessive-Compulsive Disorders</li>
                    <li>Attention-Deficit Disorders</li>
                    <li>Sleep Disorders</li>
                    <li>Eating Disorders</li>
                </ul>

            </div>
            <div class="col-md-4">
                @include('partials.sidebar-booking')
            </div>
        </div>
    </div>
@endsection
