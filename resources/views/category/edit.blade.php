@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{__('Edit category')}}</div>
                    <div class="panel-body">
                        @include('common.errors')

                        <form action="{{ route('category.update', $category->id) }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="mb-3 mt-3">
                                <label for="category-name" >{{__('Name')}}:</label>
                                <input type="text" class="form-control" id="category-name" name="name" value="{{ is_null(old('name')) ? $category->name : old('name') }}">
                            </div>

                            <div class="form-check">
                                <label for="category-top" class="form-check-label">
                                    @if(count($errors) > 0)
                                        <input class="form-check-input" type="checkbox" id="category-top" name="top" {{!is_null(old('top')) ? 'checked= "on"' : ''}}"> {{__('Popular')}}
                                    @else
                                        <input class="form-check-input" type="checkbox" id="category-top" name="top" {{$category->top === 1 ? 'checked= "on"' : ''}}"> {{__('Popular')}}
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
