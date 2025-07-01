<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile | Nykaa</title>
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
    
    <!-- Mobile Header -->
    <div class="row py-2 align-items-center d-md-none">
      <div class="col-6">
        <img src="https://adn-static2.nykaa.com/media/wysiwyg/2019/nykaa-logo.png" alt="Nykaa" class="nykaa-logo" style="height: 30px;">
      </div>
      <div class="col-6 text-end header-icons">
        <a href="#" class="me-3"><i class="fas fa-search"></i></a>
        <a href="#"><i class="fas fa-shopping-bag"></i></a>
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

<!-- Profile Content -->
<div class="container my-4">
  <div class="row">
    
    <!-- Left Sidebar -->
    <div class="col-md-3 mb-4">
      <div class="bg-white p-3 rounded shadow-sm">
        <h6 class="fw-bold mb-3" style="color: var(--nykaa-pink);">Account</h6>
       <ul class="list-unstyled">
  <li>
    <a href="{{ route('base.profile') }}" class="sidebar-option active py-2 d-block text-decoration-none text-dark">
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

    <!-- Right Profile Info -->
    <div class="col-md-9">
      <h4 class="section-title">My Profile</h4>
      
      <!-- Profile Card -->
      <div class="profile-card mb-4 d-flex align-items-center">
        <img src="https://img.freepik.com/premium-photo/cute-little-girls-picture-ai-generated_1003721-472.jpg" alt="Profile" class="profile-image me-4">
        <div>
          <h5 class="fw-bold mb-2">Jagriti Prakash <a href="#" class="edit-btn ms-2"><i class="fas fa-pencil-alt"></i> Edit</a></h5>
          <p class="mb-1"><i class="far fa-envelope me-2" style="color: var(--nykaa-pink);"></i> jagritiprakash17@gmail.com</p>
          <p class="mb-1"><i class="fas fa-mobile-alt me-2" style="color: var(--nykaa-pink);"></i> 8709566070</p>
          <p class="mb-0"><i class="far fa-calendar-alt me-2" style="color: var(--nykaa-pink);"></i> Date of Birth: 17/05/1995</p>
        </div>
      </div>

      <!-- Address Section -->
      <div class="mb-3 d-flex justify-content-between align-items-center">
        <h6 class="fw-bold mb-0"><i class="fas fa-home me-2" style="color: var(--nykaa-pink);"></i>My Addresses</h6>
        <a href="#" class="add-address-btn"><i class="fas fa-plus me-1"></i>ADD NEW ADDRESS</a>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="address-box">
            <span class="badge badge-city mb-2">Purnia</span>
            <h6 class="fw-bold mb-2">Jagriti Prakash</h6>
            <p class="mb-1">Jhil tola chowk near jk public school</p>
            <p class="mb-1">Purnia, Bihar - 854301</p>
            <p class="mb-3">India</p>
            <div class="d-flex">
              <a href="#" class="edit-btn me-3"><i class="fas fa-pencil-alt me-1"></i>Edit</a>
              <a href="#" class="edit-btn"><i class="fas fa-trash-alt me-1"></i>Remove</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="address-box">
            <span class="badge badge-city mb-2">Work</span>
            <h6 class="fw-bold mb-2">Jagriti Prakash</h6>
            <p class="mb-1">Office No. 45, Tech Park</p>
            <p class="mb-1">Sector 5, Salt Lake</p>
            <p class="mb-1">Kolkata, West Bengal - 700091</p>
            <p class="mb-3">India</p>
            <div class="d-flex">
              <a href="#" class="edit-btn me-3"><i class="fas fa-pencil-alt me-1"></i>Edit</a>
              <a href="#" class="edit-btn"><i class="fas fa-trash-alt me-1"></i>Remove</a>
            </div>
          </div>
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