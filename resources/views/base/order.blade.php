<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders | Nykaa</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        :root {
            --nykaa-pink: #fc2779;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f9f9f9;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(to right, #fff, #ffe6ef);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .navbar-container {
            max-width: 1200px;
            margin: auto;
            padding: 12px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: var(--nykaa-pink);
            font-weight: 700;
            font-size: 26px;
            text-decoration: none;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .search-bar {
            flex-grow: 1;
            margin: 0 20px;
            position: relative;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            border: 1px solid #ddd;
            border-radius: 25px;
            outline: none;
            font-size: 14px;
        }

        .search-bar i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #888;
        }

        .nav-links {
            display: flex;
            gap: 25px;
        }

        .nav-link {
            text-decoration: none;
            color: #555;
            font-size: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: 0.3s;
        }

        .nav-link i {
            font-size: 18px;
            margin-bottom: 4px;
        }

        .nav-link:hover {
            color: var(--nykaa-pink);
            transform: translateY(-2px);
        }

        .cart-icon {
            position: relative;
        }

        .cart-count {
            position: absolute;
            top: -6px;
            right: -8px;
            background-color: var(--nykaa-pink);
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 10px;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1);}
            50% {transform: scale(1.2);}
            100% {transform: scale(1);}
        }

        .mobile-menu {
            display: none;
            font-size: 20px;
            cursor: pointer;
            color: var(--nykaa-pink);
        }

        .mobile-menu:hover {
            transform: rotate(90deg);
        }

        /* Main Content */
        .main-container {
            max-width: 1200px;
            margin: 30px auto;
            display: flex;
            gap: 20px;
            padding: 0 15px;
        }

        /* Sidebar */
        .sidebar {
            flex: 0 0 250px;
        }

        .sidebar .list-unstyled {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .sidebar-option {
            padding: 10px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            color: #555;
        }

        .sidebar-option:hover {
            background-color: #fceaf1;
            color: var(--nykaa-pink);
        }

        .sidebar-option.active {
            background-color: #ffe6ef;
            color: var(--nykaa-pink);
            font-weight: 600;
        }

        /* Content Area */
        .content-area {
            flex: 1;
        }

        .header h1 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .account-tabs {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
            border-bottom: 1px solid #ddd;
        }

        .tab {
            padding-bottom: 10px;
            cursor: pointer;
            color: #555;
            position: relative;
        }

        .tab.active {
            color: var(--nykaa-pink);
        }

        .tab.active::after {
            content: '';
            width: 100%;
            height: 2px;
            background: var(--nykaa-pink);
            position: absolute;
            bottom: 0;
            left: 0;
        }

        /* Order Cards */
        .order-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.06);
            margin-bottom: 25px;
            transition: 0.3s;
        }

        .order-card:hover {
            transform: translateY(-5px);
        }

        .order-header {
            background-color: #fff7fa;
            border-bottom: 1px solid #f2c5d9;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .order-info {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
        }

        .order-info div span:first-child {
            color: #777;
            font-size: 13px;
        }

        .order-info div span:last-child {
            display: block;
            font-weight: 600;
            color: #333;
        }

        .order-status {
            padding: 6px 12px;
            border-radius: 4px;
            font-weight: 600;
            border: 1px solid;
        }

        .status-delivered {
            background: #e3f7e8;
            border-color: #00a651;
            color: #00a651;
        }

        .status-shipped {
            background: #fff8e6;
            border-color: #ffb800;
            color: #ffb800;
        }

        .status-processing {
            background: #e6f3ff;
            border-color: #0077cc;
            color: #0077cc;
        }

        .order-items {
            padding: 20px;
        }

        .order-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }

        .order-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .item-image img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }

        .item-details .item-name {
            font-weight: 600;
            color: #333;
        }

        .item-details .item-brand {
            font-size: 13px;
            color: #777;
        }

        .item-details .item-price {
            font-weight: 600;
            margin-top: 3px;
            color: #333;
        }

        .item-quantity {
            font-size: 13px;
            color: #777;
        }

        .order-actions {
            padding: 15px 20px;
            border-top: 1px solid #eee;
            display: flex;
            gap: 15px;
            justify-content: end;
        }

        .action-btn {
            padding: 8px 18px;
            border: 1px solid #ddd;
            border-radius: 25px;
            background: white;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }

        .primary-btn {
            background-color: var(--nykaa-pink);
            color: white;
            border-color: var(--nykaa-pink);
        }

        .primary-btn:hover {
            background-color: #d81a63;
        }

        .secondary-btn:hover {
            background-color: #f9f9f9;
            border-color: var(--nykaa-pink);
            color: var(--nykaa-pink);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar-container {
                flex-direction: row;
            }

            .search-bar {
                display: none;
            }

            .nav-links {
                display: none;
            }

            .mobile-menu {
                display: block;
            }

            .main-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }
        }
    </style>
      <style>
    :root {
      --nykaa-pink: #fc2779;
    }

    .navbar {
      background-color: white;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .logo {
      font-size: 24px;
      font-weight: 700;
      color: var(--nykaa-pink);
      text-decoration: none;
    }

    .search-bar {
      flex-grow: 1;
      margin: 0 20px;
      position: relative;
    }

    .search-bar input {
      width: 100%;
      padding: 8px 15px 8px 40px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 14px;
    }

    .search-bar i {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: #666;
    }

    .cart-count {
      position: absolute;
      top: -6px;
      right: -8px;
      background-color: var(--nykaa-pink);
      color: white;
      border-radius: 50%;
      width: 18px;
      height: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 10px;
    }

    .cart-icon {
      position: relative;
    }

    .mobile-menu {
      display: none;
      font-size: 20px;
    }

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


<nav class="navbar">
  <div class="container d-flex align-items-center justify-content-between py-2">
    <!-- Logo -->
     <a class="navbar-brand" href="#">
                <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" width="100" alt="Your Brand Logo" class="brand-logo">
            </a>
   
    <div class="search-bar">
      <i class="fas fa-search"></i>
      <input type="text" placeholder="Search for products, brands and more">
    </div>

  
    <div class="nav-links d-flex align-items-center gap-4">
      <a href="#" class="text-decoration-none text-dark d-flex flex-column align-items-center">
        <i class="far fa-user fs-5"></i>
        <span class="small">{{auth()->user()->name}}</span>
      </a>
      <a href="{{route('base.wishlist')}}" class="text-decoration-none text-dark d-flex flex-column align-items-center">
        <i class="far fa-heart fs-5"></i>
        <span class="small">Wishlist</span>
      </a>
      <a href="{{route('base.cart')}}" class="text-decoration-none text-dark d-flex flex-column align-items-center cart-icon">
        <i class="fas fa-shopping-bag fs-5"></i>
        <span class="small">Bag</span>
        <span class="cart-count">2</span>
      </a>
    </div>
  </div>
</nav>


    <div class="main-container">
        <div class="sidebar">
            <ul class="list-unstyled">
                <li class="sidebar-option"><i class="far fa-user me-2"></i>My Profile</li>
                <li class="sidebar-option"><i class="far fa-credit-card me-2"></i>My Wallet</li>
                <li class="sidebar-option active"><i class="fas fa-shopping-bag me-2"></i>My Orders</li>
                <li class="sidebar-option"><i class="far fa-heart me-2"></i>My Wishlist</li>
                <li class="sidebar-option"><i class="fas fa-wallet me-2"></i>Saved Payment</li>
                <li class="sidebar-option"><i class="fas fa-sign-out-alt me-2"></i>Log Out</li>
            </ul>
        </div>

        <!-- Content Area -->
        <div class="content-area">
            <div class="header">
                <h1>My Orders</h1>
            </div>

            <div class="account-tabs">
                <div class="tab active">All Orders</div>
                <div class="tab">In Progress</div>
                <div class="tab">Delivered</div>
                <div class="tab">Cancelled</div>
            </div>

            <!-- Example Order -->
@foreach ($orders as $order)
  <div class="order-card mb-4 shadow-sm rounded">
                <div class="order-status fw-bold 
  @if($order->status == 'Delivered') text-success 
  @elseif($order->status == 'Cancelled') text-danger 
  @else text-warning 
  @endif">
  {{ $order->status }}
</div>
    {{-- Order Header --}}
    <div class="order-header d-flex justify-content-between align-items-start flex-wrap p-3 border-bottom bg-light">
      <div class="order-info">
        <div><span class="fw-bold">Order Placed:</span> <span>{{ $order->created_at->format('d F Y') }}</span></div>
        <div><span class="fw-bold">Order ID:</span> <span>{{ $order->id }}</span></div>
        <div><span class="fw-bold">Total:</span> 
          ₹{{ $order->orderItems->sum(fn($item) => $item->product->discount_price * $item->qty) }}
        </div>
      </div>
      <div class="order-status  == 'Delivered') text-success status == 'Cancelled') text-danger text-warning fw-bold"></div>
    </div>

    {{-- Products --}}
   <div class="order-items p-3">
  @foreach ($order->orderItems as $item)
    <div class="order-item d-flex justify-content-between align-items-center mb-3 border p-3 rounded">
      
      {{-- Left: Image + Details --}}
      <div class="d-flex">
        <div class="item-image me-3">
          <img src="{{ asset('storage/' . $item->product->image) }}" alt="" width="80" height="80" class="rounded border" style="object-fit: cover;">
        </div>
        <div class="item-details">
          <div class="item-name fw-semibold">{{ $item->product->title }}</div>
          <div class="item-brand text-muted">Brand: {{ $item->product->brand ?? 'N/A' }}</div>
          <div class="item-price text-secondary">Price: ₹{{ $item->product->price }}</div>
          <div class="item-price text-danger fw-bold">Discounted: ₹{{ $item->product->discount_price }}</div>
          <div class="item-quantity">Qty: {{ $item->qty }}</div>
        </div>
      </div>

      {{-- Right: Cancel Button --}}
      <div class="text-end">
        @if($item->status !== 'cancelled')
          <form action="{{ route('order.cancel', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
          </form>
        @else
          <span class="text-muted">Cancelled</span>
        @endif
      </div>
      
    </div>
  @endforeach
</div>

    <div class="order-actions d-flex justify-content-end gap-2 px-3 pb-3 border-top pt-3">
      <button class="btn btn-outline-secondary btn-sm">Track Order</button>
      <button class="btn btn-primary btn-sm">Rate & Review</button>
    </div>
  </div>
@endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
