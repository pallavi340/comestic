@extends('base.header')

@section('title')
Homepage
@endsection

@section('content')
<style>
    :root {
        --nykaa-pink: #ff3f6c;
        --nykaa-dark: #333;
        --nykaa-light: #f8f9fa;
        --nykaa-gray: #6c757d;
    }
    
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #fff;
    }
    
    .promo-title {
        font-family: 'Playfair Display', serif;
        color: var(--nykaa-pink);
        text-align: center;
        margin: 2rem 0;
        font-weight: 700;
        position: relative;
    }
    
    .promo-title:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background: linear-gradient(90deg, var(--nykaa-pink), #ff8da1);
    }
    
    .promo-card {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        border: none;
    }
    
    .promo-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(255,63,108,0.2);
    }
    
    .promo-img {
        height: 200px;
        object-fit: cover;
    }
    
    .launch-section {
        background: linear-gradient(135deg, #fff0f5 0%, #ffeef2 100%);
        padding: 3rem 0;
        margin: 3rem 0;
        text-align: center;
        border-radius: 12px;
    }
    
    .launch-section h2 {
        color: var(--nykaa-pink);
        font-weight: 700;
        margin-bottom: 1rem;
    }
    
    .launch-section p {
        color: var(--nykaa-gray);
        font-size: 1.1rem;
        margin-bottom: 2rem;
    }
    
    .launch-images {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    
    .launch-images img {
        border-radius: 10px;
        max-height: 250px;
        object-fit: cover;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    
    .launch-images img:hover {
        transform: scale(1.02);
    }
    
    .product-section h4 {
        color: var(--nykaa-dark);
        font-weight: 700;
        margin: 2rem 0 1.5rem;
        position: relative;
        padding-left: 15px;
    }
    
    .product-section h4:before {
        content: '';
        position: absolute;
        left: 0;
        top: 5px;
        height: 20px;
        width: 4px;
        background: var(--nykaa-pink);
        border-radius: 2px;
    }
    
    .product-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
    }
    
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(255,63,108,0.15);
    }
    
    .card-img-top {
        height: 250px;
        object-fit: cover;
    }
    
    .card-body {
        padding: 1.25rem;
    }
    
    .card-title {
        font-weight: 600;
        color: var(--nykaa-dark);
        font-size: 1rem;
        margin-bottom: 0.75rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .text-muted {
        font-size: 0.85rem;
    }
    
    .text-danger {
        color: var(--nykaa-pink) !important;
    }
    
    .badge.bg-success {
        background-color: #28a745 !important;
        font-size: 0.7rem;
        padding: 0.35em 0.65em;
    }
    
    footer {
        background-color: #2a2a2a;
        color: white;
    }
    
    footer h5 {
        color: white;
        font-weight: 600;
        margin-bottom: 1.25rem;
        position: relative;
    }
    
    footer h5:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -8px;
        width: 40px;
        height: 2px;
        background: var(--nykaa-pink);
    }
    
    footer a {
        color: #ddd;
        text-decoration: none;
        transition: all 0.3s;
        display: block;
        margin-bottom: 0.5rem;
    }
    
    footer a:hover {
        color: var(--nykaa-pink);
        padding-left: 5px;
    }
    
    .social-icons a {
        display: inline-block;
        width: 36px;
        height: 36px;
        background: #444;
        color: white;
        border-radius: 50%;
        text-align: center;
        line-height: 36px;
        margin-right: 10px;
        transition: all 0.3s;
    }
    
    .social-icons a:hover {
        background: var(--nykaa-pink);
        transform: translateY(-3px);
    }
</style>

@if(Route::currentRouteName() == "base.home")
<div class="container my-5">
    <!-- Promo Section -->
    <h2 class="promo-title">✨ Mid-Year Beauty Lineups ✨</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card promo-card h-100">
                <img src="https://i.pinimg.com/originals/63/41/2d/63412d00c2737a2b0524ffed1e1ef395.jpg" class="card-img-top promo-img" alt="Charlotte Tilbury Offer">
                <div class="card-body text-center">
                    <h5 class="card-title">Charlotte Tilbury</h5>
                    <p class="text-muted">Up to 30% Off</p>
                    <a href="#" class="btn btn-sm btn-outline-danger">Shop Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card promo-card h-100">
                <img src="https://th.bing.com/th/id/OIP.I4Ellq0EX_YbNEk6LXUCgQHaJ3?o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3" class="card-img-top promo-img" alt="Nykaa Wanderlust Offer">
                <div class="card-body text-center">
                    <h5 class="card-title">Nykaa Wanderlust</h5>
                    <p class="text-muted">Bestsellers at 25% Off</p>
                    <a href="#" class="btn btn-sm btn-outline-danger">Shop Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card promo-card h-100">
                <img src="https://i.pinimg.com/736x/6e/e1/d1/6ee1d15825b12701e27d89d5f3508ed6.jpg" class="card-img-top promo-img" alt="Dot & Key Offer">
                <div class="card-body text-center">
                    <h5 class="card-title">Dot & Key</h5>
                    <p class="text-muted">Buy 1 Get 1 Free</p>
                    <a href="#" class="btn btn-sm btn-outline-danger">Shop Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- New Launch Section -->
    <section class="launch-section">
        <h2>💖 New Launch Alert!</h2>
        <p>Discover the latest drops now</p>

        <div class="launch-images">
            <img src="https://png.pngtree.com/background/20230414/original/pngtree-makeup-skin-care-products-cosmetics-beauty-photography-advertising-background-picture-image_2424108.jpg" width="350" alt="New Makeup Collection">
            <img src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExa3ZkZHR0a2N2MjVnZTl2cnh0ajh6ajI3NGVhZjdxNnBzMXZpYWNncyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/gF7rF4HEJ7W33jMsfc/giphy.gif" width="350" alt="Skincare Routine">
        </div>
        
        <div class="mt-4">
            <a href="#" class="btn btn-danger px-4">View All New Arrivals</a>
        </div>
    </section>
@endif

<!-- All Products Section -->
<div class="product-section">
    <h4 class="fw-bold mb-4">🛍 All Products</h4>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        @forelse ($products as $item)
            <div class="col">
                <div class="card h-100 product-card">
                    <div class="position-relative">
                        <img src="{{ asset('storage/' . $item->image) }}"
                             class="card-img-top"
                             alt="{{ $item->title }}">
                        @if($item->discount_price)
                        <span class="badge bg-danger position-absolute top-0 end-0 m-2">50% OFF</span>
                        @endif
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ Str::limit($item->title, 45) }}</h5>
                        <p class="text-muted mb-2"><i class="bi bi-clipboard-fill"></i> 40ml</p>
                        <span class="text-danger fw-bold me-2">{{ $item->brand}}</span>

                        <div class="d-flex align-items-center mt-2">
                            <span class="text-primary fw-bold me-2">₹{{ $item->discount_price }}</span>
                            <del class="text-muted small">₹{{ $item->price }}</del>
                        </div>
                        
                        <div class="d-grid mt-3">
                            <a href="{{route('base.productView', $item->slug)}}" class="btn btn-outline-danger btn-sm">Product view</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/no-product-found-7888066-6386217.png" alt="No products found" style="max-height: 200px;" class="mb-4">
                <h2 class="fw-bold text-muted">No Products Found</h2>
                <p class="text-secondary">Please try a different category or keyword.</p>
                <a href="{{ route('base.home') }}" class="btn btn-danger mt-3">Continue Shopping</a>
            </div>
        @endforelse
    </div>
</div>


<!-- Footer -->
<footer class="bg-dark text-white pt-5 pb-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <a class="navbar-brand mb-3" href="{{route('base.home')}}">
                    <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" width="120" alt="Nykaa">
                </a>
                <p class="text-muted">Shop beauty products online from top brands in makeup, skincare, haircare, and more. 100% authentic. COD available.</p>
                <div class="mt-3">
                    <h5>Download App</h5>
                    <div class="d-flex mt-2">
                        <a href="#" class="me-2"><img src="https://via.placeholder.com/120x40/333/ffffff?text=App+Store" alt="App Store" style="height: 40px;"></a>
                        <a href="#"><img src="https://via.placeholder.com/120x40/333/ffffff?text=Play+Store" alt="Play Store" style="height: 40px;"></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 mb-4">
                <h5>Shop</h5>
                <a href="#" class="text-white-50">Makeup</a>
                <a href="#" class="text-white-50">Skincare</a>
                <a href="#" class="text-white-50">Haircare</a>
                <a href="#" class="text-white-50">Fragrances</a>
                <a href="#" class="text-white-50">Bath & Body</a>
                <a href="#" class="text-white-50">Men's Care</a>
            </div>

            <div class="col-lg-2 col-md-6 mb-4">
                <h5>Help</h5>
                <a href="#" class="text-white-50">Your Account</a>
                <a href="#" class="text-white-50">Track Order</a>
                <a href="#" class="text-white-50">Shipping</a>
                <a href="#" class="text-white-50">Returns</a>
                <a href="#" class="text-white-50">FAQs</a>
            </div>

            <div class="col-lg-2 col-md-6 mb-4">
                <h5>About</h5>
                <a href="#" class="text-white-50">Our Story</a>
                <a href="#" class="text-white-50">Careers</a>
                <a href="#" class="text-white-50">Press</a>
                <a href="#" class="text-white-50">Blog</a>
                <a href="#" class="text-white-50">Corporate</a>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <h5>Contact</h5>
                <p class="text-white-50"><i class="bi bi-house-door-fill me-2"></i> Mumbai, India</p>
                <p class="text-white-50"><i class="bi bi-envelope-fill me-2"></i> support@nykaa.com</p>
                <p class="text-white-50"><i class="bi bi-phone-fill me-2"></i> +91 9876543210</p>
                
                <h5 class="mt-4">Follow Us</h5>
                <div class="social-icons mt-2">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                    <a href="#"><i class="bi bi-pinterest"></i></a>
                </div>
            </div>
        </div>

        <hr class="my-4 bg-secondary">

        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0 text-white-50">© 2025 Nykaa. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="#" class="text-white-50 me-3">Privacy Policy</a>
                <a href="#" class="text-white-50 me-3">Terms of Use</a>
                <a href="#" class="text-white-50">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

@endsection