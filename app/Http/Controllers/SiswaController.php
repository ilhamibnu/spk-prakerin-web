<?php

namespace App\Http\Controllers;

use App\Models\Cpe;
use App\Models\Kjt;
use App\Models\Ftth;
use App\Models\Mitra;
use App\Models\Siswa;
use App\Models\Absensi;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Models\NilaiSemester;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    public function index()
    {
        $absensi = Absensi::all();
        $cpe = Cpe::all();
        $ftth = Ftth::all();
        $kjt = Kjt::all();
        $nilaisemester = NilaiSemester::all();
        $siswa = Siswa::all();
        $mitra = Mitra::all();

        // penghitungan

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
        $nilaikjtterendah = DB::table('tb_mitra')
            ->join('tb_kjt', 'tb_mitra.id_kjt', '=', 'tb_kjt.id')
            ->min('tb_kjt.bobot');

        // mencari nilai terendah pada tabel mitra kolom nilai semester
        $nilaisemesterterendah = DB::table('tb_mitra')
            ->join('tb_nilai_semester', 'tb_mitra.id_nilai_semester', '=', 'tb_nilai_semester.id')
            ->min('tb_nilai_semester.bobot');


        return view('admin.pages.data-siswa', [
            'absensi' => $absensi,
            'cpe' => $cpe,
            'ftth' => $ftth,
            'kjt' => $kjt,
            'nilaisemester' => $nilaisemester,
            'siswa' => $siswa,
            'mitra' => $mitra,
            'nilaiftthtertinggi' => $nilaiftthtertinggi,
            'nilaicpetertinggi' => $nilaicpetertinggi,
            'nilaiabsensitertinggi' => $nilaiabsensitertinggi,
            'nilaikjttertinggi' => $nilaikjttertinggi,
            'nilaisemestertertinggi' => $nilaisemestertertinggi,
            'nilaiftthterendah' => $nilaiftthterendah,
            'nilaicpeterendah' => $nilaicpeterendah,
            'nilaiabsensiterendah' => $nilaiabsensiterendah,
            'nilaikjtterendah' => $nilaikjtterendah,
            'nilaisemesterterendah' => $nilaisemesterterendah,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nisn' => 'required|unique:tb_siswa,nisn',
            'name' => 'required',
            'id_absensi' => 'required',
            'id_cpe' => 'required',
            'id_ftth' => 'required',
            'id_kjt' => 'required',
            'id_nilai_semester' => 'required',
        ], [
            'nisn.required' => 'NISN tidak boleh kosong',
            'nisn.unique' => 'NISN sudah terdaftar',
            'name.required' => 'Nama tidak boleh kosong',
            'id_absensi.required' => 'Absensi tidak boleh kosong',
            'id_cpe.required' => 'CPE tidak boleh kosong',
            'id_ftth.required' => 'FTTH tidak boleh kosong',
            'id_kjt.required' => 'KJT tidak boleh kosong',
            'id_nilai_semester.required' => 'Nilai Semester tidak boleh kosong',
        ]);

        Siswa::create([
            'nisn' => $request->nisn,
            'name' => $request->name,
            'id_absensi' => $request->id_absensi,
            'id_cpe' => $request->id_cpe,
            'id_ftth' => $request->id_ftth,
            'id_kjt' => $request->id_kjt,
            'id_nilai_semester' => $request->id_nilai_semester,
        ]);

        return redirect('/data-siswa')->with('store', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nisn' => 'required|unique:tb_siswa,nisn,' . $id,
            'name' => 'required',
            'id_absensi' => 'required',
            'id_cpe' => 'required',
            'id_ftth' => 'required',
            'id_kjt' => 'required',
            'id_nilai_semester' => 'required',
        ], [
            'nisn.required' => 'NISN tidak boleh kosong',
            'nisn.unique' => 'NISN sudah terdaftar',
            'name.required' => 'Nama tidak boleh kosong',
            'id_absensi.required' => 'Absensi tidak boleh kosong',
            'id_cpe.required' => 'CPE tidak boleh kosong',
            'id_ftth.required' => 'FTTH tidak boleh kosong',
            'id_kjt.required' => 'KJT tidak boleh kosong',
            'id_nilai_semester.required' => 'Nilai Semester tidak boleh kosong',
        ]);

        Siswa::where('id', $id)->update([
            'nisn' => $request->nisn,
            'name' => $request->name,
            'id_absensi' => $request->id_absensi,
            'id_cpe' => $request->id_cpe,
            'id_ftth' => $request->id_ftth,
            'id_kjt' => $request->id_kjt,
            'id_nilai_semester' => $request->id_nilai_semester,
        ]);

        return redirect('/data-siswa')->with('update', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Siswa::destroy($id);
        return redirect('/data-siswa')->with('destroy', 'Data berhasil dihapus');
    }
}
