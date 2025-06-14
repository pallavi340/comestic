<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard</title>
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

    .card-box {
      border-radius: 10px;
      padding: 1.5rem;
      color: white;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .gradient-1 { background: linear-gradient(to right, #667eea, #764ba2); }
    .gradient-2 { background: linear-gradient(to right, #ff6a00, #ee0979); }
    .gradient-3 { background: linear-gradient(to right, #f7971e, #ffd200); }
    .gradient-4 { background: linear-gradient(to right, #43cea2, #185a9d); }

    .chart-container {
      background: white;
      border-radius: 10px;
      padding: 2rem;
      box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h5>Admin Dashboard</h5>
    <a href="{{route('admin.dashboard')}}"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
    <a href="#"><i class="bi bi-layout-text-window-reverse me-2"></i> Layouts</a>
    <a href="#"><i class="bi bi-envelope me-2"></i> Email</a>
    <a href="#"><i class="bi bi-table me-2"></i> Tables</a>
    <a href=""><i class="bi bi-tags me-2"></i> Manage Category</a>
    <a href=""><i class="bi bi-box-seam me-2"></i> Manage Products</a>
    <a href="#"><i class="bi bi-basket me-2"></i> Manage Orders</a>
    <a href="#"><i class="bi bi-credit-card me-2"></i> Manage Payment</a>
    <a href="#"><i class="bi bi-people me-2"></i> Manage Users</a>
    <a href="#"><i class="bi bi-graph-up me-2"></i> Manage Sales</a>
  </div>

  <!-- Main Content -->
  <div class="main">
    <div class="header d-flex justify-content-between align-items-center">
      <input class="form-control w-50" type="text" placeholder="Search Dashboard">
      <div>
        <i class="bi bi-bell me-3 fs-5"></i>
        <i class="bi bi-person-circle fs-5"></i>
      </div>
    </div>

    <!-- Blade Section Content -->
    <div class="container-fluid mt-4">
      @yield('content')
    </div>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
