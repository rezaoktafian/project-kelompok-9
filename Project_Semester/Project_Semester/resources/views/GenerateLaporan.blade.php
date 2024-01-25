<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')


<div>
    <h2>Generate Laporan</h2>
    <p>Laporan Absensi Siswa</p>
</div>

<form id="exportForm" method="get">
    <label for="tanggal">Pilih Tanggal:</label>
    <input type="date" id="tanggal" name="tanggal">





    <!-- row -->
    <!-- Pastikan Anda telah menyertakan Font Awesome di proyek Anda -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-EjUekEe/T3i6XuzhGGxwTNjOebV0X/V+4VzJbGm76UJLTJlClBlTISqU3OPj2jDf7i9fFFP93AukH7bP8zYzYg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <div class="row column1">
        <div class="col-md-6 col-lg-6">
            <div class="full white_shd margin_bottom_30">
                <div class="info_people" style="background-color: #F51B1B;">
                    <div class="p_info_img">
                        <i class="fas fa-user fa-4x"></i>
                    </div>
                    <div class="user_info_cont">
                        <button type="submit" form="exportForm" formaction="{{ route('export.pdf') }}" class="btn btn-danger">
                            <i class="fas fa-file-pdf"></i> Export to PDF
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="full white_shd margin_bottom_30">
                <div class="info_people" style="background-color: #7BD5DD;">
                    <div class="p_info_img">
                        <i class="fas fa-check fa-4x"></i>
                    </div>
                    <div class="user_info_cont">
                        <button type="submit" form="exportForm" formaction="{{ route('export.all.excel') }}" class="btn btn-success">
                            <i class="fas fa-file-excel"></i> Export to Excel
                        </button>
</form>
</div>
</div>
</div>
</div>
</div>


</div>



@endsection