@extends('layouts.main')
@section('title', 'Data produk')

@section('container')
<h1>Daftar Produk </h1>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>nama_produk</th>
        <th>merek</th>
        <th>jenis</th>
        <th>harga</th>
        <th>total</th>
    </tr>
@foreach($produks as $produk)
    <tr>
        <td>{{ $produk->id }}</td>
        <td>{{ $produk->nama_produk }}</td>
        <td>{{ $produk->merek }}</td>
        <td>{{ $produk->merek }}</td>
        <td>{{ $produk->jenis }}</td>
        <td>{{ $produk->total }}</td>
    </tr>
@endforeach
</table>
{{ $produks->links() }}
@endsection