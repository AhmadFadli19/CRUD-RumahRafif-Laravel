@extends('Layout/aplikasi')

@section('Konten')
    <form method="post" action="/siswa" enctype="multipart/form-data">
        @csrf
  <div class="mb-3">
    <label for="nomor_induk" class="form-label">Nomor Induk</label>
    <input type="text" class="form-control" id="nomor_induk" name="nomor_induk" value="{{ Session::get('nomor_induk') }}">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ Session::get('nama') }}">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat">{{ Session::get('alamat') }}</textarea>
  </div>
  <div class="mb-3">
    <label for="foto" class="form-label">foto</label>
    <input type="file" class="form-control" name="foto" id="foto">
  </div>
  <div class="md-3">
    <button type="submit" class="btn btn-primary">simpan</button>
  </div>
    </form>
@endsection