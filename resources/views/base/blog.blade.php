<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>| {{ env('APP_NAME') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
::after.text-pink {
    color: #e60073 !important;
}
.text-pink:hover {
    color: #cc005f !important;
}
</style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <!-- Logo / Brand -->
        <a class="navbar-brand" href="{{route("base.home") }}">
                <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" width="100" alt="Your Brand Logo" class="brand-logo">
            </a>

        <!-- Toggle for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('base.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('base.categories') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('base.blog') }}">Blog</a>
                </li>
                
                <!-- Wishlist with red dot -->
                <li class="nav-item position-relative me-3">
                    <a class="nav-link" href="{{ route('base.wishlist') }}">
                        <i class="bi bi-heart-fill text-danger"></i>
                        @if(session('wishlist_count') > 0)
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ session('wishlist_count') }}
                            </span>
                        @endif
                    </a>
                </li>

                <!-- Cart with red dot -->
                <li class="nav-item position-relative me-2">
                    <a class="nav-link" href="{{ route('base.cart') }}">
                        <i class="bi bi-bag-fill text-dark"></i>
                        @if(session('cart_count') > 0)
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ session('cart_count') }}
                            </span>
                        @endif
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Blog Posts Grid -->
    <div class="container my-5">
        <div class="row mb-4">
            <div class="col">
                <h3 class="fw-bold">Latest Articles</h3>
                <p class="text-muted">Discover the latest in beauty and lifestyle</p>
            </div>
        </div>
        
<div class="row g-4">
  @foreach($blogs as $blog)
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
        <img src="{{ asset('uploads/blogs/' . $blog->image) }}" class="card-img-top object-fit-cover" style="height: 280px;" alt="{{ $blog->title }}">

        <div class="card-body">
           <span class="category-badge rounded-pill px-3 py-1 mb-2 d-inline-block">{{ $blog->title }}</span>
           <p class="text-muted mb-3">{{ Str::limit(strip_tags($blog->content), 100) }}</p>
        </div>

        <div class="card-footer bg-transparent border-0 d-flex align-items-center gap-2 px-3 pb-3 pt-0">
          <img src="https://randomuser.me/api/portraits/women/33.jpg" class="rounded-circle" width="36" height="36" alt="Author">
          <div class="small">
            <div class="fw-semibold">By Admin</div>
            <div class="text-muted small">{{ $blog->created_at->format('M d, Y') }} • 3 min read</div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>

    <section class="newsletter-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="fw-bold mb-3">Get Beauty Tips Straight to Your Inbox</h3>
                    <p class="mb-4 text-muted">Subscribe to our newsletter for the latest trends, product reviews, and exclusive offers.</p>
                    <form class="row g-2 justify-content-center">
                        <div class="col-md-8">
                            <input type="email" class="form-control form-control-lg" placeholder="Your email address">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-nykaa btn-lg w-100">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <a class="navbar-brand" href="{{route("base.home") }}">
                <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" width="100" alt="Your Brand Logo" class="brand-logo">
            </a>
                    <p>Your ultimate destination for beauty tips, product reviews, and the latest trends in makeup, skincare, haircare, and wellness.</p>
                    <div class="mt-4">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h6 class="mb-4">Categories</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Makeup</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Skincare</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Haircare</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Wellness</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Fragrance</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h6 class="mb-4">About</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Our Story</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contributors</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Careers</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h6 class="mb-4">Legal</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Terms of Use</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Cookie Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h6 class="mb-4">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Trending</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Popular</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">New Arrivals</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Editor's Picks</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 small">&copy; 2023 BeautyBlog. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0 small">Made with <i class="fas fa-heart text-nykaa"></i> for beauty enthusiasts</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>