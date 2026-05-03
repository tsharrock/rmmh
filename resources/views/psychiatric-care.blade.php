@extends('layout')

@section('title', 'Psychiatric Medication Management & ADHD Treatment | Utah & Arizona')
@section('description', 'Specialized mental health care in Utah and Arizona. We provide expert diagnosis and medication management for ADHD, anxiety, depression, bipolar disorder, and addictions.')
@section('keywords', 'Psychiatric Medication Management Utah, ADHD Treatment Arizona, Depression Help, Bipolar Disorder Care, Mental Health Services Utah')

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
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a> <span>></span> Psychiatric Care
                </div>
                <p>When you schedule a psychiatric appointment with Tiffany, rest assured that you’re in good hands; she has been practicing in mental health for over 30 years! Tiffany offers compassionate support for a wide range of mental health concerns including:</p>
                <ul>
                    <li>Depression</li>
                    <li>Anxiety and Panic Disorders</li>
                    <li>Drug/Alcohol Addiction with Suboxone Treatment</li>
                    <li>Anger and Irritability</li>
                    <li>Bipolar Disorder</li>
                    <li>Schizophrenia</li>
                    <li>Borderline Personality Disorder</li>
                    <li>Obsessive-Compulsive Disorder</li>
                    <li>Attention Deficit Disorders</li>
                    <li>Sleep Disorders</li>
                    <li>Eating Disorders</li>
                    <li>Behavioral/Conduct Disorders</li>
                    <li>Sexual Addictions</li>
                    <li>Skin Picking/Excoriation Disorders</li>
                </ul>
                <p>At your appointment, Tiffany will review your medical and psychiatric history and may prescribe medications, order or draw labs on site, refer for therapeutic services or counseling, recommend additional services such as ketamine therapy or trans-magnetic stimulation and schedule your follow-up appointment. You will be able to text, call or email our staff should you have any questions after your appointment.</p>

            </div>
            <div class="col-md-4">
                @include('partials.sidebar-booking')
            </div>
        </div>
    </div>
@endsection
