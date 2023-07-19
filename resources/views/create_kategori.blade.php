@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('update.kerjaan', $id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1>Tambah Kategori Pekerjaan</h1>
            <div class="mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" required name="judul" id=""
                    placeholder="Nama Lowongan Pekerjaan" value="{{$id->judul}}">
            </div>
            <br>
            <div class="mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" required name="judul" id=""
                    placeholder="Nama Lowongan Pekerjaan" value="{{$id->judul}}">
            </div>
        </form>
    </div>
@endsection
