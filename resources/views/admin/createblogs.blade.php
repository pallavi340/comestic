@extends('admin.layout')

@section('content')
<h3>Add New Blog</h3>
<form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="mb-3">
        <label>Content</label>
        <textarea name="content" class="form-control" rows="5"></textarea>
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <a href="{{ route('admin.blogs.store') }}" type="submit" class="btn btn-success">Create</a>
</form>
@endsection
