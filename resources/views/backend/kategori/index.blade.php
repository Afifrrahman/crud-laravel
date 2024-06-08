@extends('backend.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Kategori</h1>
</div>

@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('pesan') }}
    </div>
@endif

<a href="/kategori/create" class="btn btn-primary mb-3">
    <span data-feather="plus-circle"></span>
    Tambah Kategori
</a>

<table class="table table-bordered table-sm my-4">
    <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Aksi</th>
    </tr>
    @foreach ($kategoris as $kategori)
        <tr>
            <td>{{ $kategori->id }}</td>
            <td>{{ $kategori->nama_kategori }}</td>
            <td>
            <a href="/kategori-backend/{{ $kategori->id }}/edit" class="btn btn-warning btn-sm"><span data-feather="edit"></span> Edit</a>
                <form action="/kategori-backend/{{ $kategori->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')"><span data-feather="trash-2"></span> Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $kategoris->links() }}
@endsection
