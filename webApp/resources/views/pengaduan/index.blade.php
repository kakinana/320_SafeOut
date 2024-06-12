<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PERISAI</title>
    <link rel="icon" href="img/perisai-logo.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="vendors/linericon/style.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />

    <!-- Leaflet css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body class="bg-light">
    <!--================ Start Header Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="/">
                        <img src="img/telu-logo.png" alt="" style="height: 75px" />
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/pengaduan">Pengaduan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/app">App</a>
                            </li>
                            @if (Auth::check())
                                <li class="nav-item dropdown">
                                    <a
                                        class="nav-link dropdown-toggle"
                                        href="#"
                                        id="navbarDropdown"
                                        role="button"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('profile.show') }}">Dashboard</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Log in</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Area =================-->

    <br><br><br><br>
    <div class="container mt-5">
        <!-- Header with "Tambah" button -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Laporan Pengaduan</h1>
            <div>
                <a href="/pengaduan/create" class="btn btn-primary mr-2">Sini kalau ada cerita!</a>
                <a href="/chatbot" class="btn btn-secondary">Ngobrol saja dengan Teman PERISAI</a>
            </div>
        </div>

        <!-- Cards for complaints -->
        <div class="row">
            @foreach ($data as $laporan)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-stone-500 text-black">
                            <h3 class="text-lg font-semibold">Pengaduan {{ $loop->iteration }}</h3>
                        </div>
                        <div class="card-body">
                            <p><span class="font-weight-bold">Kategori:</span> {{ $laporan->kategori }}</p>
                            <p><span class="font-weight-bold">Nama:</span> {{ $laporan->nama }}</p>
                            <p><span class="font-weight-bold">Nomor HP:</span> {{ $laporan->no_hp }}</p>
                            <p><span class="font-weight-bold">Alamat:</span> {{ $laporan->alamat }}</p>
                            <p><span class="font-weight-bold">Deskripsi:</span> {{ $laporan->description }}</p>
                            <p><span class="font-weight-bold">Status:</span> {{ $laporan->status }}</p>
                            <p><span class="font-weight-bold">Tanggal Buat:</span> {{ $laporan->created_at }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4 pb-5">
            <a href="/dashboard" class="btn btn-outline-secondary">Back to home</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.1/js/bootstrap.min.js"></script>
</body>
</html>
