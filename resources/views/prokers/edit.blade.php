<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Proker - HIMA SISFO</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <img src="{{ asset('img/logo-hima.jpeg') }}" alt="Logo HIMA" class="header-logo">
        
        <h1>Edit Program Kerja</h1>

        <div class="form-container">
            <form action="{{ route('proker.update', $proker->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Nama Proker</label>
                    <input type="text" name="nama_proker" value="{{ $proker->nama_proker }}" required>
                </div>

                <div class="form-group">
                    <label>Divisi</label>
                    <input type="text" name="divisi" value="{{ $proker->divisi }}" required>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" rows="5" required>{{ $proker->deskripsi }}</textarea>
                </div>

                <div class="form-group">
                    <label>Status Pelaksanaan</label>
                    <select name="status">
                        <option value="Belum" {{ $proker->status == 'Belum' ? 'selected' : '' }}>Belum Terlaksana</option>
                        <option value="Sedang" {{ $proker->status == 'Sedang' ? 'selected' : '' }}>Sedang Berjalan</option>
                        <option value="Selesai" {{ $proker->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                    </select>
                </div>

                <div class="btn-group">
                    <button type="submit" class="btn-submit">UPDATE PERUBAHAN</button>
                    <a href="{{ route('proker.index') }}" class="btn-back">BATAL</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>