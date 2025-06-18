@extends('admin.layout')

@section('title') 
  Dashboard
@endsection 

@section('content')

  <!-- Main Content -->
<div class="container-fluid mt-4">
  <div class="row g-4">
    <!-- Premium Stats Cards -->
    <div class="col-xl-3 col-md-6">
      <div class="card-box beauty-card-1 hover-lift">
        <div class="card-glow"></div>
        <div class="d-flex justify-content-between align-items-start">
          <div>
            <h6 class="text-uppercase text-white-50 mb-2">Luxury Products Sold</h6>
            <h2 class="mb-0 text-white">4,565</h2>
            <div class="text-white-50 mt-3">
              <i class="bi bi-arrow-up"></i> <span>12.5% from last month</span>
            </div>
          </div>
          <div class="icon-circle">
            <i class="bi bi-gem text-white"></i>
          </div>
        </div>
        <div class="sparkle"></div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="card-box beauty-card-2 hover-lift">
        <div class="card-glow"></div>
        <div class="d-flex justify-content-between align-items-start">
          <div>
            <h6 class="text-uppercase text-white-50 mb-2">Premium Revenue</h6>
            <h2 class="mb-0 text-white">$12,541</h2>
            <div class="text-white-50 mt-3">
              <i class="bi bi-arrow-up"></i> <span>18.2% from last month</span>
            </div>
          </div>
          <div class="icon-circle">
            <i class="bi bi-currency-dollar text-white"></i>
          </div>
        </div>
        <div class="sparkle"></div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="card-box beauty-card-3 hover-lift">
        <div class="card-glow"></div>
        <div class="d-flex justify-content-between align-items-start">
          <div>
            <h6 class="text-uppercase text-white-50 mb-2">VIP Clients</h6>
            <h2 class="mb-0 text-white">1,245</h2>
            <div class="text-white-50 mt-3">
              <i class="bi bi-arrow-up"></i> <span>15.7% from last month</span>
            </div>
          </div>
          <div class="icon-circle">
            <i class="bi bi-stars text-white"></i>
          </div>
        </div>
        <div class="sparkle"></div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="card-box beauty-card-4 hover-lift">
        <div class="card-glow"></div>
        <div class="d-flex justify-content-between align-items-start">
          <div>
            <h6 class="text-uppercase text-white-50 mb-2">Satisfaction</h6>
            <h2 class="mb-0 text-white">99%</h2>
            <div class="text-white-50 mt-3">
              <i class="bi bi-arrow-up"></i> <span>2.1% from last month</span>
            </div>
          </div>
          <div class="icon-circle">
            <i class="bi bi-emoji-hearts text-white"></i>
          </div>
        </div>
        <div class="sparkle"></div>
      </div>
    </div>
  </div>

  <!-- Luxury Chart Section -->
  <div class="row mt-4">
    <div class="col-12">
      <div class="chart-container beauty-chart">
        <div class="gold-border"></div>
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div>
            <h5 class="fw-bold mb-1 text-gold">LUXURY PRODUCT PERFORMANCE</h5>
            <p class="text-muted mb-0">Total revenue: <span class="text-gold fw-bold">$24,555</span> this month</p>
          </div>
          <div class="dropdown beauty-dropdown">
            <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
              <i class="bi bi-calendar2-week me-2"></i> Last 6 Months
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"><i class="bi bi-calendar3 me-2"></i>Last 3 Months</a></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-calendar4-range me-2"></i>Last 6 Months</a></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-calendar4-event me-2"></i>This Year</a></li>
            </ul>
          </div>
        </div>
        
        <canvas id="salesChart" height="120"></canvas>
        
        <div class="mt-4 d-flex justify-content-between">
          <div class="d-flex align-items-center">
            <span class="badge-dot bg-gold me-2"></span>
            <span class="text-muted small">LUXE SKINCARE</span>
          </div>
          <div class="d-flex align-items-center">
            <span class="badge-dot bg-rose me-2"></span>
            <span class="text-muted small">COUTURE MAKEUP</span>
          </div>
          <div class="d-flex align-items-center">
            <span class="badge-dot bg-platinum me-2"></span>
            <span class="text-muted small">SIGNATURE FRAGRANCES</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','jul', 'Aug', 'Sep'],
        datasets: [
          {
            label: 'iPhone X',
            data: [10, 30, 20, 40, 35, 50],
            borderColor: '#667eea',
            backgroundColor: 'rgba(102, 126, 234, 0.2)',
            tension: 0.4,
            fill: true,
          },
          {
            label: 'Pixel 2',
            data: [5, 25, 15, 30, 25, 40],
            borderColor: '#ff6a00',
            backgroundColor: 'rgba(255, 106, 0, 0.2)',
            tension: 0.4,
            fill: true,
          }
        ]
      },
      options: { responsive: true }
    });
  </script>
@endsection