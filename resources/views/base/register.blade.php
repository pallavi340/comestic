<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register Page | Nykaa</title>
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

    .register-container {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }

    .register-card {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 2.5rem 3rem;
      border-radius: 20px;
      box-shadow: 0 0 30px rgba(233, 30, 99, 0.2);
      width: 100%;
      max-width: 500px;
      backdrop-filter: blur(5px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .register-card h2 {
      color: #e91e63;
      font-weight: bold;
    }

    .form-control:focus {
      border-color: #e91e63;
      box-shadow: 0 0 0 0.2rem rgba(233, 30, 99, 0.25);
    }

    .btn-register {
      background-color: #e91e63;
      color: #fff;
      border-radius: 25px;
      font-weight: 600;
      transition: all 0.3s;
      padding: 10px 0;
    }

    .btn-register:hover {
      background-color: #c2185b;
      transform: translateY(-2px);
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

    @media (max-width: 576px) {
      .register-card {
        padding: 2rem 1.5rem;
      }
    }
  </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="bi bi-flower1 me-2"></i>NYKAA Beauty</a>
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
            <a class="nav-link active" href="#"><i class="bi bi-person-plus me-1"></i>Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-cart3 me-1"></i>Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Register Form -->
  <div class="register-container">
    <div class="register-card">
      <div class="text-center">
        <img src="https://cdn-icons-png.flaticon.com/512/4140/4140037.png" class="logo" alt="Cosmetic Logo">
        <h2>Create Your Account</h2>
      </div>
     <form action="{{ route('storeUser') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label"><i class="bi bi-person-fill me-1"></i>Full Name</label>
    <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control" >
    @error('name')
        <p class="text-danger small">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-3">
    <label for="email" class="form-label"><i class="bi bi-envelope-fill me-1"></i>Email address</label>
    <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control">
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

   <div class="mb-3">
    <label for="Contact" class="form-label"><i class="bi bi-telephone-fill me-1"></i>Contact</label>
    <input type="contact" id="contact" name="contact" value="{{old('contact')}}" class="form-control">
    @error('contact')
        <p class="text-danger small">{{$message}}</p>
    @enderror
  </div>

  <button type="submit" class="btn btn-register w-100 mb-3">
    <i class="bi bi-person-plus-fill me-2"></i>Register
  </button>
</form>


      <div class="text-center mt-3 extra-links">
        Already have an account? <a href="{{route('base.login')}}">Login here</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
