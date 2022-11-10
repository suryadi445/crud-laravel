@extends('template.main')

@section('container')
    <a href="{{ route('profile.create') }}" class="btn btn-md btn-success mb-3">Add Profile</a>

    <x-table nama="name" umur="age" :table="$profile" />
@endsection
