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
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/css/user.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
          integrity="..." crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/photoSlider.js')}}"></script>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    <!-- Page Heading -->
    <header>
        <div class="shrink-0 flex items-center logo-line">
            <a href="{{ route('welcome') }}">
                <img class="logo" src="{{ asset('images/logo.png') }}" alt="my logo"/>
            </a>
            <span>{{__('Hot Line')}}</span>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('Catalog') }}
                        </a>
                        @if(isset($categories))
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @foreach($categories as $category)
                                    <li><a class="dropdown-item" href="{{route('category.show', $category->name)}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">{{ __('About us') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">{{ __('Contacts') }}</a>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li class="nav-item" style="border: 1px solid #fff; border-radius: 5px">
                            <a class="nav-link active" href="/account">{{ \Illuminate\Support\Facades\Auth::user()->name  }}</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/account">{{ __('Personal account') }}</a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="/cart"><i class="bi bi-cart3"></i></a>
                    </li>
                </ul>
                <div class="hidden space-x-8 sm:ml-10 sm:flex">
                    <form method="POST" action="{{ route('locale.update') }}">
                        @csrf
                        <select name="locale" onchange="this.form.submit()">
                            <option class="flag flag-usa" value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>EN</option>
                            <option class="flag flag-uk" value="uk" {{ app()->getLocale() == 'uk' ? 'selected' : '' }}>UA</option>
                        </select>
                    </form>
                </div>
                <form class="d-flex" method="GET", action="{{route('search')}}">
                    <input class="form-control me-2" type="search" placeholder="{{__('Search')}}" name="query" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">{{__('Search')}}</button>
                </form>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <main class="main-user-wrapper" style="display: inline-flex">
        <div id="content" class="content">
            @yield('content')
        </div>
    </main>
    <footer class="main-user-wrapper">
        <p>{{ __('Our graduation project') }} &copy; 2023</p>
    </footer>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
