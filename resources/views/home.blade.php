<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-lgrey font-sans antialiased">
        @include('layouts.homeNav')
        @if(Session::has('success'))
            <div class="text-dred">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
            </div>
        @endif
        @include('partials._hero')
        @include('partials.news')
        @include('partials.gallery')
        @include('partials.plans')
        @include('partials.photographers') 
        @include('partials.about')  
        @include('partials.testimonial')
    </body>
</html>
