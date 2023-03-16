@extends('layouts.app')

@section('content')
@if(isset($products))

        @foreach($products as $product)
            @php
            $photo = explode(',', $product->photos);
            @endphp
            @foreach($photo as $item)
                <img src="{{ $item }}" alt="photo">
            @endforeach
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
        @endforeach
@endif
@endsection
