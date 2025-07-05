@extends('admin.layout')

@section('title')
    Manage Categories
@endsection

@section('content')

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h2 class="fw-bold mb-1 text-gradient" style="background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">
               <i class="bi bi-tags-fill"></i> Manage Categories
            </h2>
            <p class="text-muted mb-0">
                <i class="bi bi-grid-3x3-gap-fill text-primary me-1"></i>
                <span class="badge bg-light text-dark rounded-pill px-3 py-1">{{ count($categories) }} categories</span>
            </p>
        </div>
        <button class="btn btn-primary rounded-pill shadow-sm px-4" data-bs-toggle="modal" data-bs-target="#createModal">
            <i class="bi bi-plus-circle me-2"></i> Add Category
        </button>
    </div>

 
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            <div>{{ session('error') }}</div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            <div>{{ session('success') }}</div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light-primary text-dark">
                    <tr>
                        <th class="py-3 ps-4">ID</th>
                        <th class="py-3">Title</th>
                        <th class="py-3">Slug</th>
                        <th class="py-3">Description</th>
                        <th class="py-3">Parent</th>
                        <th class="py-3 pe-4 text-end" style="width: 140px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $cat)
                    <tr class="border-top">
                        <td class="ps-4 fw-semibold text-muted">{{ $cat->id }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold">{{ $cat->cat_title }}</span>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-light text-dark font-monospace">{{ $cat->cat_slug }}</span>
                        </td>
                        <td>
                            <p class="text-muted mb-0 small" style="max-width: 250px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                {{ $cat->cat_description ?: 'No description' }}
                            </p>
                        </td>
                        <td>
                            @if($cat->parent)
                                <span class="badge bg-light text-dark">
                                    <i class="bi bi-arrow-up me-1"></i> {{ $cat->parent->cat_title }}
                                </span>
                            @else
                                <span class="badge bg-light text-dark">Main Category</span>
                            @endif
                        </td>
                       
                        <td class="pe-4 text-end">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-sm btn-outline-primary rounded-circle me-2" data-bs-toggle="modal" data-bs-target="#editModal{{ $cat->id }}" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <form action="{{ route('category.destroy', $cat) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-circle" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    <div class="modal fade" id="editModal{{ $cat->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $cat->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content border-0 shadow">
                                <form action="{{ route('category.update', $cat) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header bg-light-primary">
                                        <h5 class="modal-title" id="editModalLabel{{ $cat->id }}">
                                            <i class="bi bi-pencil-square me-2"></i> Edit: {{ $cat->cat_title }}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-4">
                                            <label class="form-label fw-semibold">Parent Category</label>
                                            <select name="parent_id" class="form-select border-2 py-2">
                                                <option value="">Main Category</option>
                                                @foreach ($mainCategories as $item)
                                                    <option value="{{ $item->id }}" {{ $cat->parent_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->cat_title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('parent_id') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                                        </div>

                                 
                                        <div class="mb-4">
                                            <label class="form-label fw-semibold">Category Title</label>
                                            <input type="text" name="cat_title" value="{{ $cat->cat_title }}" class="form-control border-2 py-2">
                                            @error('cat_title') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Description</label>
                                            <textarea name="cat_description" rows="4" class="form-control border-2">{{ $cat->cat_description }}</textarea>
                                            @error('cat_description') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                                            <i class="bi bi-check2 me-1"></i> Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border-0 shadow">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="modal-header bg-light-primary">
                    <h5 class="modal-title" id="createModalLabel">
                        <i class="bi bi-plus-circle-dotted me-2"></i> Create New Category
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
          
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Parent Category</label>
                        <select name="parent_id" class="form-select border-2 py-2">
                            <option value="">Main Category</option>
                            @foreach ($mainCategories as $item)
                                <option value="{{ $item->id }}">{{ $item->cat_title }}</option>
                            @endforeach
                        </select>
                        @error('parent_id') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                    </div>

           
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Category Title</label>
                        <input type="text" name="cat_title" class="form-control border-2 py-2">
                        @error('cat_title') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                    </div>

             
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Description</label>
                        <textarea name="cat_description" rows="4" class="form-control border-2"></textarea>
                        @error('cat_description') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary rounded-pill px-4">
                        <i class="bi bi-plus-lg me-1"></i> Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .bg-light-primary {
        background-color: rgba(75, 108, 183, 0.1);
    }
    
    .table-hover tbody tr:hover {
        background-color: rgba(75, 108, 183, 0.05);
    }
    
    .form-control:focus, .form-select:focus {
        border-color: #4b6cb7;
        box-shadow: 0 0 0 0.25rem rgba(75, 108, 183, 0.25);
    }
    
    .modal-content {
        border-radius: 12px;
        overflow: hidden;
    }
    
    .btn-outline-primary:hover {
        background-color: #4b6cb7;
        color: white;
    }
    
    .btn-outline-danger:hover {
        background-color: #dc3545;
        color: white;
    }
</style>
@endsection
