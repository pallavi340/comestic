@extends('admin.layout')

@section('title') 
  Manage Payments
@endsection

@section('content')
<div class="container py-4">
    <h2 class="fw-bold text-primary mb-4"><i class="bi bi-credit-card-fill"></i> Manage Payments({{ count($payments) }})</h2>

    <div class="card shadow-sm rounded-4 border-0">
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Id</th>
                        <th>User</th>
                        <th>Order ID</th>
                        <th>Amount</th>
                        <th>Payment Mode</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($payments as $payment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $payment->user->name }}</td>
                        <td>{{ $payment->id }}</td>
                        <td>₹{{ number_format($payment->total, 2) }}</td>
                        <td><span class="badge bg-light text-dark">{{ $payment->payment_mode }}</span></td>
                        <td>
                            @if($payment->isOrdered)
                                <span class="badge bg-success">Completed</span>
                            @else
                                <span class="badge bg-warning">Pending</span>
                            @endif
                        </td>
                        <td>{{ $payment->created_at->format('d M Y') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">No payments found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
