@extends('admin.layout')

@section('title')
    Manage Categories |
@endsection

@section('content')

<div class="container py-5">
    {{-- Page Heading --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="border-start border-4 border-warning ps-3 text-secondary">Manage Categories <span class="badge bg-light text-secondary">{{ count($categories) }}</span></h2>
        <button class="btn btn-dark shadow-sm" data-bs-toggle="modal" data-bs-target="#createModal">
            <i class="bi bi-plus-circle me-1"></i> Add Category
        </button>
    </div>

    {{-- Alert Messages --}}
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Categories Table --}}
    <div class="table-responsive">
        <table class="table table-hover align-middle table-bordered">
            <thead class="table-light text-center">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Parent</th>
                    <th style="width: 130px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->cat_title }}</td>
                    <td>{{ $cat->cat_slug }}</td>
                    <td>{{ $cat->cat_description }}</td>
                    <td>{{ $cat->parent ? $cat->parent->cat_title : 'Main Category' }}</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $cat->id }}" title="Edit">
                            <i class="bi bi-pencil-square"></i>
                        </button>

                        <form action="{{ route('category.destroy', $cat) }}" method="post" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this category?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                {{-- Edit Modal --}}
                <div class="modal fade" id="editModal{{ $cat->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $cat->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form action="{{ route('category.update', $cat) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel{{ $cat->id }}">Edit: {{ $cat->cat_title }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    {{-- Parent --}}
                                    <div class="mb-3">
                                        <label class="form-label">Main Category</label>
                                        <select name="parent_id" class="form-select">
                                            <option value="">Main Category</option>
                                            @foreach ($mainCategories as $item)
                                                <option value="{{ $item->id }}" {{ $cat->parent_id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->cat_title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('parent_id') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- Title --}}
                                    <div class="mb-3">
                                        <label class="form-label">Category Title</label>
                                        <input type="text" name="cat_title" value="{{ $cat->cat_title }}" class="form-control">
                                        @error('cat_title') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- Description --}}
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="cat_description" rows="4" class="form-control">{{ $cat->cat_description }}</textarea>
                                        @error('cat_description') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-check2-square me-1"></i> Update
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

{{-- Create Modal --}}
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Create New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    {{-- Parent --}}
                    <div class="mb-3">
                        <label class="form-label">Main Category</label>
                        <select name="parent_id" class="form-select">
                            <option value="">Main Category</option>
                            @foreach ($mainCategories as $item)
                                <option value="{{ $item->id }}">{{ $item->cat_title }}</option>
                            @endforeach
                        </select>
                        @error('parent_id') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>

                    {{-- Title --}}
                    <div class="mb-3">
                        <label class="form-label">Category Title</label>
                        <input type="text" name="cat_title" class="form-control">
                        @error('cat_title') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>

                    {{-- Description --}}
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="cat_description" rows="4" class="form-control"></textarea>
                        @error('cat_description') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info text-white">
                        <i class="bi bi-plus-circle me-1"></i> Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
