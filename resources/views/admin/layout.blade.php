<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title') | Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f9;
    }

    .sidebar {
      height: 100vh;
      background: #ffffff;
      color: #333;
      padding-top: 1rem;
      position: fixed;
      width: 240px;
      border-right: 1px solid #e0e0e0;
    }

    .sidebar a {
      color: #333;
      text-decoration: none;
      display: block;
      padding: 0.75rem 1.25rem;
      transition: background-color 0.3s;
    }

    .sidebar a:hover {
      background-color: #f0f0f0;
    }

    .sidebar h5 {
      text-align: center;
      margin-bottom: 2rem;
      color: #333;
    }

    .main {
      margin-left: 240px;
    }

    .header {
      background: white;
      padding: 1rem 2rem;
      border-bottom: 1px solid #dee2e6;
    }

 { background: linear-gradient(to right, #667eea, #764ba2); }
  

    .card-box {
      border-radius: 10px;
      padding: 1.5rem;
      color: rgb(8, 83, 62);
      box-shadow: 0 3px 10px rgba(121, 7, 7, 0.1);
    }

    .chart-container {
      background: white;
      border-radius: 10px;
      padding: 2rem;
      box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    }
    .card-box {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      height: 100%;
    }
    .social-box {
      border-radius: 10px;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    .social-footer {
      background: #fff;
      border-top: 1px solid #eee;
      padding: 10px;
      color: #333;
    }
    .dot {
      height: 10px;
      width: 10px;
      background-color: #6c757d;
      border-radius: 50%;
      display: inline-block;
      margin: 0 3px;
    }
  
    .team-card {
      background: #fff;
      border-radius: 10px;
      text-align: center;
      padding: 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .team-card img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }
    .status-bar {
      width: 50px;
      height: 5px;
      border-radius: 10px;
    }
  
  </style>
</head>
<body>

  <div class="sidebar">
    <h5>Admin Dashboard</h5>
    <a href="{{route('admin.dashboard')}}"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
    <a href="{{route('category.index')}}"><i class="bi bi-tags me-2"></i> Manage Categories</a>
    <a href="{{ route('products.index') }}"><i class="bi bi-box-seam me-2"></i> Manage Products</a>
    <a href="{{route('admin.manageOrders')}}"><i class="bi bi-cart"></i> Manage Orders</a>
    <a href="{{route('admin.managePayment')}}"><i class="bi bi-credit-card me-2"></i> Manage Payment</a>
    <a href="{{route('admin.manageUsers')}}"><i class="bi bi-people me-2"></i> Manage Users</a>
    <a href="{{route('admin.manageSales')}}"><i class="bi bi-graph-up me-2"></i> Manage Sales</a>
    <a href="{{route('blogs.index')}}"><i class="bi bi-circle-half"></i> Manage Blogs</a>
  </div>

 
  <div class="main">
    <div class="header d-flex justify-content-between align-items-center">
      <input class="form-control w-50" type="text" placeholder="Search Dashboard">
      <div class="d-flex align-items-center gap-3">
        
        @if(Auth::check() && Auth::user()->is_admin)
            <span><i class="bi bi-person-fill"></i>{{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('admin.logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-danger">Logout</button>
            </form>
        @else
            <span>Guest</span>
        @endif
    </div>
    </div>

   
    <div class="container-fluid mt-4">
      @yield('content')
    </div>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
