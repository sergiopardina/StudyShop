@extends('layouts.app')
@section('content')
    <h2>{{ $name }}</h2>
    @if(isset($ad))
        @foreach($ad as $key=>$value)
            @php
                $arr = json_decode($key);
                var_dump($arr);
            @endphp
        @endforeach
    @endif
@endsection
