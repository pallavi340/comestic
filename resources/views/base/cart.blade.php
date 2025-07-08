<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Nykaa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .product-image-main {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            height: 400px;
            object-fit: contain;
        }
        .product-thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            cursor: pointer;
            border: 1px solid #ddd;
            margin-right: 10px;
            margin-bottom: 10px;
        }
        .product-thumbnail:hover {
            border-color: #ff3e6c;
        }
        .brand-name {
            color: #ff3e6c;
            font-weight: 600;
        }
        .price {
            font-size: 24px;
            font-weight: bold;
        }
        .original-price {
            text-decoration: line-through;
            color: #999;
            margin-right: 10px;
        }
        .discount {
            color: #ff3e6c;
            font-weight: bold;
        }
        .add-to-bag-btn {
            background-color: #ff3e6c;
            color: white;
            border: none;
            padding: 12px 0;
            font-weight: bold;
            width: 100%;
        }
        .add-to-bag-btn:hover {
            background-color: #e6395c;
            color: white;
        }
        .wishlist-btn {
            border: 1px solid #ff3e6c;
            color: #ff3e6c;
            background: white;
            padding: 12px 0;
            font-weight: bold;
            width: 100%;
        }
        .wishlist-btn:hover {
            background-color: #fff0f3;
        }
        .delivery-option {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 10px;
        }
        .nav-tabs .nav-link.active {
            color: #ff3e6c;
            border-bottom: 2px solid #ff3e6c;
        }
        .nav-tabs .nav-link {
            color: #333;
            font-weight: 500;
        }
        .rating-badge {
            background-color: #26a541;
            color: white;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }
        .similar-product-card {
            border: none;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        .similar-product-card:hover {
            transform: translateY(-5px);
        }
        .similar-product-img {
            height: 200px;
            object-fit: contain;
            padding: 10px;
        }
        .navbar {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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
        .nav-link {
            color: #333;
            font-weight: 500;
        }
        .nav-link:hover {
            color: #ff3e6c;
        }
        .cart-icon {
            position: relative;
        }
        .cart-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: #ff3e6c;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 12px;
            display: flex;
            align-items: center;
             justify-content: center;
        }

                .cart-item {
            border-bottom: 1px solid #eee;
            padding: 20px 0;
        }
        .product-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }
        .quantity-selector {
            width: 80px;
            display: inline-block;
        }
        .summary-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
        }
        .discount-badge {
            background-color: #ff3f6c;
            color: white;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
        }
        .btn-checkout {
            background-color: #ff3f6c;
            color: white;
            font-weight: 600;
        }
        .btn-checkout:hover {
            background-color: #e0355c;
            color: white;
        }
        .breadcrumb {
            background-color: transparent;
            padding: 0;
        }
        .empty-cart {
            text-align: center;
            padding: 50px 0;
        }
        .empty-cart-icon {
            font-size: 60px;
            color: #ddd;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top mb-4">
        <div class="container">
          <a class="navbar-brand" href="{{route('base.home')}}">
                <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145"width="100"alt="Nykaa">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Makeup</a></li>
                            <li><a class="dropdown-item" href="#">Skincare</a></li>
                            <li><a class="dropdown-item" href="#">Haircare</a></li>
                            <li><a class="dropdown-item" href="#">Bath & Body</a></li>
                            <li><a class="dropdown-item" href="#">Fragrance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Brands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">New</a>
                    </li>
                </ul>
                <form class="d-flex me-3">
                    <input class="search-box" type="search" placeholder="Search for products...">
                    <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href=""><i class="far fa-user">{{auth()->user()->name}}</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('base.wishlist')}}"><i class="far fa-heart"></i></a>
                    </li>
                    <li class="nav-item cart-icon">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-bag"></i> Bag</a>
                        <span class="cart-count">1</span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @php
        $total_amount = 0;
        $total_discount = 0;
        $total_discount_amount = 0;
        $total_tax = 0;
        $total_payment = 0;
    @endphp
    <div class="container my-5">
       
<div class="container my-5">
  <div class="row align-items-start">
   <h2 class="mb-4">My Cart (1)</h2>
   
    <div class="col-lg-8">
      <div class="card shadow-sm">
            @php
              $total_amount = $total_discount_amount = 0;
            @endphp
         <div class="card-body">
         @if(!$order)
            <div class="alert alert-info text-center py-5 fs-5 rounded shadow-sm">
                <i class="bi bi-heart-slash fs-3 d-block mb-3 text-danger"></i>
                Your Cart is empty.
             </div>
         @else
            @forelse($order->items as $item)
              @php
                $total_amount += $item->qty * $item->product->price;
                $total_discount_amount += $item->qty * $item->product->discount_price;
              @endphp

              <div class="row border-bottom py-4 align-items-center">
                <div class="col-4 col-md-2 text-center">
                  <img src="{{ asset('storage/' . optional($item->product)->image ?? 'images/default.png') }}"
                       class="img-fluid rounded shadow-sm" alt="Product Image">
                </div>


                <div class="col-8 col-md-10">
                  <div class="row">
                    <div class="col-md-6">
                      <h6 class="fw-bold mb-1">{{ optional($item->product)->title ?? 'Product not found' }}</h6>
                      <p class="small text-muted mb-1">Shade: Crimson Silk</p>
                      <div>
                        <small class="text-muted"><del>₹{{ $item->product->price }}</del></small>
                        <small class="fw-bold text-danger">₹{{ $item->product->discount_price }}</small>
                        <span class="badge bg-success ms-2">20% OFF</span>
                      </div>
                    </div>

               
                    <div class="col-md-3 d-flex align-items-center justify-content-center gap-2">
                      <form action="{{ route('cart.update', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="action" value="decrease">
                        <button type="submit" class="btn btn-outline-danger btn-sm">−</button>
                      </form>

                      <span class="fw-bold">{{ $item->qty }}</span>

                      <form action="{{ route('cart.update', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="action" value="increase">
                        <button type="submit" class="btn btn-outline-success btn-sm">+</button>
                      </form>
                    </div>

         
                    <div class="col-md-3 text-md-end mt-3 mt-md-0">
                      <h6 class="text-success mb-1">₹{{ $item->product->discount_price }}</h6>
                      <small class="text-muted text-decoration-line-through">₹{{ $item->product->price }}</small>

                      <form actio="{{ route('cart.remove', $item->id) }}" method="POST" class="mt-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                          <i class="fas fa-trash-alt"></i> Remove
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            @empty
              <p class="text-center text-muted">Your cart is empty.</p>
            @endforelse
          @endif
        </div>
      </div>
    </div>

 
    @php
      $total_discount = $total_amount - $total_discount_amount;
      $total_tax = $total_discount_amount * 0.18;
      $total_payment = $total_discount_amount + $total_tax;
      if ($order->coupon_id) {
          $total_payment -= $order->coupon->amount;
      }
    @endphp

    <div class="col-lg-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="mb-4">Price Summary</h5>

          <div class="d-flex justify-content-between mb-2">
            <span>Total Price</span>
            <span>₹{{ number_format($total_amount, 2) }}</span>
          </div>

          <div class="d-flex justify-content-between mb-2">
            <span>Total Discount</span>
            <span class="text-success">− ₹{{ number_format($total_discount, 2) }}</span>
          </div>

          <div class="d-flex justify-content-between mb-2">
            <span>Total Tax (18%)</span>
            <span>₹{{ number_format($total_tax, 2) }}</span>
          </div>

          @if($order->coupon_id)
            <div class="d-flex justify-content-between mb-2">
              <span>Coupon ({{ $order->coupon->code }})</span>
              <span class="text-danger">− ₹{{ number_format($order->coupon->amount, 2) }}</span>
            </div>
          @endif

          <hr>
          <div class="d-flex justify-content-between mb-3">
            <strong>Total Payment</strong>
            <strong>₹{{ number_format($total_payment, 2) }}</strong>
          </div>

       
          <div class="mb-3">
            @if(!$order->coupon_id)
              <form action="{{ route('coupon.add') }}" method="POST" class="d-flex gap-2">
                @csrf
                <input type="text" name="coupon_code" class="form-control form-control-sm"
                       placeholder="Enter Coupon Code">
                <button class="btn btn-sm btn-danger">Apply</button>
              </form>
            @else
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-success">Applied: <strong>{{ $order->coupon->code }}</strong></span>
                <form action="{{ route('coupon.remove') }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-sm btn-outline-danger">Remove</button>
                </form>
              </div>
            @endif

            @if(session('coupon_error'))
              <div class="text-danger small mt-2">{{ session('coupon_error') }}</div>
            @endif
          </div>

          <div class="d-flex gap-2">
            <a href="{{ route('base.home') }}" class="btn btn-danger btn-sm w-50">More Shopping</a>
            <a href="{{ route('base.checkout') }}" class="btn btn-success btn-sm w-50">Checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>