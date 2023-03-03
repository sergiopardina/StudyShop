@extends('layouts.admin_layout')
@section('content')
    <p>{{__('welcome_to_admin_panel')}} {{\Illuminate\Support\Facades\Auth::user()->name}}</p>
    <p>{{__('role_type')}}</p>
    <img style="width: 50%; justify-self: center; opacity: 0.5; margin-top: 5%" src="{{asset('images/statistic.png')}}">
@endsection
