@extends('layouts.navbar_active')
@section('content')
  <div class="container my-4">
    <div class="row">
      <div class="col-lg-6">
        <img src="{{ asset('storage/pekerjaan/' . $pekerjaan->gambar) }}" class="img-fluid" alt="Product Image">
      </div>
      <div class="col-lg-6">
        <br>
        <h1 class="fs-1">{{ $pekerjaan->judul }}</h1>
        <p class="text-uppercase"> {{$pekerjaan->category->kategori_pekerjaan}} </p>
        <form action="{{route('lamar.kerjaan', $id)}}" method="get">
            <button class="btn btn-primary">Lamar Sekarang</button>
        </form>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col">
        <h2 class="">Deskripsi</h2>
        <p>{{$pekerjaan->deskripsi}} </p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col">
        <h2 class="">Kualifikasi</h2>
        <p>{{$pekerjaan->kualifikasi}} </p>
      </div>
    </div>
  </div>
@endsection
