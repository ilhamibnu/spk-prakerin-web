<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Siswa;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenghitunganController extends Controller
{
    public function index()
    {
        // mencari nilai tertinggi pada tabel mitra kolom ftth
        $nilaiftthtertinggi = DB::table('tb_mitra')
            ->join('tb_ftth', 'tb_mitra.id_ftth', '=', 'tb_ftth.id')
            ->max('tb_ftth.bobot');

        // mencari nilai tertinggi pada tabel mitra kolom cpe
        $nilaicpetertinggi = DB::table('tb_mitra')
            ->join('tb_cpe', 'tb_mitra.id_cpe', '=', 'tb_cpe.id')
            ->max('tb_cpe.bobot');

        // mencari nilai tertinggi pada tabel mitra kolom absensi
        $nilaiabsensitertinggi = DB::table('tb_mitra')
            ->join('tb_absensi', 'tb_mitra.id_absensi', '=', 'tb_absensi.id')
            ->max('tb_absensi.bobot');

        // mencari nilai tertinggi pada tabel mitra kolom kjt
        $nilaikjttertinggi = DB::table('tb_mitra')
            ->join('tb_kjt', 'tb_mitra.id_kjt', '=', 'tb_kjt.id')
            ->max('tb_kjt.bobot');

        // mencari nilai tertinggi pada tabel mitra kolom nilai semester
        $nilaisemestertertinggi = DB::table('tb_mitra')
            ->join('tb_nilai_semester', 'tb_mitra.id_nilai_semester', '=', 'tb_nilai_semester.id')
            ->max('tb_nilai_semester.bobot');



        // mencari nilai terendah pada tabel mitra kolom ftth
        $nilaiftthterendah = DB::table('tb_mitra')
            ->join('tb_ftth', 'tb_mitra.id_ftth', '=', 'tb_ftth.id')
            ->min('tb_ftth.bobot');

        // mencari nilai terendah pada tabel mitra kolom cpe
        $nilaicpeterendah = DB::table('tb_mitra')
            ->join('tb_cpe', 'tb_mitra.id_cpe', '=', 'tb_cpe.id')
            ->min('tb_cpe.bobot');

        // mencari nilai terendah pada tabel mitra kolom absensi
        $nilaiabsensiterendah = DB::table('tb_mitra')
            ->join('tb_absensi', 'tb_mitra.id_absensi', '=', 'tb_absensi.id')
            ->min('tb_absensi.bobot');

        // mencari nilai terendah pada tabel mitra kolom kjt
        $nilaikjterendah = DB::table('tb_mitra')
            ->join('tb_kjt', 'tb_mitra.id_kjt', '=', 'tb_kjt.id')
            ->min('tb_kjt.bobot');

        // mencari nilai terendah pada tabel mitra kolom nilai semester
        $nilaisemesterterendah = DB::table('tb_mitra')
            ->join('tb_nilai_semester', 'tb_mitra.id_nilai_semester', '=', 'tb_nilai_semester.id')
            ->min('tb_nilai_semester.bobot');


        $mitra = Mitra::all();
        $kriteria = Kriteria::all();
        return view('admin.pages.penghitungan', [
            'kriteria' => $kriteria,
            'mitra' => $mitra,
            'nilaiftthtertinggi' => $nilaiftthtertinggi,
            'nilaicpetertinggi' => $nilaicpetertinggi,
            'nilaiabsensitertinggi' => $nilaiabsensitertinggi,
            'nilaikjttertinggi' => $nilaikjttertinggi,
            'nilaisemestertertinggi' => $nilaisemestertertinggi,
            'nilaiftthterendah' => $nilaiftthterendah,
            'nilaicpeterendah' => $nilaicpeterendah,
            'nilaiabsensiterendah' => $nilaiabsensiterendah,
            'nilaikjterendah' => $nilaikjterendah,
            'nilaisemesterterendah' => $nilaisemesterterendah,

        ]);
    }
}
