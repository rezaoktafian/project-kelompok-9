<!-- resources/views/siswa/index.blade.php -->

@extends('layouts.app')

@section('content')


<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">

<div>
    <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3" style="background-color: #22DDD2;">
        <i class="fa fa-plus"></i> Tambah Data Siswa
    </a>
</div>

<div class="mb-3" style="margin-left: 10px;">
    <label for="classFilter" class="form-label" style="font-size: 16px;">Filter Kelas:</label>
    <select class="form-select" id="classFilter" style="font-size: 16px; padding: 5px;" onchange="filterTable()">
        <option value="semua" selected>Semua</option>
        <option value="7">Kelas 7</option>
        <option value="8">Kelas 8</option>
        <option value="9">Kelas 9</option>
    </select>
</div>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Siswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelas</th>
                        <th>No Hp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswas as $siswa)
                    <tr data-class="kelas{{ $siswa->kelas }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $siswa->nisn }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->no_hp }}</td>
                        <td>
                            <div style="display: flex; gap: 10px;">
                                <a href="{{ route('siswa.show', $siswa->id) }}" class="btn btn-info">Detail</a>
                                <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function filterTable() {
        // Dapatkan nilai filter yang dipilih
        var selectedFilter = document.getElementById('classFilter').value;

        // Dapatkan semua baris tabel
        var rows = document.getElementById('dataTable').getElementsByTagName('tr');

        // Iterasi melalui setiap baris dan tampilkan/sembunyikan berdasarkan filter
        for (var i = 1; i < rows.length; i++) { // Dimulai dari 1 untuk melewati baris judul
            var row = rows[i];
            var classValue = row.getAttribute('data-class');

            // Tampilkan baris jika "Semua" dipilih atau jika kelas cocok dengan filter
            if (selectedFilter === 'semua' || classValue === 'kelas' + selectedFilter) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    }
</script>
@endsection