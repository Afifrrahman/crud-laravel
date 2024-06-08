@extends('backend.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Pesanan</h1>
</div>

@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('pesan') }}
    </div>
@endif

<a href="/pesanan-backend/create" class="btn btn-primary"><span data-feather="plus-circle"></span>Tambah Pesanan</a>

<table class="table table-bordered table-sm my-4">
    <tr>
        <th>No</th>
        <th>Nama_pelanggan</th>
        <th>nama_produk</th>
        <th>Harga</th>
        <th>merek</th>
        <th>Total</th>
        <th>tgl_pesanan</th>
        <th>alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($pesanans as $pesanan)
        <tr>
            <td>{{ $pesanan->id }}</td>
            <td>{{ $pesanan->nama_pelanggan }}</td>
            <td>{{ $pesanan->nama_produk }}</td>
            <td>{{ $pesanan->harga }}</td>
            <td>{{ $pesanan->merek }}</td>
            <td>{{ $pesanan->total }}</td>
            <td>{{ $pesanan->tgl_pesanan }}</td>
            <td>{{ $pesanan->alamat }}</td>
            <td>
                <a href="/pesanan-backend/{{ $pesanan->id }}/edit" class="btn btn-warning btn-sm"><span data-feather="edit"></span> Edit</a>
                <form action="/pesanan-backend/{{ $pesanan->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')"><span data-feather="trash-2"></span> Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
