@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{ route('store.service') }}" method="post" enctype="multipart/form-data">
    @csrf
    <h1>Tambah Rekan Kerja</h1>
    <div class="mb-3">
        <label for="layanan">Layanan</label>
        <input type="text" class="form-control" required name="layanan" id="" placeholder="name">
    </div>
    <br>
    <div class="mb-3">
        <label for="name" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" required name="deskripsi" id="" placeholder="name">
    </div>
    <br>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
</div>
@endsection
