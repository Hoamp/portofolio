@extends('layouts.main')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Halaman Tambah Sertifikasi</h4>

        <form action="{{ route('admin.sertifikasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="">Judul</label>
                <input type="text" name="judul" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ route('admin.sertifikasi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
        
    </div>
</div>


@endsection
