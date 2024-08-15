@extends('layouts.main')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Halaman Edit Sertifikasi</h4>

        <form action="{{ route('admin.sertifikasi.update', $sertifikasi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="">Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ $sertifikasi->judul }}">
            </div>
            @error('judul')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="{{ $sertifikasi->deskripsi }}">
            </div>
            @error('deskripsi')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="">Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>
            @error('gambar')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="{{ route('admin.sertifikasi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
        
    </div>
</div>


@endsection
