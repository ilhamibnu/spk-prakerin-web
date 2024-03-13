<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\DetailSiswa;
use App\Models\NilaiKepentingan;
use Illuminate\Http\Request;

class DetailSiswaController extends Controller
{
    public function index($id)
    {
        $kriteria = Kriteria::All();
        $kriteria2 = Kriteria::All();
        $nilai_kepentingan = NilaiKepentingan::All();
        $nilai_kepentingan2 = NilaiKepentingan::All();
        $detail_siswa = DetailSiswa::where('id_siswa', $id)->get();
        return view('admin.pages.detail-siswa', [
            'id_siswa' => $id,
            'detail_siswa' => $detail_siswa,
            'kriteria' => $kriteria,
            'kriteria2' => $kriteria2,
            'nilai_kepentingan' => $nilai_kepentingan,
            'nilai_kepentingan2' => $nilai_kepentingan2,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_kriteria' => 'required|unique:tb_detail_siswa',
            'id_nilai_kepentingan' => 'required',
        ], [
            'id_kriteria.required' => 'Kriteria tidak boleh kosong',
            'id_kriteria.unique' => 'Kriteria sudah ada',
            'id_siswa.required' => 'Siswa tidak boleh kosong',
            'id_nilai_kepentingan.required' => 'Nilai Kepentingan tidak boleh kosong',

        ]);

        DetailSiswa::create([
            'id_kriteria' => $request->id_kriteria,
            'id_siswa' => $request->id_siswa,
            'id_nilai_kepentingan' => $request->id_nilai_kepentingan,
        ]);

        return redirect()->back()->with('store', 'Data Detail Siswa berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $detail_siswa = DetailSiswa::find($id);

        $this->validate($request, [
            'id_kriteria' => 'required|unique:tb_detail_siswa,id_kriteria,' . $detail_siswa->id_kriteria . ',id_kriteria',
            'id_nilai_kepentingan' => 'required',
        ], [
            'id_kriteria.required' => 'Kriteria tidak boleh kosong',
            'id_kriteria.unique' => 'Kriteria sudah ada',
            'id_siswa.required' => 'Siswa tidak boleh kosong',
            'id_nilai_kepentingan.required' => 'Nilai Kepentingan tidak boleh kosong',

        ]);


        $detail_siswa->update([
            'id_kriteria' => $request->id_kriteria,
            'id_siswa' => $request->id_siswa,
            'id_nilai_kepentingan' => $request->id_nilai_kepentingan,
        ]);

        return redirect()->back()->with('update', 'Data Detail Siswa berhasil diubah');
    }

    public function destroy($id)
    {
        $detail_siswa = DetailSiswa::find($id);
        $detail_siswa->delete();

        return redirect()->back()->with('destroy', 'Data Detail Siswa berhasil dihapus');
    }
}
