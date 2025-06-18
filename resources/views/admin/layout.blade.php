<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title') | Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <style>
    :root {
      --primary-color: #6366f1;
      --primary-hover: #4f46e5;
      --sidebar-bg: #ffffff;
      --header-bg: #ffffff;
      --body-bg: #f8fafc;
      --text-dark: #1e293b;
      --text-muted: #64748b;
      --border-color: #e2e8f0;
      --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
      background-color: var(--body-bg);
      color: var(--text-dark);
    }

    /* Sidebar */
    .sidebar {
      height: 100vh;
      background: var(--sidebar-bg);
      padding-top: 1.5rem;
      position: fixed;
      width: 260px;
      border-right: 1px solid var(--border-color);
      box-shadow: var(--card-shadow);
      z-index: 100;
      transition: var(--transition);
    }

    .sidebar-brand {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0 1.5rem 2rem;
      text-decoration: none;
    }

    .sidebar-brand img {
      height: 40px;
      margin-right: 0.75rem;
    }

    .sidebar-brand h4 {
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 0;
    }

    .sidebar-menu {
      padding: 0 1rem;
    }

    .sidebar-menu a {
      color: var(--text-dark);
      text-decoration: none;
      display: flex;
      align-items: center;
      padding: 0.75rem 1rem;
      margin-bottom: 0.5rem;
      border-radius: 0.5rem;
      transition: var(--transition);
      font-weight: 500;
    }

    .sidebar-menu a:hover,
    .sidebar-menu a.active {
      background-color: rgba(99, 102, 241, 0.1);
      color: var(--primary-color);
    }

    .sidebar-menu a i {
      margin-right: 0.75rem;
      font-size: 1.1rem;
    }

    .sidebar-menu .badge {
      margin-left: auto;
      background-color: var(--primary-color);
    }

    /* Main Content */
    .main {
      margin-left: 260px;
      transition: var(--transition);
    }

    /* Header */
    .header {
      background: var(--header-bg);
      padding: 1.25rem 2rem;
      border-bottom: 1px solid var(--border-color);
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      top: 0;
      z-index: 50;
    }

    .search-box {
      position: relative;
      width: 400px;
    }

    .search-box input {
      padding-left: 2.5rem;
      border-radius: 0.5rem;
      border: 1px solid var(--border-color);
      background-color: #f1f5f9;
      transition: var(--transition);
    }

    .search-box input:focus {
      background-color: white;
      box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
    }

    .search-box i {
      position: absolute;
      left: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-muted);
    }

    .user-actions {
      display: flex;
      align-items: center;
      gap: 1.5rem;
    }

    .notification-badge {
      position: relative;
    }

    .notification-badge .badge {
      position: absolute;
      top: -5px;
      right: -5px;
      background-color: #ef4444;
      font-size: 0.6rem;
      padding: 0.25rem 0.4rem;
    }

    .user-profile {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      cursor: pointer;
    }

    .user-profile img {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      object-fit: cover;
    }

    .user-profile .user-name {
      font-weight: 500;
      font-size: 0.875rem;
    }

    /* Card Styles */
    .card-box {
      border-radius: 0.75rem;
      padding: 1.5rem;
      color: white;
      box-shadow: var(--card-shadow);
      transition: var(--transition);
      border: none;
    }

    .card-box:hover {
      transform: translateY(-5px);
    }

    .card-box .icon {
      font-size: 2.5rem;
      opacity: 0.8;
      margin-bottom: 1rem;
    }

    .card-box .value {
      font-size: 1.75rem;
      font-weight: 700;
      margin-bottom: 0.25rem;
    }

    .card-box .label {
      font-size: 0.875rem;
      opacity: 0.9;
    }

    .gradient-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
    .gradient-2 { background: linear-gradient(135deg, #ff6a00 0%, #ee0979 100%); }
    .gradient-3 { background: linear-gradient(135deg, #f7971e 0%, #ffd200 100%); }
    .gradient-4 { background: linear-gradient(135deg, #43cea2 0%, #185a9d 100%); }

    /* Chart Container */
    .chart-container {
      background: white;
      border-radius: 0.75rem;
      padding: 1.5rem;
      box-shadow: var(--card-shadow);
      border: none;
    }

    /* Content Area */
    .content-wrapper {
      padding: 2rem;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .sidebar {
        transform: translateX(-100%);
      }
      .sidebar.active {
        transform: translateX(0);
      }
      .main {
        margin-left: 0;
      }
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
    <a href="{{route('category.index')}}"><i class="bi bi-tags me-2"></i> Manage Category</a>
    <a href=""><i class="bi bi-box-seam me-2"></i> Manage Products</a>
    <a href=""><i class="bi bi-basket me-2"></i> Manage Orders</a>
    <a href=""><i class="bi bi-credit-card me-2"></i> Manage Payment</a>
    <a href=""><i class="bi bi-people me-2"></i> Manage Users</a>
    <a href=""><i class="bi bi-graph-up me-2"></i> Manage Sales</a>
  </div>

  <!-- Main Content -->
  <div class="main">
    <!-- Header -->
    <div class="header">
      <div class="search-box">
        <i class="bi bi-search"></i>
        <input class="form-control" type="text" placeholder="Search dashboard...">
      </div>

      <div class="user-actions">
        <div class="notification-badge">
          <i class="bi bi-bell fs-5"></i>
          <span class="badge rounded-pill">3</span>
        </div>
        <div class="notification-badge">
          <i class="bi bi-chat-left-text fs-5"></i>
          <span class="badge rounded-pill">7</span>
        </div>
        <div class="user-profile">
          <img src="https://via.placeholder.com/150" alt="User">
          <span class="user-name">Admin User</span>
          <i class="bi bi-chevron-down"></i>
        </div>
      </div>
    </div>

    <!-- Blade Section Content -->
    <div class="content-wrapper">
      @yield('content')
    </div>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Toggle sidebar on mobile
    document.addEventListener('DOMContentLoaded', function() {
      const sidebar = document.querySelector('.sidebar');
      // You can add a button to toggle sidebar in mobile view
    });
  </script>
</body>
</html>