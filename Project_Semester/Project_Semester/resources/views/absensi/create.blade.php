<!-- resources/views/absensi/create.blade.php -->
@extends('layouts.app')

@section('content')
<div>
    <h2>Tambah Data Absensi</h2>
    <form action="{{ route('absensi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nisn" class="form-label">NISN:</label>
            <input type="text" class="form-control" id="nisn" name="nisn" required>
        </div>
        <div class="mb-3">
            <label for="nama_siswa" class="form-label">Nama Siswa:</label>
            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kehadiran:</label>
            <div>
                <input type="radio" id="hadir" name="kehadiran" value="Hadir" required>
                <label for="hadir">Hadir</label>
            </div>
            <div>
                <input type="radio" id="sakit" name="kehadiran" value="Sakit" required>
                <label for="sakit">Sakit</label>
            </div>
            <div>
                <input type="radio" id="izin" name="kehadiran" value="Izin" required>
                <label for="izin">Izin</label>
            </div>
            <div>
                <input type="radio" id="alfa" name="kehadiran" value="Alfa" required>
                <label for="alfa">Alfa</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="jam_masuk" class="form-label">Jam Masuk:</label>
            <input type="time" class="form-control" id="jam_masuk" name="jam_masuk" required>
        </div>
        <div class="mb-3">
            <label for="jam_keluar" class="form-label">Jam Keluar:</label>
            <input type="time" class="form-control" id="jam_keluar" name="jam_keluar" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">keterangan:</label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
        </div>
        <!-- Tambahkan input fields sesuai kebutuhan -->
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection