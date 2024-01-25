<!-- resources/views/siswa/show.blade.php -->

@extends('layouts.app')

@section('content')
<div>
    <a href="{{ route('siswa.index') }}" class="btn btn-secondary mb-3">
        <i class="fa fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Siswa</h6>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <td><strong>NISN:</strong></td>
                <td>{{ $siswa->nisn }}</td>
            </tr>
            <tr>
                <td><strong>Nama Siswa:</strong></td>
                <td>{{ $siswa->nama }}</td>
            </tr>
            <tr>
                <td><strong>Jenis Kelamin:</strong></td>
                <td>{{ $siswa->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td><strong>Kelas:</strong></td>
                <td>{{ $siswa->kelas }}</td>
            </tr>
            <tr>
                <td><strong>No Hp:</strong></td>
                <td>{{ $siswa->no_hp }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection
