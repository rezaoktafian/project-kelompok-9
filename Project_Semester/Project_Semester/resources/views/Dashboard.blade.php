<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')


<div>
    <h2>Tanggal Sekarang</h2>
    <p>{{ \Carbon\Carbon::now()->format('l, j F Y') }}</p>
</div>
<!-- row -->
<!-- Pastikan Anda telah menyertakan Font Awesome di proyek Anda -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-EjUekEe/T3i6XuzhGGxwTNjOebV0X/V+4VzJbGm76UJLTJlClBlTISqU3OPj2jDf7i9fFFP93AukH7bP8zYzYg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="row column1">
    <div class="col-md-6 col-lg-4">
        <div class="full white_shd margin_bottom_30">
            <div class="info_people">
                <div class="p_info_img">
                    <i class="fas fa-user fa-4x"></i>
                </div>
                <div class="user_info_cont">
                    <h4>Jumlah Siswa</h4>
                    <p>Terdaftar</p>
                    <p class="p_status">{{ $siswaCount }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="full white_shd margin_bottom_30">
            <div class="info_people">
                <div class="p_info_img">
                    <i class="fas fa-check fa-4x"></i>
                </div>
                <div class="user_info_cont">
                    <h4>Daftar Absensi</h4>
                    <p>Jumlah Hadir</p>
                    <p class="p_status">{{ $jumlahHadir }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="full white_shd margin_bottom_30">
            <div class="info_people">
                <div class="p_info_img">
                    <i class="fas fa-info fa-4x"></i>
                </div>
                <div class="user_info_cont">
                    <h4>Daftar Absensi</h4>
                    <p>Jumlah Izin</p>
                    <p class="p_status">{{ $jumlahIzin }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row column1">
    <div class="col-md-6 col-lg-4">
        <div class="full white_shd margin_bottom_30">
            <div class="info_people">
                <div class="p_info_img">
                    <i class="fas fa-user fa-4x"></i>
                </div>
                <div class="user_info_cont">
                    <h4>Daftar Absensi</h4>
                    <p>Jumlah Sakit</p>
                    <p class="p_status">{{ $jumlahSakit }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="full white_shd margin_bottom_30">
            <div class="info_people">
                <div class="p_info_img">
                    <i class="fas fa-check fa-4x"></i>
                </div>
                <div class="user_info_cont">
                    <h4>Daftar Absensi</h4>
                    <p>Jumlah Alfa</p>
                    <p class="p_status">{{ $jumlahAlfa }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="full white_shd margin_bottom_30">
            <div class="info_people">
                <div class="p_info_img">
                    <i class="fas fa-info fa-4x"></i>
                </div>
                <div class="user_info_cont">
                    <p>Jumlah Hadir: {{ $jumlahHadir }}</p>
                    <p>Jumlah Sakit: {{ $jumlahSakit }}</p>
                    <p>Jumlah Izin: {{ $jumlahIzin }}</p>
                    <p>Jumlah Alfa: {{ $jumlahAlfa }}</p>
                </div>
            </div>
        </div>
    </div>
</div>




<div id="absensiChart"></div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script>
    // Data Dummy
    var data = {
        hadir: 50,
        izin: 20,
        sakit: 10,
        alfa: 5
    };

    Highcharts.chart('absensiChart', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Jumlah Absensi'
        },
        xAxis: {
            categories: ['Hadir', 'Izin', 'Sakit', 'Alfa']
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            }
        },
        series: [{
            name: 'Jumlah',
            data: [data.hadir, data.izin, data.sakit, data.alfa]
        }],
        credits: {
            enabled: false
        }
    });
</script>
@endsection