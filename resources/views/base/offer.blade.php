<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nykaa Offer Zone</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
    <style>
      /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #f8f8f8;
            color: #333;
        }
        
        /* Header Styles */
        header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .top-bar {
            background-color: #fdf2f5;
            padding: 8px 0;
            text-align: center;
            font-size: 14px;
            color: #8c8c8c;
        }
        
        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 5%;
        }
        
        .logo {
            font-size: 28px;
            font-weight: 700;
            color: #e80071;
        }
        
        .search-bar {
            flex-grow: 1;
            margin: 0 30px;
        }
        
        .search-bar input {
            width: 100%;
            max-width: 500px;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 20px;
            outline: none;
        }
        
        .user-actions a {
            margin-left: 20px;
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }
        
        /* Navigation */
        nav {
            background-color: #fff;
            border-top: 1px solid #eee;
        }
        
        .nav-links {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 15px 0;
        }
        
        .nav-links li {
            margin: 0 15px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            font-size: 14px;
            text-transform: uppercase;
        }
        
        /* Promotional Banner */
        .promo-banner {
            background: linear-gradient(to right, #e80071, #ff4d94);
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 16px;
            font-weight: 500;
        }
        
        .promo-banner a {
            color: white;
            text-decoration: underline;
            margin-left: 10px;
        }
        
        /* Offer Page Styles */
        .offer-hero {
            background: linear-gradient(135deg, #fdf2f5, #fff6f9);
            padding: 60px 5%;
            text-align: center;
        }
        
        .offer-hero h1 {
            font-size: 36px;
            color: #e80071;
            margin-bottom: 20px;
        }
        
        .offer-hero p {
            font-size: 18px;
            color: #666;
            max-width: 800px;
            margin: 0 auto 30px;
        }
        
        .offer-categories {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .offer-category {
            background-color: #fff;
            padding: 8px 20px;
            border-radius: 20px;
            border: 1px solid #e80071;
            color: #e80071;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .offer-category.active, .offer-category:hover {
            background-color: #e80071;
            color: white;
        }
        
        .offer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            padding: 0 5% 60px;
        }
        
        .offer-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }
        
        .offer-card:hover {
            transform: translateY(-5px);
        }
        
        .offer-image {
            height: 200px;
            overflow: hidden;
        }
        
        .offer-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .offer-details {
            padding: 20px;
        }
        
        .offer-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }
        
        .offer-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
            line-height: 1.5;
        }
        
        .offer-code {
            display: inline-block;
            background-color: #fdf2f5;
            color: #e80071;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 15px;
        }
        
        .offer-valid {
            font-size: 12px;
            color: #999;
        }
        
        /* Footer */
        footer {
            background-color: #333;
            color: white;
            padding: 50px 5% 20px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .footer-column h3 {
            font-size: 16px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column li {
            margin-bottom: 10px;
        }
        
        .footer-column a {
            color: #ccc;
            text-decoration: none;
            font-size: 14px;
        }
        
        .footer-column a:hover {
            color: white;
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #444;
            font-size: 14px;
            color: #999;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white px-4 border-bottom shadow-sm">
<a class="navbar-brand" href="#">
                <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145"width="100"alt="Nykaa">
            </a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item mx-2"><a class="nav-link" href="#">Categories</a></li>
      <li class="nav-item mx-2"><a class="nav-link" href="#">Brands</a></li>
      <li class="nav-item mx-2"><a class="nav-link" href="#">Luxe</a></li>
      <li class="nav-item mx-2"><a class="nav-link" href="#">Nykaa Fashion</a></li>
      <li class="nav-item mx-2"><a class="nav-link" href="#">Beauty Advice</a></li>
    </ul>
    <form class="d-flex me-3" role="search">
      <input class="form-control me-2" type="search" placeholder="Search on Nykaa" />
    </form>
    <div class="d-flex align-items-center">
      <span class="me-3">👤 Jagriti</span>
      <span>🛒</span>
    </div>
  </div>
</nav>

<div class="offer-banner">
  <img src="https://images-static.nykaa.com/uploads/d2a744d2-a722-4149-91b6-49dae9b91f0c.gif" alt="Offer Zone Banner" class="img-fluid w-100" />
</div>




 <main>
        <section class="offer-hero">
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
        </section>


 <section class="offer-grid">
            <div class="offer-card">
                <div class="offer-image">
                    <img src="https://images-static.nykaa.com/media/catalog/product/f/5/f5463bfMINIM00000079_1.jpg" alt="30% Off Offer">
                </div>
                <div class="offer-details">
                    <h3 class="offer-title">Flat 30% Off on Minimalist</h3>
                    <p class="offer-description">Get flat 30% off on all Minimalist skincare products. No minimum order value required.</p>
                    <span class="offer-code">Use Code: MINIMAL30</span>
                    <p class="offer-valid">Valid till: 30th June 2023</p>
                </div>
            </div>
            
            <div class="offer-card">
                <div class="offer-image">
                    <img src="https://emmiesbeautylife.com/wp-content/uploads/2018/10/maybellinemain.jpg" alt="B1G1 Offer">
                </div>
                <div class="offer-details">
                    <h3 class="offer-title">Buy 1 Get 1 Free on Maybelline</h3>
                    <p class="offer-description">Buy any Maybelline product and get another of equal or lesser value absolutely free.</p>
                    <span class="offer-code">Use Code: MAYB2G1</span>
                    <p class="offer-valid">Valid till: 15th July 2023</p>
                </div>
            </div>
            
            <div class="offer-card">
                <div class="offer-image">
                    <img src="" alt="First Order Offer">
                </div>
                <div class="offer-details">
                    <h3 class="offer-title">10% Off on First Order</h3>
                    <p class="offer-description">New to Nykaa? Get 10% off on your first order. Maximum discount of ₹500.</p>
                    <span class="offer-code">Use Code: WELCOME10</span>
                    <p class="offer-valid">Valid for new users only</p>
                </div>
            </div>
            
            <div class="offer-card">
                <div class="offer-image">
                    <img src="https://via.placeholder.com/600x400/fdf2f5/e80071?text=Extra+15%25+Off" alt="Extra 15% Off">
                </div>
                <div class="offer-details">
                    <h3 class="offer-title">Extra 15% Off on ₹1999+</h3>
                    <p class="offer-description">Get extra 15% off on orders above ₹1999. Applicable on all brands.</p>
                    <span class="offer-code">Use Code: EXTRA15</span>
                    <p class="offer-valid">Valid till: 20th June 2023</p>
                </div>
            </div>
            
            <div class="offer-card">
                <div class="offer-image">
                    <img src="https://via.placeholder.com/600x400/fdf2f5/e80071?text=Free+Gift+on+%E2%82%B9499" alt="Free Gift Offer">
                </div>
                <div class="offer-details">
                    <h3 class="offer-title">Free Gift Worth ₹499</h3>
                    <p class="offer-description">Get a free gift worth ₹499 on orders above ₹1499 from Lakmé range.</p>
                    <span class="offer-code">Use Code: LAKMEGIFT</span>
                    <p class="offer-valid">Valid till stocks last</p>
                </div>
            </div>
            
            <div class="offer-card">
                <div class="offer-image">
                    <img src="https://via.placeholder.com/600x400/fdf2f5/e80071?text=Bank+Offer+10%25" alt="Bank Offer">
                </div>
                <div class="offer-details">
                    <h3 class="offer-title">10% Cashback with HDFC Bank</h3>
                    <p class="offer-description">Get 10% cashback up to ₹500 when you pay with HDFC Bank credit cards.</p>
                    <span class="offer-code">No code required</span>
                    <p class="offer-valid">Valid till: 25th June 2023</p>
                </div>
            </div>
        </section>
    </main>
    
    <footer>
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
            </div>
        </div>
        <div class="copyright">
            © 2025 Nykaa . All Rights Reserved.
        </div>
    </footer>
</body>
</html>

</body>
</html>