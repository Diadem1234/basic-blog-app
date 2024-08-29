@extends('layouts.admin')

@section('title', $user->title)

@section('content')
    <div class="container">
        <h1>{{ $user->title }}</h1>
        <p>{{ $user->body }}</p>

        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('users.confirm', $user->id) }}" method="GET" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
        <a href="{{ route('users.index') }}">Back</a>
    </div>
@endsection
