<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Siswa;
use App\Models\Kriteria;
use App\Models\DetailMitra;
use App\Models\DetailSiswa;
use App\Imports\SiswaImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class SiswaController extends Controller
{
    public function index()
    {

        $mitra = Mitra::all();
        $siswa = Siswa::all();
        foreach ($siswa as $s) {

            $detail_siswa = DetailSiswa::where('id_siswa', $s->id)->get();

            if ($detail_siswa->count() == 20) {
                echo "
                <script>
                    function rekomendasi{$s->id}() {
                        var iframe = document.getElementById('hidden-iframe{$s->id}');
                        if (iframe === null) {
                            iframe = document.createElement('iframe');
                            iframe.id = 'hidden-iframe{$s->id}';
                            iframe.style.display = 'none';
                            document.body.appendChild(iframe);
                        }
                        iframe.src = '/data-penghitungan/{$s->id}';
                    }
                    window.onload = function() {
                        rekomendasi{$s->id}();
                    };
                </script>
            ";
            }else{

            }
        }

        return view('admin.pages.data-siswa', [

            'siswa' => $siswa,
            'mitra' => $mitra,

        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nisn' => 'required|unique:tb_siswa,nisn',
            'name' => 'required',

        ], [
            'nisn.required' => 'NISN tidak boleh kosong',
            'nisn.unique' => 'NISN sudah terdaftar',
            'name.required' => 'Nama tidak boleh kosong',

        ]);

        Siswa::create([
            'nisn' => $request->nisn,
            'name' => $request->name,

        ]);

        return redirect('/data-siswa')->with('store', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nisn' => 'required|unique:tb_siswa,nisn,' . $id,
            'name' => 'required',

        ], [
            'nisn.required' => 'NISN tidak boleh kosong',
            'nisn.unique' => 'NISN sudah terdaftar',
            'name.required' => 'Nama tidak boleh kosong',

        ]);

        Siswa::where('id', $id)->update([
            'nisn' => $request->nisn,
            'name' => $request->name,

        ]);

        return redirect('/data-siswa')->with('update', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $detail_siswa = DetailSiswa::where('id_siswa', $id)->get();
        foreach ($detail_siswa as $ds) {
            $ds->delete();
        }
        Siswa::destroy($id);
        return redirect('/data-siswa')->with('destroy', 'Data berhasil dihapus');
    }

    public function import(Request $request)
    {
        set_time_limit(500);
        $request->validate([
            'file' => 'required'
        ], [
            'file.required' => 'File tidak boleh kosong',
        ]);

        $file = $request->file('file');
        $namafile = rand() . time() . '.' . $file->getClientOriginalExtension();
        $file->move('excel/siswa', $namafile);

        Excel::import(new SiswaImport, public_path('/excel/siswa/' . $namafile));

        return redirect()->back()->with('store', 'Data berhasil diimport');
    }

    public function rekomendasiSiswa(Request $request)
    {
        $id_siswa = $request->id_siswa;
        $nama_mitra = $request->nama_mitra;

        $siswa = Siswa::find($id_siswa);
        if ($siswa) {
            $siswa->rekomendasi = $nama_mitra;
            $siswa->save();
            return response()->json(['success' => true, 'message' => 'Rekomendasi berhasil disimpan.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Siswa tidak ditemukan.'], 404);
        }
    }
}
