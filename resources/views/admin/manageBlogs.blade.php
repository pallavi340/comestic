@extends('admin.layout')

@section('title', 'Manage Blogs')

@section('content')
<a href="{{ route('admin.createblogs') }}" class="btn btn-success mb-3">Add New Blog</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    @foreach($blogs as $blog)
    <tr>
        <td>{{ $blog->id }}</td>
        <td>{{ $blog->title }}</td>
        <td>
            @if($blog->image)
                <img src="{{ asset('storage/'.$blog->image) }}" width="100">
            @endif
        </td>
        <td>
            <a href="{{ route('admin.editblogs', $blog->id) }}" class="btn btn-primary btn-sm">Edit</a>
            <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
