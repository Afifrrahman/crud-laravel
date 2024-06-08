@extends('layouts.main')

@section('title', 'Daftar Kategori')

@section('nav-brt', 'active')

@section('container')
    <div class="container my-4">
        <div class="row">
            @foreach ($kategoris as $kategori)
                <div class="col-lg-3 my-3">
                    <div class="card h-100">
                        <!-- Ganti URL gambar dengan gambar sesuai kategori -->
                        <img src="{{ asset('path-to-image') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $kategori->nama_kategori }}</h5>
                            <p class="card-text">Deskripsi kategori</p>
                            <a href="{{ url('/kategori/' . $kategori->id) }}" class="btn btn-dark">Lihat Kategori</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
