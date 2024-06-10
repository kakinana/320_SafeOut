<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Pengaduan</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-indigo-200">
    <div class="w-[90%] mx-auto  flex flex-col gap-4 lg:flex-row-reverse lg:gap-10">
        <div class="w-full lg:my-auto">
            <img src="/img/banner/bannerPengaduan.png" alt="" class="object-cover">
        </div>
        <div class="w-full ">
            <div class="space-y-5 ">
                <h1 class="text-center text-3xl font-sans font-bold lg:mt-10 md:text-4xl lg:text-5xl">Pengaduan </h1>
                <p class="text-justify text-md font-sans font-semibold leading-5 md:text-ls lg:text-xl">Jangan takut untuk melapor, Dengan melapor, Anda berkontribusi pada perbaikan dan keadilan yang lebih baik. Kami ada untuk mendengar dan membantu, jadi jangan takut untuk berbicara.</p>
            </div>
            <form method="post" action="/pengaduan/store">
                @csrf
                <div class="w-full  bg-white shadow-lg p-5 space-y-5 rounded-2xl my-10">
              
                    <div>
                        <label for="kategori" class="text-md font-bold ml-3 ">Kategori</label>
                        <select type="text" id="kategori" name="kategori"
                            class="w-full bg-gray-300 rounded-xl border-0 mt-2 text-md text-gray-500 font-semibold">
                            <option value="saksi">Saksi</option>
                            <option value="korban">Korban</option>
                        </select>
                    </div>
                    <div>
                        <label for="name" class="text-md font-bold ml-3 ">Name</label>
                        <input type="text" name="name" id="name" placeholder="Name"
                            class="w-full bg-gray-300 rounded-xl border-0 mt-2 placeholder:text-md placeholder:text-gray-500 placeholder:font-semibold" value="{{old("name")}}">
                    </div>
                    <div>
                        <label for="phone" class="text-md font-bold ml-3 ">No HP</label>
                        <input type="text" name="no_hp" id="phone" placeholder="No Handphone"
                            class="w-full bg-gray-300 rounded-xl border-0 mt-2 placeholder:text-md placeholder:text-gray-500 placeholder:font-semibold" value="{{old("no_hp")}}">
                    </div>
                    <div>
                        <label for="address" class="text-md font-bold ml-3 ">Alamat</label>
                        <input type="text" name="alamat" id="address" placeholder="Alamat"
                            class="w-full bg-gray-300 rounded-xl border-0 mt-2 placeholder:text-md placeholder:text-gray-500 placeholder:font-semibold" value="{{old("alamat")}}">
                    </div>
                    <div>
                        <label for="description" class="text-md font-bold ml-3 ">Deskripsi</label>
                        <textarea type="text" name="deskripsi" id="description"
                            class="w-full bg-gray-300 rounded-xl border-0 mt-2 h-32 placeholder:text-md placeholder:text-gray-500 placeholder:font-semibold" value="{{old("deskrisi")}}">
                        </textarea>
                    </div>
                    
                        <button type="submit" class="w-20 h-10 rounded-2xl bg-[#FF93F4] font-semibold" >
                            Kirim
                        </button>
                
                </div>
            </form>

        </div>
    </div>

</body>

</html>

{{-- <h1 class="">TAMBAH LAPORAN</h1>

<form method="post" action="/pengaduan/store">
    @csrf

    <label for="kategori">Kategori:</label><br>
    <select name="kategori" id="kategori">
        <option value="saksi">Saksi</option>
        <option value="korban">Korban</option>
    </select><br><br>

    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama"><br><br>

    <label for="no_hp">Nomor HP:</label><br>
    <input type="text" id="no_hp" name="no_hp"><br><br>

    <label for="alamat">Alamat:</label><br>
    <textarea id="alamat" name="alamat"></textarea><br><br>

    <label for="description">Deskripsi:</label><br>
    <textarea id="description" name="description"></textarea><br><br>

    <button type="submit">Submit</button>
</form>


 --}}
