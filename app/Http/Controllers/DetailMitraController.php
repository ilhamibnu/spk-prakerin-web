<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\DetailMitra;
use App\Models\NilaiKepentingan;
use Illuminate\Http\Request;


class DetailMitraController extends Controller
{
    public function index($id)
    {

        $kriteria = Kriteria::All();
        $nilai_kepentingan = NilaiKepentingan::All();

        $kriteria2 = Kriteria::All();
        $nilai_kepentingan2 = NilaiKepentingan::All();

        $detail_mitra = DetailMitra::where('id_mitra', $id)->get();
        return view('admin.pages.detail-mitra', [
            'id_mitra' => $id,
            'detail_mitra' => $detail_mitra,
            'kriteria' => $kriteria,
            'nilai_kepentingan' => $nilai_kepentingan,
            'kriteria2' => $kriteria2,
            'nilai_kepentingan2' => $nilai_kepentingan2,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_kriteria' => 'required',
            'id_mitra' => 'required',
            'id_nilai_kepentingan' => 'required',
            'bobot' => 'required',
        ], [
            'id_kriteria.required' => 'Kriteria tidak boleh kosong',
            'id_mitra.required' => 'Mitra tidak boleh kosong',
            'id_nilai_kepentingan.required' => 'Nilai Kepentingan tidak boleh kosong',
            'bobot.required' => 'Bobot tidak boleh kosong',
        ]);

        DetailMitra::create([
            'id_kriteria' => $request->id_kriteria,
            'id_mitra' => $request->id_mitra,
            'id_nilai_kepentingan' => $request->id_nilai_kepentingan,
            'bobot' => $request->bobot,
        ]);

        return redirect()->back()->with('store', 'Data Detail Mitra berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $detail_mitra = DetailMitra::find($id);

        $this->validate($request, [
            'id_kriteria' => 'required',
            'id_mitra' => 'required',
            'id_nilai_kepentingan' => 'required',
            'bobot' => 'required',
        ], [
            'id_kriteria.required' => 'Kriteria tidak boleh kosong',
            'id_mitra.required' => 'Mitra tidak boleh kosong',
            'id_nilai_kepentingan.required' => 'Nilai Kepentingan tidak boleh kosong',
            'bobot.required' => 'Bobot tidak boleh kosong',
        ]);

        $detail_mitra->update([
            'id_kriteria' => $request->id_kriteria,
            'id_mitra' => $request->id_mitra,
            'id_nilai_kepentingan' => $request->id_nilai_kepentingan,
            'bobot' => $request->bobot,
        ]);

        return redirect()->back()->with('update', 'Data Detail Mitra berhasil diubah');
    }

    public function destroy($id)
    {
        $detail_mitra = DetailMitra::find($id);
        $detail_mitra->delete();

        return redirect()->back()->with('destroy', 'Data Detail Mitra berhasil dihapus');
    }
}
