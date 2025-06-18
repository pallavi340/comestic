@extends('base.header')

@section('title')
   View Product |
@endsection

@section('content')
<div class="container py-5">

  <!-- Section Heading -->
  <h4 class="fw-bold text-dark mb-4">All Products</h4>

  <!-- Product Row -->
  <div class="row g-4 align-items-start">

    <!-- Product Image -->
    <div class="col-md-6">
      <div class="bg-light rounded shadow-sm p-3 text-center">
        <img src="{{ asset('storage/' . $pro->image) }}" 
             alt="{{ $pro->title }}" 
             class="img-fluid rounded" 
             style="max-height: 400px; object-fit: contain;">
      </div>
    </div>

    <!-- Product Details -->
    <div class="col-md-6">
      <div class="d-flex justify-content-between align-items-start">
        <h2 class="fw-bold text-dark text-capitalize">{{ $pro->title }}</h2>
        <span class="badge bg-success fs-6">10% OFF</span>
      </div>

      <p class="text-muted mt-2">{{ $pro->description }}</p>

      <ul class="list-unstyled mt-3">
        <li><strong>Brand:</strong> {{ $pro->brand }}</li>
        <li><strong>Slug:</strong> {{ $pro->slug }}</li>
        <li><strong>Category:</strong> {{ $pro->category->cat_title ?? 'N/A' }}</li>
      </ul>

      <!-- Pricing -->
      <div class="my-4">
        <h4 class="fw-bold text-secondary mb-1">₹{{ $pro->discount_price }}</h4>
        <p class="text-muted mb-0"><del>₹{{ $pro->price }}</del></p>
        <small class="text-danger fw-semibold">You save ₹{{ $pro->price - $pro->discount_price }}</small>
      </div>

      <!-- Action Buttons -->
      <div class="d-flex gap-3 mt-4">
        <!-- Wishlist -->
        <form action="" method="POST" id="wishlist-form">
          @csrf
          <button class="btn btn-outline-danger shadow-sm" title="Add to Wishlist">
            <i class="bi bi-heart"></i>
          </button>
        </form>

        <!-- Add to Bag -->
        <form action="" method="POST" id="razorpay-form">
          @csrf
          <button class="btn btn-outline-danger shadow-sm">
            <i class="bi bi-heart"></i> Add to Bag
          </button>
        </form>
      </div>
    </div>

  </div>
</div>
@endsection
