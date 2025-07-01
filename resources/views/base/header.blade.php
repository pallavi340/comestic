<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') | {{ env('APP_NAME') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .top-banner {
      background: pink;
      color: #000;
      text-align: center;
      padding: 5px 0;
      font-weight: 500;
    }
    .logo {
      font-size: 28px;
      font-weight: bold;
      color: #ff007f;
      margin-right: 20px;
    }
    .navbar-nav .nav-link {
      color: #000 !important;
      font-weight: 500;
    }
    .category-bar {
      background: #fff;
      border-top: 1px solid #eee;
      border-bottom: 1px solid #eee;
    }
    .category-bar a {
      padding: 10px 15px;
      color: #333;
      text-decoration: none;
      display: inline-block;
    }
    .offer-banner {
      background: linear-gradient(to right, white);
      padding: 25px 15px;
      text-align: center;
    }
    .offer-banner h2 {
      font-size: 32px;
      color: #ff5a3c;
      font-weight: bold;
    }
    .offer-code {
      background: #ff6a2f;
      color: #fff;
      padding: 12px 25px;
      font-size: 20px;
      font-weight: bold;
      border-radius: 8px;
      display: inline-block;
      margin-top: 10px;
    }
    .max-discount {
      color: #c44d00;
      font-size: 14px;
      margin-top: 8px;
    }
  </style>
  <style>
    .promo-card {
      border-radius: 15px;
      overflow: hidden;
      transition: transform 0.3s ease;
    }
    .promo-card:hover {
      transform: scale(1.02);
    }
    .promo-img {
      height: 100%;
      object-fit: cover;
    }
    .promo-title {
      font-size: 2rem;
      font-weight: bold;
      color: #FF3E6C;
      text-align: center;
      margin-bottom: 30px;
    }
  </style>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #fff;
    }
    .launch-section {
      text-align: center;
      padding: 40px 20px 10px;
      background: linear-gradient(to bottom, #edf6ff, #ffffff);
    }
    .launch-section h2 {
      font-size: 28px;
      font-weight: 700;
      color: #1b1b1b;
      margin-bottom: 10px;
    }
    .launch-section p {
      color: #666;
      font-size: 16px;
    }

    .search-box {
            border-radius: 20px;
            border: 1px solid #ddd;
            padding: 8px 15px;
            width: 400px;
        }
        .search-btn {
            border-radius: 20px;
            background-color: #ff3e6c;
            color: white;
            border: none;
            padding: 8px 20px;
            margin-left: -40px;
        }

    .launch-images {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
      padding: 20px;
    }
    .launch-images img {
      max-width: 100%;
      border-radius: 12px;
      height: auto;
      object-fit: cover;
      flex: 1 1 300px;
    }   
  </style>
</head>
<body>

<div class="top-banner">
    BEAUTY BONANZA Get Your Amazing Deals!
  </div>

  <nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container-fluid px-4">
      <a class="navbar-brand" href="#">
                <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145"width="100"alt="Nykaa">
            </a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="{{route('base.categories')}}">Categories</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('base.brand') }}">Brands</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Luxe</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Nykaa Fashion</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('base.blog') }}">Beauty Advice</a></li>
        </ul>
        <form class="d-flex me-3">
                    <input class="search-box" type="search" placeholder="Search for products...">
                    <button class="search-btn" type="submit"><i class="bi bi-search"></i></button>
                </form>
        @guest
        <a href="{{ route('base.register') }}" class="btn btn-secondary me-2">Sign up</a>
        <a href="{{ route('base.login') }}" class="btn btn-primary me-2">Sign in</a>
        @endguest
        @auth
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-fill"></i>{{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">{{auth()->user()->email}}</a></li>
              <li><a class="dropdown-item" href="{{route('base.profile')}}">My Profile</a></li>
              <li><a class="dropdown-item" href="#">Orders</a></li>
              <li><a class="dropdown-item" href="{{route('base.wishlist')}}">Wishlist</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
            </ul>
          </li>
        </ul>
      
       
        <a href="{{route('base.cart')}}" class="btn"><i class="bi bi-bag"></i></a>
        @endauth
      </div>
    </div>
  </nav>


  <div class="category-bar text-center">
    <a href="#">Makeup</a>
    <a href="#">Skin</a>
    <a href="#">Hair</a>
    <a href="#">Appliances</a>
    <a href="#">Bath & Body</a>
    <a href="#">Natural</a>
    <a href="#">Mom & Baby</a>
    <a href="#">Health & Wellness</a>
    <a href="#">Men</a>
    <a href="#">Fragrance</a>
    <a href="#">Lingerie & Accessories</a>
    <a href="{{ route('base.offer') }}" class="text-danger fw-bold">SALE</a>
  </div>

<x-banner/>
 
 @section('content')
    @show




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>