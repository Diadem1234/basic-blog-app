@extends('layouts.admin')

@section('title', $post->title)

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>

        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('admin.posts.confirm', $post->id) }}" method="GET" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
        <a href="{{ route('admin.posts.index') }}">Back</a>
    </div>
@endsection
