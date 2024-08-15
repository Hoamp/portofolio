@extends('layouts.main')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Halaman Sertifikasi</h4>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>            
        @endif
        <a href="{{ route('admin.sertifikasi.create') }}" class="btn btn-primary my-4">Tambah Sertifikasi</a>
        <table class="table table-hovered">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Gambar</td>
                    <td>Judul</td>
                    <td>Deskripsi</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($sertifikasi as $s)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="/storage/sertifikasi/{{ $s->gambar }}" alt="" width="160px" height="90px"></td>
                    <td>{{ $s->judul }}</td>
                    <td>{{ $s->deskripsi }}</td>
                    <td>
                        <a href="{{ route('admin.sertifikasi.delete', $s->id) }}" class="btn  btn-danger">Hapus</a>
                        <a href="{{ route('admin.sertifikasi.edit', $s->id) }}" class="btn  btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
