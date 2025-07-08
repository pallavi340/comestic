<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Nykaa</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --nykaa-pink: #ed1f85;
            --nykaa-dark: #333333;
            --nykaa-light: #f8f9fa;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--nykaa-dark);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--nykaa-pink) !important;
        }
        
        .bg-nykaa {
            background-color: var(--nykaa-pink);
        }
        
        .text-nykaa {
            color: var(--nykaa-pink);
        }
        
        .btn-nykaa {
            background-color: var(--nykaa-pink);
            color: white;
        }
        
        .btn-nykaa:hover {
            background-color: #c91873;
            color: white;
        }
        
        .blog-card {
            transition: transform 0.3s;
            margin-bottom: 30px;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }
        
        .blog-card-img {
            height: 220px;
            object-fit: cover;
        }
        
        .category-badge {
            background-color: var(--nykaa-pink);
            color: white;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .trending-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: gold;
            color: black;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 0.8rem;
        }
        
        .featured-post {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            height: 400px;
        }
        
        .featured-post img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .featured-post-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
            padding: 20px;
        }
        
        .author-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .newsletter-section {
            background-color: #fff9fb;
            border-top: 1px solid #f0f0f0;
            border-bottom: 1px solid #f0f0f0;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="{{route("base.home") }}">
                <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" width="100" alt="Your Brand Logo" class="brand-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Makeup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Skincare</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Haircare</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lifestyle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trends</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#" class="btn btn-outline-secondary me-2"><i class="fas fa-search"></i></a>
                    <a href="#" class="btn btn-nykaa">Subscribe</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Featured Post -->
    <div class="container my-5">
        <div class="featured-post">
            <img src="https://images-static.nykaa.com/uploads/f168df61-f92b-42f0-94fc-ed3a652d6eb9.jpg?tr=cm-pad_resize,w-1800" alt="Featured Post">
            <div class="featured-post-content">
                <span class="category-badge rounded-pill px-3 py-1 mb-2 d-inline-block">MAKEUP</span>
                <h2 class="mb-3">10 Summer Makeup Trends You Need to Try in 2023</h2>
                
                        <p class="mb-0 small">By Jessica Parker</p>
                        <p class="mb-0 small text-muted">May 15, 2023 · 8 min read</p>
                    </div>
                </div>
            </div>
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
    </section>

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