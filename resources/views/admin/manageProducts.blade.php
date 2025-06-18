@extends('admin.layout')

@section('title', 'Manage Products |')

@section('content')
<div class="container py-5">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="border-start border-4 border-warning ps-3 text-secondary fw-bold">Manage Products ({{ count($products) }})</h2>
        <a href="{{ route('products.create') }}" class="btn btn-success shadow-sm">
            <i class="bi bi-plus-circle me-1"></i> Add Product
        </a>
    </div>

    {{-- Alerts --}}
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-circle me-2"></i>{{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle text-center mb-0">
                    <thead class="table-white text-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Brand</th>
                            <th>Slug</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th style="width: 150px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $pro)
                            <tr>
                                <td>{{ $pro->id }}</td>
                                <td class="fw-semibold text-capitalize">{{ $pro->title }}</td>
                            <td>
                                <img src="{{asset("storage/". $pro->image)}}" alt="{{$pro->title}}" class="product_image" width="50px">
                            </td>
                             
                                <td>{{ $pro->brand }}</td>
                                <td>{{$pro->slug}}</td>
                                <td>{{ $pro->category->cat_title ?? 'N/A' }}</td>
                                <td>
                                    <span class="fw-bold text-success">₹{{ $pro->discount_price }}</span><br>
                                    <del class="text-muted small">₹{{ $pro->price }}</del>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('products.edit', $pro) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('products.destroy', $pro) }}" method="POST" onsubmit="return confirm('Are you sure to delete this product?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-muted py-4">
                                    <i class="bi bi-box2-heart fs-4"></i><br>
                                    No products found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
