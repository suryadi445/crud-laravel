@extends('template.main')

@section('container')
    <form action="{{ route('profile.update', $profile->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <x-inputText field="nama" tag="nama" value="{{ $profile->nama }}"></x-inputText>
        <x-inputText field="umur" tag="umur" value="{{ $profile->umur }}"></x-inputText>
        <x-inputText field="alamat" tag="alamat" value="{{ $profile->alamat }}"></x-inputText>
        <x-inputText field="pekerjaan" tag="pekerjaan" value="{{ $profile->pekerjaan }}"></x-inputText>
        <x-inputFile field="gambar" tag="Pilih Gambar"></x-inputFile>
        <div class="mt-3">
            <x-button tipe="submit" class="btn btn-primary" tag="Kirim"></x-button>
        </div>
    </form>
@endsection
