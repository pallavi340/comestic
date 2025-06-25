@extends('user.header')

@section('title')
 ManageAccount
@endsection
@section('content')
<div class="container py-4">
  <div class="card">
    <div class="card-header bg-dark text-white">
      <h5 class="mb-0">My Account</h5>
    </div>
    <div class="card-body">
      <p><strong>Name:</strong> {{ $user->name }}</p>
      <p><strong>Email:</strong> {{ $user->email }}</p>
      @if($user->phone)
      <p><strong>Phone:</strong> {{ $user->phone }}</p>
      @endif
      <p><strong>Registered On:</strong> {{ $user->created_at->format('d M Y') }}</p>

      <a href="#" class="btn btn-outline-primary mt-3">Edit Profile</a>
    </div>
  </div>
</div>
@endsection