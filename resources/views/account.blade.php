@extends('layouts.app')
@section('content')
    <div class="p-4 sm:p-8 shadow sm:rounded-lg account">
        <div class="max-w-x1">
            <div>
                <h2>{{ __('Welcome') }}, {{ \Illuminate\Support\Facades\Auth::user()->name  }} !</h2>
            </div>
            <div>
                <ul class="account">
                    <li><a href="/accedit">{{ __('My account') }}</a></li>
                    <li><a href="/cart">{{ __('My orders') }}</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')"
                               onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </div>

@endsection
