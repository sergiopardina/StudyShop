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
                    <a href="/"><h1>Study Shop</h1></a>
                    <nav>
                        <div class="dropbox-catalog">
                            <p>{{ __('Catalog') }} &#9660;</p>
                            <div class="dropbox">
                                @if(isset($categories))
                                    @foreach($categories as $category)
                                        <a>{{$category->name}}</a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                            <div id="menu" class="menu">
                                <ul>
                                    <li><a href="/about">{{ __('About us') }}</a></li>
                                    <li><a href="/contacts">{{ __('Contacts') }}</a></li>
                                    <li><a href="/account">{{ __('Personal account') }}</a></li>
                                </ul>
                            </div>
                            <div id="search_bar" class="search_bar">
                                <form>
                                    <input type="text" name=text" class="search" placeholder="{{ __('Search here') }}">
                                    <input type="submit" name="submit" class="submit" value="{{ __('Search') }}">
                                </form>
                            </div>
                            <div id="cart" class="cart">
                                <a href="/cart"><img src="images/carticon.png" alt="Cart"></a>
                            </div>
                    </nav>
                </header>

            <!-- Page Content -->
            <main>
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
