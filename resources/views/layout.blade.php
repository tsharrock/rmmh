<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <meta name="description" content="@yield('description', 'Redmond Medical and Mental Health')">
        <meta name="keywords" content="@yield('keywords', 'Salt Lake City Psychiatry, St. George Weight Loss, Ogden Online Therapy, Provo Mental Health')">

        <link rel="icon" type="image/png" href="/cross_icon.png">
        @php($canonicalUrl = rtrim(config('app.url'), '/') . request()->getPathInfo())
        <link rel="canonical" href="{{ $canonicalUrl }}">

        {{-- Open Graph / social sharing --}}
        <meta property="og:type" content="@yield('og_type', 'website')">
        <meta property="og:site_name" content="Redmond Medical & Mental Health">
        <meta property="og:title" content="@yield('title')">
        <meta property="og:description" content="@yield('description', 'Redmond Medical and Mental Health')">
        <meta property="og:url" content="{{ $canonicalUrl }}">
        <meta property="og:image" content="{{ rtrim(config('app.url'), '/') }}/@yield('og_image', 'img/logo.png')">

        {{-- Twitter Card --}}
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="@yield('title')">
        <meta name="twitter:description" content="@yield('description', 'Redmond Medical and Mental Health')">
        <meta name="twitter:image" content="{{ rtrim(config('app.url'), '/') }}/@yield('og_image', 'img/logo.png')">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">



        <!-- Styles / Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        @yield('jsonld')

        @if(config('services.google_analytics.id'))
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google_analytics.id') }}"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', '{{ config('services.google_analytics.id') }}');
        </script>
        @endif

    </head>
    <body>
        @include('partials.header')

        @yield('content')

        @include('partials.footer')

        @stack('scripts')
    </body>
</html>
