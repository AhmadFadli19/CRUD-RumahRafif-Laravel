@extends('Layout/aplikasi')

@section('Konten')
    <div>
        <a href="/siswa" class="btn btn-secondary">kembali</a>
        <h1>{{ $data->nama }}</h1>
        <p>
            <b>Nomor Induk</b> {{ $data->nomor_induk }}
        </p>
        <p>
            <b>Alamat</b> {{ $data->alamat }}
        </p>
    </div>
@endsection