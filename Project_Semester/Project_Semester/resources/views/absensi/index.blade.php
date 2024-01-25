<!-- resources/views/absensi/index.blade.php -->
@extends('layouts.app')

@section('content')


<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
    <div>
        <a href="{{ route('absensi.create') }}" class="btn btn-primary mb-3" style="background-color: #22DDD2;">
            <i class="fa fa-plus"></i> Tambah Data Absensi
        </a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Absensi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Kehadiran</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Tanggal Absensi</th>

                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($absensis as $absensi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $absensi->nisn }}</td>
                        <td>{{ $absensi->nama_siswa }}</td>
                        <td>{{ $absensi->kehadiran }}</td>
                        <td>{{ $absensi->jam_masuk }}</td>
                        <td>{{ $absensi->jam_keluar }}</td>
                        <td>{{ $absensi->created_at }}</td>
                        <td>{{ $absensi->keterangan }}</td>
                        <td>
                            <div style="display: flex; gap: 10px;">
                                <a href="{{ route('absensi.show', $absensi->id) }}" class="btn btn-info">Detail</a>
                                <a href="{{ route('absensi.edit', $absensi->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('absensi.destroy', $absensi->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure a?')">Delete</button>
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
@endsection