@extends('layout')

@section('title', "We're Moving | Redmond Medical & Mental Health")
@section('description', 'Redmond Medical & Mental Health is moving to a new location in Logan, Utah.')
@section('keywords', 'Redmond Medical and Mental Health new address, Logan Utah clinic')
@section('robots', 'noindex, follow')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1>We're Moving</h1>
            <p>
                We're excited to share that Redmond Medical & Mental Health is moving to a new
                location in Logan, Utah. Our last day at our current address is
                <strong>October 9th</strong>. Our phone number, providers, and services remain the
                same &mdash; only our address is changing.
            </p>
            <p>
                <strong>Our new address (starting October 10th):</strong><br>
                Redmond Medical & Mental Health<br>
                196 South 100 West, Suite 101<br>
                Logan, Utah 84321
            </p>
            <p>
                If you have an upcoming appointment or questions about the move, please
                <a href="{{ route('contact') }}">contact us</a> or call us at
                <a href="tel:4359381440">(435) 938-1440</a>.
            </p>
        </div>
    </section>
@endsection
