@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{__('Edit brand')}}</div>
                    <div class="panel-body">
                        @include('common.errors')

                        <form action="{{ route('brand.update', $brand->id) }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="mb-3 mt-3">
                                <label for="brand-name" >{{__('Name')}}:</label>
                                <input type="text" class="form-control" id="brand-name" name="name" value="{{ is_null(old('name')) ? $brand->name : old('name') }}">
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
