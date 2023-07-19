@extends('layouts.navbar_active')
@section('content')
    <div class="container">
        <h1 class="my-3 text-center">Lamar Pekerjaan</h1>
        <form action="{{ route('lamar', $id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nomor">Nomor Telepon</label>
                <input type="number" name="nomor" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">CV lamaran</label>
                <input type="file" name="cv" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Ijazah</label>
                <input type="file" name="ijazah" id="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
