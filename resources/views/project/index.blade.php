@extends('layouts.main')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Halaman Project</h4>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>            
        @endif
        <a href="{{ route('admin.project.create') }}" class="btn btn-primary my-4">Tambah Project</a>
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
                @foreach ($project as $s)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="/storage/project/{{ $s->gambar }}" alt="" width="160px" height="90px"></td>
                    <td>{{ $s->judul }}</td>
                    <td>{{ $s->deskripsi }}</td>
                    <td>
                        <a href="{{ route('admin.project.delete', $s->id) }}" class="btn  btn-danger" onclick="return confirm('yakin hapus?')">Hapus</a>
                        <a href="{{ route('admin.project.edit', $s->id) }}" class="btn  btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
