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
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #ff3f6c;
            --secondary-color: #ff6b8b;
            --dark-color: #333;
            --light-color: #f8f9fa;
            --gray-color: #6c757d;
            --light-pink: #fff0f5;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--dark-color);
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif;
        }
        
        .top-bar {
            background-color: var(--primary-color);
            color: white;
            font-size: 0.9rem;
            padding: 8px 0;
        }
        
        .navbar-brand img {
            height: 40px;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--dark-color);
            padding: 8px 15px;
        }
        
        .nav-link:hover, .nav-link:focus {
            color: var(--primary-color);
        }
        
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .dropdown-item {
            padding: 8px 20px;
            font-weight: 500;
        }
        
        .dropdown-item:hover {
            background-color: var(--light-pink);
            color: var(--primary-color);
        }
        
        .search-box {
            border-radius: 20px;
            border: 1px solid #ddd;
            padding-left: 20px;
        }
        
        .search-btn {
            border-radius: 0 20px 20px 0;
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 0 15px;
        }
        
        .category-banner {
            background: linear-gradient(135deg, #fff0f5 0%, #ffeef2 100%);
            padding: 50px 0;
            margin-bottom: 40px;
            border-bottom: 1px solid rgba(255,63,108,0.1);
        }
        
        .category-banner h1 {
            color: var(--primary-color);
            font-size: 2.8rem;
            margin-bottom: 15px;
        }
        
        .category-banner p {
            font-size: 1.1rem;
            color: var(--gray-color);
            max-width: 600px;
        }
        
        .banner-img {
            max-height: 200px;
            object-fit: contain;
        }
        
        .filter-section {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid #eee;
        }
        
        .filter-title {
            font-weight: 600;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
            color: var(--dark-color);
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .filter-option {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }
        
        .filter-option input[type="checkbox"] {
            margin-right: 10px;
            accent-color: var(--primary-color);
        }
        
        .filter-option label {
            cursor: pointer;
            font-size: 0.9rem;
            color: var(--gray-color);
            margin-bottom: 0;
        }
        
        .filter-option:hover label {
            color: var(--primary-color);
        }
        
        .apply-btn {
            background-color: var(--primary-color);
            border: none;
            border-radius: 4px;
            padding: 8px 15px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.8rem;
            margin-top: 15px;
            width: 100%;
            transition: all 0.3s;
        }
        
        .apply-btn:hover {
            background-color: #e6355f;
            transform: translateY(-2px);
        }
        
        .product-card {
            border: none;
            margin-bottom: 25px;
            transition: all 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.05);
            position: relative;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .product-img {
            height: 250px;
            object-fit: cover;
            background-color: #f9f9f9;
            transition: all 0.3s;
        }
        
        .product-card:hover .product-img {
            transform: scale(1.03);
        }
        
        .discount-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--primary-color);
            color: white;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
            z-index: 1;
        }
        
        .product-body {
            padding: 20px;
        }
        
        .product-brand {
            font-size: 0.8rem;
            color: var(--gray-color);
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .product-title {
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 10px;
            color: var(--dark-color);
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 2.8em;
        }
        
        .product-price {
            margin-bottom: 15px;
        }
        
        .current-price {
            font-weight: 700;
            color: var(--primary-color);
            font-size: 1.1rem;
        }
        
        .original-price {
            text-decoration: line-through;
            color: var(--gray-color);
            font-size: 0.9rem;
            margin-left: 8px;
        }
        
        .add-to-bag {
            background-color: white;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
            border-radius: 4px;
            padding: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s;
        }
        
        .add-to-bag:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .sort-dropdown .dropdown-toggle {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 8px 15px;
            font-size: 0.9rem;
            color: var(--gray-color);
        }
        
        .sort-dropdown .dropdown-menu {
            min-width: 200px;
        }
        
        .pagination .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .pagination .page-link {
            color: var(--primary-color);
            border: none;
            margin: 0 5px;
            border-radius: 4px !important;
        }
        
        .pagination .page-link:hover {
            background-color: var(--light-pink);
        }
        
        .brand-banner {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.05);
        }
        
        .brand-logo {
            height: 60px;
            object-fit: contain;
            margin: 0 15px;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: all 0.3s;
        }
        
        .brand-logo:hover {
            filter: grayscale(0);
            opacity: 1;
            transform: scale(1.05);
        }
        
        .section-title {
            position: relative;
            margin-bottom: 30px;
            font-weight: 700;
            color: var(--dark-color);
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 50px;
            height: 3px;
            background-color: var(--primary-color);
        }
        
        footer {
            background-color: #2a2a2a;
            color: white;
            padding: 50px 0 20px;
        }
        
        footer h5 {
            color: white;
            font-size: 1.1rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        footer h5:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 30px;
            height: 2px;
            background-color: var(--primary-color);
        }
        
        footer a {
            color: #bbb;
            text-decoration: none;
            font-size: 0.9rem;
            margin-bottom: 8px;
            display: block;
            transition: all 0.3s;
        }
        
        footer a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .social-icons a {
            display: inline-block;
            width: 35px;
            height: 35px;
            background-color: #444;
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 35px;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
        }
        
        .app-badge {
            height: 40px;
            margin-right: 10px;
            margin-bottom: 10px;
        }
        
        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 20px;
            margin-top: 30px;
        }
        
        @media (max-width: 768px) {
            .category-banner h1 {
                font-size: 2rem;
            }
            
            .product-img {
                height: 180px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar text-center">
        <small>Free delivery on orders above ₹499 | 10% off on your first order | Use code: NYKAA10</small>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('base.home') }}">
                <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" width="100" alt="Nykaa">
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
                        <a class="nav-link" href="#">Nykaa Fashion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('base.blog') }}">Beauty Advice</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <div class="input-group me-3">
                        <input type="text" class="form-control search-box" placeholder="Search for products...">
                        <button class="btn search-btn" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="d-flex align-items-center">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-1"></i>{{auth()->user()->name}}
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
                    <h1>Makeup Must-Haves</h1>
                    <p>Discover the perfect products to enhance your beauty. From flawless foundations to statement lipsticks, find everything you need to create your signature look.</p>
                    <a href="#" class="btn btn-outline-danger mt-2">Shop Now</a>
                </div>
                <div class="col-md-4 text-end">
                    <img src="https://template.canva.com/EAFED37ORuA/2/0/1600w-u9g5B3NCDfo.jpg" alt="Makeup" class="img-fluid banner-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Brands -->
    <div class="container mb-5">
        <div class="brand-banner text-center">
            <h5 class="section-title d-inline-block">Popular Brands</h5>
            <div class="d-flex flex-wrap justify-content-center align-items-center">
                <img src="https://tse2.mm.bing.net/th/id/OIP.8yYqsrCuYEIkqGSFAsyX0QAAAA?pid=ImgDet&w=474&h=474&rs=1&o=7&rm=3" alt="dior" class="brand-logo">
                <img src="https://tse3.mm.bing.net/th/id/OIP.6HaQ6wzyExaqgqIt8K1LJAHaEK?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Maybelline" class="brand-logo">
                <img src="https://tse1.explicit.bing.net/th/id/OIP.f7uJvbA8l3CA_kyEgcCwPwHaEK?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Huda Beauty" class="brand-logo">
                <img src="https://i0.wp.com/bloganchoi.com/wp-content/uploads/2022/06/v-celine-1.jpg" alt="celine" class="brand-logo">
                <img src="https://tse4.mm.bing.net/th/id/OIP.-Uh93XwUjn0XfTp8rZjy4AHaEK?rs=1&pid=ImgDetMain&o=7&rm=3" alt="L'Oreal" class="brand-logo">
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Filters -->
            <div class="col-lg-3">
                <div class="sticky-top" style="top: 100px;">
                    <form method="GET" action="{{ route('base.categories') }}">
                        <div class="filter-section">
                            <h5 class="filter-title">Filters</h5>
                            
                            <!-- Brands -->
                            <div class="mb-4">
                                <h6 class="filter-title">Brands</h6>
                                @foreach(['lakme', 'maybelline', 'huda', 'nyx', 'LOreal','Dior','celine','Christian Dior'] as $brand)
                                    <div class="filter-option">
                                        <input type="checkbox" id="brand-{{ $brand }}" name="brand[]" value="{{ $brand }}"
                                        {{ in_array($brand, request()->get('brand', [])) ? 'checked' : '' }}>
                                        <label for="brand-{{ $brand }}">{{ ucfirst($brand) }}</label>
                                    </div>
                                @endforeach
                            </div>
                            
                            <!-- Price -->
                            <div class="mb-4">
                                <h6 class="filter-title">Price</h6>
                                @php
                                    $prices = ['under500' => 'Under ₹500', '500to1000' => '₹500 - ₹1000', '1000to2000' => '₹1000 - ₹2000', 'above2000' => 'Above ₹2000'];
                                @endphp
                                @foreach($prices as $key => $label)
                                    <div class="filter-option">
                                        <input type="checkbox" id="price-{{ $key }}" name="price[]" value="{{ $key }}" 
                                        {{ in_array($key, request()->get('price', [])) ? 'checked' : '' }}>
                                        <label for="price-{{ $key }}">{{ $label }}</label>
                                    </div>
                                @endforeach
                            </div>
                            
                            <!-- Discount -->
                            <div class="mb-4">
                                <h6 class="filter-title">Discount</h6>
                                @foreach([10, 20, 30, 40] as $discount)
                                    <div class="filter-option">
                                        <input type="checkbox" id="discount-{{ $discount }}" name="discount[]" value="{{ $discount }}"
                                        {{ in_array($discount, request()->get('discount', [])) ? 'checked' : '' }}>
                                        <label for="discount-{{ $discount }}">{{ $discount }}% & above</label>
                                    </div>
                                @endforeach
                            </div>
                            
                            <button type="submit" class="btn apply-btn">Apply Filters</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Products -->
          <div class="col-lg-9">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="section-title">Makeup Products</h5>
        <div class="sort-dropdown">
            <form method="GET" action="{{ route('base.categories') }}" id="sortForm">
                <!-- Keep existing filter inputs -->
                @if(request()->has('brand'))
                    @foreach(request()->brand as $brand)
                        <input type="hidden" name="brand[]" value="{{ $brand }}">
                    @endforeach
                @endif
                
                @if(request()->has('price'))
                    @foreach(request()->price as $price)
                        <input type="hidden" name="price[]" value="{{ $price }}">
                    @endforeach
                @endif
                
                @if(request()->has('discount'))
                    @foreach(request()->discount as $discount)
                        <input type="hidden" name="discount[]" value="{{ $discount }}">
                    @endforeach
                @endif
                
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown">
                        <i class="fas fa-sort me-1"></i> 
                        Sort By: 
                        @switch(request()->sort ?? 'recommended')
                            @case('price_low_high') Price: Low to High @break
                            @case('price_high_low') Price: High to Low @break
                            @case('discount_high_low') Discount: High to Low @break
                            @case('newest_first') Newest First @break
                            @case('rating') Customer Rating @break
                            @default Recommended
                        @endswitch
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                        <li><a class="dropdown-item {{ !request()->sort || request()->sort == 'recommended' ? 'active' : '' }}" 
                              href="#" data-sort="">Recommended</a></li>
                        <li><a class="dropdown-item {{ request()->sort == 'price_low_high' ? 'active' : '' }}" 
                              href="#" data-sort="price_low_high">Price: Low to High</a></li>
                        <li><a class="dropdown-item {{ request()->sort == 'price_high_low' ? 'active' : '' }}" 
                              href="#" data-sort="price_high_low">Price: High to Low</a></li>
                        <li><a class="dropdown-item {{ request()->sort == 'discount_high_low' ? 'active' : '' }}" 
                              href="#" data-sort="discount_high_low">Discount: High to Low</a></li>
                        <li><a class="dropdown-item {{ request()->sort == 'newest_first' ? 'active' : '' }}" 
                              href="#" data-sort="newest_first">Newest First</a></li>
                        <li><a class="dropdown-item {{ request()->sort == 'rating' ? 'active' : '' }}" 
                              href="#" data-sort="rating">Customer Rating</a></li>
                    </ul>
                    <input type="hidden" name="sort" id="sortInput" value="{{ request()->sort ?? '' }}">
                </div>
            </form>
        </div>
    </div>
    
    <!-- Your product listing -->
                
                <div class="row">
                    @forelse($products as $product)
                        <div class="col-md-4 col-sm-6">
                            <div class="product-card">
                                @if($product->discount_price > 0)
                                    <span class="discount-badge">{{ $product->discount_price }}% OFF</span>
                                @endif
                                <img src="{{ asset('storage/' . $product->image) }}" class="product-img card-img-top" alt="{{ $product->name }}">
                                <div class="product-body">
                                    <div class="product-brand">{{ ucfirst($product->brand) }}</div>
                                    <h5 class="product-title">{{ $product->name }}</h5>
                                    <div class="product-price">
                                        <span class="current-price">₹{{ $product->price - ($product->price * $product->discount_price / 100) }}</span>
                                        @if($product->discount_price > 0)
                                            <span class="original-price">₹{{ $product->price }}</span>
                                        @endif
                                    </div>
                                    <a href="{{ route('base.addtocart', ['slug' => $product->slug]) }}" class="btn add-to-bag">
                                        <i class="fas fa-shopping-bag me-1"></i> Add to Bag
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5">
                            <img src="https://cdn.dribbble.com/users/1121009/screenshots/11030107/media/25be2b86a12dbfd8da02db4cfcbfe50a.jpg" alt="No products found" class="img-fluid mb-4" style="max-height: 200px;">
                            <h4>No products found</h4>
                            <p>We couldn't find any products matching your filters.</p>
                            <a href="{{ route('base.categories') }}" class="btn btn-danger">Clear Filters</a>
                        </div>
                    @endforelse
                </div>
                
           
               <!-- Pagination -->
<div class="mt-5 d-flex justify-content-center">
    {{ $products->links('pagination::bootstrap-5') }}
</div>


    <!-- Beauty Tips Section -->
   <section class="py-5 bg-light mt-5">
    <div class="container">
        <h3 class="text-center mb-5 section-title">Makeup Tips & Tutorials</h3>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 h-100">
                    <div class="ratio ratio-16x9">
                        <img src="https://jennakutcherblog.com/wp-content/uploads/2023/01/JK-Blog-Collages-October-2020-1.png" class="card-img-top object-fit-cover" alt="Makeup Tips">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">5 Minute Everyday Makeup Routine</h5>
                        <p class="card-text flex-grow-1">Learn how to create a flawless look in just 5 minutes with these easy steps.</p>
                        <a href="#" class="text-danger align-self-start">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 h-100">
                    <div class="ratio ratio-16x9">
                        <img src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top object-fit-cover" alt="Makeup Tips">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Best Foundations for Indian Skin Tones</h5>
                        <p class="card-text flex-grow-1">Discover the perfect foundation match for your skin tone and type.</p>
                        <a href="#" class="text-danger align-self-start">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 h-100">
                    <div class="ratio ratio-16x9">
                        <img src="https://tse3.mm.bing.net/th/id/OIP.ScBz--EOQ8jy6d5-36jq7gHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" class="card-img-top object-fit-cover" alt="Makeup Tips">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">How to Make Your Lipstick Last All Day</h5>
                        <p class="card-text flex-grow-1">Professional tips to keep your lip color vibrant from morning to night.</p>
                        <a href="#" class="text-danger align-self-start">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  

<!-- Footer -->



    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple animation for product cards on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const productCards = document.querySelectorAll('.product-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            productCards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(card);
            });
        });


        









        document.addEventListener('DOMContentLoaded', function() {
    // Sort dropdown functionality
    const sortForm = document.getElementById('sortForm');
    const sortInput = document.getElementById('sortInput');
    const sortItems = document.querySelectorAll('.dropdown-item[data-sort]');
    
    sortItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const sortValue = this.getAttribute('data-sort');
            sortInput.value = sortValue;
            sortForm.submit();
        });
    });
    
    // Keep other filters when submitting
    const filterForm = document.querySelector('.filter-section form');
    if (filterForm) {
        filterForm.addEventListener('submit', function(e) {
            if (sortInput.value) {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'sort';
                input.value = sortInput.value;
                this.appendChild(input);
            }
        });
    }
});
    </script>

</body>
</html>