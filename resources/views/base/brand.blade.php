<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Brand | Nykaa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #ff3e6c;
            --secondary-color: #0d0d0d;
            --light-color: #f5f5f6;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .bg-primary-custom {
            background-color: var(--primary-color);
        }
        
        .text-primary-custom {
            color: var(--primary-color);
        }
        
        .btn-primary-custom {
            background-color: var(--primary-color);
            color: white;
            border: none;
        }
        
        .btn-primary-custom:hover {
            background-color: #e0355d;
            color: white;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://via.placeholder.com/1920x600');
            background-size: cover;
            background-position: center;
            height: 70vh;
            color: white;
        }
        
        .category-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .product-card {
            border: none;
            transition: all 0.3s ease;
        }
        
        .product-card:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .discount-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--primary-color);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
        }
        
        .brand-logo {
            height: 40px;
        }
        
        .footer {
            background-color: var(--secondary-color);
            color: white;
        }
    </style>
     <style>
        .brand-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .brand-card img:hover {
            transform: scale(1.05);
        }
        .brand-name {
            text-align: center;
            font-weight: 600;
            margin-top: 8px;
            color: #333;
        }
    </style>
    <style>
        .brand-card {
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 10px;
    text-align: center;
    background-color: #fff;
    transition: transform 0.3s;
    height: 100%;
}

.brand-card img {
    width: 100%;
    height: 200px;
    object-fit: cover; /* Makes the image fit nicely */
    border-radius: 8px;
}

.brand-name {
    margin-top: 10px;
    font-weight: bold;
    font-size: 1.1rem;
}


        .brand-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
    </style>
    <style>
    .category-card {
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s;
    }
    .category-card:hover {
        transform: scale(1.05);
    }
    .card-body {
        background-color: #fff;
        padding: 10px;
    }
    .card-title {
        margin: 0;
        font-size: 1.1rem;
        font-weight: 600;
    }
</style>
<style>
/* Common Button */
.btn-pink {
    background-color: #e60073;
    border: none;
}

.btn-pink:hover {
    background-color: #c7005c;
}

/* Customer Image */
.customer-img {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border: 2px solid #e60073;
}

/* Payment Image */
.payment-img {
    max-height: 40px;
    object-fit: contain;
}
</style>

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{route("base.home") }}">
                <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" alt="Your Brand Logo" class="brand-logo">
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
                            <li><a class="dropdown-item" href="#">Fragrance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('base.brand') }}">Brands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('base.offer') }}">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('base.advice') }}">New Launches</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products...">
                        <button class="btn btn-primary-custom" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="ms-3 d-flex align-items-center">
                        <a href="#" class="text-secondary mx-2"><i class="fas fa-user fa-lg"></i>{{auth()->user()->name}}</a>
                        <a href="{{ route('base.wishlist') }}" class="text-secondary mx-2"><i class="fas fa-heart fa-lg"></i></a>
                        <a href="{{ route('base.cart') }}" class="text-secondary mx-2 position-relative">
                            <i class="fas fa-shopping-bag fa-lg"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

 <!-- Luxe Section -->
<div class="container my-4">
    <div class="text-center mb-4">
        <h2 style="color: #fc2779; font-weight: 700;">NYKAA <span style="color: black;">LUXE</span></h2>
        <p class="text-muted">THE BEST OF LUXURY</p>
    </div>

    <div class="container my-5">
    <div class="row g-4">
      <!-- Brand Cards -->
        <div class="col-md-3 col-sm-6">
            <div class="brand-card">
                <img src="https://puls-img.chanel.com/1692004018447-onelandingpageeditopushdesktopmobile031080x1150pxjpg_1150x1080.jpg" alt="CHANEL">
                <div class="brand-name">CHANEL</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="brand-card">
                <img src="https://th.bing.com/th/id/R.43eff5710705abf3cc468088f831d473?rik=Zn8YW5GpmW1YQA&riu=http%3a%2f%2fhbz.h-cdn.co%2fassets%2fcm%2f14%2f52%2f5498b0ada0979_-_hbz-estee-lauder-promo.jpg&ehk=Ht8lfr42yexU4Ph22d629Py02JCFndnVpqyrAlHjTGg%3d&risl=&pid=ImgRaw&r=0" alt="ESTÉE LAUDER">
                <div class="brand-name">ESTÉE LAUDER</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="brand-card">
                <img src="https://th.bing.com/th/id/OIP.F4_fiAO-BplxxrCx1uRqugHaHa?rs=1&pid=ImgDetMain&cb=idpwebpc2" alt="Benefit">
                <div class="brand-name">Benefit</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="brand-card">
                <img src="https://th.bing.com/th/id/OIP._OQm5CRbsATp3FcNEijCpAHaEK?rs=1&pid=ImgDetMain&cb=idpwebpc2" alt="Charlotte Tilbury">
                <div class="brand-name">Charlotte Tilbury</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="brand-card">
                <img src="https://th.bing.com/th/id/OIP.-soXsM6zrA3yv7QJDEUmcwHaK1?rs=1&pid=ImgDetMain&cb=idpwebpc2" alt="Paula's Choice">
                <div class="brand-name">Paula's Choice</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="brand-card">
                <img src="https://cdn.shopify.com/s/files/1/0344/8890/9869/files/36.png?v=1654494986" alt="d'you">
                <div class="brand-name">d'you</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="brand-card">
                <img src="https://th.bing.com/th/id/OIP.BUJzTUf2EeUo72MPDh6vJAAAAA?rs=1&pid=ImgDetMain&cb=idpwebpc2" alt="Tom Ford">
                <div class="brand-name">Tom Ford</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="brand-card">
                <img src="https://th.bing.com/th/id/OIP.a93IIRAYDnfh1-0MBzM7PQHaHa?rs=1&pid=ImgDetMain&cb=idpwebpc2" alt="Lancôme">
                <div class="brand-name">Lancôme</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="brand-card">
                <img src="https://kpopping.com/documents/5d/0/1440/140435515_187844379756978_6205974764622501859_n.jpeg?v=c7f9c" alt="DIOR">
                <div class="brand-name">DIOR</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="brand-card">
                <img src="https://th.bing.com/th/id/OIP.v6oDuMmFf_g3Qs5yAlHAiAHaD4?rs=1&pid=ImgDetMain&cb=idpwebpc2" alt="MAC">
                <div class="brand-name">MAC</div>
            </div>
        </div>
    </div>
</div> 

<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Shop By Brands</h2>
        <div class="row g-4">

            <div class="col-md-3 col-6">
                <div class="category-card">
                    <img src="https://itsmyownway.com/wp-content/uploads/2020/06/Makeup-Salon-scaled.jpg" class="img-fluid w-100" alt="Makeup" style="height:200px; object-fit:cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Makeup</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="category-card">
                    <img src="https://feel22.com/cdn/shop/files/1100-X-750_8.jpg?v=1709299455&width=550" class="img-fluid w-100" alt="Loreal" style="height:200px; object-fit:cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Loreal</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="category-card">
                    <img src="https://freeportpress.com/wp-content/uploads/2017/08/Maybel-1024x768.jpg" class="img-fluid w-100" alt="Maybelline" style="height:200px; object-fit:cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Maybelline</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="category-card">
                    <img src="https://www.retropoplifestyle.com/wp-content/uploads/2024/04/Shanaya-Kapoor-X-Dot-Key-1080x694.jpg" class="img-fluid w-100" alt="Dot&Key" style="height:200px; object-fit:cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dot&Key</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




    </div>
</div>

       
    <!-- Categories Section -->
   
    
    <!-- Banner Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center bg-primary-custom rounded-3 p-5 text-white">
                <div class="col-md-6">
                    <h2 class="display-6 fw-bold">Summer Special Collection</h2>
                    <p class="lead">Up to 50% off on selected products</p>
                    <button class="btn btn-light text-primary-custom fw-bold px-4">Explore Now</button>
                </div>
                <div class="col-md-6">
                    <img src="https://ik.imagekit.io/iqp7c2d9k5/public/images/Ph6PgntxYw0c0cq6fuOLbT9bsSRz6vjqgCd1xCGH.png?tr=fo-auto,w-1920,h-0" class="img-fluid rounded-3" alt="Summer Collection">
                </div>
            </div>
        </div>
    </section>

    <!-- Top Brands Section -->
   <section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Top Brands</h2>
        <div class="row g-4 justify-content-center">

            <!-- Brand Item -->
            <div class="col-6 col-md-4 col-lg-2 text-center">
                <div class="brand-card">
                    <img src="https://i.mdel.net/i/db/2018/3/863239/863239-800w.jpg" alt="Brand 1">
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2 text-center">
                <div class="brand-card">
                    <img src="https://static.thcdn.com/productimg/960/960/15009445-1635105852680284.jpg" alt="Brand 2">
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2 text-center">
                <div class="brand-card">
                    <img src="https://images-static.nykaa.com/media/catalog/product/5/6/56d20218906147700570-2.jpg" alt="Brand 3">
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2 text-center">
                <div class="brand-card">
                    <img src="https://highxtar.com/wp-content/uploads/2021/02/thumb-dior-beauty-face-and-body-powder-foundation-bella-hadid.jpg" alt="Brand 4">
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2 text-center">
                <div class="brand-card">
                    <img src="https://tse4.mm.bing.net/th/id/OIP.OhlVQBcsgacgnX6pVR2eOgHaHa?w=2000&h=2000&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Brand 5">
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2 text-center">
                <div class="brand-card">
                    <img src="https://tse1.explicit.bing.net/th/id/OIP.iMBnhCfAyCjgYJkp7HkKNQAAAA?w=474&h=710&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Brand 6">
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- Testimonials -->
   <!-- Customer Testimonials -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">What Our Customers Say</h2>
        <div class="row">
            <!-- Testimonial 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="text-warning mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="card-text">"The products are amazing and the delivery was super fast. Will definitely
                            shop again!"</p>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://tse3.mm.bing.net/th/id/OIP.DSWqRqd6_nhaD5BsMXIFsAHaHa?w=500&h=500&rs=1&pid=ImgDetMain&o=7&rm=3"
                                class="rounded-circle me-3 customer-img" alt="Customer">
                            <div>
                                <h6 class="mb-0">Priya Sharma</h6>
                                <small class="text-muted">Mumbai</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="text-warning mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="card-text">"Great variety of products and excellent customer service. Highly
                            recommended!"</p>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://tse3.mm.bing.net/th/id/OIP._uqEelzbW16dI7lcEDBiOwHaNK?pid=ImgDet&w=474&h=842&rs=1&o=7&rm=3"
                                class="rounded-circle me-3 customer-img" alt="Customer">
                            <div>
                                <h6 class="mb-0">Rahul Patel</h6>
                                <small class="text-muted">Delhi</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="text-warning mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="far fa-star"></i>
                        </div>
                        <p class="card-text">"Love the quality of products. The packaging was also very secure and
                            elegant."</p>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://i.pinimg.com/originals/ec/d6/ca/ecd6cafb9d01cc7302f1149ab19aca9a.jpg"
                                class="rounded-circle me-3 customer-img" alt="Customer">
                            <div>
                                <h6 class="mb-0">Ananya Gupta</h6>
                                <small class="text-muted">Bangalore</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="mb-3 fw-bold">Stay Updated</h2>
                <p class="mb-4">Subscribe to our newsletter for the latest updates and offers</p>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Your email address">
                    <button class="btn btn-pink text-white" type="button">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer py-5 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="text-uppercase mb-4">About Us</h5>
                <p>Your one-stop destination for all beauty and cosmetic products. We curate the best products from
                    around the world.</p>
                <div class="mt-4">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="text-uppercase mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Home</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">About Us</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Shop</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Blog</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="text-uppercase mb-4">Customer Service</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">My Account</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Order Tracking</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Wishlist</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Shipping Policy</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Returns & Refunds</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="text-uppercase mb-4">Contact Info</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>123 Beauty Street, Mumbai, India</li>
                    <li class="mb-2"><i class="fas fa-phone me-2"></i>+91 1234567890</li>
                    <li class="mb-2"><i class="fas fa-envelope me-2"></i>info@yourbrand.com</li>
                </ul>
            </div>
        </div>
        <hr class="my-4 bg-light">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0">&copy; 2025 Your Brand. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <img src="https://via.placeholder.com/200x30" alt="Payment Methods" class="img-fluid payment-img">
            </div>
        </div>
    </div>
</footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>