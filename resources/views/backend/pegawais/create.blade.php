@extends('backend.layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Pegawai</h1>
  </div>
  <form method="post" action="{{ route('pegawai-backend.store') }}">
    @csrf

    <div class="mb-2">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}">
      @error('nama')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="jabatan" class="form-label">jabatan</label>
      <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}">
      @error('jabatan')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="tanggal_masuk" class="form-label">tanggal masuk</label>
      <input type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}">
      @error('tanggal_masuk')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="keahlian" class="form-label">keahlian</label>
      <input type="text" class="form-control @error('keahlian') is-invalid @enderror" name="keahlian" value="{{ old('keahlian') }}">
      @error('keahlian')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
<!-- 
    <div class="mb-2">
      <label for="file_upload" class="form-label">File Upload</label>
    
      <img  id="file-preview" class="img-fluid col-sm-6 mb-3 d-block" height="100">
    
      <input type="file" class="form-control @error('file_upload') is-invalid @enderror" name="file_upload" id="file_upload">
      @error('file_upload')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror

      <script>
        const input = document.getElementById('file_upload');
        const previewPhoto = () => {
            const file = input.files;
            if (file) {
                const fileReader = new FileReader();
                const preview = document.getElementById('file-preview');
                fileReader.onload = function (event) {
                    preview.setAttribute('src', event.target.result);
                }
                fileReader.readAsDataURL(file[0]);
            }
        }
        input.addEventListener("change", previewPhoto);
      </script>
    </div> -->

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
