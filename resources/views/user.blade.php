@extends('layouts.mainlayouts')
@section('content')


    <div class="d-flex justify-content-between align-items-center mb-2">
      <h1 class="h3 text-gray-800">DATA</h1>
      <a href="add-data" class="btn btn-success ml-auto">Tambah Data</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Data User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Nim</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->nim }}</td>
                            <td>
                                <a href="{{ route('user-edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger" 
                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">
                                    Delete
                                </a>
                                <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

@endsection