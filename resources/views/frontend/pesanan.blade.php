@extends('layouts.main')
@section('title', 'Data pesanan')

@section('container')
<h1>Daftar pesanan </h1>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>nama_pelanggan</th>
        <th>nama_produk</th>
        <th>harga</th>
        <th>merek</th>
        <th>total</th>
        <th>tgl_pesanan</th>
        <th>alamat</th>
    </tr>
@foreach($pesanans as $pesanan)
    <tr>
        <td>{{ $pesanan->id }}</td>
        <td>{{ $pesanan->nama_pelanggan}}</td>
        <td>{{ $pesanan->nama_produk}}</td>
        <td>{{ $pesanan->harga}}</td>
        <td>{{ $pesanan->merek}}</td>
        <td>{{ $pesanan->total}}</td>
        <td>{{ $pesanan->tgl_pesanan}}</td>
        <td>{{ $pesanan->alamat}}</td>
    </tr>
@endforeach
</table>
{{ $pesanans->links() }}
@endsection