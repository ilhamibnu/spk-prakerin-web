<?php

namespace App\Http\Controllers;


use App\Models\DetailMitra;
use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        $mitra = Mitra::all();

        return view('admin.pages.data-mitra', [

            'mitra' => $mitra
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',

        ], [
            'name.required' => 'Nama Mitra tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',

        ]);

        Mitra::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,

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

        ], [
            'name.required' => 'Nama Mitra tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',

        ]);

        $mitra->update([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,

        ]);

        return redirect()->back()->with('update', 'Data Mitra berhasil diubah');
    }

    public function destroy($id)
    {
        $detail_mitra = DetailMitra::where('id_mitra', $id)->get();
        foreach ($detail_mitra as $dm) {
            $dm->delete();
        }
        Mitra::destroy($id);

        return redirect()->back()->with('destroy', 'Data Mitra berhasil dihapus');
    }
}
