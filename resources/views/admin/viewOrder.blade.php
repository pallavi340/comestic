@extends('admin.layout')

@section('title', 'View Order')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary m-0">Order Details</h2>
        <a href="{{ route('admin.manageOrders') }}" class="btn btn-outline-secondary btn-sm">
            ← Back to Orders
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body">
            <div class="row gy-3">
                <div class="col-md-6">
                    <label class="text-muted">Order ID</label>
                    <div class="fw-semibold">{{ $order->id }}</div>
                </div>
                <div class="col-md-6">
                    <label class="text-muted">Customer Name</label>
                    <div class="fw-semibold">{{ $order->user->name }}</div>
                </div>
                <div class="col-md-6">
                    <label class="text-muted">Total Price</label>
                    <div class="fw-semibold text-success">₹{{ number_format($order->total, 2) }}</div>
                </div>
                <div class="col-md-6">
                    <label class="text-muted">Payment Mode</label>
                    <div class="fw-semibold">{{ $order->payment_mode }}</div>
                </div>
                <div class="col-md-6">
                    <label class="text-muted">Order Status</label>
                    <div>
                        @if($order->isOrdered)
                            <span class="badge bg-success px-3 py-2 rounded-pill">Completed</span>
                        @else
                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">Pending</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="text-muted">Date of Order</label>
                    <div class="fw-semibold">{{ $order->created_at->format('d M Y, h:i A') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
