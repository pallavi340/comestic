@extends('admin.layout')

@section('title')
    Manage Blogs
@endsection

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold text-primary">Manage Blogs ({{ count($blogs) }})</h2>
        </div>
        <button class=" btn-sm btn btn-success rounded-sm px-4" data-bs-toggle="modal" data-bs-target="#createModal">
            <i class="bi bi-plus-circle me-2"></i> Add Blog
        </button>
    </div>

 
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif


    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light text-dark">
                    <tr>
                        <th class="ps-4 py-3">ID</th>
                        <th class="py-3">Title</th>
                        <th class="py-3">Slug</th>
                        <th class="py-3">Content</th>
                        <th class="py-3">Image</th>
                        <th class="pe-4 py-3 text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                    <tr class="border-top">
                        <td class="ps-4">{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td><code>{{ $blog->slug }}</code></td>
                        <td>{{ Str::limit(strip_tags($blog->content), 60) }}</td>
                        <td>
                            @if($blog->image)
                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="Image" class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                            @else
                                <span class="text-muted small">No Image</span>
                            @endif
                        </td>
                        <td class="pe-4 text-end">
                            <div class="d-flex justify-content-end gap-2">
                                <button class="btn btn-sm btn-primary rounded-lg" title="Edit" data-bs-toggle="modal" data-bs-target="#editModal{{ $blog->id }}">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger rounded-lg" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                
                    <div class="modal fade" id="editModal{{ $blog->id }}" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content border-0 shadow">
                                <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf @method('PUT')
                                    <div class="modal-header bg-light">
                                        <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i> Edit: {{ $blog->title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" name="title" value="{{ $blog->title }}" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Content</label>
                                            <textarea name="content" rows="5" class="form-control">{{ $blog->content }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Image (optional)</label>
                                            <input type="file" name="image" class="form-control">
                                            @if($blog->image)
                                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}" class="mt-2 rounded" style="width: 100px;">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">
                                            <i class="bi bi-x-circle me-1"></i> Cancel
                                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                                            <i class="bi bi-check-circle me-1"></i> Update
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


<div class="modal fade" id="createModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border-0 shadow">
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header bg-light">
                    <h5 class="modal-title"><i class="bi bi-plus-circle-dotted me-2"></i> Create New Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea name="content" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image (optional)</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary rounded-pill px-4">
                        <i class="bi bi-plus-lg me-1"></i> Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection