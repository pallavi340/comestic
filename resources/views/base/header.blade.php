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
  <style>
.slide-glow {
    position: relative;
    display: inline-block;
    animation: slideGlow 1s ease-out forwards;
    opacity: 0;
    left: -30px;
}

@keyframes slideGlow {
    to {
        opacity: 1;
        left: 0;
        text-shadow: 0 0 10px #e60073, 0 0 20px #e60073;
    }
}
</style>
<style>
  .navbar-nav .nav-link {
    font-weight: 500;
    color: #444;
    transition: all 0.3s ease;
  }
  .navbar-nav .nav-link:hover {
    color: #e60073;
    text-decoration: underline;
    text-underline-offset: 4px;
  }
  .search-box {
    width: 250px;
    transition: all 0.3s ease;
  }
  .search-box:focus {
    width: 300px;
    border-color: #e60073;
    box-shadow: 0 0 0 0.2rem rgba(230, 0, 115, 0.25);
  }
  .search-btn {
    background-color: #e60073;
    border-color: #e60073;
  }
  .search-btn:hover {
    background-color: #cc005f;
  }

  /* ❤️ Cart/Wishlist Icon Hover */
  .fa-heart,
  .fa-shopping-cart {
    color: #333;
    transition: 0.3s;
  }
  .fa-heart:hover,
  .fa-shopping-cart:hover {
    color: #e60073;
  }

  /* 🔥 Category Bar Styles */
  .category-bar {
    background: #fff0f5;
    padding: 10px 15px;
    overflow-x: auto;
    white-space: nowrap;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
  }
  .category-bar a {
    display: inline-block;
    color: #555;
    font-weight: 500;
    margin: 0 12px;
    text-decoration: none;
    transition: color 0.3s, border-bottom 0.3s;
    border-bottom: 2px solid transparent;
  }
  .category-bar a:hover {
    color: #e60073;
    border-bottom: 2px solid #e60073;
  }
</style>
</head>
<body>

<div class="top-banner text-white py-2">
  <div class="container d-flex justify-content-between align-items-center">
   <span class="fw-bold text-black slide-glow">BEAUTY BONANZA Get Your Amazing Deals!</span>
    <div class="d-flex gap-4">
      <a href="#" class="text-white text-decoration-none"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <title>mobile icon</title>
           <g opacity=".92" fill="#000">
           <path d="M17.25 3.5v17H6.75v-17h10.5zm.5-1.5H6.25a1 1 0 00-1 1v18a1 1 0 001 1h11.5a1 1 0 001-1V3a1 1 0 00-1-1z"></path>
          <path d="M13 6h-2a.75.75 0 110-1.5h2A.75.75 0 1113 6zM12 19.48a1 1 0 100-2 1 1 0 000 2z"></path>
           </g>
      </svg>
        Get App |</a>
      <a href="#" class="text-white text-decoration-none"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <title>address icon</title>
                                <g opacity=".92" fill="#000">
                                    <path d="M12 8a2.01 2.01 0 110 4 2.01 2.01 0 110-4zm0-1.5a4 4 0 00-.68.06 3.5 3.5 0 00.68 6.93 3.5 3.5 0 000-7v.01z"></path>
                                    <path d="M12 3.5a6.94 6.94 0 012.22.37 6.53 6.53 0 014.28 6.47 6.6 6.6 0 01-1.78 4.49L12 20.24l-4.7-5.38a6.94 6.94 0 01-1.8-4.65A6.62 6.62 0 0112 3.5zM12 2a8.09 8.09 0 00-8 8.21 8.42 8.42 0 002.15 5.61l5.1 5.83a1.001 1.001 0 001.5 0l5.1-5.83A8.05 8.05 0 0020 10.36a8 8 0 00-5.31-7.91A8.34 8.34 0 0012 2z"></path>
                                </g>
                            </svg>

        Location | </a>
      <a href="#" class="text-white text-decoration-none"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <title>giftcard icon</title>
                                <g opacity=".92" fill="#000">
                                    <path d="M16 15.6h2.2a.6.6 0 000-1.2H16a.6.6 0 000 1.2z"></path>
                                    <path d="M21 4.5H3a1 1 0 00-1 1v13a1 1 0 001 1h18a1 1 0 001-1v-13a1 1 0 00-1-1zM3.5 6h4.9v1.66a2.12 2.12 0 00-.69-.47 1.9 1.9 0 00-.39-.11 1.75 1.75 0 00-.4 0c-.258 0-.513.05-.75.15a2.12 2.12 0 00-.69.47 2.23 2.23 0 000 3c.078.077.166.144.26.2H3.5V6zM8 10.32a4.709 4.709 0 01-1.7-.45 1 1 0 010-1.38.86.86 0 01.61-.25.85.85 0 01.61.25A4.47 4.47 0 018 10.32zM8.4 18H3.5v-5.9H7l-1.42 1.38a.59.59 0 000 .85.6.6 0 00.84 0l2-2L8.4 18zm12.1 0H9.6v-5.65l2 2a.6.6 0 00.974-.656.59.59 0 00-.134-.194l-1.39-1.4h9.45V18zM10 10.32a5.16 5.16 0 01.46-1.83.85.85 0 01.61-.25.86.86 0 01.61.25 1 1 0 010 1.37 4.42 4.42 0 01-1.68.46zm10.48.58h-8.15a1.45 1.45 0 00.23-.19 2 2 0 00.26-.33 2.22 2.22 0 000-2.38 1.64 1.64 0 00-.26-.33 1.579 1.579 0 00-.32-.27 1.9 1.9 0 00-.37-.2 2.13 2.13 0 00-1.57 0 2.23 2.23 0 00-.69.47V6H20.5l-.02 4.9z"></path>
                                </g>
                            </svg>
        Gift & Card | </a>
      <a href="#" class="text-white text-decoration-none"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <title>help icon</title>
                                <g opacity=".92" fill="#000">
                                    <path d="M12 4.5c4.1 0 7.5 3.4 7.5 7.5s-3.4 7.5-7.5 7.5-7.5-3.4-7.5-7.5S7.9 4.5 12 4.5zM12 3c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9z"></path>
                                    <path d="M12 16.4a.8.8 0 100-1.6.8.8 0 000 1.6zM12 13.6c-.4 0-.7-.3-.8-.8v-1.4c0-.4.3-.8.8-.8.6 0 1.2-.5 1.2-1.1 0-.6-.5-1.2-1.1-1.2-.6 0-1.2.5-1.2 1.1 0 .4-.3.8-.8.8s-.7-.2-.7-.7c0-1.5 1.2-2.6 2.7-2.6 1.5 0 2.6 1.2 2.6 2.7 0 1.2-.8 2.2-1.9 2.5v.8c-.1.4-.4.7-.8.7z"></path>
                                </g>
                            </svg>
        Help | </a>

    </div>
  </div>
</div>


<nav class="navbar navbar-expand-lg bg-white shadow-sm">
  <div class="container-fluid px-4">
    <a class="navbar-brand" href="#">
      <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" width="100" alt="Nykaa">
    </a>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="{{route('base.categories')}}">Categories</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('base.brand')}}">Brands</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('base.blog') }}">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Nykaa Fashion</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('base.advice')}}">Beauty Advice</a></li>
      </ul>

      <!-- Search -->
      <form action="{{ route('search') }}" method="GET" class="d-flex me-3">
        <input class="search-box form-control" type="search" name="search" placeholder="Search for products..." value="{{ request('search') }}">
        <button class="search-btn btn btn-primary ms-2" type="submit">
          <i class="bi bi-search"></i>
        </button>
      </form>

      @guest
        <a href="{{ route('base.register') }}" class="btn btn-outline-secondary me-2">Sign up</a>
        <a href="{{ route('base.login') }}" class="btn btn-primary me-2">Sign in</a>
      @endguest

      @auth
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
            <i class="bi bi-person-fill me-1"></i>{{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">{{ auth()->user()->email }}</a></li>
            <li><a class="dropdown-item" href="{{route('base.profile')}}">My Profile</a></li>
            <li><a class="dropdown-item" href="#">Orders</a></li>

            <!-- Cart Icon -->
            <li>
              <a href="{{ route('base.cart') }}" class="dropdown-item position-relative">
                <i class="fas fa-shopping-cart fa-lg me-1"></i> Cart
                @if(session('cart_count') > 0)
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  {{ session('cart_count') }}
                </span>
                @endif
              </a>
            </li>

            <!-- Wishlist Icon -->
            <li>
              <a href="{{ route('base.cart') }}" class="dropdown-item position-relative">
                <i class="fas fa-heart fa-lg me-1"></i> Wishlist
                @if(session('wishlist_count') > 0)
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  {{ session('wishlist_count') }}
                </span>
                @endif
              </a>
            </li>

            <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
          </ul>
        </li>
      </ul>

      <!-- Cart Button -->
      <a href="{{route('base.cart')}}" class="btn">
        <i class="bi bi-bag"></i>
      </a>
      @endauth
    </div>
  </div>
</nav>

<!-- 🌈 Scrollable Category Bar -->
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

  @if(Route::currentRouteName() == "base.home")
   <x-banner/>
@endif
 
 @section('content')
    @show

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>