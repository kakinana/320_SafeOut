<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>app PERISAI</title>
        <link rel="icon" href="img/perisai-logo.png" type="image/png" />
        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Ubuntu:wght@300&display=swap"
            rel="stylesheet"
        />
        <!--Bootstrap and CSS-->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            <!-- rel="stylesheet" -->
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/styles-app.css" />
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"
        ></script>
        <!--Font Awesome-->
        <script
            src="https://kit.fontawesome.com/4edbcd99d6.js"
            crossorigin="anonymous"
        ></script>
    </head>

    <body>
        <section id="title">
            <div class="container-fluid">
                <!-- Nav Bar -->
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand logo_h" href="#">
                        <img
                            src="img/perisai-logo.png"
                            alt="Perisai Logo"
                            style="height: 75px"
                        />
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02"
                        aria-controls="navbarTogglerDemo02"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse"
                        id="navbarTogglerDemo02"
                    >
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    aria-current="page"
                                    href="/"
                                >
                                    Back To Website
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    target="_blank"
                                    href="https://drive.google.com/drive/folders/1uPzXFXE-k-I95iHIQmsuLdLKNsu4Y4b8?usp=drive_link"
                                >
                                    Download
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Title -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="title-heading">
                            PERISAI: Menjadi temanmu kapanpun dan dimanapun
                        </h1>
                        <h5>
                            Pastikanlah kamu selalu terlindungi bersama PERISAI!
                        </h5>
                        <button
                            type="button"
                            class="btn btn-outline-light dl-button"
                        >
                            <i class="fab fa-android fa-1x"></i>
                            <a
                                href="https://drive.google.com/drive/folders/1uPzXFXE-k-I95iHIQmsuLdLKNsu4Y4b8?usp=drive_link"
                            ></a>
                        </button>

                        <a
                            href="https://drive.google.com/file/d/1C8_Dmr2zaEqyRO1qGLp6w-QwNelBKMsf/view?usp=drive_link"
                            target="_blank"
                        >
                            <button
                                class="btn btn-light col-lg-5"
                                style="
                                    padding: 0;
                                    margin: 5% 1.5% 20% 0%;
                                    height: 3rem;
                                "
                                type="button"
                            >
                                Dokumentasi Aplikasi
                            </button>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <img
                            class="iphone"
                            src="img/iphone.png"
                            alt="iphone-mockup"
                        />
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->

        <section id="features">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <i class="fas fa-exclamation fa-3x feautures-icon"></i>
                        <h3>Panic Button</h3>
                        <p class="feautures-description">
                            Jika terdapat kondisi berbahaya, tinggal klik saja!
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <i class="fas fa-map fa-3x feautures-icon"></i>
                        <h3>Peta Bantuan</h3>
                        <p class="feautures-description">
                            Lihatlah bantuan-bantuan terdekat yang ada di
                            sekitar kalian!
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <i class="fas fa-phone-volume fa-3x feautures-icon"></i>
                        <h3>Kontak Darurat</h3>
                        <p class="feautures-description">
                            Orang terdekatmu akan langsung mendapatkan
                            notifikasi ketika kamu memerlukan bantuan!
                        </p>
                    </div>
                </div>
            </div>
            <br />
        </section>

        <!-- Apps List -->

        <section id="apps">
            <div class="row">
                <div class="col">
                    <span class="apps-title">
                        *Baru tersedia dalam versi android
                    </span>
                </div>
            </div>
        </section>

        <!-- Testimonials -->

        <section id="testimonials">
            <div
                id="carouselExampleControls"
                class="carousel slide"
                data-bs-ride="carousel"
                data-bs-interval="3000"
            >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h2 class="testimonial-desc">
                            "Benar-benar aplikasi yang mengubah hidup saya!"
                        </h2>
                        <img
                            class="testimonial-image"
                            src="img/user.jpg"
                            alt="MelonMusk"
                        />
                        <em class="testimonial-name">M - Mahasiswa</em>
                    </div>
                    <div class="carousel-item">
                        <h2 class="testimonial-desc">
                            "Makasih ya PERISAI! Berkat kalian saya jadi berani
                            untuk keluar sendiri"
                        </h2>
                        <img
                            class="testimonial-image"
                            src="img/user.jpg"
                            alt="MelonMusk"
                        />
                        <em class="testimonial-name">Cai - Pekerja Kantoran</em>
                    </div>
                    <div class="carousel-item">
                        <h2 class="testimonial-desc">
                            "WOW, developernya baik banget ngasih app kayak gini
                            gratis!?!?"
                        </h2>
                        <img
                            class="testimonial-image"
                            src="img/user.jpg"
                            alt="MelonMusk"
                        />
                        <em class="testimonial-name">Mic - Anonymous User</em>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->

        <section id="cta">
            <h2>Gratis, tanpa biaya sepersenpun</h2>
            <h4>Download sekarang!</h4>
            <a
                href="https://drive.google.com/drive/folders/1uPzXFXE-k-I95iHIQmsuLdLKNsu4Y4b8?usp=drive_link"
                target="_blank"
            >
                <button
                    class="col-lg-6 btn btn-light btn-large dl-2"
                    type="button"
                >
                    <i class="fab fa-android fa-1x"></i>
                    Google Play
                </button>
            </a>
        </section>

        <!-- Footer -->

        <footer id="footer">
            <img src="img/perisai-logo.png" alt="" style="width: 100px" />
            <p>
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                All rights reserved | Made by Team 320
            </p>
        </footer>
    </body>
</html>
