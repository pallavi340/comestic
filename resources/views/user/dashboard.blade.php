@extends('user.header')

@section('content')
    <div class="container-fluid">
        <div class="row">
      <!-- Sidebar -->
<div class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse shadow-sm">
    <div class="position-sticky pt-3">
        <!-- Brand/Header -->
        <div class="px-3 pb-3">
            <a href="#" class="d-flex align-items-center text-decoration-none">
                <i class="bi bi-person-circle fs-2 text-black me-2"></i>
                <div>
                    <span class="fs-5 fw-bold text-dark">My Account</span>
                    <small class="d-block text-muted">Premium Member</small>
                </div>
            </a>
        </div>
        
        <hr class="my-2">
        
        <!-- Navigation Menu -->
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item mb-1">
                <a href="{{route('user.manageAccount')}}" class="nav-link text-black d-flex align-items-center">
                    <i class="bi bi-person me-3 fs-5"></i>
                    <span>My Profile</span>
                    <span class="ms-auto badge bg-primary rounded-pill">3</span>
                </a>
            </li>
            <li class="nav-item mb-1">
                <a href="#" class="nav-link text-dark d-flex align-items-center">
                    <i class="bi bi-bag me-3 fs-5"></i>
                    <span>My Orders</span>
                    <span class="ms-auto badge bg-danger rounded-pill">5</span>
                </a>
            </li>
            <li class="nav-item mb-1">
                <a href="#" class="nav-link text-dark d-flex align-items-center">
                    <i class="bi bi-heart me-3 fs-5"></i>
                    <span>Wishlist</span>
                    <span class="ms-auto badge bg-success rounded-pill">12</span>
                </a>
            </li>
            <li class="nav-item mb-1">
                <a href="#" class="nav-link text-dark d-flex align-items-center">
                    <i class="bi bi-gear me-3 fs-5"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li class="nav-item mb-1">
                <a href="#" class="nav-link text-dark d-flex align-items-center">
                    <i class="bi bi-credit-card me-3 fs-5"></i>
                    <span>Payment Methods</span>
                </a>
            </li>
            <li class="nav-item mb-1">
                <a href="#" class="nav-link text-dark d-flex align-items-center">
                    <i class="bi bi-box-seam me-3 fs-5"></i>
                    <span>Address Book</span>
                </a>
            </li>
        </ul>
        
        <hr class="my-2">
        <div class="px-3 pb-4">
            <a href="{{route('logout')}}" class="btn btn-outline-danger w-100 d-flex align-items-center justify-content-center">
                <i class="bi bi-box-arrow-right me-2"></i>
                Sign Out
            </a>
        </div>
    </div>
</div>

            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="stat-card card text-white bg-primary mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title"> Users</h6>
                                        <h2 class="card-text">2</h2>
                                    </div>
                                    <i class="bi bi-people fs-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card card text-white bg-success mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">My Wishlist Products</h6>
                                        <h2 class="card-text">12</h2>
                                    </div>
                                    <i class="bi bi-heart fs-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card card text-white bg-warning mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">New Orders</h6>
                                        <h2 class="card-text">3</h2>
                                    </div>
                                    <i class="bi bi-cart fs-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card card text-white bg-info mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Delivered Product</h6>
                                        <h2 class="card-text">3.5%</h2>
                                    </div>
                                    <i class="bi bi-graph-up fs-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
        </div>
    </div>
@endsection
