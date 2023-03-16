@extends('layouts.app')
@section('content')
    <h2>{{$name}}</h2>
    @if(isset($products))
        @php
            $iterationCount = 0
        @endphp
        @foreach($products as $product)
            @php
                $iterationCount++
            @endphp
            <div class="<?= 'box'.$iterationCount?> box">
                @foreach($photos as $photo)
                    @if($product->id === $photo->id)
                        @php
                            $photo = explode(',', $photo->photos);
                        @endphp
                        <div class="slider-wrapper">
                            <ul>
                                @foreach($photo as $item)
                                    <li><img src="{{ $item }}" alt="photo"></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                @endforeach
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
            </div>
        @endforeach
    @endif
@endsection
