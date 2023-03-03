@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{__('Create new category')}}</div>
                    <div class="panel-body">
                        @include('common.errors')

                        <form action="{{ route('category.store') }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="mb-3 mt-3">
                                <label for="category-name">{{__('Name')}}:</label>
                                <input type="text" class="form-control" id="category-name" name="name">
                            </div>

                            <div class="form-check">
                                <label for="category-top" class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="category-top" name="top"> {{__('Popular')}}
                                </label>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-plus"></i> {{__('Add category')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
