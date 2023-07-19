@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-2 mb-3">
                <div class="list-group">
                    <a href="/dashboard" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="/custom_page" class="list-group-item list-group-item-action active">Laman</a>
                    <a href="" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="" class="list-group-item list-group-item-action">Dashboard</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Layanan') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($layanan as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->layanan }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td class="">
                                            <div class="d-flex">
                                                <a href="{{ route('edit.service', $item) }}"
                                                    class="btn btn-warning">edit</a>
                                                <form action="{{ route('delete.service', $item) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="mx-2 btn btn-danger">delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <a href="{{ route('create.service') }}" class="btn btn-primary">Tambah</a>
                        </table>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">{{ __('Rekan Kerja') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolio as $portfolios)
                                    <tr>
                                        <th scope="row">{{ $portfolios->id }}</th>
                                        <td>{{ $portfolios->name }}</td>
                                        <td><img src="{{ asset('storage/' . $portfolios->image) }}" width="100px"
                                                alt="">
                                        </td>
                                        <td class="">
                                            <div class="d-flex">
                                                <a href="{{ route('edit.portfolio', $portfolios) }}"
                                                    class="mx-2 btn btn-warning">edit</a>
                                                <form action="{{ route('delete.portfolio', $portfolios) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="mx-2 btn btn-danger">delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <a href="{{ route('create.portfolio') }}" class="btn btn-primary">Tambah</a>
                        </table>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">{{ __('Lowongan Pekerjaan') }}</div>
                    <div class="card-body">
                        <a href="{{ route('create.kerjaan') }}" class="btn btn-primary">Tambah Lowongan</a>
                        <a href="{{ route('create.kerjaan') }}" class="btn btn-warning">Tambah Kategori</a>
                        <select id="tableSelect" class="shadow-sm border p-2 m-2 bg-body-tertiary rounded">
                            <option class="" value="">Pilih Tabel</option>
                            <!-- Looping untuk menampilkan opsi dari data tabel -->
                            @foreach ($pekerjaan as $data)
                                <option value="{{ $data->id }}">{{ $data->kategori_pekerjaan }}</option>
                            @endforeach
                        </select>
                        <table id="dataTabel" class="table">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Kualifikasi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                    <!-- ...Tambahkan kolom lain sesuai kebutuhan -->
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data tabel akan ditampilkan di sini -->

                                @foreach ($lowongan as $item)
                                <tr>
                                    <td>{{ $item->judul }}</td>
                                    <td>
                                        <div class="truncate-text">
                                            <span class="partial-content">{{ Str::limit($item->deskripsi, 100) }}</span>
                                            <span class="full-content" style="display: none;">{{ $item->deskripsi }}</span>
                                            @if (strlen($item->deskripsi) > 100)
                                                <a href="#" class="read-more">Read More</a>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="truncate-text">
                                            <span class="partial-content">{{ Str::limit($item->kualifikasi, 100) }}</span>
                                            <span class="full-content" style="display: none;">{{ $item->kualifikasi }}</span>
                                            @if (strlen($item->kualifikasi) > 100)
                                                <a href="#" class="read-more">Read More</a>
                                            @endif
                                        </div>
                                    </td>
                                    <td><img src="{{ asset('storage/pekerjaan/' . $item->gambar) }}" width="100px" alt=""></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('edit.kerjaan', $item) }}" class="btn btn-warning">edit</a>
                                            <form action="{{ route('delete.kerjaan', $item) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="mx-2 btn btn-danger">delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.read-more').forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            var parent = this.parentElement;
            var partialContent = parent.querySelector('.partial-content');
            var fullContent = parent.querySelector('.full-content');

            if (partialContent.style.display === 'none') {
                partialContent.style.display = 'inline';
                fullContent.style.display = 'none';
                this.innerText = 'Read More';
            } else {
                partialContent.style.display = 'none';
                fullContent.style.display = 'inline';
                this.innerText = 'Read Less';
            }
        });
    });
        var editUrl = "{{ route('edit.kerjaan', ['id' => ':id']) }}";
        var allDataUrl = "{{ route('get.semua.kerjaan') }}"; // URL untuk mendapatkan semua data

        document.getElementById('tableSelect').addEventListener('change', function() {
            var tableId = this.value;
            console.log(tableId)
            if (tableId || tableId === '') {
                // Menghapus semua baris dalam tbody tabel
                var tableBody = document.querySelector('#dataTabel tbody');
                tableBody.innerHTML = '';

                // Jika pilihan tabel tidak dipilih atau memilih opsi "Pilih Tabel", tampilkan semua data
                if (tableId === '') {
                    axios.get(allDataUrl)
                        .then(function(response) {
                            var data = response.data;
                            console.log(response);
                            data.forEach(function(row) {
                                var newRow = document.createElement('tr');
                                newRow.innerHTML = '<td>' + row.judul + '</td>' +
                                    '<td>' + row.deskripsi + '</td>' +
                                    '<td>' + row.kualifikasi + '</td>' +
                                    '<td>' + '<img src=' + '"' + '{{ asset('storage/pekerjaan/')}}' + row
                                    .gambar +'"' + ' alt="" width="100px">' + '</td>' +
                                    `<td> <div class="d-flex"><a href="${editUrl.replace(':id', row.id)}" class="btn btn-warning">edit</a> <form action="{{ route('delete.service', $item) }}" method="post"> @method('delete') @csrf <button class="mx-2 btn btn-danger">delete</button></form></div>`;
                                // ...Tambahkan kolom lain sesuai kebutuhan
                                console.log(row.gam)
                                tableBody.appendChild(newRow);
                            });
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                } else {
                    // Mengirim permintaan AJAX ke server untuk mendapatkan data tabel yang dipilih
                    axios.get('/lowongan/' + tableId)
                        .then(function(response) {
                            var data = response.data;
                            console.log(data);
                            data.forEach(function(row) {
                                var newRow = document.createElement('tr');
                                var encodedGambar = encodeURIComponent(row.gambar);
                                newRow.innerHTML =
                                    '<td>' + row.judul + '</td>' +
                                    '<td>' + row.deskripsi + '</td>' +
                                    '<td>' + row.kualifikasi + '</td>' +
                                    '<td>' + '<img src={{ asset('storage/pekerjaan') }}' + '/' + encodedGambar + ' alt="" width="100px">' + '</td>' +
                                    `<td> <div class="d-flex"><a href="${editUrl.replace(':id', row.id)}" class="btn btn-warning">edit</a> <form action="{{ route('delete.service', $item) }}" method="post"> @method('delete') @csrf <button class="mx-2 btn btn-danger">delete</button></form></div>`;
                                // ...Tambahkan kolom lain sesuai kebutuhan

                                tableBody.appendChild(newRow);
                            });
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                }
            }
        });
    </script>
@endsection
