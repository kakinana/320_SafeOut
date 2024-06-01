<h1>LAPORAN PENADUAN</h1>

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
        @foreach($data as $laporan)
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


<a href="/pengaduan/create">BUAT LAPORAN</a>