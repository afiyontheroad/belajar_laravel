<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fafafa; padding: 20px; }
        form { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 500px; margin: auto; }
        input, textarea { width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 6px; }
        button { padding: 10px 15px; border: none; border-radius: 6px; background-color: #f06292; color: white; cursor: pointer; }
        a { text-decoration: none; color: #f06292; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Tambah Data Siswa</h2>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <label>NIS</label>
        <input type="text" name="nis" placeholder="Masukkan NIS" required>

        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama Siswa" required>

        <label>Kelas</label>
        <input type="text" name="kelas" placeholder="Contoh: XI RPL 1" required>

        <label>Alamat</label>
        <textarea name="alamat" placeholder="Masukkan Alamat" required></textarea>

        <label>Email</label>
        <input type="email" name="email" placeholder="Masukkan Email" required>

        <label>No. Telepon</label>
        <input type="text" name="no_telepon" placeholder="Masukkan Nomor Telepon" required>

        <button type="submit">Simpan</button>
    </form>

    <p style="text-align:center; margin-top:15px;">
        <a href="{{ route('siswa.index') }}">← Kembali ke Daftar Siswa</a>
    </p>
</body>
</html>
