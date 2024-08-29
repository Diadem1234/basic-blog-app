@extends('layouts.admin')

@section('title', 'Delete Post')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>Are you sure you want to delete "{{ $post->title }}"?</h1>
        </div>
        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
        </form>
        <a href="{{ route('admin.posts.index') }}">Cancel</a>
    </div>
@endsection
