@extends('backend.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Pegawai</h1>
</div>

@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('pesan') }}
    </div>
@endif

<a href="/pegawai-backend/create" class="btn btn-primary"><span data-feather="plus-circle"></span>Tambah Pegawai</a>

<table class="table table-bordered table-sm my-4">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>jabatan</th>
        <th>tanggal_masuk</th>
        <th>keahlian</th>
        <th>Aksi</th>
    </tr>
    @foreach ($pegawais as $pegawai)
        <tr>
            <td>{{ $pegawai->id }}</td>
            <td>{{ $pegawai->nama }}</td>
            <td>{{ $pegawai->jabatan }}</td>
            <td>{{ $pegawai->tanggal_masuk }}</td>
            <td>{{ $pegawai->keahlian }}</td>
            <td>
                <a href="/pegawai-backend/{{ $pegawai->id }}/edit" class="btn btn-warning btn-sm"><span data-feather="edit"></span> Edit</a>
                <form action="/pegawai-backend/{{ $pegawai->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')"><span data-feather="trash-2"></span> Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
