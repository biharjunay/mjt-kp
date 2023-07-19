@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-2 mb-3">
                <div class="list-group">
                    <a href="/dashboard" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="/custom_page" class="list-group-item list-group-item-action">Laman</a>
                    <a href="" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="" class="list-group-item list-group-item-action">Dashboard</a>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Komentar') }}</div>

                    <div class="card-body">
                        {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}

                    <div class="row">
                            @if (count($komentar) === 0)
                            <p>tidak ada komentar</p>
                            @else
                            @foreach ($komentar as $komen)
                            <div class="col-sm-6 mb-3">
                              <div class="card">
                                <div class="card-header">{{$komen->nama}}</div>
                                <div class="card-body">
                                  <h5 class="card-title disabled">{{$komen->email}}</h5>
                                  <p class="card-text">{{$komen->komentar}}</p>
                                </div>
                              </div>
                            </div>
                            @endforeach
                            @endif
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{__('Pelamar')}} </div>
                    <div class="card-body">
                        @foreach ($riwayat as $item)
                    <div class="col-md-4">
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
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nomor</th>
                            <th>Email</th>
                            <th>Waktu</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($riwayat as $item)
                        <tr>
                            <td>{{$item->pelamar->nama}} </td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
