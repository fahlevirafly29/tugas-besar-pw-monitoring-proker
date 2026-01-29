<!DOCTYPE html>
<html>
<head>
    <title>Monitoring Proker - Rafi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Program Kerja (Kontribusi Rafi)</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Proker</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($prokers as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nama_proker }}</td>
                    <td>{{ $p->status }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">Data kosong. Cek database tabel 'prokers'</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>