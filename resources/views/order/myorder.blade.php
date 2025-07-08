<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Order | Nykaa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .form-check-input:checked {
            background-color: #e60073;
            border-color: #e60073;
        }

        .btn-disabled {
            background-color: #d3d3d3;
            color: #777;
            border: none;
            cursor: not-allowed;
        }

        .dropdown-toggle::after {
            margin-left: 0.5rem;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #e60073;
        }

        .form-box {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
    </style>
    <style>
  :root {
    --primary-pink: #fc2779;
    --light-grey: #f8f8f8;
    --dark-text: #333;
  }

  .navbar {
    background-color: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    position: sticky;
    top: 0;
    z-index: 1000;
  }

  .navbar-brand img {
    max-height: 40px;
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

  .nav-item {
    color: var(--dark-text);
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: 12px;
    transition: color 0.3s;
    position: relative;
  }

  .nav-item i {
    font-size: 18px;
    margin-bottom: 2px;
  }

  .nav-item:hover {
    color: var(--primary-pink);
  }

  .cart-icon {
    position: relative;
  }

  .cart-count {
    position: absolute;
    top: -6px;
    right: -10px;
    background-color: var(--primary-pink);
    color: white;
    border-radius: 50%;
    width: 18px;
    height: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 10px;
    font-weight: bold;
  }

  .mobile-menu {
    display: none;
    font-size: 22px;
    color: var(--dark-text);
    cursor: pointer;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .search-bar {
      display: none;
    }

    .nav-links {
      display: none;
    }

    .mobile-menu {
      display: block;
    }
  }
  
</style>

     
</head>
<body>
    
<!-- Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<nav class="navbar">
  <div class="container d-flex align-items-center justify-content-between py-2">
    
    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" width="100" alt="Brand Logo">
    </a>


    <!-- Nav Links -->
    <div class="nav-links d-flex align-items-center gap-4">
      <a href="#" class="nav-item">
        <i class="far fa-user"></i>{{auth()->user()->name}}</a>
     <a href="#" class="nav-item">
        <i class="far fa-heart"></i>
        <span>Wishlist</span>
      </a>
      <a href="#" class="nav-item cart-icon">
        <i class="fas fa-shopping-bag"></i>
        <span>Bag</span>
        <span class="cart-count">2</span>
      </a>
    </div>
  
    <!-- Mobile Menu -->
    <div class="mobile-menu">
      <i class="fas fa-bars"></i>
    </div>
  </div>
</nav>
<style>
  .payment-option {
    transition: all 0.2s ease-in-out;
    cursor: pointer;
  }

  .payment-option:hover {
    background-color: #e9f7f6;
    border-color: #0d9488;
  }

  .form-check-input:checked + .payment-option {
    background-color: #0d9488;
    color: white;
    border-color: #0d9488;
  }
</style>

<div class="container py-5">
  <h4 class="fw-bold mb-4">
    My Orders <span class="badge bg-primary">{{ $orders->count() }}</span>
  </h4>

@forelse ($orders as $order)
  @foreach ($order->orderItems as $item)
    <div class="card border-0 shadow-sm mb-4">
      <div class="card-body">
        {{-- Order Info --}}
        <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
          <div>
            <h6 class="mb-1">
              <strong>Order {{ $order->id }}</strong>
              @if($order->created_at->isToday())
                <span class="badge bg-success ms-2">Delivery Today</span>
              @endif
            </h6>
            <small class="text-muted">
              {{ $order->created_at->format('D, d M Y h:i A') }}
            </small>
          </div>
          <div>
            <span class="badge bg-light text-dark fw-normal">
              Qty: {{ $item->quantity ?? 1 }}
            </span>
          </div>
        </div>

        {{-- Product Info --}}
        <div class="row align-items-center">
          <div class="col-3 col-md-2">
            <img src="{{ asset('storage/' . $item->product->image) }}" class="img-fluid rounded shadow-sm" alt="{{ $item->product->title }}">
          </div>
          <div class="col-9 col-md-6">
            <h6 class="mb-1">{{ $item->product->title }}</h6>
          </div>
          <div class="col-12 col-md-4 text-md-end mt-2 mt-md-0">
            @if($item->product->price != $item->product->discount_price)
              <del class="text-muted">₹{{ $item->product->price }}</del>
            @endif
            <span class="fw-bold text-primary ms-2">₹{{ $item->product->discount_price }}</span>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@empty
  <div class="alert alert-info text-center py-5">
    <i class="bi bi-bag-x-fill fs-2 text-secondary d-block mb-2"></i>
    <strong>No Orders Yet</strong>
    <p class="mb-0">Once you place an order, it will show up here.</p>
  </div>
@endforelse

