@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Create Post</h1>

        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="" required>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
            <a type="submit" href="/admin/users" class="btn btn-alert">Back</a>
            </div>
        </form>
    </div>
@endsection
