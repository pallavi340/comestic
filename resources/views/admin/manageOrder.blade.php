@extends('admin.layout')

@section('title')
 Order Management
@endsection

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0">Manage Order</h2>
        <div class="d-flex gap-2">
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="bi bi-filter me-2"></i>Filter
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?status=processing">Processing</a></li>
                    <li><a class="dropdown-item" href="?status=shipped">Shipped</a></li>
                    <li><a class="dropdown-item" href="?status=delivered">Delivered</a></li>
                    <li><a class="dropdown-item" href="?status=cancelled">Cancelled</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="?">All Orders</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4">Order</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Items</th>
                            <th>Total</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                 
                            <tr class="border-top">
                                <td class="ps-4 fw-semibold">1</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm bg-light rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-fill text-muted"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Pallo</h6>
                                            <small class="text-muted">pallo29@gmail.com</small>
                                        </div>
                                    </div>
                                </td>
                                    <td class="fw-black">25/06/2025</td>
                                    <td class="fw-black">3qty</td>
                                <td class="fw-black">₹2000</td>
                                <td class="fw-black">₹2000</td>
                                <td>
                                      <span class="badge bg-success bg-opacity-10 text-success">
                                        <i class="bi bi-check-circle-fill me-1"></i> Paid
                                    </span>
                                </td>
                              
                                <td class="pe-4">
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="" 
                                           class="btn btn-sm btn-outline-primary rounded-circle p-2"
                                           data-bs-toggle="tooltip" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-secondary rounded-circle p-2"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#statusModal"
                                                title="Update Status">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </div>

                                    <!-- Status Update Modal -->
                                    <div class="modal fade" id="statusModal" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Order Status</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="" method="POST">
                                                    @csrf
                                                   
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update Status</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            <tr>
                                <td colspan="8" class="text-center py-5">
                                    <i class="bi bi-box-seam display-5 text-muted mb-3"></i>
                                    <h5 class="text-muted">No orders found</h5>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection