<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
   <style>
    body { font-family: Arial, sans-serif; background: #fafafa; padding: 20px; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
    th { background-color: pink; }
    td { color: black; } /* 🔥 Tambahan ini bikin isi tabel jadi warna hitam */
    .btn { padding: 8px 12px; border: none; border-radius: 6px; text-decoration: none; }
    .btn-create { background-color: #f06292; color: white; }
    .btn-edit { background-color: #4caf50; color: white; }
    .btn-delete { background-color: #f44336; color: white; }
</style>

</head>
<body>
    <h2>Daftar Siswa</h2>

    <a href="{{ route('siswa.create') }}" class="btn btn-create">+ Tambah Siswa</a>

    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No. Telepon</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->nis }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->kelas }}</td>
                <td>{{ $s->alamat }}</td>
                <td>{{ $s->email }}</td>
                <td>{{ $s->no_telepon }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
