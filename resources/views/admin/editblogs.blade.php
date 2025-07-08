@extends('admin.layout')

@section('content')
<h3>Edit Blog</h3>
<form action="{{ route('admin.editblogs', $blog->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" value="{{ $blog->title }}" class="form-control">
    </div>
    <div class="mb-3">
        <label>Content</label>
        <textarea name="content" class="form-control" rows="5" >{{ $blog->content }}</textarea>
    </div>
    <div class="mb-3">
        <label>Current Image</label><br>
        @if($blog->image)
            <img src="{{ asset('storage/'.$blog->image) }}" width="150"><br><br>
        @endif
        <input type="file" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
