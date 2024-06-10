<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PERISAI</title>
        <link rel="stylesheet" href="css/app.css" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="vendors/linericon/style.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link
            rel="stylesheet"
            href="vendors/owl-carousel/owl.carousel.min.css"
        />
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />

        <!-- Leafer css -->
        <link
            rel="stylesheet"
            href="https://unpkg.com/leaflet/dist/leaflet.css"
        />

        <!-- main css -->
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body class="bg-indigo-200 p-4">
    <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="/">
                            <img
                                src="img/telu-logo.png"
                                alt=""
                                style="height: 75px"
                            />
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
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div
                            class="collapse navbar-collapse offset"
                            id="navbarSupportedContent"
                        >
                            <ul
                                class="nav navbar-nav menu_nav justify-content-end"
                            >
                                <li class="nav-item">
                                    <a class="nav-link" href="/dashboard">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/pengaduan">
                                        Pengaduan
                                    </a>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a
                                        href="/blog"
                                        class="nav-link dropdown-toggle"
                                        data-toggle="dropdown"
                                        role="button"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Blog
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact">
                                        Contact
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="app">App</a>
                                </li>

                                @if (Auth::check())
                                    <li class="nav-item submenu dropdown">
                                        <a
                                            href="#"
                                            class="nav-link dropdown-toggle"
                                            data-toggle="dropdown"
                                            role="button"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            {{ Auth::user()->name }}
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link"
                                                    href="{{ route("profile.show") }}"
                                                >
                                                    Dashboard
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link"
                                                    href="{{ route("logout") }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                >
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                        <form
                                            id="logout-form"
                                            action="{{ route("logout") }}"
                                            method="POST"
                                            style="display: none"
                                        >
                                            @csrf
                                        </form>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a
                                            href="{{ route("login") }}"
                                            class="nav-link"
                                        >
                                            Log in
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!--================ End Header Area =================-->

        <br />
        <br />
        <br />
        <br />
        <div class="container mx-auto">
            <!-- Header with "Tambah" button -->
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold text-gray-700">
                    Laporan Pengaduan
                </h1>
                <div class="flex align-items-center justify-center">
                    <a
                        href="/pengaduan/create"
                        class="bg-blue-500 text-black px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 btn btn-primary"
                    >
                        Sini kalau ada cerita!
                    </a>
                </div>
            </div>

            <!-- Cards for mobile -->
            <div class="block md:hidden space-y-4">
                <!-- Sample data, replace with dynamic data -->
                @foreach ($data as $laporan)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="w-full bg-stone-500 text-black px-4 py-2">
                            <h3 class="text-lg font-semibold">
                                Pengaduan {{ $loop->iteration }}
                            </h3>
                        </div>
                        <div class="p-4">
                            <p>
                                <span class="font-bold">Kategori:</span>
                                {{ $laporan->kategori }}
                            </p>
                            <p>
                                <span class="font-bold">Nama:</span>
                                {{ $laporan->nama }}
                            </p>
                            <p>
                                <span class="font-bold">Nomor HP:</span>
                                {{ $laporan->no_hp }}
                            </p>
                            <p>
                                <span class="font-bold">Alamat:</span>
                                {{ $laporan->alamat }}
                            </p>
                            <p>
                                <span class="font-bold">Deskripsi:</span>
                                {{ $laporan->description }}
                            </p>
                            <p>
                                <span class="font-bold">Status:</span>
                                {{ $laporan->status }}
                            </p>
                            <p>
                                <span class="font-bold">Tanggal Buat:</span>
                                {{ $laporan->created_at }}
                            </p>
                        </div>
                    </div>
                @endforeach

                <!-- Add more cards here -->
            </div>

            <div>
                <button class="btn items-center">
                    <a href="/dashboard">Back to home</a>
                </button>
            </div>
        </div>
    </body>
</html>
