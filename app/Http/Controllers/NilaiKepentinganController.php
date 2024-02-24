<?php

namespace App\Http\Controllers;

use App\Models\NilaiKepentingan;
use Illuminate\Http\Request;


class NilaiKepentinganController extends Controller
{
    public function index()
    {
        $data = NilaiKepentingan::all();
        return view('admin.pages.data-nilai-kepentingan', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required'
        ], [
            'name.required' => 'Nama Kriteria harus diisi!',
            'bobot.required' => 'Bobot Kriteria harus diisi!'
        ]);

        NilaiKepentingan::create([
            'name' => $request->name,
            'bobot' => $request->bobot
        ]);

        return redirect('/data-nilai-kepentingan')->with('store', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required'
        ], [
            'name.required' => 'Nama Kriteria harus diisi!',
            'bobot.required' => 'Bobot Kriteria harus diisi!'
        ]);

        $data = NilaiKepentingan::find($id);
        $data->name = $request->name;
        $data->bobot = $request->bobot;
        $data->update();

        return redirect('/data-nilai-kepentingan')->with('update', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        $data = NilaiKepentingan::find($id);
        $data->delete();

        return redirect('/data-nilai-kepentingan')->with('destroy', 'Data berhasil dihapus!');
    }
}
