@extends('admin.layout')

@section('title')
 Edit User
@endsection

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-primary">✏️ Edit User</h2>

    <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.manageUsers') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection