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

    <!-- Main Content -->
    <div class="container my-5">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Cart</li>
            </ol>
        </nav>

        <h2 class="mb-4">My Cart (3)</h2>

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row cart-item">
                            <div class="col-3 col-md-2">
                                @foreach($order->items as $item)
                                <img src="" alt="Product" class="product-image">
                            </div>
                            <div class="col-9 col-md-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>{{$item->product->title}}</h5>
                                        <p class="text-muted">Shade: Crimson Silk</p>
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
                                        <span class="discount-badge">20% OFF</span>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group quantity-selector">
                                            <button class="btn btn-outline-secondary" type="button">-</button>
                                            <input type="text" class="form-control text-center text-black" value="{{$item->qty}}">
                                            <button class="btn btn-outline-secondary" type="button">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-end">
                                        <h5>₹{{$item->product->price}}</h5>
                                        <small class="text-muted text-decoration-line-through">₹{{$item->product->discount_price}}</small>
                                        <div class="mt-2">
                                            <button class="btn btn-sm btn-outline-danger">Remove</button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Cart Item 2 -->
                        <div class="row cart-item">
                            <div class="col-3 col-md-2">
                                <img src="https://via.placeholder.com/200x200?text=Foundation" alt="Product" class="product-image">
                            </div>
                            <div class="col-9 col-md-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Maybelline Fit Me Matte Foundation</h5>
                                        <p class="text-muted">Shade: 220 Natural Beige</p>
                                        <div class="mb-2">
                                            <small class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </small>
                                            <small class="text-muted"> (342)</small>
                                        </div>
                                        <span class="discount-badge">15% OFF</span>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group quantity-selector">
                                            <button class="btn btn-outline-secondary" type="button">-</button>
                                            <input type="text" class="form-control text-center" value="1">
                                            <button class="btn btn-outline-secondary" type="button">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-end">
                                        <h5>₹499</h5>
                                        <small class="text-muted text-decoration-line-through">₹599</small>
                                        <div class="mt-2">
                                            <button class="btn btn-sm btn-outline-danger">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cart Item 3 -->
                        <div class="row cart-item">
                            <div class="col-3 col-md-2">
                                <img src="https://via.placeholder.com/200x200?text=Eyeshadow" alt="Product" class="product-image">
                            </div>
                            <div class="col-9 col-md-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Huda Beauty Obsessions Eyeshadow Palette</h5>
                                        <p class="text-muted">Shade: Warm Brown</p>
                                        <div class="mb-2">
                                            <small class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </small>
                                            <small class="text-muted"> (89)</small>
                                        </div>
                                        <span class="discount-badge">30% OFF</span>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group quantity-selector">
                                            <button class="btn btn-outline-secondary" type="button">-</button>
                                            <input type="text" class="form-control text-center" value="1">
                                            <button class="btn btn-outline-secondary" type="button">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-end">
                                        <h5>₹2,499</h5>
                                        <small class="text-muted text-decoration-line-through">₹3,499</small>
                                        <div class="mt-2">
                                            <button class="btn btn-sm btn-outline-danger">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Empty Cart Message (Hidden) -->
                        <!-- <div class="empty-cart">
                            <div class="empty-cart-icon">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <h4>Your Cart is Empty</h4>
                            <p>Looks like you haven't added anything to your cart yet</p>
                            <a href="#" class="btn btn-danger">Continue Shopping</a>
                        </div> -->
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
                        
                        <div class="text-center">
                            <small class="text-muted">By placing your order, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></small>
                        </div>
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

        <!-- Recently Viewed -->
        <div class="mt-5">
            <h4 class="mb-4">Recently Viewed</h4>
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x300?text=Product+1" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h6 class="card-title">Lakme Eyeconic Kajal</h6>
                            <p class="card-text">₹199</p>
                            <button class="btn btn-outline-danger btn-sm w-100">Add to Bag</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x300?text=Product+2" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h6 class="card-title">Maybelline Fit Me Concealer</h6>
                            <p class="card-text">₹449</p>
                            <button class="btn btn-outline-danger btn-sm w-100">Add to Bag</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x300?text=Product+3" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h6 class="card-title">NYX Professional Blush</h6>
                            <p class="card-text">₹629</p>
                            <button class="btn btn-outline-danger btn-sm w-100">Add to Bag</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x300?text=Product+4" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h6 class="card-title">The Ordinary Serum</h6>
                            <p class="card-text">₹1,050</p>
                            <button class="btn btn-outline-danger btn-sm w-100">Add to Bag</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h5>Shop</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-dark">Makeup</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Skincare</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Haircare</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Fragrance</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Bath & Body</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Help</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-dark">Contact Us</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">FAQs</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Shipping & Returns</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Terms & Conditions</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>About Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-dark">Our Story</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Careers</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Press</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Connect With Us</h5>
                    <div class="mb-3">
                        <a href="#" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-youtube"></i></a>
                    </div>
                    <h5>Download App</h5>
                    <div>
                        <a href="#" class="d-block mb-2"><img src="https://via.placeholder.com/120x40?text=App+Store" alt="App Store" style="height: 40px;"></a>
                        <a href="#" class="d-block"><img src="https://via.placeholder.com/120x40?text=Play+Store" alt="Play Store" style="height: 40px;"></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p class="mb-0">© 2023 Nykaa Clone. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>