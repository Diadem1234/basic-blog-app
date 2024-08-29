@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="body">Content</label>
                <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a type="submit" href="/posts" class="btn btn-alert">Back</a>
        </form>
    </div>
@endsection
