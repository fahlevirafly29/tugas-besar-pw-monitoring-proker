<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proker - HIMA SISFO</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <img src="{{ asset('img/logo-hima.jpeg') }}" alt="Logo HIMA" class="header-logo">
        
        <h1>Tambah Proker Baru</h1>

        <div class="form-container">
            <form action="{{ route('proker.store') }}" method="POST">
                @csrf 
                
                <div class="form-group">
                    <label>Nama Program Kerja</label>
                    <input type="text" name="nama_proker" placeholder="Masukkan nama kegiatan..." required>
                </div>

                <div class="form-group">
                    <label>Divisi</label>
                    <input type="text" name="divisi" placeholder="Contoh: PSDM / Humas" required>
                </div>

                <div class="form-group">
                    <label>Deskripsi Proker</label>
                    <textarea name="deskripsi" rows="5" placeholder="Jelaskan detail tujuan kegiatan..." required></textarea>
                </div>

                <div class="btn-group">
                    <button type="submit" class="btn-submit">SIMPAN PROKER</button>
                    <a href="{{ route('proker.index') }}" class="btn-back">KEMBALI</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>