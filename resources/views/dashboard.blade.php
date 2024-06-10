<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="icon" href="img/perisai-logo.png" type="image/png" />
        <title>PERISAI</title>

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
        <link
            rel="stylesheet"
            href="https://unpkg.com/leaflet/dist/leaflet.css"
        />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <!--================ Start Header Area =================-->
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
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/pengaduan">
                                        Pengaduan
                                    </a>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a
                                        href="blog"
                                        class="nav-link dropdown-toggle"
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

        <!--================ Start Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="banner_content">
                                <h3 class="text-uppercase">PERISAI</h3>
                                <!-- <h1 class="text-uppercase">PERISAI</h1> -->
                                <h5 class="text-uppercase">
                                    Perlindungan dari Kekerasan Seksual di
                                    Indonesia
                                </h5>
                                <div class="d-flex align-items-center">
                                    <a class="primary_btn" href="pengaduan">
                                        <span>Isi Pengaduan</span>
                                    </a>
                                    <a class="primary_btn tr-bg" href="chatbot">
                                        <span>Ngobrol sama Teman PERISAI</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="home_right_img">
                                <img
                                    class=""
                                    style="width: 500px"
                                    src="img/perisai-logo.png"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Home Banner Area =================-->

        <!--================ Start About Us Area =================-->
        <section class="about_area section_gap">
            <div class="container">
                <div class="row justify-content-start align-items-center">
                    <div class="col-lg-5">
                        <div class="about_img">
                            <img class="" src="img/about-us.png" alt="" />
                        </div>
                    </div>

                    <div class="offset-lg-1 col-lg-5">
                        <div class="main_title text-left">
                            <h2>
                                Kenalan dulu
                                <br />
                                dengan PERISAI
                            </h2>
                            <p>
                                PERISAI (Perlindungan dari Kekerasan Seksual di
                                Indonesia) adalah sebuah inisiatif atau
                                organisasi yang bekerja untuk melawan kekerasan
                                seksual di Indonesia secara lebih luas.
                                Organisasi atau inisiatif ini bertujuan untuk
                                memberikan perlindungan, edukasi, advokasi, dan
                                dukungan kepada korban kekerasan seksual di
                                berbagai wilayah Indonesia.
                            </p>
                            <p>
                                PERISAI bertujuan untuk menciptakan lingkungan
                                yang lebih aman bagi semua orang, khususnya
                                perempuan dan anak-anak, dengan berupaya
                                mengurangi insiden kekerasan seksual dan
                                memberikan dukungan yang diperlukan bagi para
                                korban untuk pulih dan mendapatkan keadilan.
                            </p>
                            <a class="primary_btn" href="app">
                                <span>Dapatkan APP PERISAI!</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End About Us Area =================-->

        <!--================ Srart Brand Area =================-->
        <section class="brand_area">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <!-- Center aligning the content vertically -->
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <!-- Adjusted column classes for the first section -->
                                <div class="client-info">
                                    <div class="d-flex mb-50">
                                        <span class="lage">2+</span>
                                        <span class="smll">
                                            tahun membangun Indonesia
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <!-- Adjusted column classes for the second section -->
                                <div class="call-now d-flex">
                                    <div class="ml-15">
                                        <p>call us now</p>
                                        <h3>(+62)81-323-323-677</h3>
                                        <p>email us now</p>
                                        <h3>ppks@telkomuniversity.ac.id</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Brand Area =================-->

        <!--================ Start Features Area =================-->
        <section class="features_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="main_title">
                            <h2>Apa saja yang sudah kita kerjakan?</h2>
                            <p>
                                Semua orang tentunya ingin aksi nyata
                                <br />
                                Bukan hanya omon omon saja, ini lah aksi kita!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row feature_inner">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature_item">
                            <img
                                src="img/services/s1.png"
                                alt="logo1"
                                style="width: 69px"
                            />
                            <h4>Education</h4>
                            <p>
                                Mengedukasi pemuda Indonesia, untuk masa depan
                                dengan penuh kesetaraan
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature_item">
                            <img
                                src="img/services/s2.png"
                                alt="logo1"
                                style="width: 69px"
                            />
                            <h4>Support for Survivors</h4>
                            <p>
                                Mereka itu bukanlah korban, tapi Survivors untuk
                                dapat bertahan! Yuk dampingi mereka
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature_item">
                            <img
                                src="img/services/s3.png"
                                alt="logo1"
                                style="width: 69px"
                            />
                            <h4>Campaign</h4>
                            <p>
                                Kalo pemerintah lama, ya kita yang gerak
                                terlebih dahulu!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature_item">
                            <img
                                src="img/services/s4.png"
                                alt="logo1"
                                style="width: 69px"
                            />
                            <h4>Legal Assistance</h4>
                            <p>
                                Negara hukum tapi selalu tajam kebawah dan
                                runcing ke atas, bisa bisanya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Features Area =================-->

        <!--================Start Portfolio Area =================-->
        <section class="portfolio_area" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main_title text-left">
                            <h2>
                                Yang sedang kami
                                <br />
                                kerjakan
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="filters portfolio-filter">
                    <ul>
                        <li class="active" data-filter="*">all</li>
                        <li data-filter=".popular">Education Module</li>
                        <li data-filter=".latest">Webinar</li>
                        <li data-filter=".following">News</li>
                    </ul>
                </div>

                <div class="filters-content">
                    <div class="row portfolio-grid justify-content-center">
                        <div class="col-lg-4 col-md-6 all latest">
                            <div class="portfolio_box">
                                <div class="single_portfolio">
                                    <img
                                        class="img-fluid w-100"
                                        src="https://www.medcofoundation.org/media/sd-tertinggal.jpg"
                                        alt=""
                                    />
                                    <div class="overlay"></div>
                                    <a
                                        href="https://www.medcofoundation.org/media/sd-tertinggal.jpg"
                                        class="img-gal"
                                    >
                                        <div class="icon">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="short_info">
                                    <h4>
                                        <a
                                            href="https://www.medcofoundation.org/media/sd-tertinggal.jpg"
                                        >
                                            Edukasi
                                        </a>
                                    </h4>
                                    <p>ke sekolah</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 all popular">
                            <div class="portfolio_box">
                                <div class="single_portfolio">
                                    <img
                                        class="img-fluid w-100"
                                        src="https://ditsmp.kemdikbud.go.id/wp-content/uploads/2021/10/Strategi-Pendidikan-Seksualitas-Bagi-Remaja-SMP-di-Sekolah-1-min.jpg"
                                        alt=""
                                    />
                                    <div class="overlay"></div>
                                    <a
                                        href="https://ditsmp.kemdikbud.go.id/wp-content/uploads/2021/10/Strategi-Pendidikan-Seksualitas-Bagi-Remaja-SMP-di-Sekolah-1-min.jpg"
                                        class="img-gal"
                                    >
                                        <div class="icon">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="short_info">
                                    <h4>
                                        <a href="portfolio-details.html">
                                            Pendidikan Seks
                                        </a>
                                    </h4>
                                    <p>Semenjak dini</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 all latest">
                            <div class="portfolio_box">
                                <div class="single_portfolio">
                                    <img
                                        class="img-fluid w-100"
                                        src="https://www.perempuanberkisah.id/wp-content/uploads/2022/04/Desain-tanpa-judul-34.jpg"
                                        alt=""
                                    />
                                    <div class="overlay"></div>
                                    <a
                                        href="https://www.perempuanberkisah.id/wp-content/uploads/2022/04/Desain-tanpa-judul-34.jpg"
                                        class="img-gal"
                                    >
                                        <div class="icon">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="short_info">
                                    <h4>
                                        <a href="portfolio-details.html">
                                            Pertolonga
                                        </a>
                                    </h4>
                                    <p>
                                        Pertolongan pertama kepada para
                                        survivors
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 all popular">
                            <div class="portfolio_box">
                                <div class="single_portfolio">
                                    <img
                                        class="img-fluid w-100"
                                        src="https://www.smkmulu.sch.id/media_library/posts/large/d063a208221d977f048b66f6c1374c52.jpg"
                                        alt=""
                                    />
                                    <div class="overlay"></div>
                                    <a
                                        href="https://www.smkmulu.sch.id/media_library/posts/large/d063a208221d977f048b66f6c1374c52.jpg"
                                        class="img-gal"
                                    >
                                        <div class="icon">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="short_info">
                                    <h4>
                                        <a href="portfolio-details.html">
                                            Sosialisasi
                                        </a>
                                    </h4>
                                    <p>Ke berbagai kota</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 all following">
                            <div class="portfolio_box">
                                <div class="single_portfolio">
                                    <img
                                        class="img-fluid w-100"
                                        src="https://img.okezone.com/content/2019/02/21/33/2021052/maudy-ayunda-rilis-buku-yang-ditulis-saat-usianya-masih-10-tahun-oprPK7k10T.jpg"
                                        alt=""
                                    />
                                    <div class="overlay"></div>
                                    <a
                                        href="https://img.okezone.com/content/2019/02/21/33/2021052/maudy-ayunda-rilis-buku-yang-ditulis-saat-usianya-masih-10-tahun-oprPK7k10T.jpg"
                                        class="img-gal"
                                    >
                                        <div class="icon">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="short_info">
                                    <h4>
                                        <a href="portfolio-details.html">
                                            Rilis buku
                                        </a>
                                    </h4>
                                    <p>Untuk membantu operasional</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 all upcoming">
                            <div class="portfolio_box">
                                <div class="single_portfolio">
                                    <img
                                        class="img-fluid w-100"
                                        src="https://cdn.idntimes.com/content-images/post/20210202/4-673ec500826d82087e1a779d88fbd746.PNG"
                                        alt=""
                                    />
                                    <div class="overlay"></div>
                                    <a
                                        href="https://cdn.idntimes.com/content-images/post/20210202/4-673ec500826d82087e1a779d88fbd746.PNG"
                                        class="img-gal"
                                    >
                                        <div class="icon">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="short_info">
                                    <h4>
                                        <a href="portfolio-details.html">
                                            Rilis Aplikasi
                                        </a>
                                    </h4>
                                    <p>
                                        Agar panic button dapat diakses semua
                                        orang
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 all upcoming following">
                            <div class="portfolio_box">
                                <div class="single_portfolio">
                                    <img
                                        class="img-fluid w-100"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNZA5aGZV-fKsW4oGN4J1Sqsy4Qlo6Z8XwqA&s"
                                        alt=""
                                    />
                                    <div class="overlay"></div>
                                    <a
                                        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNZA5aGZV-fKsW4oGN4J1Sqsy4Qlo6Z8XwqA&s"
                                        class="img-gal"
                                    >
                                        <div class="icon">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="short_info">
                                    <h4>
                                        <a href="portfolio-details.html">
                                            Kuasa Hukum
                                        </a>
                                    </h4>
                                    <p>Kuasa hukum bagi survivors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 all following">
                            <div class="portfolio_box">
                                <div class="single_portfolio">
                                    <img
                                        class="img-fluid w-100"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbfRgWZkDfcwDH4YSSFxPm-sCZ-XB0RziA0A&s"
                                        alt=""
                                    />
                                    <div class="overlay"></div>
                                    <a
                                        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbfRgWZkDfcwDH4YSSFxPm-sCZ-XB0RziA0A&s"
                                        class="img-gal"
                                    >
                                        <div class="icon">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="short_info">
                                    <h4>Berkolaborasi</h4>
                                    <p>Dengan ibu hebat</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 all upcoming">
                            <div class="portfolio_box">
                                <div class="single_portfolio">
                                    <img
                                        class="img-fluid w-100"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5X4V22-CUQKCPOCJFBn6q6zYISAhtaA1jLA&s"
                                        alt=""
                                    />
                                    <div class="overlay"></div>
                                    <a
                                        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5X4V22-CUQKCPOCJFBn6q6zYISAhtaA1jLA&s"
                                        class="img-gal"
                                    >
                                        <div class="icon">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="short_info">
                                    <h4>
                                        <a href="portfolio-details.html">
                                            Lingkungan Kampus
                                        </a>
                                    </h4>
                                    <p>yang lebih aman</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Portfolio Area =================-->

        <!--================ Start Newsletter Area =================-->
        <!--================Contact Area =================-->
        <section class="contact_area">
            <div class="container">
                <div
                    id="mapBox"
                    class="mapBox"
                    data-lat="-6.973228"
                    data-lon="107.630939"
                    data-zoom="13"
                    data-info="Telkom University, Bandung, Indonesia."
                    data-mlat="-6.973228"
                    data-mlon="107.630939"
                ></div>
            </div>
        </section>

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="footer_top flex-column">
                            <div class="footer_logo">
                                <a href="#">
                                    <img
                                        src="img/perisai-logo.png"
                                        alt=""
                                        style="width: 150px"
                                    />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer_bottom justify-content-center">
                    <p class="col-lg-8 col-sm-12 footer-text">
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | Made by Team 320
                    </p>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>
