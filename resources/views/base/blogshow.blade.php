<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') | {{ env('APP_NAME') }}</title>
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
        <a class="navbar-brand fw-bold text-pink" href="{{ url('/') }}">
            <i class="bi bi-gem text-danger me-1"></i> GlowUp Cosmetics
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
                    <a class="nav-link" href="{{ url('/shop') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('base.blog') }}">Blog</a>
                </li>
                
                <!-- Wishlist with red dot -->
                <li class="nav-item position-relative me-3">
                    <a class="nav-link" href="{{ route('wishlist.index') }}">
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
                    <a class="nav-link" href="{{ route('cart.index') }}">
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
<div class="container">
    <h1 class="mb-3">{{ $blog->title }}</h1>

    @if($blog->image)
        <img src="{{ asset('storage/'.$blog->image) }}" class="img-fluid mb-4" alt="{{ $blog->title }}">
    @endif

    <p>{!! nl2br(e($blog->content)) !!}</p>

    <a href="{{ route('blogs.index') }}" class="btn btn-secondary mt-4">Back to Blog</a>
</div>
@endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>