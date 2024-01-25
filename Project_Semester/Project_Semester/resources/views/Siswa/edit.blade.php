<!-- resources/views/siswa/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div>
    <a href="{{ route('siswa.index') }}" class="btn btn-secondary mb-3">
        <i class="fa fa-arrow-left"></i> Kembali
    </a>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Siswa</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nisn" class="form-label">NISN:</label>
                <input type="text" class="form-control" id="nisn" name="nisn" value="{{ $siswa->nisn }}" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Siswa:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $siswa->nama }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki" checked>
                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas:</label>
                <select class="form-select" id="kelas" name="kelas" required style="width: 100%; font-size: 16px; padding: 7px;">
                    <option value="" disabled selected>Select Kelas</option>
                    <option value="7">Kelas 7</option>
                    <option value="8">Kelas 8</option>
                    <option value="9">Kelas 9</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No Hp:</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $siswa->no_hp }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection