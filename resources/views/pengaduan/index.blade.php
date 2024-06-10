<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Laporan Pengaduan</title>
        <link rel="stylesheet" href="resources/css/app.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
    </head>

    <body class="bg-indigo-200 p-4">
        <div class="container mx-auto">
            <!-- Header with "Tambah" button -->
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold text-gray-700">
                    Laporan Pengaduan
                </h1>
                <a
                    href="/pengaduan/create"
                    class="bg-blue-500 text-black px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400"
                >
                    Tambah
                </a>
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
