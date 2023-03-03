@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{__('Create new brand')}}</div>
                    <div class="panel-body">
                        @include('common.errors')

                        <form action="{{ route('brand.store') }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="mb-3 mt-3">
                                <label for="brand-name">{{__('Name')}}:</label>
                                <input type="text" class="form-control" id="brand-name" name="name">
                            </div>

                            <div>
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-plus"></i> {{__('Add brand')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
