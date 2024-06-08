@extends('backend.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Produk</h1>
</div>
<div class="col-lg-6 mb-5">
  <form method="post" action="{{ route('produk-backend.store') }}">
    @csrf

    <div class="mb-2">
      <label for="nama_produk" class="form-label">Nama Produk</label>
      <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{ old('nama_produk')}}">
      @error('nama_produk')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="merek" class="form-label">Merek</label>
      <input type="text" class="form-control @error('merek') is-invalid @enderror" name="merek" value="{{ old('merek')}}">
      @error('merek')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="kategori" class="form-label">Kategori</label>
      <select class="form-select" name="kategori_id">
        @foreach ($kategoris as $kategori)
          @if (old('kategori_id')== $kategori->id)
          <option value="{{ $kategori->id }}" selected>{{ $kategori->nama}}</option>  
          @else
            <option value="{{ $kategori->id }}">{{ $kategori->nama}}</option>  
          @endif 
        @endforeach
        
      </select>
    </div>
    

    <div class="mb-2">
      <label for="harga" class="form-label">Harga</label>
      <input type="integer" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga')}}">
      @error('harga')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="total" class="form-label">Total</label>
      <input type="text" class="form-control @error('total') is-invalid @enderror" name="total" value="{{ old('total')}}">
      @error('total')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
