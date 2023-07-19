@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('store.kerjaan') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1>Tambah Lowongan Pekerjaan</h1>
            <div class="mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" required name="judul" id=""
                    placeholder="Nama Lowongan Pekerjaan">
            </div>
            <br>
            <div class="mb-3">
                <label for="" class="form-label">Kategori Pekerjaan</label>
                <select id="tableSelect" name="kategori" class="form-control ">
                    <option class="" value="">Pilih Tabel</option>
                    <!-- Looping untuk menampilkan opsi dari data tabel -->
                    @foreach ($pekerjaan as $data)
                        <option value="{{ $data->id }}">{{ $data->kategori_pekerjaan }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="mb-3">
                <label for="image">Pilih Gambar</label>
                <input class="form-control" type="file" name="file">
            </div>
            <br>
            <div class="mb-3">
                <label for="name" class="form-label">Kualifikasi</label>
                <textarea type="text" class="form-control" required name="kualifikasi" id=""
                    placeholder="Kualifikasi Pendaftar" cols="30" rows="
                    10"></textarea>
            </div>
            <br>
            <label for="" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="" cols="30" rows="10"></textarea>
            <br>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script>
        document.getElementById('tableSelect').addEventListener('change', function() {
            console.log(this.value)
        })
    </script>
@endsection
