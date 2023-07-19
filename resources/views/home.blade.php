@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2 mb-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action">Laman</a>
                    <a href="" class="list-group-item list-group-item-action">Profile</a>
                </div>
            </div>
            {{-- <p class="mb-3">Riwayat Lamaran</p> --}}
            {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}
            @if ($riwayat != null)
                @foreach ($riwayat as $item)
                    <div class="col-md-4">
                        <h1 class="mb-4">Riwayat</h1>
                        <div class="card card-default">
                            <div class="card-header ">
                                <h5 class="mb-0">{{ $pekerjaan->judul }} </h5>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped mb-0">
                                    <tr>
                                        <th>Nama</th>
                                        <td class="text-muted">{{ $item->pelamar->nama }} </td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td class="text-muted">{{ $item->pelamar->alamat }} </td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Telepon</th>
                                        <td class="text-muted">{{ $item->pelamar->no_telepon }} </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td class="text-muted">{{ $item->pelamar->email }} </td>
                                    </tr>
                                    <tr>
                                        <th>Waktu Daftar</th>
                                        <td class="text-muted">{{ $item->pelamar->waktu_daftar }} </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td><span class="badge bg-primary badge-info">{{ $item->status }}</span></td>
                                    </tr>
                                    @if ($item->status == 'accepted')
                                        <tr>
                                            <th>Waktu interview</th>
                                            <td><span class="badge bg-primary badge-info">{{ $item->waktu_interview }}</span></td>
                                        </tr>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-4">
                    <div class="card card-default">
                        <div class="card-header">
                            <h5 class="mb-0">Lowongan Pekerjaan</h5>
                        </div>
                        <div class="card-body">
                            <p>Anda belum melakukan lamaran</p>
                            <a href="" class="btn btn-primary btn-block">Lamar sekarang</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
