<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Proker</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> </head>
<body>
    <div class="container">
        <h1>Tambah Proker Baru</h1>
        <form action="{{ route('proker.store') }}" method="POST">
            @csrf <div class="form-group">
                <label>Nama Proker</label>
                <input type="text" name="nama_proker" required> </div>
            <div class="form-group">
                <label>Divisi</label>
                <input type="text" name="divisi" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" rows="5" required></textarea> </div>
            <button type="submit" class="btn btn-primary">Simpan</button> <a href="{{ route('proker.index') }}" class="btn">Kembali</a>
        </form>
    </div>
</body>
</html>