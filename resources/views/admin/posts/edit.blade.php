@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>Edit Post</h1>
        </div>
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" required>
            </div>
            <div class="form-group">
                <label for="body">Content</label>
                <textarea class="form-control" id="body" name="body" rows="5" required>{{ old('body', $post->body) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
