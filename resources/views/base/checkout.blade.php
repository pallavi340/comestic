<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Nykaa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .form-check-input:checked {
            background-color: #e60073;
            border-color: #e60073;
        }

        .btn-disabled {
            background-color: #d3d3d3;
            color: #777;
            border: none;
            cursor: not-allowed;
        }

        .dropdown-toggle::after {
            margin-left: 0.5rem;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #e60073;
        }

        .form-box {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
    </style>
    <style>
  :root {
    --primary-pink: #fc2779;
    --light-grey: #f8f8f8;
    --dark-text: #333;
  }

  .navbar {
    background-color: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    position: sticky;
    top: 0;
    z-index: 1000;
  }

  .navbar-brand img {
    max-height: 40px;
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

  .nav-item {
    color: var(--dark-text);
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: 12px;
    transition: color 0.3s;
    position: relative;
  }

  .nav-item i {
    font-size: 18px;
    margin-bottom: 2px;
  }

  .nav-item:hover {
    color: var(--primary-pink);
  }

  .cart-icon {
    position: relative;
  }

  .cart-count {
    position: absolute;
    top: -6px;
    right: -10px;
    background-color: var(--primary-pink);
    color: white;
    border-radius: 50%;
    width: 18px;
    height: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 10px;
    font-weight: bold;
  }

  .mobile-menu {
    display: none;
    font-size: 22px;
    color: var(--dark-text);
    cursor: pointer;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .search-bar {
      display: none;
    }

    .nav-links {
      display: none;
    }

    .mobile-menu {
      display: block;
    }
  }
  
</style>

     
</head>
<body>
    
<!-- Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<nav class="navbar">
  <div class="container d-flex align-items-center justify-content-between py-2">
    
    <!-- Logo -->
    <a class="navbar-brand" href="{{route("base.home") }}">
                <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" width="100%" alt="Your Brand Logo" class="brand-logo">
            </a>
    <!-- Search Bar -->
    <div class="col-md-6">
        <form class="d-flex me-3">
                    <input class="search-box" type="search" placeholder="Search for products...">
                    <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
      </div>

    <!-- Nav Links -->
    <div class="nav-links d-flex align-items-center gap-4">
      <a href="#" class="nav-item">
        <i class="far fa-user"></i>{{auth()->user()->name}}
      </a>
      <a href="#" class="nav-item">
        <i class="far fa-heart"></i>
        <span>Wishlist</span>
      </a>
      <a href="#" class="nav-item cart-icon">
        <i class="fas fa-shopping-bag"></i>
        <span>Bag</span>
        <span class="cart-count">2</span>
      </a>
    </div>
  
  
  </div>
</nav>

<div class="container py-5">
    <div class="form-box" style="max-width: 950px;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Checkout Order</h4>
        </div>
        
       <div class="row">
       <div class="col-md-8">
        <form action="{{route('address.store')}}" method="post">
            @csrf
            <div class="row">
            <div class="mb-3">
                <label for="full_name" class="form-label">Name</label>
                <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Enter Your Name">
                @error('full_name')
                   <p class="text-danger text-sm">{{$message}}</p>  
                @enderror
            </div>

            <div class="mb-3">
                <label for="contact" class="form-label">Contact</label>
                <input type="number" id="contact" name="contact" class="form-control" placeholder="Enter Your Contact" >
                 @error('contact')
                   <p class="text-danger text-sm">{{$message}}</p>  
                @enderror
            </div>
          </div>

            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" id="city" name="city" class="form-control"  placeholder="Enter City Address">
                 @error('city')
                   <p class="text-danger text-sm">{{$message}}</p>  
                @enderror
            </div>

            <div class="mb-3">
                <label for="area" class="form-label">Area</label>
                <input type="text" id="area" name="area" class="form-control" placeholder="Enter Area Address">
                 @error('area')
                   <p class="text-danger text-sm">{{$message}}</p>  
                @enderror
            </div>

            <div class="mb-3">
                <label for="state" class="form-label">State</label>
                 <input type="text" id="state" name="state" class="form-control"  placeholder="Enter State Address">
                 @error('state')
                   <p class="text-danger text-sm">{{$message}}</p>  
                 @enderror
              </div>

            <div class="mb-3">
              <label for="street" class="form-label">Street</label>
              <input type="text" id="street" name="street" class="form-control" placeholder="Enter Street Address">
              @error('street')
               <p class="text-danger text-sm">{{$message}}</p>  
              @enderror
           </div>

            <div class="mb-3">
                <label for="pincode" class="form-label">pincode</label>
                <input type="text" id="pincode" name="pincode" class="form-control" placeholder="Enter Pin Code">
                @error('pincode')
                  <p class="text-danger text-sm">{{$message}}</p>  
                @enderror
            </div>

            <div class="mb-3">
              <input type="submit" class="btn btn-dark btn-sm w-100 rounded" value="Save Address">
            </div>
        </form>
         </div>
      
 <style>
  .address-card {
    transition: all 0.2s ease-in-out;
  }

  .address-card:hover {
    background-color: #f8f9fa; /* Light grey */
    border-color: #198754;     /* Bootstrap success color */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }

  .address-card {
    transition: all 0.2s ease-in-out;
  }

  .address-card:hover {
    background-color: #f8f9fa; /* Light grey */
    border-color: #198754;     /* Bootstrap success color */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }

</style>
<style>
  .address-card {
    transition: all 0.2s ease-in-out;
  }

  .address-card:hover {
    background-color: #fff3cd; /* Bootstrap warning-light */
    border-color: #ffc107;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
  }
</style>

<div class="col-md-4">
  <form action="{{ route('order.addAddress') }}" method="POST">
    @csrf

    @foreach($addresses as $add)
      <label class="d-block border rounded p-3 mb-3 address-card">
        <div class="d-flex align-items-start">
          <input type="radio"
                 name="selected_address"
                 value="{{ $add->id }}"
                 onchange="this.form.submit()"
                 class="form-check-input me-3 mt-1" />

          <div>
            <p class="mb-1 fw-bold">{{ $add->full_name }}</p>
            <p class="mb-1">{{ $add->contact }}</p>
            <p class="mb-1">{{ $add->street }}, {{ $add->area }}</p>
            <p class="mb-1">{{ $add->city }}, {{ $add->state }} - {{ $add->pincode }}</p>

            <div class="mt-2">
              <a href="#" class="btn btn-outline-success btn-sm me-1 rounded-sm">
                <i class="bi bi-pencil-fill"></i> Edit
              </a>
              <a href="#" class="btn btn-outline-danger btn-sm rounded-sm">
                <i class="bi bi-trash-fill"></i> Delete
              </a>
            </div>
          </div>
        </div>
      </label>
    @endforeach   
  </form>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>