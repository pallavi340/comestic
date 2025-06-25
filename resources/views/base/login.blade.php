<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page | Nykaa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(rgba(255, 225, 230, 0.8), rgba(252, 212, 225, 0.8)), 
                  url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      flex-direction: column;
    }

    .navbar {
      background-color: rgba(255, 255, 255, 0.9);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-weight: bold;
      color: #e91e63 !important;
    }

    .nav-link {
      color: #555 !important;
      font-weight: 500;
      margin: 0 8px;
    }

    .nav-link:hover {
      color: #e91e63 !important;
    }

    .login-container {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }

    .login-card {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 2.5rem 3rem;
      border-radius: 20px;
      box-shadow: 0 0 30px rgba(233, 30, 99, 0.2);
      width: 100%;
      max-width: 450px;
      backdrop-filter: blur(5px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .login-card h2 {
      color: #e91e63;
      font-weight: bold;
    }

    .form-control:focus {
      border-color: #e91e63;
      box-shadow: 0 0 0 0.2rem rgba(233, 30, 99, 0.25);
    }

    .btn-login {
      background-color: #e91e63;
      color: #fff;
      border-radius: 25px;
      font-weight: 600;
      transition: all 0.3s;
      padding: 10px 0;
    }

    .btn-login:hover {
      background-color: #c2185b;
      transform: translateY(-2px);
    }

    .btn-google {
      background-color: #fff;
      color: #555;
      border: 1px solid #ddd;
      border-radius: 25px;
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 10px 0;
      transition: all 0.3s;
    }

    .btn-google:hover {
      background-color: #f7f7f7;
      transform: translateY(-2px);
    }

    .btn-google img {
      width: 20px;
    }

    .form-check-label {
      color: #555;
    }

    .logo {
      width: 70px;
      margin-bottom: 1rem;
      filter: drop-shadow(0 2px 4px rgba(233, 30, 99, 0.3));
    }

    .extra-links {
      font-size: 0.9rem;
    }

    .extra-links a {
      color: #e91e63;
      text-decoration: none;
      font-weight: 500;
    }

    .extra-links a:hover {
      text-decoration: underline;
    }

    .divider {
      text-align: center;
      position: relative;
      margin: 1.5rem 0;
    }

    .divider::before, .divider::after {
      content: "";
      position: absolute;
      top: 50%;
      width: 45%;
      height: 1px;
      background-color: #ddd;
    }

    .divider::before {
      left: 0;
    }

    .divider::after {
      right: 0;
    }

    .divider span {
      padding: 0 10px;
      background: #fff;
      color: #666;
      position: relative;
      z-index: 1;
    }

    .navbar-toggler {
      border: none;
      padding: 0.5rem;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28233, 30, 99, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    @media (max-width: 576px) {
      .login-card {
        padding: 2rem 1.5rem;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="bi bi-flower1 me-2"></i>NYKAA Beauty</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-house-door me-1"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-shop me-1"></i>Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-star me-1"></i>Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#"><i class="bi bi-person me-1"></i>Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-cart3 me-1"></i>Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 
  <div class="login-container">
    <div class="login-card">
      <div class="text-center">
        <img src="https://cdn-icons-png.flaticon.com/512/4140/4140037.png" class="logo" alt="Cosmetic Logo">
        <h2>Welcome To Nykaa!</h2>
        <p class="text-muted mb-4">Login to your NYKAA account</p>
      </div>
        @section('msg')
            <div class="alert alert-danger">{{session('msg')}}</div>
        @endsection

      <form action="{{route('loginUser')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label"><i class="bi bi-envelope-fill me-1"></i>Email address</label>
          <input type="email" id="email" name="email" value="{{old('email')}}"  class="form-control">
          @error('email')
              <p class="text-danger small">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-3">
          <label for="password" class="form-label"><i class="bi bi-lock-fill me-1"></i>Password</label>
          <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control">
          @error('password')
              <p class="text-danger small">{{$message}}</p>
          @enderror
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="rememberMe">
            <label class="form-check-label" for="rememberMe">
              Remember me
            </label>
          </div>
          <a href="#" class="text-decoration-none text-danger">Forgot password?</a>
        </div>
         
        <form method="POST" action="">
           @csrf
           <button type="submit" class="btn btn-login w-100 mb-3">
             <i class="bi bi-box-arrow-in-right me-2"></i>Login
           </button>
        </form>

        <div class="divider"><span>or</span></div>

        <a href="{{ route('google.login') }}" class="btn btn-google w-100 mb-3">
          <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google logo">
          Login with Google
        </a>
      </form>

      <div class="text-center mt-3 extra-links">
        Don't have an account? <a href="{{route('base.register')}}">Register here</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>