@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('category.component.create_button')
                        <table class="table table-striped task-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Popular')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if (count($categories) > 0)
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="table-text">
                                            <div>{{$category->id}}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{$category->name}}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>
                                                @if($category->top === 1)
                                                    {{__('Yes')}}
                                                @else
                                                    {{__('No')}}
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="row">
                                                <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="col-md-3">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-btn fa-trash"></i> {{__('Delete')}}
                                                    </button>
                                                </form>
                                                <form action="{{ route('category.edit', $category->id) }}" method="POST" class="col-md-3">
                                                    {{ csrf_field() }}
                                                    {{ method_field('GET') }}

                                                    <button type="submit" class="btn btn-warning">
                                                        <i class="fa fa-btn fa-edit"></i> {{__('Edit')}}
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3">{{__('No categories')}}</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        @include('category.component.create_button')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
