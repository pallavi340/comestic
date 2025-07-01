@extends('admin.layout')

@section('title')
 Manage Orders
@endsection hloo

@section('content')
<div class="container py-4">
    <h2 class="fw-bold text-primary mb-4"><i class="bi bi-cart-fill"></i>Manage Orders({{ count($orders) }})</h2>

    <div class="card shadow-sm rounded-4 border-0">
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Id</th>
                        <th>User</th>
                        <th>Order ID</th>
                        <th>Total</th>
                        <th>Payment Mode</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->id }}</td>
                        <td>₹{{ number_format($order->total, 2) }}</td>
                        <td><span class="badge bg-info">{{ $order->payment_mode }}</span></td>
                        <td>
                            @if($order->isOrdered)
                                <span class="badge bg-success">Completed</span>
                            @else
                                <span class="badge bg-warning">Pending</span>
                            @endif
                        </td>
                        <td>{{ $order->created_at->format('d M Y') }}</td>
                        <td>
                            <a href="{{ route('admin.viewOrder', $order->id) }}" class="btn btn-sm btn-primary rounded-pill">
                                View
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted py-4">No orders found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection