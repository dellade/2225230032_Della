@extends('layouts.mainlayouts')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Tambah Data</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" required>
            </div>

            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="user" class="btn btn-primary">Batal</a>
        </form>
    </div>
</div>

@endsection