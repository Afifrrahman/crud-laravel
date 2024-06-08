@extends('backend.layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <h3>Edit data Produk</h3>
<form method="post" action="/produk-backend/{{ $produks->id }}">
    @method('PUT')
    @csrf
    <div class="mb-2">
      <label for="nama_produk" class="form-label">Nama Produk</label>
      <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{ old('nama_produk', $produks->nama_produk) }}">
      @error('nama_produk')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="merek" class="form-label">Merek</label>
      <input type="text" class="form-control @error('merek') is-invalid @enderror" name="merek" value="{{ old('merek', $produks->merek) }}">
      @error('merek')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="jenis" class="form-label">Jenis</label>
      <input type="text" class="form-control @error('jenis') is-invalid @enderror" name="jenis" value="{{ old('jenis', $produks->jenis) }}">
      @error('jenis')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="harga" class="form-label">Harga</label>
      <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $produks->harga) }}">
      @error('harga')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="total" class="form-label">Total</label>
      <input type="number" class="form-control @error('total') is-invalid @enderror" name="total" value="{{ old('total', $produks->total) }}">
      @error('total')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection
