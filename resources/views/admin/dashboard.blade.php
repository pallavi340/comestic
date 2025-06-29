@extends('admin.layout')

@section('title') 
  Dashboard
@endsection

@section('content')

    <div class="container-fluid mt-4">
      <div class="row g-4">
        <div class="col-md-3">
          <div class="card-box gradient-1">
            <h6>Products Sold</h6>
            <h3>₹40</h3>
            <p class="text-sm">July - Dec 2025</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-box gradient-2">
            <h6>Net Profit</h6>
            <h3>₹500</h3>
            <p class="text-sm">July - Dec 2025</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-box gradient-3">
            <h6>New Customers</h6>
            <h3>₹50</h3>
            <p class="text-sm">July - Dec 2025</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-box gradient-4">
            <h6>Customer Satisfaction</h6>
            <h3>99%</h3>
            <p class="text-sm">July - Dec 2025</p>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-12">
          <div class="chart-container">
            <h5>Product Sales</h5>
            <p class="text-muted mb-4">Total Earnings of the Month</p>
            <h3>₹14,555</h3>
            <canvas id="salesChart" height="100"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 sidebar p-3">
      <h5>Menu</h5>
      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link" href="#">Forms</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Table</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Pages</a></li>
      </ul>
    </div>
    <div class="col-md-10 p-4">
     
      <div class="chart-box mb-4"></div>

      <div class="row">
      
        <div class="col-md-6">
          <h5>Order Summary</h5>
          <div class="d-flex align-items-end gap-3" style="height: 200px;">
            <div class="bg-danger" style="width: 20px; height: 100px;"></div>
            <div class="bg-primary" style="width: 20px; height: 90px;"></div>
            <div class="bg-danger" style="width: 20px; height: 75px;"></div>
            <div class="bg-primary" style="width: 20px; height: 65px;"></div>
            <div class="bg-danger" style="width: 20px; height: 50px;"></div>
            <div class="bg-primary" style="width: 20px; height: 45px;"></div>
          </div>
        </div>

   
        <div class="col-md-3">
          <h5>Order Overview</h5>
          <p><strong>5680</strong> Total Revenue</p>
          <p>Online Order: 30</p>
          <div class="bar bg-primary w-75 mb-2"></div>
          <p>Offline Order: 50</p>
          <div class="bar bg-success w-100 mb-2"></div>
          <p>Cash On Delivery: 20</p>
          <div class="bar bg-warning w-50 mb-2"></div>
        </div>

    
        <div class="col-md-3">
          <h5>Todo</h5>
          <div class="todo-item"><input type="checkbox"> Get up</div>
          <div class="todo-item"><input type="checkbox" checked> Stand up</div>
          <div class="todo-item"><input type="checkbox"> Don't give up</div>
          <div class="todo-item"><input type="checkbox" checked> Do something else</div>
          <input class="form-control mt-3" placeholder="Write new item and hit 'Enter'">
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container py-5">
  <div class="bg-white rounded shadow-sm p-3">
    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>Customers</th>
            <th>Product</th>
            <th>Country</th>
            <th>Status</th>
            <th>Payment</th>
            <th>Activity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><img src="https://randomuser.me/api/portraits/women/55.jpg" class="rounded-circle me-2" width="35">Anu</td>
            <td>Nail Enamel Polish</td>
            <td>Bihar</td>
            <td><span class="badge bg-success">Paid</span></td>
            <td><span class="text-success">●</span> Paid</td>
            <td>Last Login <small class="text-muted">10 sec ago</small></td>
          </tr>
          <tr>
            <td><img src="https://randomuser.me/api/portraits/men/55.jpg" class="rounded-circle me-2" width="35">Raj</td>
            <td>La French Wishful Perfume</td>
            <td>India</td>
            <td><span class="badge bg-success">Paid</span></td>
            <td><span class="text-success">●</span> Paid</td>
            <td>Last Login <small class="text-muted">50 sec ago</small></td>
          </tr>
       </tbody>
      </table>
    </div>
  </div>
</div>
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
            label: 'Nail Polish',
            data: [10, 30, 20, 40, 35, 50],
            borderColor: '#667eea',
            backgroundColor: 'rgba(102, 126, 234, 0.2)',
            tension: 0.4,
            fill: true,
          },
          {
            label: 'Perfume',
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