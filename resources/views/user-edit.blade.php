@extends('layouts.mainlayouts')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Edit Data</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- Gunakan method PUT untuk operasi update --}}

            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" value="{{ $user->nim }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/" class="btn btn-danger">Batal</a>
        </form>
    </div>
</div>

@endsection
