@extends('layouts.admin_layout')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <caption>{{__('All Admins')}}</caption>
        <thead class="thead-light">
        <tr>
            <th>{{__('Name')}}</th>
            <th>{{__('Email')}}</th>
            <th>{{__('Phone')}}</th>
            <th>{{__('Action')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($admins as $admin)
            <tr>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->phone }}</td>
                <td>
                    @if(Auth::user()->name !== $admin->name)
                    <form action="{{ route('admins.destroy', $admin->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </form>
                    @endif
                    <a href="{{route('admins.edit', $admin)}}"><button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
