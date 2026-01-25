<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <meta name="description" content="@yield('description', 'Redmond Medical and Mental Health')">


        <link rel="icon" type="image/png" href="/cross_icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">



        <!-- Styles / Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>
    <body>
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
    </body>
</html>
