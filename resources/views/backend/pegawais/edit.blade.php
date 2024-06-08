@extends('backend.layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <h3>Edit data Pegawai</h3>
  <form method="post" action="/pegawai-backend/{{ $pegawais->id }} }}">
    @method('PUT')
    @csrf
    <div class="mb-2">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $pegawais->nama) }}">
      @error('nama')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="jabatan" class="form-label">Jabatan</label>
      <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan', $pegawais->jabatan) }}">
      @error('jabatan')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
      <input type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror" name="tanggal_masuk" value="{{ old('tanggal_masuk', $pegawais->tanggal_masuk) }}">
      @error('tanggal_masuk')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="keahlian" class="form-label">Keahlian</label>
      <input type="text" class="form-control @error('keahlian') is-invalid @enderror" name="keahlian" value="{{ old('keahlian', $pegawais->keahlian) }}">
      @error('keahlian')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection
