<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pengaduan</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-indigo-200 p-4">
    <div class="container mx-auto">

        <!-- Header dengan tombol "Add" -->
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Daftar Pengaduan</h1>
            <a href="/pengaduan/create"
                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Tambah
            </a>
        </div>

        <!-- Tabel untuk perangkat desktop -->
        <div class="hidden md:block bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full bg-white">
                <thead class="bg-stone-500 text-white">
                    <tr>
                        <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-left">No</th>
                        <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-left">Kategori</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm text-left">Nama</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm text-left">Nomor HP</th>
                        <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left">Alamat</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm text-left">Deskripsi</th>
                        <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-left">Status</th>
                        <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-left">Tanggal Buat</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <td class="py-3 px-4">1</td>
                        <td class="py-3 px-4">Pendidikan</td>
                        <td class="py-3 px-4">Andi</td>
                        <td class="py-3 px-4">081234567890</td>
                        <td class="py-3 px-4">Jl. Merdeka No. 45</td>
                        <td class="py-3 px-4">Fasilitas sekolah kurang memadai</td>
                        <td class="py-3 px-4 text-green-500 font-bold">Diproses</td>
                        <td class="py-3 px-4">2024-06-10</td>
                    </tr>
                    <tr class="bg-white border-b border-gray-200">
                        <td class="py-3 px-4">2</td>
                        <td class="py-3 px-4">Kesehatan</td>
                        <td class="py-3 px-4">Budi</td>
                        <td class="py-3 px-4">081987654321</td>
                        <td class="py-3 px-4">Jl. Pahlawan No. 10</td>
                        <td class="py-3 px-4">Pelayanan puskesmas lambat</td>
                        <td class="py-3 px-4 text-red-500 font-bold">Pending</td>
                        <td class="py-3 px-4">2024-06-09</td>
                    </tr>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <td class="py-3 px-4">3</td>
                        <td class="py-3 px-4">Transportasi</td>
                        <td class="py-3 px-4">Citra</td>
                        <td class="py-3 px-4">081234000123</td>
                        <td class="py-3 px-4">Jl. Kebangsaan No. 23</td>
                        <td class="py-3 px-4">Jalan rusak parah</td>
                        <td class="py-3 px-4 text-green-500 font-bold">Diproses</td>
                        <td class="py-3 px-4">2024-06-08</td>
                    </tr>
                    <!-- Tambahkan baris lainnya di sini -->
                </tbody>
            </table>
        </div>

        <!-- Kartu untuk perangkat mobile -->
        <div class="block md:hidden space-y-4">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="w-full bg-stone-500 text-white px-4 py-2">
                    <h3 class="text-lg font-semibold">Pengaduan 1</h3>
                </div>
                <div class="p-4">
                    <p><span class="font-bold">Kategori:</span> Pendidikan</p>
                    <p><span class="font-bold">Nama:</span> Andi</p>
                    <p><span class="font-bold">Nomor HP:</span> 081234567890</p>
                    <p><span class="font-bold">Alamat:</span> Jl. Merdeka No. 45</p>
                    <p><span class="font-bold">Deskripsi:</span> Fasilitas sekolah kurang memadai</p>
                    <p><span class="font-bold">Status:</span> <span class="text-green-500 font-bold">Diproses</span></p>
                    <p><span class="font-bold">Tanggal Buat:</span> 2024-06-10</p>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="w-full bg-stone-500 text-white px-4 py-2">
                    <h3 class="text-lg font-semibold">Pengaduan 2</h3>
                </div>
                <div class="p-4">
                    <p><span class="font-bold">Kategori:</span> Kesehatan</p>
                    <p><span class="font-bold">Nama:</span> Budi</p>
                    <p><span class="font-bold">Nomor HP:</span> 081987654321</p>
                    <p><span class="font-bold">Alamat:</span> Jl. Pahlawan No. 10</p>
                    <p><span class="font-bold">Deskripsi:</span> Pelayanan puskesmas lambat</p>
                    <p><span class="font-bold">Status:</span> <span class="text-red-500 font-bold">Pending</span></p>
                    <p><span class="font-bold">Tanggal Buat:</span> 2024-06-09</p>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="w-full bg-stone-500 text-white px-4 py-2">
                    <h3 class="text-lg font-semibold">Pengaduan 3</h3>
                </div>
                <div class="p-4">
                    <p><span class="font-bold">Kategori:</span> Transportasi</p>
                    <p><span class="font-bold">Nama:</span> Citra</p>
                    <p><span class="font-bold">Nomor HP:</span> 081234000123</p>
                    <p><span class="font-bold">Alamat:</span> Jl. Kebangsaan No. 23</p>
                    <p><span class="font-bold">Deskripsi:</span> Jalan rusak parah</p>
                    <p><span class="font-bold">Status:</span> <span class="text-green-500 font-bold">Diproses</span></p>
                    <p><span class="font-bold">Tanggal Buat:</span> 2024-06-08</p>
                </div>
            </div>
            <!-- Tambahkan kartu lainnya di sini -->
        </div>

    </div>
</body>

</html>




{{-- <h1>LAPORAN PENADUAN</h1>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>Alamat</th>
            <th>Deskripsi</th>
            <th>Status</th>
            <th>Waktu Dibuat</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $laporan)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $laporan->kategori }}</td>
            <td>{{ $laporan->nama }}</td>
            <td>{{ $laporan->no_hp }}</td>
            <td>{{ $laporan->alamat }}</td>
            <td>{{ $laporan->description }}</td>
            <td>{{ $laporan->status }}</td>
            <td>{{ $laporan->created_at }}</td>
            <td><a href="/pengaduan/{{$laporan->id}}/edit" class="btn btn-warning">Edit</a> </td>
            <td>
            <form action="/pengaduan/{{$laporan->id}}" method="post" >
                @csrf 
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger">
        </tr>
        @endforeach
    </tbody>
</table>


<a href="/pengaduan/create">BUAT LAPORAN</a> --}}
