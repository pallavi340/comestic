<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart | Nykaa</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom styles */
        .navbar-brand img {
            height: 40px;
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
    <!-- Top Announcement Bar -->
    <div class="bg-dark text-white py-2 text-center">
        <small>Free delivery on orders above ₹499 | 10% off on your first order</small>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
             <a class="navbar-brand" href="#">
                <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145"width="100"alt="Nykaa">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown">
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
                        <a class="nav-link" href="#">Luxe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nykaa Fashion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beauty Advice</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <div class="input-group me-3">
                        <input type="text" class="form-control" placeholder="Search for products...">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="#" class="mx-2 text-dark"><i class="fas fa-user"></i></a>
                        <a href="#" class="mx-2 text-dark"><i class="fas fa-heart"></i></a>
                        <a href="#" class="mx-2 text-dark position-relative">
                            <i class="fas fa-shopping-bag"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="container my-5">
   
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Cart</li>
            </ol>
        </nav>

        <h2 class="mb-4">My Cart (4)</h2>

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                  
                       @foreach($order->items as $item)
<div class="row cart-item py-3 border-bottom align-items-center">
    <div class="col-4 col-md-2 text-center">
        <img src="{{ asset('storage/' . optional($item->product)->image ?? 'images/default.png') }}" alt="Product" class="img-fluid rounded">
    </div>
    <div class="col-8 col-md-10">
        <div class="row">
            <div class="col-md-6">
                <h5 class="mb-1">{{ optional($item->product)->title ?? 'Product not found' }}</h5>
                <p class="text-muted mb-2">Shade: Crimson Silk</p>
                <div class="mb-2">
                    <small class="text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </small>
                    <small class="text-muted"> (124)</small>
                </div>
                <span class="badge bg-danger">20% OFF</span>
            </div>
            <div class="col-md-3 d-flex align-items-center">
                <div class="input-group quantity-selector w-75">
                    <button class="btn btn-outline-secondary" type="button">-</button>
                    <input type="text" class="form-control text-center" value="{{ $item->qty }}">
                    <button class="btn btn-outline-secondary" type="button">+</button>
                </div>
            </div>
            <div class="col-md-3 text-end">
                <h5 class="mb-0 text-success">₹{{ optional($item->product)->discount_price ?? '0.00' }}</h5>
                <small class="text-muted text-decoration-line-through d-block">₹{{ optional($item->product)->price ?? '0.00' }}</small>
                  <button type="submit" class="btn btn-sm btn-outline-danger mt-2">Remove</button>

            </div>
         </div>
    </div>
@endforeach
</div>    


                           
                
                        <div class="empty-cart">
                            <a href="{{route('base.home')}}" class="btn btn-danger">Continue Shopping</a>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Apply Coupon</h5>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter coupon code">
                            <button class="btn btn-danger" type="button">Apply</button>
                        </div>
                        <div class="alert alert-success d-none" role="alert">
                            Coupon applied successfully! ₹100 discount added.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="card summary-card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Order Summary</h5>
                        
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal (3 Items)</span>
                            <span>₹3,297</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Discount</span>
                            <span class="text-success">-₹1,100</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Shipping</span>
                            <span class="text-success">FREE</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Taxes</span>
                            <span>₹198</span>
                        </div>
                        
                        <hr>
                        
                        <div class="d-flex justify-content-between mb-4">
                            <h5>Total Amount</h5>
                            <h5>₹2,395</h5>
                        </div>
                        
                        <button class="btn btn-checkout btn-lg w-100 mb-3">Proceed to Checkout</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Delivery Options</h5>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="deliveryOption" id="standardDelivery" checked>
                            <label class="form-check-label" for="standardDelivery">
                                Standard Delivery (3-5 business days) - FREE
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="deliveryOption" id="expressDelivery">
                            <label class="form-check-label" for="expressDelivery">
                                Express Delivery (1-2 business days) - ₹99
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>