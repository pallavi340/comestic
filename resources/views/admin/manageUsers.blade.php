@extends('admin.layout')

@section('title')
  Manage Users
@endsection

@section('content') 
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary"><i class="bi bi-people-fill"></i> Manage Users ({{ count($users) }})</h2>
    </div>

    <div class="card shadow-sm rounded-4 border-0">
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Registered At</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td><span class="badge bg-light text-dark">{{ $user->email }}</span></td>
                        <td>{{ $user->created_at->format('d M Y') }}</td>
                        <td class="text-center d-flex justify-content-center gap-2">

                            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <form action="{{ route('admin.user.delete', $user->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                               @method('DELETE')
                                <a href="" class="btn btn-sm btn-outline-danger rounded-pill px-3">
                                   <i class="bi bi-trash"></i> Delete
                               </a>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">No users found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection