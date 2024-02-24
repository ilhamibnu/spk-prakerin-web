<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Cpe;
use App\Models\Ftth;
use App\Models\Kjt;
use App\Models\NilaiSemester;
use App\Models\Siswa;
use Illuminate\Http\Request;


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

        return view('admin.pages.data-siswa', [
            'absensi' => $absensi,
            'cpe' => $cpe,
            'ftth' => $ftth,
            'kjt' => $kjt,
            'nilaisemester' => $nilaisemester,
            'siswa' => $siswa
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
