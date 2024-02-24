<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Cpe;
use App\Models\Ftth;
use App\Models\Kjt;
use App\Models\Mitra;
use App\Models\NilaiSemester;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        $absensi = Absensi::all();
        $cpe = Cpe::all();
        $ftth = Ftth::all();
        $kjt = Kjt::all();
        $nilaisemester = NilaiSemester::all();
        $mitra = Mitra::all();

        return view('admin.pages.data-mitra', [
            'absensi' => $absensi,
            'cpe' => $cpe,
            'ftth' => $ftth,
            'kjt' => $kjt,
            'nilaisemester' => $nilaisemester,
            'mitra' => $mitra
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'id_absensi' => 'required',
            'id_cpe' => 'required',
            'id_ftth' => 'required',
            'id_kjt' => 'required',
            'id_nilai_semester' => 'required',
        ], [
            'name.required' => 'Nama Mitra tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'id_absensi.required' => 'Absensi tidak boleh kosong',
            'id_cpe.required' => 'CPE tidak boleh kosong',
            'id_ftth.required' => 'FTTH tidak boleh kosong',
            'id_kjt.required' => 'KJT tidak boleh kosong',
            'id_nilai_semester.required' => 'Nilai Semester tidak boleh kosong',
        ]);

        Mitra::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'id_absensi' => $request->id_absensi,
            'id_cpe' => $request->id_cpe,
            'id_ftth' => $request->id_ftth,
            'id_kjt' => $request->id_kjt,
            'id_nilai_semester' => $request->id_nilai_semester,
        ]);

        return redirect()->back()->with('store', 'Data Mitra berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $mitra = Mitra::find($id);

        $this->validate($request, [
            'name' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'id_absensi' => 'required',
            'id_cpe' => 'required',
            'id_ftth' => 'required',
            'id_kjt' => 'required',
            'id_nilai_semester' => 'required',
        ], [
            'name.required' => 'Nama Mitra tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'id_absensi.required' => 'Absensi tidak boleh kosong',
            'id_cpe.required' => 'CPE tidak boleh kosong',
            'id_ftth.required' => 'FTTH tidak boleh kosong',
            'id_kjt.required' => 'KJT tidak boleh kosong',
            'id_nilai_semester.required' => 'Nilai Semester tidak boleh kosong',
        ]);

        $mitra->update([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'id_absensi' => $request->id_absensi,
            'id_cpe' => $request->id_cpe,
            'id_ftth' => $request->id_ftth,
            'id_kjt' => $request->id_kjt,
            'id_nilai_semester' => $request->id_nilai_semester,
        ]);

        return redirect()->back()->with('update', 'Data Mitra berhasil diubah');
    }

    public function destroy($id)
    {
        Mitra::destroy($id);

        return redirect()->back()->with('destroy', 'Data Mitra berhasil dihapus');
    }
}
