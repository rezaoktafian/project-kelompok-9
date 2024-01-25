<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\AbsensiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Absensi;
use App\Models\siswa;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use PDF;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('Home');
    }

    public function jumlah($tanggal = null)
    {
        $tanggal = $tanggal ?? Carbon::now()->toDateString();

        $siswaCount = Siswa::count();

        $jumlahHadir = Absensi::where('kehadiran', 'Hadir')->whereDate('created_at', $tanggal)->count();
        $jumlahSakit = Absensi::where('kehadiran', 'Sakit')->whereDate('created_at', $tanggal)->count();
        $jumlahIzin = Absensi::where('kehadiran', 'Izin')->whereDate('created_at', $tanggal)->count();
        $jumlahAlfa = Absensi::where('kehadiran', 'Alfa')->whereDate('created_at', $tanggal)->count();

        // Mengonversi data ke tipe integer
        $jumlahHadir = (int)$jumlahHadir;
        $jumlahSakit = (int)$jumlahSakit;
        $jumlahIzin = (int)$jumlahIzin;
        $jumlahAlfa = (int)$jumlahAlfa;

        return view('Dashboard', compact('jumlahHadir', 'jumlahSakit', 'jumlahIzin', 'jumlahAlfa', 'siswaCount', 'tanggal'));
    }

    public function DataSiswa()
    {
        return view('DataSiswa');
    }


    public function AbsensiSiswa()
    {
        return view('AbsensiSiswa');
    }
}
