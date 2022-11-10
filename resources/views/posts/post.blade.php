@extends('template.main')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">All Post</h2>
        </div>
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-end mb-3">
        <a href="/post/create" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $no }}</th>
                            <td>{{ $post->nama }}</td>
                            <td>{{ $post->kategori }}</td>
                            <td>
                                <div class="row">
                                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-warning mr-1">Update</a>
                                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger ml-1">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
