@extends('base.header')

@section('title')
 Homepage
@endsection
@section('content')

<div class="container my-5">
    <h2 class="promo-title">✨ Mid-Year Beauty Lineups ✨</h2>
    <div class="row g-4">
      <div class="col-md-4">
      <div class="card promo-card h-100">
        <img src="https://i.pinimg.com/originals/63/41/2d/63412d00c2737a2b0524ffed1e1ef395.jpg" class="card-img-top promo-img" alt="Charlotte Tilbury Offer">
      </div>
    </div>

    <div class="col-md-4">
      <div class="card promo-card h-100">
        <img src="https://th.bing.com/th/id/OIP.I4Ellq0EX_YbNEk6LXUCgQHaJ3?o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3" class="card-img-top promo-img" alt="Nykaa Wanderlust Offer">
      </div>
    </div>

    <div class="col-md-4">
      <div class="card promo-card h-100">
        <img src="https://i.pinimg.com/736x/6e/e1/d1/6ee1d15825b12701e27d89d5f3508ed6.jpg" class="card-img-top promo-img" alt="Dot & Key Offer">
      </div>
    </div>

<section class="launch-section">
    <h2>💖 New Launch Alert!</h2>
    <p>Discover the latest drops now</p>

    <div class="launch-images">
      <img src="https://png.pngtree.com/background/20230414/original/pngtree-makeup-skin-care-products-cosmetics-beauty-photography-advertising-background-picture-image_2424108.jpg" width="50" alt="Product Image 1">
      <img src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExa3ZkZHR0a2N2MjVnZTl2cnh0ajh6ajI3NGVhZjdxNnBzMXZpYWNncyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/gF7rF4HEJ7W33jMsfc/giphy.gif" alt="Product Image 2">
    </div>

    <!-- Products Grid -->
  <div>
        <h4 class="fw-bold mb-4">🛍 All Products</h4>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @forelse ($products as $item)
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ asset('storage/' . $item->image) }}"
                             class="card-img-top rounded-top"
                             alt="{{ $item->title }}"
                             style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title mb-2">{{ Str::limit($item->title, 45) }}</h5>
                            <p class="text-muted mb-1"><i class="bi bi-clipboard-fill"></i> 40ml</p>
                            <div class="d-flex align-items-center">
                                <span class="text-primary fw-bold me-2">₹{{ $item->discount_price }}</span>
                                <del class="text-muted small">₹{{ $item->price }}</del>
                                <a href="{{route('base.productView', $item->slug)}}" class="badge bg-success ms-2">50% OFF</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <h2 class="fw-bold text-muted">No Products Found</h2>
                    <p class="text-secondary">Please try a different category or keyword.</p>
                </div>
            @endforelse
        </div>
      </div>
</div>
  
  </section>
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

 
@endsection