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
            <a class="navbar-brand" href="#">
                  <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145"width="100"alt="Nykaa">  alt="Nykaa">
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
                        <a href="#" class="mx-2 text-dark"><i class="fas fa-shopping-bag"></i></a>
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
                    <img src="https://via.placeholder.com/300x200?text=Makeup+Banner" alt="Makeup" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Categories</a></li>
                <li class="breadcrumb-item active" aria-current="page">Makeup</li>
            </ol>
        </nav>

        <div class="row">
            <!-- Filters Sidebar -->
            <div class="col-md-3">
                <div class="filter-section">
                    <h5 class="filter-title">Filters</h5>
                    <div class="mb-4">
                        <h6 class="filter-title">Categories</h6>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="face" checked>
                                <label class="form-check-label" for="face">Face</label>
                            </div>
                        </div>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="eyes">
                                <label class="form-check-label" for="eyes">Eyes</label>
                            </div>
                        </div>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="lips" checked>
                                <label class="form-check-label" for="lips">Lips</label>
                            </div>
                        </div>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="nails">
                                <label class="form-check-label" for="nails">Nails</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="filter-title">Brand</h6>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="lakme">
                                <label class="form-check-label" for="lakme">Lakme</label>
                            </div>
                        </div>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="maybelline" checked>
                                <label class="form-check-label" for="maybelline">Maybelline</label>
                            </div>
                        </div>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="huda">
                                <label class="form-check-label" for="huda">Huda Beauty</label>
                            </div>
                        </div>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="nyx">
                                <label class="form-check-label" for="nyx">NYX</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="filter-title">Price</h6>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="under500">
                                <label class="form-check-label" for="under500">Under ₹500</label>
                            </div>
                        </div>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="500to1000" checked>
                                <label class="form-check-label" for="500to1000">₹500 - ₹1000</label>
                            </div>
                        </div>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="1000to2000">
                                <label class="form-check-label" for="1000to2000">₹1000 - ₹2000</label>
                            </div>
                        </div>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="above2000">
                                <label class="form-check-label" for="above2000">Above ₹2000</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="filter-title">Discount</h6>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="10off">
                                <label class="form-check-label" for="10off">10% and above</label>
                            </div>
                        </div>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="20off" checked>
                                <label class="form-check-label" for="20off">20% and above</label>
                            </div>
                        </div>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="30off">
                                <label class="form-check-label" for="30off">30% and above</label>
                            </div>
                        </div>
                        <div class="filter-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="40off">
                                <label class="form-check-label" for="40off">40% and above</label>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-danger w-100">Apply Filters</button>
                </div>
            </div>

            <!-- Products Listing -->
            <div class="col-md-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4>Makeup Products <small class="text-muted">(Showing 1-12 of 48 products)</small></h4>
                    <div class="sort-dropdown">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown">
                                Sort by: Popularity
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                                <li><a class="dropdown-item" href="#">Popularity</a></li>
                                <li><a class="dropdown-item" href="#">Price - Low to High</a></li>
                                <li><a class="dropdown-item" href="#">Price - High to Low</a></li>
                                <li><a class="dropdown-item" href="#">Newest First</a></li>
                                <li><a class="dropdown-item" href="#">Customer Rating</a></li>
                                <li><a class="dropdown-item" href="#">Discount</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-6 col-md-4">
                        <div class="card product-card">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/300x300?text=Lipstick" class="card-img-top" alt="Lipstick">
                                <span class="discount-badge">20% OFF</span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Lakme Absolute Matte Lipstick - Red</h6>
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
                                <p class="card-text text-danger">₹299 <small class="text-muted text-decoration-line-through">₹399</small></p>
                                <button class="btn btn-outline-danger btn-sm w-100">Add to Bag</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="col-6 col-md-4">
                        <div class="card product-card">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/300x300?text=Foundation" class="card-img-top" alt="Foundation">
                                <span class="discount-badge">15% OFF</span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Maybelline Fit Me Matte Foundation</h6>
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
                                <p class="card-text text-danger">₹499 <small class="text-muted text-decoration-line-through">₹599</small></p>
                                <button class="btn btn-outline-danger btn-sm w-100">Add to Bag</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="col-6 col-md-4">
                        <div class="card product-card">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/300x300?text=Eyeshadow" class="card-img-top" alt="Eyeshadow">
                                <span class="discount-badge">30% OFF</span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Huda Beauty Obsessions Eyeshadow Palette</h6>
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
                                <p class="card-text text-danger">₹2,499 <small class="text-muted text-decoration-line-through">₹3,499</small></p>
                                <button class="btn btn-outline-danger btn-sm w-100">Add to Bag</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="col-6 col-md-4">
                        <div class="card product-card">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/300x300?text=Kajal" class="card-img-top" alt="Kajal">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Lakme Eyeconic Kajal - Black</h6>
                                <div class="mb-2">
                                    <small class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </small>
                                    <small class="text-muted"> (512)</small>
                                </div>
                                <p class="card-text">₹199</p>
                                <button class="btn btn-outline-danger btn-sm w-100">Add to Bag</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="col-6 col-md-4">
                        <div class="card product-card">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/300x300?text=Concealer" class="card-img-top" alt="Concealer">
                                <span class="discount-badge">25% OFF</span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Maybelline Fit Me Concealer</h6>
                                <div class="mb-2">
                                    <small class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </small>
                                    <small class="text-muted"> (276)</small>
                                </div>
                                <p class="card-text text-danger">₹449 <small class="text-muted text-decoration-line-through">₹599</small></p>
                                <button class="btn btn-outline-danger btn-sm w-100">Add to Bag</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="col-6 col-md-4">
                        <div class="card product-card">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/300x300?text=Blush" class="card-img-top" alt="Blush">
                                <span class="discount-badge">10% OFF</span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">NYX Professional Makeup Powder Blush</h6>
                                <div class="mb-2">
                                    <small class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </small>
                                    <small class="text-muted"> (187)</small>
                                </div>
                                <p class="card-text text-danger">₹629 <small class="text-muted text-decoration-line-through">₹699</small></p>
                                <button class="btn btn-outline-danger btn-sm w-100">Add to Bag</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation" class="mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
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