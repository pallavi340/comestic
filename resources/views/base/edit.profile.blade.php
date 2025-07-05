<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Profile | Nykaa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --nykaa-pink: #fc2779;
      --nykaa-dark: #333;
      --nykaa-light: #f8f8f8;
    }
    
    body {
      background-color: #f6f6f6;
      font-family: 'Poppins', sans-serif;
    }
    
    /* Nykaa Header */
    .nykaa-header {
      background-color: white;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    
    .nykaa-logo {
      height: 40px;
    }
    
    .search-bar {
      border: 1px solid #ddd;
      border-radius: 4px;
      overflow: hidden;
    }
    
    .search-bar input {
      border: none;
      outline: none;
      padding: 8px 12px;
      width: 100%;
    }
    
    .search-bar button {
      background-color: var(--nykaa-pink);
      border: none;
      color: white;
      padding: 8px 15px;
    }
    
    .header-icons a {
      color: var(--nykaa-dark);
      font-size: 1.2rem;
      margin-left: 15px;
      position: relative;
      text-decoration: none;
    }
    
    .header-icons .badge {
      position: absolute;
      top: -5px;
      right: -8px;
      font-size: 0.6rem;
      background-color: var(--nykaa-pink);
    }
    
    .navbar-nav .nav-link {
      color: var(--nykaa-dark);
      font-weight: 500;
      padding: 10px 15px;
    }
    
    .navbar-nav .nav-link:hover {
      color: var(--nykaa-pink);
    }
    
    /* Profile Page */
    .sidebar-option {
      padding: 10px 15px;
      border-radius: 5px;
      margin-bottom: 5px;
      transition: all 0.3s;
    }
    
    .sidebar-option:hover {
      background-color: #fce4ec;
      cursor: pointer;
      color: var(--nykaa-pink);
    }
    
    .sidebar-option.active {
      background-color: #fce4ec;
      color: var(--nykaa-pink);
      font-weight: bold;
    }
    
    .profile-image {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid #fce4ec;
    }
    
    .profile-card {
      background: white;
      border-radius: 10px;
      padding: 25px;
      box-shadow: 0 2px 15px rgba(0,0,0,0.05);
    }
    
    .address-box {
      border: 1px solid #eee;
      border-radius: 8px;
      padding: 15px;
      background: white;
      transition: all 0.3s;
      margin-bottom: 15px;
    }
    
    .address-box:hover {
      border-color: var(--nykaa-pink);
      box-shadow: 0 3px 10px rgba(252, 39, 121, 0.1);
    }
    
    .edit-btn {
      color: var(--nykaa-pink);
      font-size: 0.9rem;
      text-decoration: none;
    }
    
    .edit-btn:hover {
      text-decoration: underline;
    }
    
    .badge-city {
      background-color: #fce4ec;
      color: var(--nykaa-pink);
      font-weight: normal;
    }
    
    .section-title {
      color: var(--nykaa-dark);
      border-bottom: 1px solid #eee;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }
    
    .add-address-btn {
      color: var(--nykaa-pink);
      font-weight: 500;
      text-decoration: none;
    }
    
    .add-address-btn:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<!-- Nykaa Header -->
<header class="nykaa-header">
  <div class="container">
    <!-- Top Header -->
    <div class="row py-2 align-items-center d-none d-md-flex">
      <div class="col-md-2">
       <a class="navbar-brand" href="{{route("base.home") }}">
                <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" width="90" alt="Your Brand Logo" class="brand-logo">
            </a>
      </div>
      <div class="col-md-6">
        <div class="search-bar d-flex">
          <input type="text" placeholder="Search for products, brands and more...">
          <button><i class="fas fa-search"></i></button>
        </div>
      </div>
      <div class="col-md-4 text-end header-icons">
        <a href="#"><i class="far fa-user"></i> {{auth()->user()->name}}</a>
        <a href="#"><i class="far fa-heart"></i></a>
        <a href="#">
          <i class="fas fa-shopping-bag"></i>
          <span class="badge">0</span>
        </a>
      </div>
    </div>
    
  
    <div class="row py-2 align-items-center d-md-none">
      <div class="col-6">
        <img src="https://adn-static2.nykaa.com/media/wysiwyg/2019/nykaa-logo.png" alt="Nykaa" class="nykaa-logo" style="height: 30px;">
      </div>
      <div class="col-6 text-end header-icons">
        <a href="#" class="me-3"><i class="fas fa-search"></i></a>
        <a href="#"><i class="fas fa-shopping-bag"></i></a>
      </div>
    </div>
    
      <nav class="navbar navbar-expand-md p-0">
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Brands</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Luxe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nykaa Fashion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Beauty Advice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Offers</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<div class="container py-4">
    <h2 class="mb-4">Edit Address</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('profile.updateAddress') }}" method="POST" class="bg-white p-4 rounded shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="area" class="form-label">Area</label>
            <input type="text" name="area" class="form-control" value="{{ old('area', $user->area) }}" required>
        </div>

        <div class="mb-3">
            <label for="street" class="form-label">Street</label>
            <input type="text" name="street" class="form-control" value="{{ old('street', $user->street) }}" required>
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" name="city" class="form-control" value="{{ old('city', $user->city) }}" required>
        </div>

        <div class="mb-3">
            <label for="state" class="form-label">State</label>
            <input type="text" name="state" class="form-control" value="{{ old('state', $user->state) }}" required>
        </div>

        <div class="mb-3">
            <label for="pincode" class="form-label">Pincode</label>
            <input type="text" name="pincode" class="form-control" value="{{ old('pincode', $user->pincode) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Address</button>
    </form>
</div>