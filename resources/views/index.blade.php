@extends('layouts.navbar')
@section('content')
    <div class="wrapper-outer">
        <div class="wrapper">
            <div class="parallax-section">
                <div class="parallax-bg"></div>
                <h2 class="text-white text-center fw-bolder">TRIHASTA MANUNGGAL SEJATI</h2>
                <div class="d-block">
                    <a href="#about"><button class="btn btn-warning">Check This Out</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">tentang kami</h2>
                <h3 class="section-subheading text-muted">Cepat, Tepat, Akurat</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Jan 2020</h4>
                            <h4 class="subheading">Mulai berdiri</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">PT. TRIHASTA MANUNGGAL SEJATI merupakan badan usaha yang bergerak
                                dibidang telekomunikasi jaringan BTS, instalasi perangkat sinyal semua operator untuk
                                area Jawa Tengah. PT. TRIHASTA MANUNGGAL SEJATI berdiri pada tanggal 27 Januari 2020</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2020 - 2021</h4>
                            <h4 class="subheading">Pekerjaan Awal</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Pada awal berdiri PT. TRIHASTA MANUNGGAL SEJATI, kami menyedikan
                                layanan jasa instalasi LTE 1300, instalasi microwave, upgrade ODU, trouble shoot, take
                                data.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2021 - 2022</h4>
                            <h4 class="subheading">Perkembangan Perusahaan</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Dengan perkembangan teknologi yang makin canggih dan kebutuhan akan
                                layanan telekomunikasi masyarakat yang semakin cepat, PT. TRIHASTA MANUNGGAL SEJATI
                                meng-upgrade layanan LTE 1300 (3.5G) menjadi 1800 - 2100 (5G). </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Jadilah
                            <br />
                            Bagian
                            <br />
                            dari Kami!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container text-center">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Layanan</h2>
                <h3 class="section-subheading text-muted">Kepuasan mitra adalah keberhasilan kami.</h3>
            </div>
            <div class="row text-center">
                @foreach ($layanan as $item)
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-screwdriver-wrench fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3 text-uppercase">{{ $item->layanan }}</h4>
                        <p class="text-muted">{{ $item->deskripsi }}</p>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <a href="/layanan" class="btn btn-xl btn-warning">Pesan Sekarang</a>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">karir</h2>
                <h3 class="section-subheading text-muted">Bergabunglah dengan tim kami.</h3>
            </div>
            <div class="row">
                {{-- <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Engineer</div>
                            <div class="portfolio-caption-subheading text-muted">Engineer Telco / DT</div>
                        </div>
                    </div>
                </div> --}}
                {{-- test doang --}}
                @foreach ($pekerjaan as $item)
                @if ($loop->iteration <=3)

                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->

                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('storage/pekerjaan/' . $item->gambar)}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{$item->judul}}</div>
                            <div class="portfolio-caption-subheading text-muted">{{$item->deskripsi}}</div>
                        </div>
                    </div>
                </div>
                @else
                    @break
                @endif
                @endforeach
                <div class="text-center">

                <a href="/pekerjaan" class="btn btn-xl btn-warning mx-auto">Lihat Semua Pekerjaan</a>
                </div>
                {{-- test selesai --}}
                {{-- <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/2.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Rigger</div>
                            <div class="portfolio-caption-subheading text-muted">Installer BTS</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/3.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Driver</div>
                            <div class="portfolio-caption-subheading text-muted">Part time driver</div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">REKAN KERJA</h2>
                <h3 class="section-subheading text-muted">Perusahaan yang telah menggunakan jasa kami</h3>
            </div>
            <div class="row">
                @foreach ($portfolio as $item)
                    <div class="col-lg-3">
                        <div class="team-member">
                            <a href="https://indosatooredoo.com" target="blank"><img class="mx-auto rounded-circle"
                                    src="{{ asset('storage/' . $item->image) }}" alt="..." /></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--   <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
            </div> -->
        </div>
    </section>
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg"
                            alt="..." aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">KONTAK KAMI</h2><BR />
                <h4 class="section-subheading" style="color: #FFFFFF;">MJT TELECOMMUNICATION, CV</h4>
                <h3 class="section-subheading" style="color: #FFFFFF;">Jl. Danyang-Kuwu Dsn. Krajan RT/RW 02/03 Ds.
                    Panunggalan Kec. Pulokulon, Kab. Grobogan, Jawa Tengah </h3>
                <h3 class="section-subheading" style="color: #FFFFFF;">085 600 194 828</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" method="POST" action="{{ route('store') }}">
                @csrf
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" name="nama" type="text"
                                placeholder="Nama" required data-sb-validations="required" />
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" name="email" type="email"
                                placeholder="Email" required data-sb-validations="required,email" />
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" name="no_telepon" type="tel"
                                placeholder="Nomor Telepon" required data-sb-validations="required" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" required id="message" name="komentar" placeholder="Komentar"
                                data-sb-validations="required"></textarea>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <!-- Submit error message-->
                <div id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">
                        </div>
                    </div>
                </div>
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <!-- Submit Button-->
                <div class="text-center"><input class="btn btn-primary btn-xl text-uppercase" id="submitButton"
                        name="submitButton" type="submit" value="Send Message" /></div>
            </form>
        </div>
        <br />
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Komentar</h2>
                    <br>
                    @foreach ($komentar as $komen)
                        <h5 class="card-title">{{ $komen->nama }}</h5>
                        <p>{{ $komen->komentar }}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="col-md-12">
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d732.0009799621234!2d111.07017752913094!3d-7.127011599678334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70ad63de12f995%3A0x89b188ee4c86e082!2sCV.%20MJT%20TELECOMMUNICATION!5e1!3m2!1sid!2sid!4v1661780849806!5m2!1sid!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">engineer</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg"
                                    alt="..." />
                                <p>kualifikasi: pria, usia 26-35 tahun; pendidikan min. D3 teknik telekomunikasi;
                                    memiliki pengalaman kerja di dunia telekomunikasi, terlebih pada maintenance BTS;
                                    memiliki pengalaman menghandle Fiber Optic dan/atau IBS. Info tambahan dari user:
                                    Silahkan mengirimkan kandidat freshgraduate, namun sudah paham mengenai fiber
                                    optic.Saat mengirimkan CV mohon dicantumkan current salary & ekspektasinya. Ditunggu
                                    untuk CV2nya. Terima kasih.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Posisi:</strong>Engineer Telco / DT
                                    </li>
                                    <li>
                                        <strong>Category:</strong> Engineer
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup Karir
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Rigger</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg"
                                    alt="..." />
                                <p>Deskripsi Pekerjaan:
                                    · Pemasangan/Instalasi perangkat BTS dan Transmisi perangkat Nokia
                                    · Pemeliharaan dan perawatan kelengkapan instalasi
                                    Persyaratan:
                                    · Diutamakan pendidikan SMA/SMK/STM/D3/S1 Telkom atau yang sudah memiliki pengalaman
                                    di bidang Telco minimal 1 tahun
                                    · Sudah mengerti/pernah mengerjakan perangkat BTS dan Transmisi perangkat Nokia akan
                                    menjadi nilai tambah
                                    · Berpengalaman Sebagai Installer/Rigger (WAH Certified)
                                    · Siap bekerja di lapangan, tidak takut ketinggian (Installer/Rigger)
                                    · Memiliki sertifikat WAH/TKPK 1 aktif (Installer/Rigger)</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Posisi:</strong>
                                        Rigger
                                    </li>
                                    <li>
                                        <strong>Category:</strong>Rigger
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup Karir
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Driver</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg"
                                    alt="..." />
                                <p>Laki-laki usia max 45 th. Pendidikan min SMK/sederajat. Pengalaman sebagai supir min
                                    2 th. Menguasai mobil matic maupun manual. Wajib memiliki SIM minimal SIM A & C
                                    (aktif)</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Posisi:</strong>Driver
                                    </li>
                                    <li>
                                        <strong>Category:</strong>Driver
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup Karir
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
