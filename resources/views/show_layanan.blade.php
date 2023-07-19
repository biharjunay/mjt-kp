<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <nav class="navbar text-warning fw-bolder navbar-expand-lg fixed-top shadow-5-strong">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning" href="/">PT. TRIHASTA </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
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
                <a href="/" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </nav>
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Layanan</h2>
                <h3 class="section-subheading text-muted">Kepuasan mitra adalah keberhasilan kami.</h3>
            </div>
            <div class="row   justify-content-center">
                @foreach ($layanan as $item)
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p class="text-uppercase">{{ $item->layanan }}</p>
                                        <footer class="blockquote-footer">{{ $item->deskripsi }} </footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-2 text-center my-auto">
                                <a href="" class="btn btn-primary">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- <script src="{{ asset('../js/script.js') }}"></script> --}}
    <script src="{{ asset('../build/assets/app-66e7f68a.js') }}"></script>
    <script>
        const navbar = document.querySelector('nav');
        window.addEventListener('scroll', function() {
            if (scrollY > 100) {
                navbar.classList.add("bg-light", 'shadow')
            } else {
                navbar.classList.remove('bg-light', 'shadow')
            }
        })
    </script>
</body>

</html>
