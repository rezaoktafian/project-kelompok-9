<?php

namespace App\Exports;

use App\Models\Absensi;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Carbon\Carbon;

class AbsensiExport implements FromCollection, WithHeadings
{
    protected $absensis;

    public function __construct($absensis)
    {
        $this->absensis = $absensis;
    }

    public function collection()
    {
        $data = [];

        foreach ($this->absensis as $absensi) {
            $data[] = [
                'NISN' => $absensi->nisn,
                'Nama Siswa' => $absensi->nama_siswa,
                'Kehadiran' => $absensi->kehadiran,
                'Jam Masuk' => $absensi->jam_masuk,
                'Jam Keluar' => $absensi->jam_keluar,
                'Keterangan' => $absensi->keterangan,
            ];
        }

        return new Collection($data);
    }

    public function headings(): array
    {
        return [
            'NISN',
            'Nama Siswa',
            'Kehadiran',
            'Jam Masuk',
            'Jam Keluar',
            'Keterangan',
        ];
    }
}
