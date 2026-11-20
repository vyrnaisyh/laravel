<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
</head>
<body>
    <h1>Profile Mahasiswa</h1>

    <p>Nama: {{ $nama }}</p>
    <p>NIM: {{ $nim }}</p>
    <p>Kelas: {{ $kelas }}</p>
    <p>Program Studi: {{ $prodi }}</p>

    @if ($status == 'Aktif')
        <p>Mahasiswa Aktif</p>
    @else
        <p>Mahasiswa Tidak Aktif</p>
    @endif
</body>
</html>