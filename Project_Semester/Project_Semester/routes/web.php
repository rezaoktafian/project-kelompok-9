<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AbsensiController;



Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Dashboard', [App\Http\Controllers\AbsensiController::class, 'jumlah'])->name('Dashboard');
Route::get('/dashboard/{tanggal?}', [AbsensiController::class, 'jumlah'])->name('dashboard');
Route::get('/Generate', [App\Http\Controllers\AbsensiController::class, 'Generate'])->name('Generate');
Route::get('/export-all-excel', [AbsensiController::class, 'exportAllExcel'])->name('export.all.excel');
Route::get('/export-pdf', [AbsensiController::class, 'exportPdf'])->name('export.pdf');


Route::resource('siswa', SiswaController::class);

Route::resource('absensi', AbsensiController::class);
