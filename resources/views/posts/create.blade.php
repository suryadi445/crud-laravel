@extends('template.main')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Tambah Data Baru</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card p-3">
                {{-- <form action="/post/store" method="POST"> --}}
                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-input field="nama" tag="Nama" />
                    <x-input field="kategori" tag="Kategori" />


                    <x-button tipe="submit" class="btn btn-info" tag="Submit" />
                </form>
            </div>
        </div>
    </div>
@endsection
