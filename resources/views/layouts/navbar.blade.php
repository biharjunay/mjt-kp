<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. TRIHASTA MANUNGGAL SEJATI</title>
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('../build/assets/app-298ba296.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/styles.css') }}">
</head>

<body>
    <nav class="navbar text-warning fw-bolder navbar-expand-lg fixed-top shadow-5-strong">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning" href="#">PT. TRIHASTA </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" aria-current="page" href="#about">tentang kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#services">layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#portfolio">karir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#team">rekan kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#contact">kontak</a>
                    </li>
                    @if (Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ $user->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <li class="dropdown-item"><button
                                            style="padding: 0; color: white; background: none; border: none"
                                            type="submit">Logout</button>
                                    </li>
                                </form>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                </form>
                            </ul>
                        </li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>
@yield('content')
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; PT. TRIHASTA MANUNGGAL SEJATI</div>
                <div class="col-lg-4 my-3 my-lg-0">
                </div>
                <div class="col-lg-4 text-lg-end">
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('../js/script.js') }}"></script>
    <script src="{{ asset('../build/assets/app-66e7f68a.js') }}"></script>
</body>
</html>

