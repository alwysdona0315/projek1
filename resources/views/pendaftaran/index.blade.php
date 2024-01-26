<!-- Pada resources/views/pendaftaran/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftaran</title>
</head>
<body>

<h2>Data Pendaftaran</h2>

@if (count($pendaftarans) > 0)
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Fakultas</th>
                <th>Total SKS</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendaftarans as $pendaftaran)
                <tr>
                    <td>{{ $pendaftaran->nama }}</td>
                    <td>{{ $pendaftaran->nim }}</td>
                    <td>{{ $pendaftaran->jurusan }}</td>
                    <td>{{ $pendaftaran->fakultas }}</td>
                    <td>{{ $pendaftaran->total_sks }}</td>
                    <td>{{ $pendaftaran->ipk }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Tidak ada data pendaftaran.</p>
@endif

</body>
</html>