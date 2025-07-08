<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Offer Zone | Nykaa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --nykaa-pink: #e80071;
      --nykaa-light-pink: #fff0f5;
      --nykaa-dark: #333;
      --nykaa-gray: #666;
      --nykaa-light-gray: #999;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fafafa;
      color: var(--nykaa-dark);
    }
    
    /* Header Styles */
    .navbar {
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
      padding: 10px 0;
    }
    
    .navbar-brand img {
      height: 40px;
    }
    
    .nav-link {
      font-weight: 500;
      color: var(--nykaa-dark);
      padding: 8px 15px;
      position: relative;
    }
    
    .nav-link:hover, .nav-link.active {
      color: var(--nykaa-pink);
    }
    
    .nav-link.active:after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 15px;
      right: 15px;
      height: 2px;
      background: var(--nykaa-pink);
    }
    
    .search-box {
      border-radius: 20px;
      border: 1px solid #ddd;
      padding-left: 20px;
      max-width: 500px;
    }
    
    .search-btn {
      border-radius: 0 20px 20px 0;
      background-color: var(--nykaa-pink);
      color: white;
      border: none;
      padding: 0 15px;
    }
    
    .user-icon {
      font-size: 1.2rem;
      color: var(--nykaa-dark);
      margin-left: 20px;
    }
    
    /* Offer Banner */
    .offer-banner {
      position: relative;
      overflow: hidden;
      margin-bottom: 30px;
    }
    
    .offer-banner img {
      width: 100%;
      height: auto;
      display: block;
    }
    
    /* Main Content */
    .offer-hero {
      background: linear-gradient(135deg, #fff9fb, #fff0f5);
      padding: 60px 0;
      text-align: center;
      margin-bottom: 40px;
    }
    
    .offer-hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 2.8rem;
      color: var(--nykaa-pink);
      margin-bottom: 20px;
      font-weight: 700;
    }
    
    .offer-hero p {
      font-size: 1.1rem;
      color: var(--nykaa-gray);
      max-width: 700px;
      margin: 0 auto 30px;
      line-height: 1.6;
    }
    
    /* Offer Categories */
    .offer-categories {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 30px;
    }
    
    .offer-category {
      background-color: white;
      padding: 8px 20px;
      border-radius: 20px;
      border: 1px solid var(--nykaa-pink);
      color: var(--nykaa-pink);
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s ease;
      font-size: 0.9rem;
    }
    
    .offer-category.active, .offer-category:hover {
      background-color: var(--nykaa-pink);
      color: white;
      box-shadow: 0 4px 12px rgba(232, 0, 113, 0.2);
    }
    
    /* Offer Grid */
    .offer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 30px;
      padding: 0 5%;
      margin-bottom: 60px;
    }
    
    @media (max-width: 768px) {
      .offer-grid {
        grid-template-columns: 1fr;
        padding: 0 15px;
      }
    }
    
    .offer-card {
      background-color: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      position: relative;
    }
    
    .offer-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 30px rgba(232, 0, 113, 0.1);
    }
    
    .offer-badge {
      position: absolute;
      top: 15px;
      left: 15px;
      background-color: var(--nykaa-pink);
      color: white;
      padding: 4px 12px;
      border-radius: 4px;
      font-size: 0.8rem;
      font-weight: 600;
      z-index: 1;
    }
    
    .offer-image {
      height: 200px;
      overflow: hidden;
      position: relative;
    }
    
    .offer-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .offer-card:hover .offer-image img {
      transform: scale(1.05);
    }
    
    .offer-details {
      padding: 20px;
    }
    
    .offer-title {
      font-size: 1.1rem;
      font-weight: 600;
      margin-bottom: 10px;
      color: var(--nykaa-dark);
    }
    
    .offer-description {
      font-size: 0.9rem;
      color: var(--nykaa-gray);
      margin-bottom: 15px;
      line-height: 1.5;
    }
    
    .offer-code {
      display: inline-block;
      background-color: var(--nykaa-light-pink);
      color: var(--nykaa-pink);
      padding: 6px 12px;
      border-radius: 4px;
      font-weight: 600;
      font-size: 0.85rem;
      margin-bottom: 15px;
      font-family: monospace;
    }
    
    .offer-valid {
      font-size: 0.8rem;
      color: var(--nykaa-light-gray);
      display: flex;
      align-items: center;
    }
    
    .offer-valid i {
      margin-right: 5px;
      font-size: 0.9rem;
    }
    
    /* Footer */
    footer {
      background-color: #2a2a2a;
      color: white;
      padding: 50px 0 20px;
    }
    
    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 30px;
      margin-bottom: 30px;
      padding: 0 5%;
    }
    
    .footer-column h3 {
      font-size: 1rem;
      margin-bottom: 20px;
      text-transform: uppercase;
      font-weight: 600;
      position: relative;
      padding-bottom: 10px;
    }
    
    .footer-column h3:after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      width: 30px;
      height: 2px;
      background: var(--nykaa-pink);
    }
    
    .footer-column ul {
      list-style: none;
      padding: 0;
    }
    
    .footer-column li {
      margin-bottom: 10px;
    }
    
    .footer-column a {
      color: #bbb;
      text-decoration: none;
      font-size: 0.9rem;
      transition: all 0.3s;
    }
    
    .footer-column a:hover {
      color: white;
      padding-left: 5px;
    }
    
    .social-icons {
      display: flex;
      gap: 15px;
      margin-top: 20px;
    }
    
    .social-icons a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      background: #444;
      color: white;
      border-radius: 50%;
      transition: all 0.3s;
    }
    
    .social-icons a:hover {
      background: var(--nykaa-pink);
      transform: translateY(-3px);
    }
    
    .copyright {
      text-align: center;
      padding-top: 20px;
      border-top: 1px solid #444;
      font-size: 0.85rem;
      color: #999;
    }
    
    /* Animation */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .offer-card {
      animation: fadeIn 0.5s ease forwards;
      opacity: 0;
    }
    
    .offer-card:nth-child(1) { animation-delay: 0.1s; }
    .offer-card:nth-child(2) { animation-delay: 0.2s; }
    .offer-card:nth-child(3) { animation-delay: 0.3s; }
    .offer-card:nth-child(4) { animation-delay: 0.4s; }
    .offer-card:nth-child(5) { animation-delay: 0.5s; }
    .offer-card:nth-child(6) { animation-delay: 0.6s; }
  </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
  <div class="container">
    <a class="navbar-brand" href="{{route('base.home') }}">
      <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" width="120" alt="Nykaa">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Categories</a>
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
          <a class="nav-link active" href="#">Offers</a>
        </li>
      </ul>
      <form class="d-flex me-3">
        <input class="form-control search-box" type="search" placeholder="Search on Nykaa" aria-label="Search">
        <button class="btn search-btn" type="submit"><i class="fas fa-search"></i></button>
      </form>
      <div class="d-flex align-items-center">
        <a href="#" class="text-dark me-3"><i class="far fa-user user-icon"></i></a>
        <a href="#" class="text-dark position-relative">
          <i class="fas fa-shopping-bag user-icon"></i>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            3
          </span>
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Offer Banner -->
<div class="offer-banner">
  <img src="https://images-static.nykaa.com/uploads/d2a744d2-a722-4149-91b6-49dae9b91f0c.gif" alt="Offer Zone Banner" class="img-fluid">
</div>

<!-- Main Content -->
<main>
  <section class="offer-hero">
    <div class="container">
      <h1>Exclusive Offers Just For You</h1>
      <p>Discover amazing deals and discounts on your favorite beauty products. Limited time offers - shop now before they're gone!</p>
      <div class="offer-categories">
        <div class="offer-category active">All Offers</div>
        <div class="offer-category">Makeup</div>
        <div class="offer-category">Skincare</div>
        <div class="offer-category">Haircare</div>
        <div class="offer-category">New User</div>
        <div class="offer-category">Bank Offers</div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="offer-grid">
      <div class="offer-card">
        <div class="offer-badge">30% OFF</div>
        <div class="offer-image">
          <img src="https://images-static.nykaa.com/media/catalog/product/f/5/f5463bfMINIM00000079_1.jpg" alt="30% Off Offer">
        </div>
        <div class="offer-details">
          <h3 class="offer-title">Flat 30% Off on Minimalist</h3>
          <p class="offer-description">Get flat 30% off on all Minimalist skincare products. No minimum order value required.</p>
          <span class="offer-code">MINIMAL30</span>
          <p class="offer-valid"><i class="far fa-clock"></i> Valid till: 30th June 2023</p>
        </div>
      </div>
      
      <div class="offer-card">
        <div class="offer-badge">B1G1</div>
        <div class="offer-image">
          <img src="https://emmiesbeautylife.com/wp-content/uploads/2018/10/maybellinemain.jpg" alt="B1G1 Offer">
        </div>
        <div class="offer-details">
          <h3 class="offer-title">Buy 1 Get 1 Free on Maybelline</h3>
          <p class="offer-description">Buy any Maybelline product and get another of equal or lesser value absolutely free.</p>
          <span class="offer-code">MAYB2G1</span>
          <p class="offer-valid"><i class="far fa-clock"></i> Valid till: 15th July 2023</p>
        </div>
      </div>
      
      <div class="offer-card">
        <div class="offer-badge">NEW USER</div>
        <div class="offer-image">
          <img src="https://images-static.nykaa.com/uploads/3c0c7c9c-7a7c-4d9e-9f1d-5d5e5e5e5e5e.jpg" alt="First Order Offer">
        </div>
        <div class="offer-details">
          <h3 class="offer-title">10% Off on First Order</h3>
          <p class="offer-description">New to Nykaa? Get 10% off on your first order. Maximum discount of ₹500.</p>
          <span class="offer-code">WELCOME10</span>
          <p class="offer-valid"><i class="far fa-clock"></i> Valid for new users only</p>
        </div>
      </div>
      
      <div class="offer-card">
        <div class="offer-badge">EXTRA 15%</div>
        <div class="offer-image">
          <img src="https://images-static.nykaa.com/uploads/4b4b4b4b-4b4b-4b4b-4b4b-4b4b4b4b4b4b.jpg" alt="Extra 15% Off">
        </div>
        <div class="offer-details">
          <h3 class="offer-title">Extra 15% Off on ₹1999+</h3>
          <p class="offer-description">Get extra 15% off on orders above ₹1999. Applicable on all brands.</p>
          <span class="offer-code">EXTRA15</span>
          <p class="offer-valid"><i class="far fa-clock"></i> Valid till: 20th June 2023</p>
        </div>
      </div>
      
      <div class="offer-card">
        <div class="offer-badge">FREE GIFT</div>
        <div class="offer-image">
          <img src="https://images-static.nykaa.com/uploads/5c5c5c5c-5c5c-5c5c-5c5c-5c5c5c5c5c5c.jpg" alt="Free Gift Offer">
        </div>
        <div class="offer-details">
          <h3 class="offer-title">Free Gift Worth ₹499</h3>
          <p class="offer-description">Get a free gift worth ₹499 on orders above ₹1499 from Lakmé range.</p>
          <span class="offer-code">LAKMEGIFT</span>
          <p class="offer-valid"><i class="far fa-clock"></i> Valid till stocks last</p>
        </div>
      </div>
      
      <div class="offer-card">
        <div class="offer-badge">BANK OFFER</div>
        <div class="offer-image">
          <img src="https://images-static.nykaa.com/uploads/6d6d6d6d-6d6d-6d6d-6d6d-6d6d6d6d6d6d.jpg" alt="Bank Offer">
        </div>
        <div class="offer-details">
          <h3 class="offer-title">10% Cashback with HDFC Bank</h3>
          <p class="offer-description">Get 10% cashback up to ₹500 when you pay with HDFC Bank credit cards.</p>
          <span class="offer-code">No code required</span>
          <p class="offer-valid"><i class="far fa-clock"></i> Valid till: 25th June 2023</p>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-column">
        <h3>Shop</h3>
        <ul>
          <li><a href="#">Makeup</a></li>
          <li><a href="#">Skincare</a></li>
          <li><a href="#">Haircare</a></li>
          <li><a href="#">Fragrance</a></li>
          <li><a href="#">Bath & Body</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h3>Help</h3>
        <ul>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Shipping Policy</a></li>
          <li><a href="#">Return Policy</a></li>
          <li><a href="#">Track Order</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h3>About</h3>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Blogs</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms & Conditions</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h3>Connect With Us</h3>
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">YouTube</a></li>
          <li><a href="#">Pinterest</a></li>
        </ul>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>
      </div>
    </div>
    <div class="copyright">
      © 2025 Nykaa . All Rights Reserved.
    </div>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>