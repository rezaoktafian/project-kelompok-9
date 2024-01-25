@extends('layouts.app')

@section('content')
<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
    <div>
        <a href="#" class="btn btn-primary mb-3" style="background-color: #22DDD2;">
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
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                <a href class="btn btn-info">Detail</a>
                                <a href class="btn btn-primary">Edit</a>
                            </div>
                        </td>




                    </tr>
                </tbody>
            </table>
        </div>
        @endsection