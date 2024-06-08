@extends('backend.layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Pesanan</h1>
  </div>
  <form method="post" action="{{ route('pesanan-backend.store') }}">
    @csrf

    <div class="mb-2">
      <label for="nama_pelanggan" class="form-label">Nama pelanggan</label>
      <input type="text" class="form-control @error('nama_pelanggan') is-invalid @enderror" name="nama_pelanggan" value="{{ old('nama_pelanggan') }}">
      @error('nama_pelanggan')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="nama_produk" class="form-label">Nama produk</label>
      <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{ old('nama_produk') }}">
      @error('nama_produk')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="harga" class="form-label">Harga</label>
      <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}">
      @error('harga')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="merek" class="form-label">Merek</label>
      <input type="text" class="form-control @error('merek') is-invalid @enderror" name="merek" value="{{ old('merek') }}">
      @error('merek')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="total" class="form-label">Total</label>
      <input type="text" class="form-control @error('total') is-invalid @enderror" name="total" value="{{ old('total') }}">
      @error('total')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="tgl_pesanan" class="form-label">Tanggal Pesanan</label>
      <input type="date" class="form-control @error('tgl_pesanan') is-invalid @enderror" name="tgl_pesanan" value="{{ old('tgl_pesanan') }}">
      @error('tgl_pesanan')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}">
      @error('alamat')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
