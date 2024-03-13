<?php

namespace App\Http\Controllers;

use App\Models\DetailSiswa;
use App\Models\DetailMitra;
use App\Models\Mitra;
use App\Models\Siswa;
use App\Models\Kriteria;
use Illuminate\Http\Request;


class PenghitunganController extends Controller
{
    public function index($id)
    {
        $detail_siswa = DetailSiswa::where('id_siswa', $id)->get();
        $detail_mitra = DetailMitra::all();
        $mitra = Mitra::all();
        $kriteria = Kriteria::all();
        $siswa = Siswa::find($id);

        return view('admin.pages.data-penghitungan', [
            'detail_siswa' => $detail_siswa,
            'detail_mitra' => $detail_mitra,
            'mitra' => $mitra,
            'kriteria' => $kriteria,
            'siswa' => $siswa,
        ]);
    }
}
