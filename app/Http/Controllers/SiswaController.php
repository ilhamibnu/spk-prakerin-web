<?php

namespace App\Http\Controllers;

use App\Models\DetailSiswa;
use App\Models\Mitra;
use App\Models\Siswa;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    public function index()
    {

        $mitra = Mitra::all();
        $siswa = Siswa::all();

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
}
