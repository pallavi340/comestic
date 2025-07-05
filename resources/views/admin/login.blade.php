@extends('admin.layout')
@section('title')
 Admin Login
@endsection

@section('content')
<div class="container mt-5">
    <h2>Admin Login</h2>
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required />
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required />
        </div>
        <button type="submit" class="btn btn-primary">Login as Admin</button>
    </form>
</div>
@endsection