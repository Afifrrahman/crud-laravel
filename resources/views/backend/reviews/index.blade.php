@extends('backend.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Review</h1>
</div>

@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('pesan') }}
    </div>
@endif

<a href="/review-backend/create" class="btn btn-primary"><span data-feather="plus-circle"></span>Tambah Review</a>

<table class="table table-bordered table-sm my-4">
    <tr>
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>nama produk</th>
        <th>jenis</th>
        <th>merek</th>
        <th>tanggal</th>
        <th>ulasan</th>
        <th>Aksi</th>
    </tr>
    @foreach ($reviews as $review)
        <tr>
            <td>{{ $review->id }}</td>
            <td>{{ $review->nama_pelanggan }}</td>
            <!-- <td>{{ $review->pesanan ? $review->pesanan->nama_pelanggan : '-' }}</td> -->
            <td>{{ $review->nama_produk }}</td>
            <td>{{ $review->jenis }}</td>
            <td>{{ $review->merek }}</td>
            <td>{{ $review->tanggal }}</td>
            <td>{{ $review->ulasan }}</td>
            <td>
                <div class="d-flex">
                    <a href="/review-backend/{{ $review->id }}/edit" class="btn btn-warning btn-sm mr-1"><span data-feather="edit"></span> Edit</a>
                    <form action="/review-backend/{{ $review->id }}" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')"><span data-feather="trash-2"></span> Hapus</button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
</table>
@endsection
