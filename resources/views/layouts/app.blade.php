<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fred Soloy - Blade</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

        
    </head>
    <body>
        @include('partials.navbar')
        <div class="container">
            @yield('header')
            @yield('welcome')
        </div>
        @include('partials.footer')
    </body>
</html>