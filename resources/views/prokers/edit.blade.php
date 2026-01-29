<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Proker - HIMA</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="overlay">
        <div class="container form-container">
            <h1>Edit Program Kerja</h1>

            <form action="{{ route('proker.update', $proker->id) }}" method="POST">
                @csrf @method('PUT') <div class="form-group">
                    <label>Nama Proker</label>
                    <input type="text" name="nama_proker" value="{{ old('nama_proker', $proker->nama_proker) }}" required class="dark-input">
                </div>

                <div class="form-group">
                    <label>Divisi</label>
                    <input type="text" name="divisi" value="{{ old('divisi', $proker->divisi) }}" required class="dark-input">
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" rows="5" required class="dark-input">{{ old('deskripsi', $proker->deskripsi) }}</textarea>
                </div>

                <div class="form-group">
                    <label>Status Pelaksanaan</label>
                    <select name="status" class="dark-input">
                        <option value="Belum" {{ $proker->status == 'Belum' ? 'selected' : '' }}>Belum Terlaksana</option>
                        <option value="Berjalan" {{ $proker->status == 'Berjalan' ? 'selected' : '' }}>Sedang Berjalan</option>
                        <option value="Selesai" {{ $proker->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                    </select>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn btn-primary btn-block">Update Perubahan</button>
                    <a href="{{ route('proker.index') }}" class="btn btn-secondary btn-block">Batal</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>