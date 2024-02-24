<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;


class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::all();
        return view('admin.pages.data-kriteria', [
            'kriteria' => $kriteria
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required',
            'jenis' => 'required'
        ], [
            'name.required' => 'Nama Kriteria harus diisi!',
            'bobot.required' => 'Bobot harus diisi!',
            'jenis.required' => 'Jenis Kriteria harus diisi!'
        ]);

        Kriteria::create([
            'name' => $request->name,
            'bobot' => $request->bobot,
            'jenis' => $request->jenis
        ]);

        return redirect('/data-kriteria')->with('store', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required',
            'jenis' => 'required'
        ], [
            'name.required' => 'Nama Kriteria harus diisi!',
            'bobot.required' => 'Bobot harus diisi!',
            'jenis.required' => 'Jenis Kriteria harus diisi!'
        ]);

        Kriteria::where('id', $id)->update([
            'name' => $request->name,
            'bobot' => $request->bobot,
            'jenis' => $request->jenis
        ]);

        return redirect('/data-kriteria')->with('update', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        Kriteria::destroy($id);
        return redirect('/data-kriteria')->with('destroy', 'Data berhasil dihapus!');
    }
}
