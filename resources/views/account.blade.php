@extends('layouts.app')
@section('content')
        <h2>{{ __('Welcome') }}, {{ \Illuminate\Support\Facades\Auth::user()->name  }} !</h2>
@endsection
