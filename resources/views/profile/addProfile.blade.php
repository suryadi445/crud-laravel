@extends('template.main')

@section('container')
    <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <x-input field="nama" tag="Nama"></x-input>
        <x-input field="umur" tag="Umur"></x-input>
        <x-input field="alamat" tag="alamat"></x-input>
        <x-input field="pekerjaan" tag="pekerjaan"></x-input>
        <x-inputFile field="gambar" tag="Pilih Gambar"></x-inputFile>
        <div class="mt-3">
            <x-button tipe="submit" class="btn btn-primary" tag="Kirim"></x-button>
        </div>
    </form>
@endsection
