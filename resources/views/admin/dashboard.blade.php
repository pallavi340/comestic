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

  <div class="container-fluid py-4">
    {{-- Team Member Cards --}}
    <div class="row text-center mb-5">
        @php
            $team = [
                ['name' => 'Pallavi', 'role' => 'Sales Man', 'img' => 'https://randomuser.me/api/portraits/men/3.jpg'],
                ['name' => 'Jagriti', 'role' => 'Online Marketer', 'img' => 'https://randomuser.me/api/portraits/men/4.jpg'],
            ];
        @endphp

        @foreach ($team as $member)
        <div class="col-md-3 mb-4">
            <div class="bg-white p-3 rounded shadow-sm">
                <img src="{{ $member['img'] }}" class="rounded-circle mb-3" width="80" height="80" alt="{{ $member['name'] }}">
                <h6 class="fw-bold mb-1">{{ $member['name'] }}</h6>
                <p class="text-muted mb-0">{{ $member['role'] }}</p>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Customer Table --}}
    <div class="bg-white rounded shadow-sm p-4">
        <h6 class="mb-3">Recent Customers</h6>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Activity</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $customers = [
                            ['name' => 'Sarah Smith', 'product' => 'iPhone X', 'country' => 'United States', 'status' => 'success', 'payment' => 'Paid', 'img' => 'https://randomuser.me/api/portraits/women/5.jpg'],
                            ['name' => 'Walter R.', 'product' => 'Pixel 2', 'country' => 'Canada', 'status' => 'success', 'payment' => 'Paid', 'img' => 'https://randomuser.me/api/portraits/men/6.jpg'],
                            ['name' => 'Andrew D.', 'product' => 'OnePlus', 'country' => 'Germany', 'status' => 'warning', 'payment' => 'Pending', 'img' => 'https://randomuser.me/api/portraits/men/7.jpg'],
                            ['name' => 'Megan S.', 'product' => 'Galaxy', 'country' => 'Japan', 'status' => 'success', 'payment' => 'Paid', 'img' => 'https://randomuser.me/api/portraits/women/8.jpg'],
                            ['name' => 'Doris R.', 'product' => 'Moto Z2', 'country' => 'England', 'status' => 'success', 'payment' => 'Paid', 'img' => 'https://randomuser.me/api/portraits/women/9.jpg'],
                            ['name' => 'Elizabeth W.', 'product' => 'Notebook Asus', 'country' => 'China', 'status' => 'warning', 'payment' => 'Pending', 'img' => 'https://randomuser.me/api/portraits/women/10.jpg'],
                        ];
                    @endphp

                    @foreach ($customers as $cust)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ $cust['img'] }}" alt="Avatar" width="40" height="40" class="rounded-circle me-2">
                                <span>{{ $cust['name'] }}</span>
                            </div>
                        </td>
                        <td>{{ $cust['product'] }}</td>
                        <td>{{ $cust['country'] }}</td>
                        <td>
                            <span class="badge bg-{{ $cust['status'] }} text-capitalize">{{ $cust['status'] == 'success' ? 'Active' : 'Pending' }}</span>
                        </td>
                        <td>
                            <span class="text-{{ $cust['payment'] == 'Paid' ? 'success' : 'warning' }}">
                                <i class="bi bi-circle-fill"></i> {{ $cust['payment'] }}
                            </span>
                        </td>
                        <td>
                            <small class="text-muted">Last Login<br>10 sec ago</small>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


  <div class="container-fluid py-4">
    <div class="row g-4">
        {{-- Sales Activities --}}
        <div class="col-md-4">
            <div class="bg-white shadow-sm rounded p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="mb-0">Sales Activities</h6>
                    <span class="text-success fw-bold">+720</span>
                </div>
                <p class="text-muted">Last 6 Months <span class="text-danger">+120.5 (5.0%)</span></p>
                <canvas id="salesChart" height="120"></canvas>

                <div class="mt-4">
                    <small class="d-block">5% Negative Feedback</small>
                    <small class="d-block">95% Positive Feedback</small>
                    <div class="text-muted mt-2 mb-1">Customer Feedback</div>
                    <h5 class="fw-bold">385749</h5>
                </div>
            </div>
        </div>

        {{-- Activity List --}}
        <div class="col-md-4">
            <div class="bg-white shadow-sm rounded p-4">
                <h6>Activity</h6>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <strong>Received New Order</strong>
                        <p class="mb-0 text-muted">I shared this on my fb wall a few months back</p>
                        <small class="text-muted">April 24, 2018</small>
                    </li>
                    <li class="mb-3">
                        <strong>iPhone delivered</strong>
                        <p class="mb-0 text-muted">I shared this on my fb wall a few months back</p>
                        <small class="text-muted">April 24, 2018</small>
                    </li>
                    <li>
                        <strong>3 Orders Pending</strong>
                        <p class="mb-0 text-muted">I shared this on my fb wall a few months back</p>
                        <small class="text-muted">April 24, 2018</small>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Store Location --}}
        <div class="col-md-4">
            <div class="bg-white shadow-sm rounded p-4 h-100">
                <h6>Store Location</h6>
                <div class="text-center mt-4">
                    {{-- You can replace this with a Leaflet or Google Maps embed --}}
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/BlankMap-World.svg/1200px-BlankMap-World.svg.png" 
                         alt="World Map" class="img-fluid rounded shadow-sm" style="height: 200px;">
                </div>
            </div>
        </div>
    </div>

    {{-- Social Cards --}}
    <div class="row text-center mt-5">
        @php
            $socials = [
                ['icon' => 'facebook', 'color' => 'primary', 'friends' => '89k', 'followers' => '119k'],
                ['icon' => 'linkedin', 'color' => 'info', 'friends' => '89k', 'followers' => '119k'],
                ['icon' => 'google', 'color' => 'danger', 'friends' => '89k', 'followers' => '119k'],
                ['icon' => 'twitter', 'color' => 'primary', 'friends' => '89k', 'followers' => '119k'],
            ];
        @endphp

        @foreach ($socials as $s)
        <div class="col-md-3">
            <div class="bg-{{ $s['color'] }} text-white rounded shadow-sm py-4">
                <h5 class="mb-0 text-capitalize"><i class="bi bi-{{ $s['icon'] }}"></i> {{ ucfirst($s['icon']) }}</h5>
                <p class="mb-0">{{ $s['friends'] }} Friends</p>
                <p>{{ $s['followers'] }} Followers</p>
            </div>
        </div>
        @endforeach
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