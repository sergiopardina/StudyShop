@extends('layouts.app')

@section('content')
    @if(isset($products))
        @php $iterationCount = 0 @endphp
        @foreach($products as $product)
            @php $iterationCount++ @endphp
            <div class="<?= 'box'.$iterationCount?> box">
                @php
                    $photo = explode(',', $product->photos);
                @endphp
                <div class="slider-wrapper">
                    <ul>
                        @foreach($photo as $item)
                            <li><img src="{{ $item }}" alt="photo"></li>
                        @endforeach
                    </ul>
                </div>
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
            </div>
        @endforeach
    @endif
@endsection
