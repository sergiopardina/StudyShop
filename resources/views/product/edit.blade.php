@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{__('Edit product')}}</div>
                    <div class="panel-body">
                        @include('common.errors')

                        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="mb-3 mt-3">
                                <label for="category">{{__('Category')}}:</label>
                                @if(count($categories) > 0)
                                    <select class="form-control" id="category" name="category_id">
                                        @foreach($categories as $category)
                                            @if($category->id === $product->category_id)
                                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                            @else
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                @endif
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="brand">{{__('Brand')}}:</label>
                                @if(count($brands) > 0)
                                    <select class="form-control" id="brand" name="brand_id">
                                        @foreach($brands as $brand)
                                            @if($brand->id === $product->brand_id)
                                                <option value="{{$brand->id}}" selected>{{$brand->name}}</option>
                                            @else
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                @endif
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="name">{{__('Name')}}:</label>
                                <input class="form-control" type="text" id="name" name="name" value="{{ !is_null(old('name')) ? old('name') : $product->name }}">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="description">{{__('Description')}}:</label>
                                <textarea class="form-control" id="description" name="description" rows="5">{{ !is_null(old('description')) ? old('description') : $product->description}}</textarea>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="price">{{__('Price')}}:</label>
                                <input class="form-control" type="number" id="price" name="price" value="{{ !is_null(old('price')) ? old('price') : $price }}" step="any">
                                <input class="form-control" type="number" name="price_id" value="{{$price_id}}" hidden>
                            </div>

                            <div class="form-check">
                                <label for="top_discount" class="form-check-label">
                                    @if(count($errors) > 0)
                                        <input class="form-check-input" type="checkbox" id="top_discount" name="top_discount" {{!is_null(old('top_discount')) ? 'checked= "on"' : ''}}"> {{__('Promotion')}}
                                    @else
                                        <input class="form-check-input" type="checkbox" id="product-top" name="top_discount" {{$product->top_discount === 1 ? 'checked= "on"' : ''}}"> {{__('Promotion')}}
                                    @endif
                                </label>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-plus"></i> {{__('Save')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
