<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fafafa; padding: 20px; }
        form { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 500px; margin: auto; }
        input, textarea { width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 6px; }
        button { padding: 10px 15px; border: none; border-radius: 6px; background-color: #4caf50; color: white; cursor: pointer; }
        a { text-decoration: none; color: #f06292; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Edit Data Siswa</h2>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>NIS</label>
        <input type="text" name="nis" value="{{ $siswa->nis }}" required>

        <label>Nama</label>
        <input type="text" name="nama" value="{{ $siswa->nama }}" required>

        <label>Kelas</label>
        <input type="text" name="kelas" value="{{ $siswa->kelas }}" required>

        <label>Alamat</label>
        <textarea name="alamat" required>{{ $siswa->alamat }}</textarea>

        <label>Email</label>
        <input type="email" name="email" value="{{ $siswa->email }}" required>

        <label>No. Telepon</label>
        <input type="text" name="no_telepon" value="{{ $siswa->no_telepon }}" required>

        <button type="submit">Update</button>
    </form>

    <p style="text-align:center; margin-top:15px;">
        <a href="{{ route('siswa.index') }}">← Kembali ke Daftar Siswa</a>
    </p>
</body>
</html>
