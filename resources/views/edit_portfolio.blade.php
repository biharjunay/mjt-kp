@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{ route('update.portfolio', $portfolios) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <h1>Tambah Rekan Kerja</h1>
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" required name="name" id="" placeholder="name" value="{{$portfolios->name}}">
    </div>
    <br>
    <div class="mb-3">
        <label for="image">Pilih Gambar</label>
        <input class="form-control" type="file" required name="file" value="">
    </div>
    <br>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>

</div>
@endsection
