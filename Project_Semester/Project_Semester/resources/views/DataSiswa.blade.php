@extends('layouts.app')

@section('content')
<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
    <div>
        <a href="#" class="btn btn-primary mb-3" style="background-color: #22DDD2;">
            <i class="fa fa-plus"></i> Tambah Data Siswa
        </a>
    </div>
    <div class="mb-3" style="margin-left: 10px;">
        <label for="classFilter" class="form-label" style="font-size: 16px;">Filter Kelas:</label>
        <select class="form-select" id="classFilter" style="font-size: 16px; padding: 5px;">
            <option value="semua" selected>Semua</option>
            <option value="kelas7">Kelas 7</option>
            <option value="kelas8">Kelas 8</option>
            <option value="kelas9">Kelas 9</option>
        </select>
    </div>

</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Siswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="siswaTable width="100%" cellspacing="0">
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
                    <tr>
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