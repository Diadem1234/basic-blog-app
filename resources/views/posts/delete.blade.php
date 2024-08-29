@extends('layouts.app')

@section('title', 'Delete Post')

@section('content')
    <div class="container">
        <h1>Are you sure you want to delete "{{ $post->title }}"?</h1>
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
        </form>
        <a href="{{ route('posts.index') }}">Cancel</a>
    </div>
@endsection
