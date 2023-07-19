@extends('layouts.navbar_active')
@section('content')
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Lowongan Pekerjaan</h2>
                <h3 class="section-subheading text-muted">Bergabunglah dengan tim kami.</h3>
            </div>
            <div class="row mx-auto justify-content-center">
                {{-- test doang --}}

                @foreach ($pekerjaan as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-3">
                        <img src="{{ asset('storage/pekerjaan/' . $item->gambar) }}" class="card-img-top"
                            alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }} </h5>
                            <p class="card-text">{{ Str::limit($item->deskripsi, 30) }}</p>
                            <a href="{{ route('detail.kerjaan', $item) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
