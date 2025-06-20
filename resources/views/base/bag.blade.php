@extends('base.header')

@section('title')
   Bag
@endsection

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-9">
            <h1 class="h4 fw-bold mb-4">My Bag</h1>

            {{-- Bag Empty Message --}}
            <p class="text-muted">Your bag is empty.</p>

            {{-- Table --}}
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Product</th>
                            <th>qty</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sample Product</td>
                            <td>1</td>
                            <td>₹500</td>
                            <td>₹500</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

            {{-- Summary or Actions can be added here --}}
            <div class="mt-4">
                {{-- Placeholder for buttons, totals, etc. --}}
            </div>
        </div>
    </div>
</div>
@endsection
