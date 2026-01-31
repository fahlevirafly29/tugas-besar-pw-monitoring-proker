<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Proker - HIMASISFO</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <img src="{{ asset('img/logo-hima.jpeg') }}" alt="Logo HIMA" class="header-logo">
        
        <h1>Monitoring Program Kerja</h1>

        <div class="header-actions">
            <form action="{{ route('proker.index') }}" method="GET" class="search-form">
                <input type="text" name="search" placeholder="Cari proker atau divisi..." value="{{ request('search') }}">
                <button type="submit">CARI</button>
                @if(request('search'))
                    <a href="{{ route('proker.index') }}" class="btn-reset">RESET</a>
                @endif
            </form>

            <a href="{{ route('proker.create') }}" class="btn-add">+ TAMBAH PROGRAM KERJA</a>
        </div>

        <div class="proker-grid">
            @forelse ($prokers as $p)
                <div class="card">
                    <div class="status-badge">{{ $p->status }}</div>
                    
                    <h3>{{ $p->nama_proker }}</h3>
                    
                    <div class="divisi-tag">
                        <strong>Divisi:</strong> <span>{{ $p->divisi }}</span>
                    </div>

                    <p>{{ $p->deskripsi }}</p>
                    
                    <div class="card-actions">
                        <a href="{{ route('proker.edit', $p->id) }}" class="btn-edit-link">EDIT</a>
                        
                        <form action="{{ route('proker.destroy', $p->id) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn-delete-card" onclick="return confirm('Hapus proker ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="empty-state">
                    <p>Tidak ada program kerja yang ditemukan.</p>
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>