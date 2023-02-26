<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" type="image/x-image" href="{{ asset('images/icon.png') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="/css/user.css">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
{{--            @include('layouts.navigation')--}}

            <!-- Page Heading -->
                <header>
                    <h1>Study Shop</h1>
                    @include('layouts.main_navi')
                </header>

            <!-- Page Content -->
            <main>
                <div id="lsb" class="lsb">
                    <p>It will be category list</p>
                </div>
                <div id="content" class="content">
                    @yield('content')
                </div>
            </main>
            <footer>
                <p>{{ __('Our graduation project') }} &copy; 2023</p>
            </footer>
        </div>
    </body>
</html>
