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
        <title>Contact Us</title>

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

        <!-- main css -->
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
                                <li class="nav-item">
                                    <a class="nav-link" href="/">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index">
                                        Pengaduan
                                    </a>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a
                                        href="#"
                                        class="nav-link dropdown-toggle"
                                        data-toggle="dropdown"
                                        role="button"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Blog
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog">
                                                Blog
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                href="single-blog"
                                            >
                                                Blog Details
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="contact">
                                        Contact
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index">App</a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        href="{{ route("login") }}"
                                        class="nav-link"
                                    >
                                        Log in
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!--================ End Header Area =================-->

        <!--================ Start Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Banner Area =================-->

        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
        <h1 class="text-center b-10">Email Us</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Telkom University, Bandung</h6>
                                <p>Jl. Telekomunikasi no.1</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">(+62)81-323-323-677</a></h6>
                                <p>24hrs</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">ppks@telkomuniversity.ac.id</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form
                            class="row contact_form"
                            action="https://formsubmit.co/dirgantaksa.13@gmail.com"
                            method="POST"
                            id="contactForm"
                            reset() return False
                        >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="name"
                                        placeholder="Enter your name"
                                    />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="Enter email address"
                                    />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="subject"
                                        name="subject"
                                        placeholder="Enter Subject"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea
                                        class="form-control"
                                        name="message"
                                        id="message"
                                        rows="1"
                                        placeholder="Enter Message"
                                    ></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button
                                    type="submit"
                                    value="submit"
                                    class="primary_btn"
                                >
                                    <span>Send Message</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div
                    id="mapBox"
                    class="mapBox"
                    data-lat="40.701083"
                    data-lon="-74.1522848"
                    data-zoom="13"
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083"
                    data-mlon="-74.1522848"
                ></div>
            </div>
        </section>
        <!--================Contact Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="footer_top flex-column">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/perisai-logo.png" alt="" style="width:150px"/>
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
