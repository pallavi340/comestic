<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Wishlist | Nykaa</title>
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
    
    /* Wishlist Page */
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
    
    .wishlist-container {
      background: white;
      border-radius: 10px;
      padding: 25px;
      box-shadow: 0 2px 15px rgba(0,0,0,0.05);
    }
    
    .product-card {
      border: 1px solid #eee;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 20px;
      transition: all 0.3s;
    }
    
    .product-card:hover {
      border-color: var(--nykaa-pink);
      box-shadow: 0 3px 10px rgba(252, 39, 121, 0.1);
    }
    
    .product-image {
      width: 100%;
      height: 180px;
      object-fit: contain;
      border-radius: 5px;
    }
    
    .brand-name {
      color: #666;
      font-size: 0.9rem;
      margin-bottom: 5px;
    }
    
    .product-name {
      font-weight: 500;
      margin-bottom: 10px;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
    
    .product-price {
      font-weight: bold;
      color: var(--nykaa-dark);
    }
    
    .original-price {
      text-decoration: line-through;
      color: #999;
      font-size: 0.9rem;
      margin-left: 5px;
    }
    
    .discount-percent {
      color: #388e3c;
      font-size: 0.9rem;
      margin-left: 5px;
    }
    
    .action-btn {
      width: 100%;
      margin-top: 10px;
    }
    
    .move-to-bag {
      background-color: var(--nykaa-pink);
      color: white;
      border: none;
    }
    
    .remove-btn {
      background-color: white;
      color: var(--nykaa-pink);
      border: 1px solid var(--nykaa-pink);
    }
    
    .empty-wishlist {
      text-align: center;
      padding: 50px 0;
    }
    
    .empty-wishlist img {
      width: 150px;
      margin-bottom: 20px;
    }
    
    .empty-wishlist h4 {
      color: var(--nykaa-dark);
      margin-bottom: 15px;
    }
    
    .empty-wishlist p {
      color: #666;
      margin-bottom: 25px;
    }
    
    .shop-now-btn {
      background-color: var(--nykaa-pink);
      color: white;
      padding: 10px 30px;
      border-radius: 4px;
      text-decoration: none;
    }
    
    .section-title {
      color: var(--nykaa-dark);
      border-bottom: 1px solid #eee;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }
    
    .wishlist-count {
      color: var(--nykaa-pink);
      font-weight: bold;
    }

    .hover-shadow:hover {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.wishlist-img {
    height: 220px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.wishlist-card:hover .wishlist-img {
    transform: scale(1.02);
}

.hover-shadow:hover {
    box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.1) !important;
}

  </style>
</head>
<body>
<header class="nykaa-header">
  <div class="container">
    <div class="row py-2 align-items-center d-none d-md-flex">
      <div class="col-md-2">
       <a class="navbar-brand" href="{{route("base.home") }}">
          <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" width="90" alt="Your Brand Logo" class="brand-logo">
        </a>
      </div>
      <div class="col-md-6">
        <div class="search-bar d-flex">
          <input type="text" name="search" placeholder="Search for products, brands and more...">
          <button><i class="fas fa-search"></i></button>
        </div>
      </div>
      <div class="col-md-4 text-end header-icons">
        <a href="#"><i class="far fa-user"></i> {{auth()->user()->name}}</a>
        <a href="#" class="active"><i class="far fa-heart"></i></a>
        <a href="#">
          <i class="fas fa-shopping-bag"></i>
          <span class="badge">2</span>
        </a>
      </div>
    </div>
    
    <div class="row py-2 align-items-center d-md-none">
      <div class="col-6">
        <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" alt="Nykaa" class="nykaa-logo" style="height: 30px;">
       
      </div>
      <div class="col-6 text-end header-icons">
        <a href="" class="me-3"><i class="fas fa-search"></i></a>
        <a href=""><i class="far fa-heart"></i></a>
        <a href="{{route('base.cart')}}" class="ms-3"><i class="fas fa-shopping-bag"></i></a>
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


<div class="container my-4">
  <div class="row">
    
 
    <div class="col-md-3 mb-4">
      <div class="bg-white p-3 rounded shadow-sm">
        <h6 class="fw-bold mb-3" style="color: var(--nykaa-pink);">Account</h6>
        <ul class="list-unstyled">
  <li>
    <a href="{{ route('base.profile') }}" class="sidebar-option py-2 d-block text-decoration-none text-dark">
      <i class="far fa-user me-2"></i>My Profile
    </a>
  </li>
  <li>
    <a href="wallet.html" class="sidebar-option py-2 d-block text-decoration-none text-dark">
      <i class="far fa-credit-card me-2"></i>My Wallet
    </a>
  </li>
  <li>
    <a href="{{route('base.order')}}" class="sidebar-option py-2 d-block text-decoration-none text-dark">
      <i class="fas fa-shopping-bag me-2"></i>My Orders
    </a>
  </li>
  <li>
    <a href="{{ route('base.wishlist') }}" class="sidebar-option py-2 d-block text-decoration-none text-dark">
      <i class="far fa-heart me-2"></i>My Wishlist
    </a>
  </li>
  <li>
    <a href="payments.html" class="sidebar-option py-2 d-block text-decoration-none text-dark">
      <i class="fas fa-wallet me-2"></i>My Saved Payment
    </a>
  </li>
  <li>
    <a href="logout.html" class="sidebar-option py-2 d-block text-decoration-none text-dark">
      <i class="fas fa-sign-out-alt me-2"></i>Log Out
    </a>
  </li>
</ul>
      </div>
    </div>

    <div class="col-md-9">
      <div class="wishlist-container">
        <h4 class="section-title">My Wishlist <span class="wishlist-count">({{count($wishlist)}})</span></h4>
        
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
    @if($wishlist->isEmpty())
        <div class="col-12">
            <div class="alert alert-info text-center py-5 fs-5 rounded shadow-sm">
                <i class="bi bi-heart-slash fs-3 d-block mb-3 text-danger"></i>
                Your wishlist is empty.
            </div>
        </div>
    @else
        @foreach($wishlist as $item)
            <div class="col">
                <div class="card h-100 border-0 shadow-sm wishlist-card hover-shadow position-relative">
                    <img src="{{ $item->product->image ? asset('storage/' . $item->product->image) : asset('images/default.png') }}"
                         class="card-img-top wishlist-img rounded-top"
                         alt="{{ $item->product->title }}">

                    <div class="card-body d-flex flex-column p-3">
                        <h6 class="card-title fw-bold text-truncate mb-1">{{ $item->product->title }}</h6>

                        <div class="mb-2">
                            <span class="text-muted small">MRP: </span>
                            <span class="text-secondary small"><del>₹{{ number_format($item->product->price, 2) }}</del></span><br>
                            <span class="text-danger fw-semibold">₹{{ number_format($item->product->discount_price, 2) }}</span>
                        </div>

                        <p class="text-muted small mb-3">{{ Str::limit($item->product->description, 80) }}</p>

                        <div class="mt-auto">
                            <form action="{{route('wishlist.remove', $item->id)}}" method="POST" class="d-grid">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm w-100 rounded-pill">
                                    <i class="bi bi-trash"></i> Remove
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>


      </div>
    </div>
  </div>
</div>
<footer class="bg-light text-dark pt-5 pb-4">
  <div class="container text-md-left">
    <div class="row text-md-left">
      
      <!-- Company Info -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
       <a class="navbar-brand" href="#">
                <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145"width="100"alt="Nykaa">
            </a>
        <p>Shop beauty products online from top brands in makeup, skincare, haircare, and more. 100% authentic. COD available.</p>
      </div>

      <!-- Products -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold">Products</h5>
        <p><a href="#" class="text-dark text-decoration-none">Makeup</a></p>
        <p><a href="#" class="text-dark text-decoration-none">Skincare</a></p>
        <p><a href="#" class="text-dark text-decoration-none">Haircare</a></p>
        <p><a href="#" class="text-dark text-decoration-none">Fragrances</a></p>
      </div>

      <!-- Useful Links -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold">Useful Links</h5>
        <p><a href="#" class="text-dark text-decoration-none">Your Account</a></p>
        <p><a href="#" class="text-dark text-decoration-none">Track Order</a></p>
        <p><a href="#" class="text-dark text-decoration-none">Shipping</a></p>
        <p><a href="#" class="text-dark text-decoration-none">Help</a></p>
      </div>

      <!-- Contact -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold">Contact</h5>
        <p><i class="bi bi-house-door-fill me-2"></i> Mumbai, India</p>
        <p><i class="bi bi-envelope-fill me-2"></i> support@nykaa.com</p>
        <p><i class="bi bi-phone-fill me-2"></i> +91 9876543210</p>
      </div>

    </div>

    <!-- Social Media & Copyright -->
    <hr class="mb-4">
    <div class="row align-items-center">
      <div class="col-md-7 col-lg-8">
        <p class="text-md-start">© 2025 Nykaa . All Rights Reserved.</p>
      </div>
      <div class="col-md-5 col-lg-4">
        <div class="text-md-end">
          <a href="#" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-dark me-3"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-dark me-3"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="text-dark"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>