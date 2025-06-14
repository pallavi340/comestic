@extends('admin.layout')

@section('title') 
  Dashboard
@endsection

@section('content')

  <!-- Main Content -->

    <div class="container-fluid mt-4">
      <div class="row g-4">
        <div class="col-md-3">
          <div class="card-box gradient-1">
            <h6>Products Solds</h6>
            <h3>4565</h3>
            <small>Jan - Mar 2019</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-box gradient-2">
            <h6>Net Profit</h6>
            <h3>$8541</h3>
            <small>Jan - Mar 2019</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-box gradient-3">
            <h6>New Customers</h6>
            <h3>4565</h3>
            <small>Jan - Mar 2019</small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-box gradient-4">
            <h6>Customer Satisfaction</h6>
            <h3>99%</h3>
            <small>Jan - Mar 2019</small>
          </div>
        </div>
      </div>

      <!-- Chart Section -->
      <div class="row mt-4">
        <div class="col-12">
          <div class="chart-container">
            <h5>Product Sales</h5>
            <p class="text-muted mb-4">Total Earnings of the Month</p>
            <h3>$12,555</h3>
            <canvas id="salesChart" height="100"></canvas>
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