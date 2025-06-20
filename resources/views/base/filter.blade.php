@extends('base.layout')

@section('title')
    Filter Products 
@endsection

@section('content')

@extends('layout')

@section('title')
    Filter Page |
@endsection

@section('content')

<div class="container py-5">
    <div class="mb-4">
        <h2 class="border-start border-4 border-warning ps-3 fw-bold">
            {{ $category->cat_title }}
        </h2>
    </div>

   
    <div class="row g-4 mt-3">
        @foreach ($category->products as $product)
            <div class="col-md-6 col-lg-3">
                <x-product-card :product="$product"/>
            </div>
        @endforeach
    </div>
</div>
@endsection