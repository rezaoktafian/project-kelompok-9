<!-- resources/views/absensi/exportpdf.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Report</title>
</head>

<body>
    <h1>Absensi Report</h1>

    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Kehadiran</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($absensis as $absensi)
            <tr>
                <td>{{ $absensi->nisn }}</td>
                <td>{{ $absensi->nama_siswa }}</td>
                <td>{{ $absensi->kehadiran }}</td>
                <td>{{ $absensi->jam_masuk }}</td>
                <td>{{ $absensi->jam_keluar }}</td>
                <td>{{ $absensi->keterangan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>