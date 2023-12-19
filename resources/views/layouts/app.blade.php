<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>APPEL+</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    @include('layouts.header')

    <body class="font-sans antialiased">

        @yield('header')

            <!-- Page Content -->
            <main>
                <x-separator></x-separator>
                    {{ $slot }}
                <x-separator></x-separator>
            </main>

         @include('layouts.footer')
        @yield('footer')
    </body>
</html>
