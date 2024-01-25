<?php

// app/Http/Controllers/AbsensiController.php
namespace App\Http\Controllers;

use App\Exports\AbsensiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Absensi;
use App\Models\siswa;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use PDF;


class AbsensiController extends Controller
{
    public function index()
    {
        $absensis = Absensi::all();
        return view('absensi.index', compact('absensis'));
    }


    public function Generate()
    {
        // Pass default values or retrieve from your data
        return view('GenerateLaporan', ['kelas' => 'kelas7']);
    }

    public function exportAllExcel(Request $request)
    {
        // Tambahkan validasi untuk tanggal jika diperlukan
        $request->validate([
            'tanggal' => 'date', // Atau sesuaikan dengan aturan validasi yang diinginkan
        ]);

        $tanggal = $request->input('tanggal') ?? Carbon::now()->toDateString();
        $absensis = Absensi::whereDate('created_at', $tanggal)->get();

        return Excel::download(new AbsensiExport($absensis), 'absensi-' . $tanggal . '.xlsx');
    }

    public function exportPdf(Request $request)
    {
        // Tambahkan validasi untuk tanggal jika diperlukan
        $request->validate([
            'tanggal' => 'date', // Atau sesuaikan dengan aturan validasi yang diinginkan
        ]);

        $tanggal = $request->input('tanggal') ?? Carbon::now()->toDateString();
        $absensis = Absensi::whereDate('created_at', $tanggal)->get();

        $pdf = PDF::loadView('exportpdf', compact('absensis'));

        return $pdf->download('absensi-' . $tanggal . '.pdf');
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




    public function create()
    {
        return view('absensi.create');
    }

    public function store(Request $request)
    {
        // Validasi data input jika diperlukan
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
            'kehadiran' => 'required',
            'jam_masuk' => 'required',
            'jam_keluar' => 'required',
            'keterangan' => 'required',


            // tambahkan validasi sesuai kebutuhan lainnya
        ]);

        Absensi::create($validatedData);

        return redirect()->route('absensi.index')->with('success', 'Data Absensi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $absensi = Absensi::findOrFail($id);
        return view('absensi.show', compact('absensi'));
    }

    public function edit($id)
    {
        $absensi = Absensi::findOrFail($id);
        return view('absensi.edit', compact('absensi'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data input jika diperlukan
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
            'kehadiran' => 'required',
            'jam_masuk' => 'required',
            'jam_keluar' => 'required',
            'keterangan' => 'required',
        ]);

        $absensi = Absensi::findOrFail($id);
        $absensi->update($validatedData);

        return redirect()->route('absensi.index')->with('success', 'Data Absensi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->delete();

        return redirect()->route('absensi.index')->with('success', 'Data Absensi berhasil dihapus.');
    }
}
