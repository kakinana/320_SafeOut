<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Tambah Pengaduan</title>
        <link
            rel="icon"
            href="{{ asset("img/perisai-logo.png") }}"
            type="image/png"
        />
        <link rel="stylesheet" href="css/app.css" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}" />
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

    <body class="bg-dark">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div
                                    class="col-lg-6 d-flex align-items-center justify-content-center"
                                >
                                    <img
                                        src="/img/banner/bannerPengaduan.png"
                                        alt="Banner"
                                        class="img-fluid rounded"
                                        style="height: 300px"
                                    />
                                </div>
                                <div class="col-lg-6">
                                    <h1
                                        class="text-center text-3xl font-sans font-bold mt-3"
                                    >
                                        Pengaduan
                                    </h1>
                                    <p
                                        class="text-justify text-md font-sans font-semibold leading-5 mt-4"
                                    >
                                        Jangan takut untuk melapor. Dengan
                                        melapor, Anda berkontribusi pada
                                        perbaikan dan keadilan yang lebih baik.
                                        Kami ada untuk mendengar dan membantu,
                                        jadi jangan takut untuk berbicara.
                                    </p>
                                    <form
                                        method="post"
                                        action="/pengaduan/store"
                                        class="contact_form"
                                    >
                                        @csrf
                                        <div class="form-group">
                                            <label
                                                for="kategori"
                                                class="font-weight-bold"
                                            >
                                                Kategori
                                            </label>
                                            <select
                                                id="kategori"
                                                name="kategori"
                                                class="form-control"
                                            >
                                                <option value="saksi">
                                                    Saksi
                                                </option>
                                                <option value="korban">
                                                    Korban
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for="name"
                                                class="font-weight-bold"
                                            >
                                                Nama
                                            </label>
                                            <input
                                                type="text"
                                                name="nama"
                                                id="name"
                                                placeholder="Nama"
                                                class="form-control"
                                                value="{{ old("nama") }}"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for="phone"
                                                class="font-weight-bold"
                                            >
                                                Nomor HP
                                            </label>
                                            <input
                                                type="text"
                                                name="no_hp"
                                                id="phone"
                                                placeholder="Nomor Handphone"
                                                class="form-control"
                                                value="{{ old("no_hp") }}"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for="address"
                                                class="font-weight-bold"
                                            >
                                                Alamat
                                            </label>
                                            <input
                                                type="text"
                                                name="alamat"
                                                id="address"
                                                placeholder="Alamat"
                                                class="form-control"
                                                value="{{ old("alamat") }}"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for="description"
                                                class="font-weight-bold"
                                            >
                                                Deskripsi
                                            </label>
                                            <textarea
                                                name="description"
                                                id="description"
                                                rows="4"
                                                class="form-control"
                                            >
{{ old("description") }}</textarea
                                            >
                                        </div>
                                        <div class="text-center">
                                            <button
                                                type="submit"
                                                class="btn btn-primary px-5"
                                            >
                                                Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
