<h1>TAMBAH LAPORAN</h1>

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
