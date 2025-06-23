@extends('base.header')

@section('title')
 Homepage
@endsection
@section('content')

<div class="container my-5">
    <h2 class="promo-title">✨ Mid-Year Beauty Lineups ✨</h2>
    <div class="row g-4">

      <div class="col-md-4">
        <div class="card promo-card h-100">
          <img src="https://th.bing.com/th/id/OIP.XjRkG5dLWLiXlcZi0DEHEQAAAA?rs=1&pid=ImgDetMain" class="card-img-top promo-img" alt="Nykaa Wanderlust Offer">
        </div>
      </div>


      <div class="col-md-4">
        <div class="card promo-card h-100">
          <img src="https://th.bing.com/th/id/OIP.cy9hG0ufbf4YTORUXRFwSAHaHa?w=1000&h=1000&rs=1&pid=ImgDetMain" class="card-img-top promo-img" alt="Charlotte Tilbury Offer">
        </div>
      </div>

   
      <div class="col-md-4">
        <div class="card promo-card h-100">
          <img src="https://media6.ppl-media.com/tr:h-750,w-750,c-at_max,dpr-2/static/img/product/342495/dot-and-key-vitamin-c-e-skin-care-gift-set-for-glowing-skin_1_display_1672649517_70c75764.jpg" class="card-img-top promo-img" alt="Dot & Key Offer">
        </div>
      </div>

<section class="launch-section">
    <h2>💖 New Launch Alert!</h2>
    <p>Discover the latest drops now</p>

    <div class="launch-images">
      <img src="https://th.bing.com/th/id/OIP.649MFsje3cwwfEacYMoBVwHaEK?o=7rm=3&rs=1&pid=ImgDetMain" alt="Product Image 1">
      <img src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExa3ZkZHR0a2N2MjVnZTl2cnh0ajh6ajI3NGVhZjdxNnBzMXZpYWNncyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/gF7rF4HEJ7W33jMsfc/giphy.gif" alt="Product Image 2">
    </div>

    <!-- Products Grid -->
  <div>
        <h4 class="fw-bold mb-4">🛍 All Products</h4>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @forelse ($products as $item)
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ asset('storage/' . $item->image) }}"
                             class="card-img-top rounded-top"
                             alt="{{ $item->title }}"
                             style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title mb-2">{{ Str::limit($item->title, 45) }}</h5>
                            <p class="text-muted mb-1"><i class="bi bi-clipboard-fill"></i> 40ml</p>
                            <div class="d-flex align-items-center">
                                <span class="text-primary fw-bold me-2">₹{{ $item->discount_price }}</span>
                                <del class="text-muted small">₹{{ $item->price }}</del>
                                <a href="{{route('base.productView', $item->slug)}}" class="badge bg-success ms-2">50% OFF</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <h2 class="fw-bold text-muted">No Products Found</h2>
                    <p class="text-secondary">Please try a different category or keyword.</p>
                </div>
            @endforelse
        </div>
      </div>
</div>
  
  </section>
@endsection