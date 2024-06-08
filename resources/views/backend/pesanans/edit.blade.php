@extends('backend.layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <h3>Edit data Pesanan</h3>
  <form method="post" action="/pesanan-backend/{{ $pesanans->id }}">
    @method('PUT')
    @csrf
    <div class="mb-2">
      <label for="nama_produk" class="form-label">Nama Pelanggan</label>
      <input type="text" class="form-control @error('nama_pelanggan') is-invalid @enderror" name="nama_pelanggan" value="{{ old('nama_pelanggan', $pesanans->nama_pelanggan) }}">
      @error('nama_pelanggan')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="merek" class="form-label">Nama Produk</label>
      <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{ old('nama_produk', $pesanans->nama_produk) }}">
      @error('nama_produk')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="jenis" class="form-label">Harga</label>
      <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $pesanans->harga) }}">
      @error('harga')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    
    <div class="mb-2">
      <label for="merek" class="form-label">merek</label>
      <input type="text" class="form-control @error('merek') is-invalid @enderror" name="merek" value="{{ old('merek', $pesanans->merek) }}">
      @error('merek')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="total" class="form-label">Total</label>
      <input type="number" class="form-control @error('total') is-invalid @enderror" name="total" value="{{ old('total', $pesanans->total) }}">
      @error('total')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="total" class="form-label">Tanggal Pesanan</label>
      <input type="date" class="form-control @error('tgl_pesanan') is-invalid @enderror" name="tgl_pesanan" value="{{ old('tgl_pesanan', $pesanans->tgl_pesanan) }}">
      @error('tanggal_pesanan')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $pesanans->alamat) }}">
      @error('alamat')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection
