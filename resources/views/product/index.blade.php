@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('product.component.create_button')
                        <table class="table table-striped task-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Description')}}</th>
                                <th>{{__('Category')}}</th>
                                <th>{{__('Brand')}}</th>
                                <th>{{__('Price')}}</th>
                                <th>{{__('Promotion')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if (count($products) > 0)
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="table-text">
                                            <div>{{$product->id}}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{$product->name}}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{$product->description}}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{$product->category->name}}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{$product->brand->name}}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{$product->price->price}}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>
                                                @if($product->top_discount === 1)
                                                    {{__('Yes')}}
                                                @else
                                                    {{__('No')}}
                                                @endif
                                            </div>
                                        </td>

                                        <td>
                                            <div class="row">
                                                <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="col-xs-2">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-btn fa-trash"></i> {{__('Delete')}}
                                                    </button>
                                                </form>
                                                <form action="{{ route('product.edit', $product->id) }}" method="POST" class="col-xs-2">
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
                                    <td colspan="8">{{__('No products')}}</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        @include('product.component.create_button')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
