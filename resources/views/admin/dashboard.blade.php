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
  // Luxury Sales Chart
  const ctx = document.getElementById('salesChart').getContext('2d');
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN'],
      datasets: [
        {
          label: 'LUXE SKINCARE',
          data: [2200, 2900, 2700, 3100, 3300, 3500],
          borderColor: '#D4AF37',
          backgroundColor: 'rgba(212, 175, 55, 0.1)',
          borderWidth: 3,
          tension: 0.4,
          fill: true,
          pointBackgroundColor: '#D4AF37',
          pointBorderColor: '#fff',
          pointRadius: 6,
          pointHoverRadius: 8,
          pointBorderWidth: 2
        },
        {
          label: 'COUTURE MAKEUP',
          data: [1800, 2200, 2000, 2500, 2800, 3000],
          borderColor: '#E0115F',
          backgroundColor: 'rgba(224, 17, 95, 0.1)',
          borderWidth: 3,
          tension: 0.4,
          fill: true,
          pointBackgroundColor: '#E0115F',
          pointBorderColor: '#fff',
          pointRadius: 6,
          pointHoverRadius: 8,
          pointBorderWidth: 2
        },
        {
          label: 'SIGNATURE FRAGRANCES',
          data: [1500, 1700, 1600, 1900, 2100, 2300],
          borderColor: '#B4B4B4',
          backgroundColor: 'rgba(180, 180, 180, 0.1)',
          borderWidth: 3,
          tension: 0.4,
          fill: true,
          pointBackgroundColor: '#B4B4B4',
          pointBorderColor: '#fff',
          pointRadius: 6,
          pointHoverRadius: 8,
          pointBorderWidth: 2
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          backgroundColor: '#0F0F0F',
          titleColor: '#D4AF37',
          bodyColor: '#FFFFFF',
          borderColor: '#333',
          borderWidth: 1,
          padding: 15,
          usePointStyle: true,
          bodyFont: {
            size: 14
          },
          callbacks: {
            label: function(context) {
              return ' ' + context.dataset.label + ': $' + context.parsed.y.toLocaleString();
            }
          }
        }
      },
      scales: {
        x: {
          grid: {
            display: false
          },
          ticks: {
            color: '#888'
          }
        },
        y: {
          grid: {
            color: 'rgba(255,255,255,0.05)'
          },
          ticks: {
            color: '#888',
            callback: function(value) {
              return '$' + value.toLocaleString();
            }
          }
        }
      },
      interaction: {
        intersect: false,
        mode: 'index'
      }
    }
  });
</script>

<style>
  /* Luxury Color Scheme */
  :root {
    --gold: #D4AF37;
    --rose: #E0115F;
    --platinum: #B4B4B4;
    --black: #0F0F0F;
    --cream: #F5F5F0;
  }

  /* Premium Card Styles */
  .card-box {
    border-radius: 20px;
    padding: 1.75rem;
    color: white;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: none;
    overflow: hidden;
    position: relative;
    isolation: isolate;
  }
  
  .card-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 80% 20%, rgba(255,255,255,0.3) 0%, transparent 50%);
    z-index: -1;
    opacity: 0;
    transition: opacity 0.4s ease;
  }
  
  .card-box:hover .card-glow {
    opacity: 1;
  }
  
  .card-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
  }
  
  .sparkle {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z' fill='rgba(255,255,255,0.1)'/%3E%3C/svg%3E");
    z-index: -1;
    opacity: 0.5;
  }
  
  .icon-circle {
    width: 54px;
    height: 54px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(5px);
    border: 1px solid rgba(255,255,255,0.2);
  }
  
  .beauty-card-1 { background: linear-gradient(135deg, #3A1C71 0%, #D76D77 50%, #FFAF7B 100%); }
  .beauty-card-2 { background: linear-gradient(135deg, #0F2027 0%, #203A43 50%, #2C5364 100%); }
  .beauty-card-3 { background: linear-gradient(135deg, #614385 0%, #516395 100%); }
  .beauty-card-4 { background: linear-gradient(135deg, #FF416C 0%, #FF4B2B 100%); }
  
  /* Luxury Chart Container */
  .beauty-chart {
    background: #0F0F0F;
    border-radius: 20px;
    padding: 2rem;
    position: relative;
    overflow: hidden;
  }
  
  .gold-border {
    position: absolute;
    inset: 0;
    border: 1px solid transparent;
    border-radius: 20px;
    background: linear-gradient(135deg, #D4AF37, transparent) border-box;
    -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    pointer-events: none;
  }
  
  .badge-dot {
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
  }
  
  .bg-gold { background-color: var(--gold); }
  .bg-rose { background-color: var(--rose); }
  .bg-platinum { background-color: var(--platinum); }
  
  .hover-lift:hover {
    transform: translateY(-8px);
  }
  
  .text-white-50 {
    color: rgba(255,255,255,0.8);
    font-weight: 300;
  }
  
  .text-gold {
    color: var(--gold);
    letter-spacing: 1px;
  }
  
  /* Luxury Dropdown */
  .beauty-dropdown .btn {
    background-color: rgba(212, 175, 55, 0.15);
    color: var(--gold);
    border-radius: 30px;
    border: 1px solid rgba(212, 175, 55, 0.3);
    padding: 0.35rem 1rem;
    font-size: 0.85rem;
    letter-spacing: 0.5px;
  }
  
  .beauty-dropdown .dropdown-menu {
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.1);
    background: #1A1A1A;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
  }
  
  .beauty-dropdown .dropdown-item {
    color: #DDD;
    padding: 0.5rem 1.25rem;
    transition: all 0.3s ease;
  }
  
  .beauty-dropdown .dropdown-item:hover {
    background-color: rgba(212, 175, 55, 0.1);
    color: var(--gold);
  }
  
  .beauty-dropdown .dropdown-item i {
    width: 20px;
    text-align: center;
  }
</style>`
@endsection