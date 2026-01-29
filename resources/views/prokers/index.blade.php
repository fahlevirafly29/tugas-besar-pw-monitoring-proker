<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Monitoring Proker - HIMASISFO</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <img src="{{ asset('img/logo-hima.jpeg') }}" alt="Logo HIMA" class="header-logo">
        
        <h1>Monitoring Program Kerja</h1>

        <a href="{{ route('proker.create') }}" class="btn btn-add">+ TAMBAH PROGRAM KERJA</a>

        <div class="proker-grid">
            @forelse ($prokers as $p)
                <div class="card">
                    <h3>{{ $p->nama_proker }}</h3>
                    <div class="status-badge">{{ $p->status }}</div>
                    <p><strong>Divisi:</strong> {{ $p->divisi }}</p>
                    <p>{{ $p->deskripsi }}</p>
                    
                    <hr style="border: 0; border-top: 1px solid #eee;">
                    <a href="{{ route('proker.edit', $p->id) }}" style="color: #8b0000; font-weight: bold; text-decoration: none;">EDIT</a>
                    
                    <form action="{{ route('proker.destroy', $p->id) }}" method="POST" style="display:inline; float: right;">
                        @csrf @method('DELETE')
                        <button type="submit" style="background: none; border: none; color: #999; cursor: pointer;" onclick="return confirm('Hapus?')">Hapus</button>
                    </form>
                </div>
            @empty
                <p style="text-align: center; grid-column: 1/-1;">Belum ada program kerja yang terdaftar.</p>
            @endforelse
        </div>
    </div>
</body>
</html>