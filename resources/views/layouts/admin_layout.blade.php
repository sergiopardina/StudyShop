<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>StudyShop</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="icon" type="image/x-image" href="{{ asset('images/icon.png') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.content').click(function() {
                    $('.dropdown-content-menu').slideToggle();
                });

                $('.users').click(function() {
                    $('.dropdown-users-menu').slideToggle();
                });

                $('.admins').click(function() {
                    $('.dropdown-admins-menu').slideToggle();
                });
            });
        </script>
        <link rel="stylesheet" href="/css/admin.css">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.admin_navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Dashboard') }}
                    </h2>
                </x-slot>
                <div class="main-wrapper">
                    <aside>
                        <ul>
                            <li class="content"><i class="bi bi-grid-fill"></i>{{__('Content')}}<i
                                    class="fa fa-angle-down pull-right"></i>
                                <div class="dropdown-content-menu drop-down">
                                    <ul>
                                        <li><a href="{{ route('category.index') }}"><i class="bi bi-list-check"></i>{{__('All categories')}}</a></li>
                                        <li><a href="{{ route('brand.index') }}"><i class="bi bi-list-check"></i>{{__('All brands')}}</a></li>
                                        <li><a href=""><i class="bi bi-piggy-bank-fill"></i>{{__('Discount products')}}</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="users"><i class="bi bi-person-circle"></i>{{__('Users')}}<i
                                    class="fa fa-angle-down pull-right"></i>
                                <div class="dropdown-users-menu drop-down">
                                    <ul>
                                        <li><i class="bi bi-cart-fill"></i>{{__('Orders')}}
                                            <div>
                                                <ul>
                                                    <li><a href=""><i class="bi bi-cart-check-fill"></i>{{__('Completed')}}</a></li>
                                                    <li><a href=""><i class="bi bi-cart-plus-fill"></i>{{__('In progress')}}</a>
                                                    </li>
                                                    <li><a href=""><i class="bi bi-cart-x-fill"></i>{{__('Failures')}}</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="admins"><i class="bi bi-people-fill"></i>{{__('Admins')}}<i
                                    class="fa fa-angle-down pull-right"></i>
                                <div class="dropdown-admins-menu drop-down">
                                    <ul>
                                        <li><a href={{route('admins.index')}}><i class="bi bi-person-rolodex"></i>{{__('All personal')}}</a></li>
                                        <li><a href="{{route('admins.add')}}"><i class="bi bi-person-plus-fill"></i>{{__('Add new admin')}}</a></li>
                                        <li><a href=""><i class="bi bi-person-check-fill"></i>{{__('Assign roles')}}</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </aside>
                </div>
                @yield('content')
            </main>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>
