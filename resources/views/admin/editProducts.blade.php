@extends('admin.layout')

@section('title') 
  Edit Product
@endsection

@section('content')
<div class="container py-4">
    <h2 class="fw-bold text-primary mb-4"><i class="bi bi-pencil-square"></i> Edit Product</h2>

   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>There were some problems with your input:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

           
                <div class="mb-3">
                    <label class="form-label">Product Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $product->title) }}" required>
                </div>

             
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ old('description', $product->description) }}</textarea>
                </div>

           
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}" step="0.01" required>
                </div>

              
                <div class="mb-3">
                    <label class="form-label">Discount Price</label>
                    <input type="number" name="discount_price" class="form-control" value="{{ old('discount_price', $product->discount_price) }}" step="0.01">
                </div>

                <div class="mb-3">
                    <label class="form-label">Brand</label>
                    <input type="text" name="brand" class="form-control" value="{{ old('brand', $product->brand) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select name="category_id" class="form-select" required>
                        <option value="">-- Select Category --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                {{ $category->cat_title }}
                            </option>
                        @endforeach
                    </select>
                </div>

       
                <div class="mb-3">
                    <label class="form-label">Current Image</label><br>
                    @if ($product->image)
                        <img src="{{ asset('uploads/products/' . $product->image) }}" alt="Product Image" height="100" class="rounded border">
                    @else
                        <p class="text-muted">No image uploaded.</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label">Upload New Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

             
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success px-4">Update Product</button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
