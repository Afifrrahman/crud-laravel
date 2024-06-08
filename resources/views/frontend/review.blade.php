@extends('layouts.main')
@section('title', 'Data review')

@section('container')
<h1>Daftar Review </h1>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>nama_pelanggan</th>
        <th>nama_produk</th>
        <th>jenis</th>
        <th>merek</th>
        <th>tanggal</th>
        <th>ulasan</th>
    </tr>
@foreach($reviews as $review)
    <tr>
        <td>{{ $review->id }}</td>
        <td>{{ $review->nama_pelanggan }}</td>
        <td>{{ $review->nama_produk }}</td>
        <td>{{ $review->jenis }}</td>
        <td>{{ $review->merek }}</td>
        <td>{{ $review->tanggal }}</td>
        <td>{{ $review->ulasan }}</td>
    </tr>
@endforeach
</table>
{{ $reviews->links() }}
@endsection