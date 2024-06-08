@extends('backend.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Produk</h1>
</div>

@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('pesan') }}
    </div>
@endif

<a href="/produk-backend/create" class="btn btn-primary"><span data-feather="plus-circle"></span>Tambah Produk</a>

<table class="table table-bordered table-sm my-4">
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Merek</th>
        <th>kategori</th>
        <th>Harga</th>
        <th>Total</th>
        <th>Aksi</th>
    </tr>
    @foreach ($produks as $produk)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $produk->nama_produk }}</td>
            <td>{{ $produk->merek }}</td>
            <td>{{ $produk->harga }}</td>
            <td>{{ $produk->total }}</td>
            <td>
                <a href="/produk-backend/{{ $produk->id }}/edit" class="btn btn-warning btn-sm"><span data-feather="edit"></span> Edit</a>
                <form action="/produk-backend/{{ $produk->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')"><span data-feather="trash-2"></span> Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
