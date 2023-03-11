@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{__('Create new product')}}</div>
                    <div class="panel-body">
                        @include('common.errors')

                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="mb-3 mt-3">
                                <label for="category">{{__('Category')}}:</label>
                                @if(count($categories) > 0)
                                    <select class="form-control" id="category" name="category_id">
                                        <option value=""></option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="brand">{{__('Brand')}}:</label>
                                @if(count($brands) > 0)
                                    <select class="form-control" id="brand" name="brand_id">
                                        <option value=""></option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="name">{{__('Name')}}:</label>
                                <input class="form-control" type="text" id="name" name="name" value="{{ !is_null(old('name')) ? old('name') : '' }}">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="description">{{__('Description')}}:</label>
                                <textarea class="form-control" id="description" name="description" rows="5">{{ !is_null(old('description')) ? old('description') : '' }}</textarea>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="price">{{__('Price')}}:</label>
                                <input class="form-control" type="number" id="price" name="price" value="{{ !is_null(old('price')) ? old('price') : '' }}" step="any">
                            </div>

                            <div class="form-check">
                                <label for="top" class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="top" name="top_discount"> {{__('Promotion')}}
                                </label>
                            </div>

{{--                            <div class="container">--}}
{{--                                <div class="row">--}}
{{--                                    <label>{{'Download files'}}</label>--}}
{{--                                    <input type="file" id="fileMulti" name="fileMulti[]" multiple />--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <span id="outputMulti"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row mb-3 mt-3">
                                <label>{{'Download files'}}</label>
                                <input type="file" id="fileMulti" name="fileMulti[]" multiple />
                            </div>
                            <div class="row mb-3 mt-3">
                                <span id="outputMulti"></span>
                            </div>

                            <div class="mb-3 mt-3">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-plus"></i> {{__('Add product')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/download-photo.js"></script>
@endsection
