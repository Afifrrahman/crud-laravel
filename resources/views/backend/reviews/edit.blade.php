@extends('backend.layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <h3>Edit data Review</h3>
  <form method="post" action="/review-backend/{{ $reviews->id }}">
    @method('PUT')
    @csrf
    <div class="mb-2">
      <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
      <input type="text" class="form-control @error('nama_pelanggan') is-invalid @enderror" name="nama_pelanggan" value="{{ old('nama_pelanggan', $reviews->nama_pelanggan) }}">
      @error('nama_pelanggan')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="nama_produk" class="form-label">Nama Produk</label>
      <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{ old('nama_produk', $reviews->nama_produk) }}">
      @error('nama_produk')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="jenis" class="form-label">Jenis</label>
      <input type="text" class="form-control @error('jenis') is-invalid @enderror" name="jenis" value="{{ old('jenis', $reviews->jenis) }}">
      @error('jenis')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="merek" class="form-label">Merek</label>
      <input type="text" class="form-control @error('merek') is-invalid @enderror" name="merek" value="{{ old('merek', $reviews->merek) }}">
      @error('merek')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="tanggal" class="form-label">Tanggal</label>
      <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal', $reviews->tanggal) }}">
      @error('tanggal')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="ulasan" class="form-label">ulasan</label>
      <textarea class="form-control @error('ulasan') is-invalid @enderror" name="ulasan">{{ old('ulasan', $reviews->ulasan) }}</textarea>
      @error('ulasan')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection
