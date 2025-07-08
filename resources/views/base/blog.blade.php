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
</nav>
<!-- Blog Header Banner -->
<section class="py-5 text-center" style="background: linear-gradient(135deg, #ffe6f0, #fff0f5);">
    <div class="container">
        <h1 class="display-5 fw-bold text-dark">Beauty & Glamour Blog</h1>
        <p class="lead text-muted">Explore beauty tips, skincare secrets, product guides & glam inspiration ✨</p>
        <a href="#latest-blogs" class="btn btn-outline-dark mt-3">Scroll to Blogs ↓</a>
    </div>
</section>

<div class="container">
    <h1 class="mb-4">Our Blog</h1>
    <div class="row">
        @foreach($blogs as $blog)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if($blog->image)
                    <img src="{{ asset('storage/'.$blog->image) }}" class="card-img-top" alt="{{ $blog->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p class="card-text">{{ Str::limit($blog->content, 100) }}</p>
                    <a href="{{ route('blogs.show', $blog->slug) }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>