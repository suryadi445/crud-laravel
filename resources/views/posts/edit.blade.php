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
                {{-- <form action="/post/update/{{ $row->id }}" method="POST"> --}}
                <form action="{{ route('post.update', $row->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama"
                                value="{{ old('nama') ? old('nama') : $row->nama }}">
                            @error('nama')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kategori" id="kategori"
                                value="{{ old('kategori') ? old('kategori') : $row->kategori }}">
                            @error('kategori')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
