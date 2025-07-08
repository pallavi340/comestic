<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment | Nykaa</title>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<nav class="navbar">
  <div class="container d-flex align-items-center justify-content-between py-2">
    
    <a class="navbar-brand" href="{{ route('base.home') }}">
      <img src="https://companieslogo.com/img/orig/NYKAA.NS-d90b04ce.png?t=1637461145" width="100" alt="Brand Logo">
    </a>


    <div class="nav-links d-flex align-items-center gap-4">
      <a href="#" class="nav-item">
        <i class="far fa-user"></i>{{auth()->user()->name}}</a>
      <a href="{{route('base.wishlist')}}" class="nav-item">
        <i class="far fa-heart"></i>
        <span>Wishlist</span>
      </a>
      <a href="{{route('base.cart')}}" class="nav-item cart-icon">
        <i class="fas fa-shopping-bag"></i>
        <span>Bag</span>
        <span class="cart-count">2</span>
      </a>
    </div>
  
    <div class="mobile-menu">
      <i class="fas fa-bars"></i>
    </div>
  </div>
</nav>
<style>
  .payment-option {
    transition: all 0.2s ease-in-out;
    cursor: pointer;
  }

  .payment-option:hover {
    background-color: #e9f7f6;
    border-color: #0d9488;
  }

  .form-check-input:checked + .payment-option {
    background-color: #0d9488;
    color: white;
    border-color: #0d9488;
  }
</style>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6 text-center mb-4">
      <h2 class="fw-bold">Choose Payment Method</h2>
      <p class="text-muted">Select your preferred way to pay and place your order securely.</p>
    </div>

    <div class="col-md-4">
     <form action="{{ route('order.place') }}" method="POST">
      @csrf
        <div class="mb-3">
          <input class="form-check-input d-none" type="radio" name="mode" id="cod" value="cod" checked>
          <label class="payment-option d-block border rounded p-3 shadow-sm" for="cod">
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-truck fs-4"></i>
              <h5 class="mb-0 fw-semibold">Cash On Delivery</h5>
            </div>
          </label>
        </div>


        <div class="mb-3">
          <input class="form-check-input d-none" type="radio" name="mode" id="razorpay" value="razorpay">
          <label class="payment-option d-block border rounded p-3 shadow-sm" for="razorpay">
            <div class="d-flex align-items-center gap-2">
              <button id="payBtn" class="btn btn-seconday w-100 fw-bold">
                <i class="bi bi-credit-card me-2"></i> Pay with Razorpay
              </button>
            </div>
          </label>
        </div>

        <div class="mt-4">
          <button type="submit" class="btn btn-success w-100 btn-lg fw-semibold"> <i class="bi bi-check-circle me-2"></i> Make Payment </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>


<script>
document.getElementById('payBtn').onclick = function (e) {
    e.preventDefault();

    var options = {
        "key": "{{ env('RAZORPAY_KEY') }}",
        "amount":10000, 
        "currency": "INR",
        "name": "My Store",
        "description": "Product Purchase",
        "image": "https://yourdomain.com/logo.png",
        "handler": function (response){
            // Send response.razorpay_payment_id to server  
            var form = document.createElement('form');
            form.setAttribute('method', 'post');
            form.setAttribute('action', '{{ route('razorpay.payment') }}');

            var _token = document.createElement('input');
            _token.setAttribute('type', 'hidden');
            _token.setAttribute('name', '_token');
            _token.setAttribute('value', '{{ csrf_token() }}');
            form.appendChild(_token);

            var paymentInput = document.createElement('input');
            paymentInput.setAttribute('type', 'hidden');
            paymentInput.setAttribute('name', 'razorpay_payment_id');
            paymentInput.setAttribute('value', response.razorpay_payment_id);
            form.appendChild(paymentInput);

            document.body.appendChild(form);
            form.submit();
        },
        "prefill": {
            "name": "{{ auth()->user()->name }}",
            "email": "{{ auth()->user()->email }}"
        },
        "theme": {
            "color": "#0d6efd"
        }
    };
    
    var rzp1 = new Razorpay(options);
    rzp1.open();
};
</script>