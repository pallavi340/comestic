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
  </style>
</head>
<body>

<!-- Nykaa Header -->
<header class="nykaa-header">
  <div class="container">
    <!-- Top Header -->
    <div class="row py-2 align-items-center d-none d-md-flex">
      <div class="col-md-2">
        <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" alt="Nykaa" class="nykaa-logo">
      </div>
      <div class="col-md-6">
        <div class="search-bar d-flex">
          <input type="text" placeholder="Search for products, brands and more...">
          <button><i class="fas fa-search"></i></button>
        </div>
      </div>
      <div class="col-md-4 text-end header-icons">
        <a href="#"><i class="far fa-user"></i></a>
        <a href="#" class="active"><i class="far fa-heart"></i></a>
        <a href="#">
          <i class="fas fa-shopping-bag"></i>
          <span class="badge">2</span>
        </a>
      </div>
    </div>
    
    <!-- Mobile Header -->
    <div class="row py-2 align-items-center d-md-none">
      <div class="col-6">
        <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" alt="Nykaa" class="nykaa-logo" style="height: 30px;">
       
      </div>
      <div class="col-6 text-end header-icons">
        <a href="#" class="me-3"><i class="fas fa-search"></i></a>
        <a href="#"><i class="far fa-heart"></i></a>
        <a href="#" class="ms-3"><i class="fas fa-shopping-bag"></i></a>
      </div>
    </div>
    
    <!-- Navigation -->
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

<!-- Wishlist Content -->
<div class="container my-4">
  <div class="row">
    
    <!-- Left Sidebar -->
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
    <a href="orders.html" class="sidebar-option py-2 d-block text-decoration-none text-dark">
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
        <h4 class="section-title">My Wishlist <span class="wishlist-count">(2 items)</span></h4>
        
    <div class="row">
    @if($wishlist->isEmpty())
        <div class="col-12">
            <div class="alert alert-info">Your wishlist is empty.</div>
        </div>
    @else
        @foreach($wishlist as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    @if($item->product->image)
                        <img src="{{ asset('storage/' . $item->product->image) }}" class="card-img-top" alt="{{ $item->product->name }}">
                    @else
                        <img src="{{ asset('images/default.png') }}" class="card-img-top" alt="No Image">
                    @endif

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $item->product->name }}</h5>
                        <p class="card-text">₹{{ number_format($item->product->price, 2) }}</p>
                        <p class="text-muted">{{ Str::limit($item->product->description, 60) }}</p>
                        
                        <div class="mt-auto">
                            <form action="{{ route('wishlist.remove', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
          
          <!-- Product 2 -->
          <div class="col-md-4">
            <div class="product-card">
              <div class="position-relative">
                <img src="https://images-static.nykaa.com/media/catalog/product/tr:w-220,h-220,cm-pad_resize/4/0/4071270896260_1_1.jpg" alt="Product" class="product-image">
                <button class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2 p-1 rounded-circle">
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <p class="brand-name mt-2">Maybelline</p>
              <h6 class="product-name">Maybelline New York Fit Me Matte+Poreless Liquid Foundation</h6>
              <div class="d-flex align-items-center">
                <span class="product-price">₹599</span>
                <span class="original-price">₹699</span>
                <span class="discount-percent">(14% off)</span>
              </div>
              <button class="btn btn-sm move-to-bag action-btn">MOVE TO BAG</button>
              <button class="btn btn-sm remove-btn action-btn">REMOVE</button>
            </div>
          </div>
          
        

        <!-- Empty Wishlist State (Hidden by default) -->
        <!-- <div class="empty-wishlist d-none">
          <img src="https://images-static.nykaa.com/nykdesignsys-images/emptyWishlist.svg" alt="Empty Wishlist">
          <h4>YOUR WISHLIST IS EMPTY</h4>
          <p>You haven't added anything to your wishlist yet</p>
          <a href="#" class="shop-now-btn">SHOP NOW</a>
        </div> -->
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>