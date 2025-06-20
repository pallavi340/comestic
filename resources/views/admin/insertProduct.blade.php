@extends('admin.layout')

@section('title')
    Insert Product |
@endsection

@section('content')
<div class="container py-5">
    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="border-start border-4 border-warning ps-3 fw-bold text-secondary">Insert New Product</h2>
        <a href="{{ route('products.index') }}" class="btn btn-outline-primary">
            <i class="bi bi-box-arrow-left me-1"></i> Back to Products
        </a>
    </div>

    {{-- Form --}}
    <div class="bg-white p-4 rounded shadow-sm">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="title" class="form-label fw-semibold">Product Title</label>
                    <input type="text" name="title" class="form-control shadow-sm" value="{{ old('title') }}">
                    @error('title') 
                       <div class="text-danger">{{ $message }}</div>
                   @enderror
                </div>

                <div class="col-md-6">
                    <label for="category_id" class="form-label fw-semibold">Product Category</label>
                    <select name="category_id" class="form-select shadow-sm">
                        <option value="">Select Category</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->cat_title }}</option>
                            @foreach($cat->children as $subcat)
                                <option value="{{ $subcat->id }}">— {{ $subcat->cat_title }}</option>
                            @endforeach
                        @endforeach
                    </select>
                    @error('category_id') 
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="price" class="form-label fw-semibold">Product Price</label>
                    <input type="number" name="price" class="form-control shadow-sm" value="{{ old('price') }}">
                    @error('price') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="col-md-6">
                    <label for="discount_price" class="form-label fw-semibold">Discount Price</label>
                    <input type="number" name="discount_price" class="form-control shadow-sm" value="{{ old('discount_price') }}">
                    @error('discount_price') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="brand" class="form-label fw-semibold">Product Brand</label>
                    <input type="text" name="brand" class="form-control shadow-sm" value="{{ old('brand') }}">
                    @error('brand') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Product Description</label>
                <textarea name="description" rows="2" class="form-control shadow-sm">{{ old('description') }}</textarea>
                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="image" class="form-label fw-semibold">Product Image</label>
                    <input type="file" name="image" class="form-control shadow-sm" onchange="preview()" id="image">
                    @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <img id="demo" src="#" alt="Image Preview" class="img-thumbnail d-none" style="max-height: 200px;">
                </div>
            </div>

           
           <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-dark w-50">
                 <i class="bi bi-cloud-upload me-1"></i> Insert Product
             </button>
          </div>
        </form>
    </div>
</div>
@endsection

@section('js')
<script>
    function preview() {
        const file = document.getElementById('image').files[0];
        const reader = new FileReader();
        reader.onloadend = function () {
            const demo = document.getElementById('demo');
            demo.src = reader.result;
            demo.classList.remove('d-none');
        };
        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection