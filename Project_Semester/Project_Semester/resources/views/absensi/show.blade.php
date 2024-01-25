<!-- resources/views/absensi/show.blade.php -->
@extends('layouts.app')

@section('content')
<div>
    <h2>Detail Absensi</h2>
    <p><strong>NISN:</strong> {{ $absensi->nisn }}</p>
    <p><strong>Nama Siswa:</strong> {{ $absensi->nama_siswa }}</p>
    <p><strong>Kehadiran:</strong> {{ $absensi->kehadiran }}</p>
    <p><strong>Jam Masuk:</strong> {{ $absensi->jam_masuk }}</p>
    <p><strong>Jam Keluar:</strong> {{ $absensi->jam_keluar }}</p>
    <p><strong>Keterangan:</strong> {{ $absensi->keterangan }}</p>
    <!-- Tampilkan detail lainnya sesuai kebutuhan -->

    <a href="{{ route('absensi.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection