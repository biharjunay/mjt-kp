@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{ route('update.service' ,$item) }}" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <h1>Tambah Rekan Kerja</h1>
    <div class="mb-3">
        <label for="layanan">Layanan</label>
        <input type="text" class="form-control" name="layanan" id="" required placeholder="name" value="{{$item->layanan}}">
    </div>
    <br>
    <div class="mb-3">
        <label for="name" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi" id="" required placeholder="name" value="{{$item->deskripsi}}">
    </div>
    <br>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
</div>
@endsection
