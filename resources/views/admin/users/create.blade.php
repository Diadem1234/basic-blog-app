@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Create Post</h1>
        </div>
        @if(session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
        @endif
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
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role" required>
                    @foreach(config('enums.roles') as $role)
                        <option value="{{ strtolower($role) }}">
                            {{ ucfirst($role) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
            <a type="submit" href="/admin/users" class="btn btn-alert">Back</a>
            </div>
        </form>
    </div>
@endsection
