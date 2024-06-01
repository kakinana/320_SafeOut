<form method="post" action="/pengaduan/{{$pengaduan->id}}">
    @csrf
    @method('put')

    <label for="kategori">Kategori:</label><br>
    <select name="kategori" id="kategori">
        <option value="saksi" {{ $pengaduan->kategori == 'saksi' ? 'selected' : '' }}>Saksi</option>
        <option value="korban" {{ $pengaduan->kategori == 'korban' ? 'selected' : '' }}>Korban</option>
    </select><br><br>

    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" value="{{ $pengaduan->nama }}"><br><br>

    <label for="no_hp">Nomor HP:</label><br>
    <input type="text" id="no_hp" name="no_hp" value="{{ $pengaduan->no_hp }}"><br><br>

    <label for="alamat">Alamat:</label><br>
    <textarea id="alamat" name="alamat">{{ $pengaduan->alamat }}</textarea><br><br>

    <label for="description">Deskripsi:</label><br>
    <textarea id="description" name="description">{{ $pengaduan->description }}</textarea><br><br>

    <button type="submit">Update</button>
</form>
