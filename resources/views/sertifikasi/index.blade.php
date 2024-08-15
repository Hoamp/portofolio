@extends('layouts.main')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Halaman Sertifikasi</h4>

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
                    <td>gambar</td>
                    <td>judl</td>
                    <td>judl</td>
                    <td>aksi</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
