<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makeup Products | Nykaa Clone</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom styles */
        .navbar-brand img {
            height: 40px;
        }
        .breadcrumb {
            background-color: transparent;
            padding: 0;
        }
        .filter-section {
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }
        .filter-title {
            font-weight: 600;
            margin-bottom: 10px;
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 5px;
        }
        .filter-option {
            margin-bottom: 5px;
        }
        .product-card {
            border: none;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        .product-card img {
            height: 200px;
            object-fit: cover;
        }
        .discount-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff3f6c;
            color: white;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
        }
        .brand-logo {
            height: 60px;
            object-fit: contain;
            margin: 10px;
        }
        .category-banner {
            background-color: #f8e8ee;
            padding: 30px 0;
            margin-bottom: 30px;
        }
        .pagination .page-item.active .page-link {
            background-color: #ff3f6c;
            border-color: #ff3f6c;
        }
        .pagination .page-link {
            color: #ff3f6c;
        }
        .sort-dropdown .dropdown-toggle::after {
            display: none;
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
            <a class="navbar-brand" href="{{ route('base.home') }}">
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
    <li><a class="dropdown-item" href="{{ route('base.categories', ['category' => 'makeup']) }}">Makeup</a></li>
    <li><a class="dropdown-item" href="{{ route('base.categories', ['category' => 'skincare']) }}">Skincare</a></li>
    <li><a class="dropdown-item" href="{{ route('base.categories', ['category' => 'haircare']) }}">Haircare</a></li>
    <li><a class="dropdown-item" href="{{ route('base.categories', ['category' => 'bathbody']) }}">Bath & Body</a></li>
    <li><a class="dropdown-item" href="{{ route('base.categories', ['category' => 'fragrance']) }}">Fragrance</a></li>
</ul>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('base.brand') }}">Brands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Luxe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Nykaa Fashion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('base.blog') }}">Beauty Advice</a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-fill"></i>{{auth()->user()->name}}
            </a>
                        <a href="{{ route('base.wishlist') }}" class="mx-2 text-dark"><i class="fas fa-heart"></i></a>
                        <a href="" class="mx-2 text-dark"><i class="fas fa-shopping-bag"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Category Banner -->
    <section class="category-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="display-5 fw-bold">Makeup</h1>
                    <p class="lead">Discover the perfect products to enhance your beauty</p>
                </div>
                <div class="col-md-4 text-end">
                    <img src="https://template.canva.com/EAFED37ORuA/2/0/1600w-u9g5B3NCDfo.jpg" alt="Makeup" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

<div class="container">
    <div class="row">
        <!-- Filters -->
        <div class="col-md-3">
            <form method="GET" action="{{ route('base.categories') }}">
                <h5>Filters</h5>

                <!-- Brands -->
                <h6 class="mt-3">Brand</h6>
                @foreach(['lakme', 'maybelline', 'huda', 'nyx'] as $brand)
                    <div>
                        <input type="checkbox" name="brand[]" value="{{ $brand }}"
                        {{ in_array($brand, request()->get('brand', [])) ? 'checked' : '' }}>
                        {{ ucfirst($brand) }}
                    </div>
                @endforeach

                <!-- Price -->
                <h6 class="mt-3">Price</h6>
                @php
                    $prices = ['under500' => 'Under ₹500', '500to1000' => '₹500-₹1000', '1000to2000' => '₹1000-₹2000', 'above2000' => 'Above ₹2000'];
                @endphp
                @foreach($prices as $key => $label)
                    <div>
                        <input type="checkbox" name="price[]" value="{{ $key }}" 
                        {{ in_array($key, request()->get('price', [])) ? 'checked' : '' }}>
                        {{ $label }}
                    </div>
                @endforeach

                <!-- Discount -->
                <h6 class="mt-3">Discount</h6>
                @foreach([10, 20, 30, 40] as $discount)
                    <div>
                        <input type="checkbox" name="discount[]" value="{{ $discount }}"
                        {{ in_array($discount, request()->get('discount', [])) ? 'checked' : '' }}>
                        {{ $discount }}% & above
                    </div>
                @endforeach

                <button type="submit" class="btn btn-danger w-100 mt-3">Apply Filters</button>
            </form>
        </div>

        <!-- Products -->
        <div class="col-md-9">
            <div class="row">
                @forelse($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top">
                            <div class="card-body">
                                <h6>{{ $product->name }}</h6>
                                <p>Brand: {{ ucfirst($product->brand) }}</p>
                                <p>₹{{ $product->price }}</p>
                                <p>Discount: ₹{{ $product->discount_price }}%</p>
                                <a href="{{ route('base.addtocart', ['slug' => $product->slug]) }}" class="btn btn-outline-danger btn-sm w-100">Add to Bag</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No products found</p>
                @endforelse
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