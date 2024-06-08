@extends('backend.layouts.main')

@section('container')
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-12">
          <h1 class="text-center">Owner Company</h1>
        </div>
      </div>

    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <img src="{{ asset('fotos/foto2.jpg') }}" alt="Foto 1" class="img-fluid rounded-circle img-thumbnail" style="max-width: 200px; height: auto;">
          <p class="mt-2">Ini adalah deskripsi untuk Foto 1.</p>
        </div>
        <div class="text-center mt-5">
          <img src="{{ asset('fotos/foto2.jpg') }}" alt="Foto 2" class="img-fluid rounded-circle img-thumbnail" style="max-width: 200px; height: auto;">
          <p class="mt-2">Ini adalah deskripsi untuk Foto 2.</p>
        </div>
        <div class="text-center mt-5">
          <img src="{{ asset('fotos/foto2.jpg') }}" alt="Foto 3" class="img-fluid rounded-circle img-thumbnail" style="max-width: 200px; height: auto;">
          <p class="mt-2">Ini adalah deskripsi untuk Foto 3.</p>
        </div>
      </div>
    </div>
    
    <div class="row mt-5">
      <div class="col-md-12">
        <h1 class="text-center">Informasi Perusahaan</h1>
          <p class="text-center">
            "Export" adalah istilah yang digunakan dalam konteks komputer dan perangkat lunak untuk mengacu pada tindakan mengkonversi atau mengeluarkan data dari suatu sistem atau aplikasi ke format atau file eksternal yang dapat digunakan oleh sistem atau aplikasi lain.
          </p>
          <p class="text-center">
          Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#sidebarToggle</code> ID which will toggle the menu when clicked.
          </p>
    </div>
</div>
@endsection
