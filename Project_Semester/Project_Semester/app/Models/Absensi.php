<?php

// app/Models/Absensi.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table = 'absensis';


    protected $fillable = ['nisn', 'nama_siswa', 'kehadiran', 'jam_masuk', 'jam_keluar', 'keterangan'];
}
