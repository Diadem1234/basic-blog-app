@extends('layouts.admin')

@section('title', 'Delete Post')

@section('content')
    <div class="container">
        <h1>Are you sure you want to delete "{{ $user->title }}"?</h1>
        <form action="{{ route('users.destroy', $user) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
        </form>
        <a href="{{ route('users.index') }}">Cancel</a>
    </div>
@endsection
