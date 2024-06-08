@extends('layouts.main')
@section('title', 'Data pesanan')

@section('container')
<h1>Daftar pegawai </h1>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>nama</th>
        <th>jabatan</th>
        <th>tanggal_masuk</th>
        <th>keahlian</th>
    </tr>
@foreach($pegawais as $pegawai)
    <tr>
        <td>{{ $pegawai->id }}</td>
        <td>{{ $pegawai->nama}}</td>
        <td>{{ $pegawai->jabatan}}</td>
        <td>{{ $pegawai->tanggal_masuk}}</td>
        <td>{{ $pegawai->keahlian}}</td>>
    </tr>
@endforeach
</table>
{{ $pegawais->links() }}
@endsection