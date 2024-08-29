@extends('layouts.admin')

@section('email', $user->temailitle)

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>Document ID: {{ $user->_id }}</h1>
        </div>
        
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Role: {{ $user->role }}</p>

        <a href="{{ route('admin.users.edit', $user->_id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('admin.users.confirm', $user->_id) }}" method="GET" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
        <a href="{{ route('admin.users.index') }}">Back</a>
    </div>
@endsection
