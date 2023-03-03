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
            <th>Telegram</th>
            <th>{{__('Action')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($admins as $admin)
            <tr>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->phone }}</td>
                <td><a href="tg://resolve?domain={{ $admin->telegram }}">Telegram</a></td>
                <td class="actions">
                    <a class="btn-1" href="{{route('admins.edit', $admin)}}"><button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button></a>
                    @if(Auth::user()->name !== $admin->name)
                        <a class="btn-2" href="{{route('admins.roles', $admin)}}"><button class="btn btn-info btn-sm"><i class="bi bi-gear"></i></button></a>
                        <form class="btn-3" action="{{ route('admins.destroy', $admin->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
