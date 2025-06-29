<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductView | Nykaa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .product-image-main {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            height: 400px;
            object-fit: contain;
        }
        .product-thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            cursor: pointer;
            border: 1px solid #ddd;
            margin-right: 10px;
            margin-bottom: 10px;
        }
        .product-thumbnail:hover {
            border-color: #ff3e6c;
        }
        .brand-name {
            color: #ff3e6c;
            font-weight: 600;
        }
        .price {
            font-size: 24px;
            font-weight: bold;
        }
        .original-price {
            text-decoration: line-through;
            color: #999;
            margin-right: 10px;
        }
        .discount {
            color: #ff3e6c;
            font-weight: bold;
        }
        .add-to-bag-btn {
            background-color: #ff3e6c;
            color: white;
            border: none;
            padding: 12px 0;
            font-weight: bold;
            width: 100%;
        }
        .add-to-bag-btn:hover {
            background-color: #e6395c;
            color: white;
        }
        .wishlist-btn {
            border: 1px solid #ff3e6c;
            color: #ff3e6c;
            background: white;
            padding: 12px 0;
            font-weight: bold;
            width: 100%;
        }
        .wishlist-btn:hover {
            background-color: #fff0f3;
        }
        .delivery-option {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 10px;
        }
        .nav-tabs .nav-link.active {
            color: #ff3e6c;
            border-bottom: 2px solid #ff3e6c;
        }
        .nav-tabs .nav-link {
            color: #333;
            font-weight: 500;
        }
        .rating-badge {
            background-color: #26a541;
            color: white;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }
        .similar-product-card {
            border: none;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        .similar-product-card:hover {
            transform: translateY(-5px);
        }
        .similar-product-img {
            height: 200px;
            object-fit: contain;
            padding: 10px;
        }
        .navbar {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .search-box {
            border-radius: 20px;
            border: 1px solid #ddd;
            padding: 8px 15px;
            width: 400px;
        }
        .search-btn {
            border-radius: 20px;
            background-color: #ff3e6c;
            color: white;
            border: none;
            padding: 8px 20px;
            margin-left: -40px;
        }
        .nav-link {
            color: #333;
            font-weight: 500;
        }
        .nav-link:hover {
            color: #ff3e6c;
        }
        .cart-icon {
            position: relative;
        }
        .cart-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: #ff3e6c;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 12px;
            display: flex;
            align-items: center;
             justify-content: center;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top mb-4">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
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
                        <a class="nav-link" href="#">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">New</a>
                    </li>
                </ul>
                <form class="d-flex me-3">
                    <input class="search-box" type="search" placeholder="Search for products...">
                    <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="far fa-user">{{auth()->user()->name}}</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('wishlist.add', $pro->id)}}"><i class="far fa-heart"></i> Wishlist</a>
                    </li>
                    <li class="nav-item cart-icon">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-bag"></i> Bag</a>
                        <span class="cart-count">3</span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Product Section -->
    <div class="container mb-5">
        <div class="row">
            <!-- Product Images -->
            <div class="col-md-5">
                <div class="mb-3 text-center">
                    <img src="{{asset("storage/". $pro->image)}}" alt="Product" class="product_image-main img-fluid">
                </div>
            </div>
            
            <!-- Product Details -->
          <div class="col-md-7">
    <h2>{{$pro->title}}</h2>
    <div class="d-flex align-items-center mb-2">
        <span class="rating-badge me-2">4.2 <i class="fas fa-star"></i></span>
        <span class="text-muted">(1,234 reviews)</span>
    </div>
    <p class="brand-name mb-1">by: {{$pro->brand}}</p>
    <div class="mb-2">
        <span class="original-price">₹{{$pro->price}}</span>
        <span class="price">₹{{$pro->discount_price}}</span>
        <span class="discount">(23% OFF)</span>
    </div>

    <p class="text-success mb-2"><i class="fas fa-check-circle"></i> In Stock</p>

    <div class="mb-2">
        <h6>Shade</h6>
        <div class="d-flex flex-wrap gap-2">
            <!-- Shade options -->
        </div>
    </div>

    <div class="mb-2">
        <h6>Size</h6>
        <div class="btn-group gap-2" role="group">
            <!-- Size options -->
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6 mb-2">
            <form action="{{ route('base.addtocart', ['slug' => $pro->slug]) }}" method="POST">
                @csrf
               <input type="hidden" name="product_id" value="{{ $pro->id }}">
            <button class="add-to-bag-btn rounded"><i class="fas fa-shopping-bag me-2"></i>ADD TO BAG</button>
       </form>
            </div>
        <div class="col-md-6">
            <form action="{{ route('wishlist.add', $pro->id) }}" method="POST">
              @csrf
              <button class="wishlist-btn rounded"><i class="far fa-heart me-2"></i>WISHLIST</button>
           </form>
        </div>
    </div>

    <div class="delivery-option mb-2">
        <div class="d-flex">
            <div class="me-3"><i class="fas fa-truck text-muted"></i></div>
            <div>
                <h6>Delivery Options</h6>
                <p class="mb-0">Get it by <strong>Tomorrow, 3 PM</strong></p>
                <a href="#" class="text-decoration-none">Enter pincode for delivery details</a>
            </div>
        </div>
    </div>

    <div class="delivery-option">
        <div class="d-flex">
            <div class="me-3"><i class="fas fa-undo-alt text-muted"></i></div>
            <div>
                <h6>Easy Returns</h6>
                <p class="mb-0">Eligible for return within 14 days of delivery</p>
            </div>
        </div>
    </div>
</div>

        </div>
   
        <div class="row mt-5">
            <div class="col-12">
                <ul class="nav nav-tabs" id="productTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="specifications-tab" data-bs-toggle="tab" data-bs-target="#specifications" type="button">Specifications</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button">Reviews</button>
                    </li>
                </ul>
                <div class="tab-content p-3 border border-top-0" id="productTabsContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <h5>About the Product</h5>
                        <p>Lakmé Absolute Skin Glow Illuminating Serum Foundation is a lightweight, serum-based foundation that gives you a radiant, glowing complexion. Enriched with Vitamin E and Hyaluronic Acid, it provides hydration while giving you a flawless finish.</p>
                        
                        <h5 class="mt-4">Benefits</h5>
                        <ul>
                            <li>Provides a radiant, glowing finish</li>
                            <li>Lightweight and comfortable to wear</li>
                            <li>Hydrates skin with Vitamin E and Hyaluronic Acid</li>
                            <li>Buildable coverage from medium to high</li>
                            <li>Long-lasting formula</li>
                        </ul>
                        
                        <h5 class="mt-4">How to Use</h5>
                        <p>Apply dots of foundation on your forehead, cheeks, nose and chin. Blend outwards using your fingers, a brush or a sponge for an even finish.</p>
                    </div>
                    <div class="tab-pane fade" id="specifications" role="tabpanel">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Brand</th>
                                    <td>Lakmé</td>
                                </tr>
                                <tr>
                                    <th scope="row">Product Name</th>
                                    <td>Absolute Skin Glow Illuminating Serum Foundation</td>
                                </tr>
                                <tr>
                                    <th scope="row">Type</th>
                                    <td>Liquid Foundation</td>
                                </tr>
                                <tr>
                                    <th scope="row">Skin Type</th>
                                    <td>All Skin Types</td>
                                </tr>
                                <tr>
                                    <th scope="row">Coverage</th>
                                    <td>Medium to Full</td>
                                </tr>
                                <tr>
                                    <th scope="row">Finish</th>
                                    <td>Radiant</td>
                                </tr>
                                <tr>
                                    <th scope="row">SPF</th>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <th scope="row">Cruelty Free</th>
                                    <td>No</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                                <h5 class="mb-0">Customer Reviews</h5>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="rating-badge me-2">4.2 <i class="fas fa-star"></i></span>
                                    <span class="text-muted">Based on 1,234 reviews</span>
                                </div>
                            </div>
                            <button class="btn btn-outline-primary">Write a Review</button>
                        </div>
                        
                        <div class="mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <div class="me-3">
                                    <span class="fw-bold">5 star</span>
                                </div>
                                <div class="progress flex-grow-1" style="height: 10px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                </div>
                                <div class="ms-3">
                                    <span>65%</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="me-3">
                                    <span class="fw-bold">4 star</span>
                                </div>
                                <div class="progress flex-grow-1" style="height: 10px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 20%"></div>
                                </div>
                                <div class="ms-3">
                                    <span>20%</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="me-3">
                                    <span class="fw-bold">3 star</span>
                                </div>
                                <div class="progress flex-grow-1" style="height: 10px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 8%"></div>
                                </div>
                                <div class="ms-3">
                                    <span>8%</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="me-3">
                                    <span class="fw-bold">2 star</span>
                                </div>
                                <div class="progress flex-grow-1" style="height: 10px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 5%"></div>
                                </div>
                                <div class="ms-3">
                                    <span>5%</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <span class="fw-bold">1 star</span>
                                </div>
                                <div class="progress flex-grow-1" style="height: 10px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 2%"></div>
                                </div>
                                <div class="ms-3">
                                    <span>2%</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="review-card border-bottom pb-4 mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <div>
                                    <span class="fw-bold">Priya Sharma</span>
                                    <div class="d-flex align-items-center mt-1">
                                        <span class="rating-badge me-2">5 <i class="fas fa-star"></i></span>
                                        <span class="text-muted">Verified Buyer</span>
                                    </div>
                                </div>
                                <div class="text-muted">
                                    <small>2 weeks ago</small>
                                </div>
                            </div>
                            <h6>Amazing product!</h6>
                            <p>This foundation gives such a beautiful glow to my skin. It feels lightweight and doesn't cake up. The shade match is perfect for my skin tone. Definitely recommend!</p>
                        </div>
                        
                        <div class="review-card border-bottom pb-4 mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <div>
                                    <span class="fw-bold">Riya Patel</span>
                                    <div class="d-flex align-items-center mt-1">
                                        <span class="rating-badge me-2">4 <i class="fas fa-star"></i></span>
                                        <span class="text-muted">Verified Buyer</span>
                                    </div>
                                </div>
                                <div class="text-muted">
                                    <small>1 month ago</small>
                                </div>
                            </div>
                            <h6>Good but could be better</h6>
                            <p>The foundation gives a nice glow but tends to get oily after a few hours. I have combination skin and needed to blot after 5-6 hours. The shade range is good though.</p>
                        </div>
                        
                        <button class="btn btn-outline-primary">Load More Reviews</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Similar Products -->
        <div class="row mt-5">
            <div class="col-12">
                <h4 class="mb-4">Similar Products</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card similar-product-card">
                            <img src="{{asset('storage/'.$pro->image)}}" class="card-img-top similar-product-img" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">{{$pro->title}}</h6>
                                <p class="card-text text-muted">25g</p>
                                <div class="d-flex align-items-center">
                                    <span class="price me-2">₹{{$pro->discount_price }}</span>
                                    <span class="original-price">₹{{$pro->price }}</span>
                                    <span class="discount ms-2">(25% OFF)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card similar-product-card">
                            <img src="https://i5.walmartimages.com/seo/Maybelline-Fit-Me-Matte-Poreless-Liquid-Foundation-Makeup-310-Sun-Beige-1-fl-oz_eaf6ca7e-f10d-4b06-a915-3b2ab4c026df.c8835d9ac7622a1023ef3c4a0701c8c5.jpeg" class="card-img-top similar-product-img" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">Maybelline Fit Me Matte + Poreless Foundation</h6>
                                <p class="card-text text-muted">30ml</p>
                                <div class="d-flex align-items-center">
                                    <span class="price me-2">₹499</span>
                                    <span class="original-price">₹599</span>
                                    <span class="discount ms-2">(17% OFF)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card similar-product-card">
                            <img src="https://th.bing.com/th/id/OIP.Ro2xPchXDEfuSJ7BUZ8XnAHaHZ?rs=1&pid=ImgDetMain&cb=idpwebpc2" class="card-img-top similar-product-img" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">L'Oréal Paris Infallible 24H Fresh Wear Foundation</h6>
                                <p class="card-text text-muted">30ml</p>
                                <div class="d-flex align-items-center">
                                    <span class="price me-2">₹1,299</span>
                                    <span class="original-price">₹1,499</span>
                                    <span class="discount ms-2">(13% OFF)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card similar-product-card">
                            <img src="https://test-storage-mumbai.s3.amazonaws.com/uploads/article/image/716/MAC-StudioFixFluid-SPF15.jpg" class="card-img-top similar-product-img" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">MAC Studio Fix Fluid SPF 15 Foundation</h6>
                                <p class="card-text text-muted">30ml</p>
                                <div class="d-flex align-items-center">
                                    <span class="price">₹2,700</span>
                                </div>
                            </div>
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
                    <h6>Shop</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-muted">Makeup</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Skincare</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Haircare</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Bath & Body</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Fragrance</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h6>Help</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-muted">Contact Us</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">FAQs</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Shipping & Returns</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Terms & Conditions</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h6>About Nykaa</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-muted">About Us</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Careers</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Blog</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Nykaa Fashion</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Nykaa Man</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h6>Download App</h6>
                    <div class="mb-3">
                        <img src="https://via.placeholder.com/120x40?text=App+Store" alt="App Store" class="img-fluid mb-2">
                        <img src="https://via.placeholder.com/120x40?text=Play+Store" alt="Play Store" class="img-fluid">
                    </div>
                    <h6>Connect With Us</h6>
                    <div class="d-flex">
                        <a href="#" class="text-decoration-none text-muted me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-decoration-none text-muted me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-decoration-none text-muted me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-decoration-none text-muted"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p class="text-muted">© 2023 Nykaa Clone. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function changeImage(element) {
            document.getElementById('mainProductImage').src = element.src;
            
            // Remove active class from all thumbnails
            const thumbnails = document.querySelectorAll('.product-thumbnail');
            thumbnails.forEach(thumb => {
                thumb.style.borderColor = '#ddd';
            });
            
            // Add active border to clicked thumbnail
            element.style.borderColor = '#ff3e6c';
        }
    </script>
</body>
</html>