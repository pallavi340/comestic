<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nykaa Clone Header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .top-banner {
      background: pink;
      color: #000;
      text-align: center;
      padding: 5px 0;
      font-weight: 500;
    }
    .logo {
      font-size: 28px;
      font-weight: bold;
      color: #ff007f;
      margin-right: 20px;
    }
    .navbar-nav .nav-link {
      color: #000 !important;
      font-weight: 500;
    }
    .category-bar {
      background: #fff;
      border-top: 1px solid #eee;
      border-bottom: 1px solid #eee;
    }
    .category-bar a {
      padding: 10px 15px;
      color: #333;
      text-decoration: none;
      display: inline-block;
    }
    .offer-banner {
      background: linear-gradient(to right, #fff3c4, #ffe4b3);
      padding: 25px 15px;
      text-align: center;
    }
    .offer-banner h2 {
      font-size: 32px;
      color: #ff5a3c;
      font-weight: bold;
    }
    .offer-code {
      background: #ff6a2f;
      color: #fff;
      padding: 12px 25px;
      font-size: 20px;
      font-weight: bold;
      border-radius: 8px;
      display: inline-block;
      margin-top: 10px;
    }
    .max-discount {
      color: #c44d00;
      font-size: 14px;
      margin-top: 8px;
    }
  </style>
</head>
<body>

  <!-- Top Banner -->
  <div class="top-banner">
    BEAUTY BONANZA Get Your Amazing Deals!
  </div>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container-fluid px-4">
      <a class="navbar-brand logo" href="#">NYKAA</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#">Categories</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Brands</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Luxe</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Nykaa Fashion</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Beauty Advice</a></li>
        </ul>
        <form class="d-flex me-3">
          <input class="form-control" type="search" placeholder="Search on Nykaa" aria-label="Search">
        </form>
        <button class="btn btn-primary me-2">Sign in</button>
        <a href="#" class="btn"><i class="bi bi-bag"></i></a>
      </div>
    </div>
  </nav>

  <!-- Category Bar -->
  <div class="category-bar text-center">
    <a href="#">Makeup</a>
    <a href="#">Skin</a>
    <a href="#">Hair</a>
    <a href="#">Appliances</a>
    <a href="#">Bath & Body</a>
    <a href="#">Natural</a>
    <a href="#">Mom & Baby</a>
    <a href="#">Health & Wellness</a>
    <a href="#">Men</a>
    <a href="#">Fragrance</a>
    <a href="#">Lingerie & Accessories</a>
    <a href="#" class="text-danger fw-bold">SALE</a>
  </div>

  <!-- Offer Banner -->
  <div class="offer-banner">
    <h2>GET 15% OFF on orders above ₹1800</h2>
    <div class="offer-code">USE CODE WEEKENDVIBE15</div>
    <div class="max-discount">*Up to ₹300</div>
  </div>

</body>
</html>


  