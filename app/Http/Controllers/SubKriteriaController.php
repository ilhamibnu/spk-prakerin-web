<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ftth;
use App\Models\Cpe;
use App\Models\Absensi;
use App\Models\Kjt;
use App\Models\NilaiSemester;


class SubKriteriaController extends Controller
{
    // FTTH
    public function indexftth()
    {
        $data = Ftth::all();
        return view('admin.pages.data-ftth', [
            'data' => $data,
        ]);
    }

    public function storeftth(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required',
        ], [
            'name.required' => 'Nama Kriteria harus diisi!',
            'bobot.required' => 'Bobot Kriteria harus diisi!'
        ]);

        Ftth::create([
            'name' => $request->name,
            'bobot' => $request->bobot
        ]);

        return redirect('/data-ftth')->with('store', 'Data berhasil ditambahkan!');
    }

    public function updateftth(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required'
        ], [
            'name.required' => 'Nama Kriteria harus diisi!',
            'bobot.required' => 'Bobot Kriteria harus diisi!'
        ]);

        $data = Ftth::find($id);
        $data->name = $request->name;
        $data->bobot = $request->bobot;
        $data->update();

        return redirect('/data-ftth')->with('update', 'Data berhasil diupdate!');
    }

    public function destroyftth($id)
    {
        $data = Ftth::find($id);
        $data->delete();

        return redirect('/data-ftth')->with('destroy', 'Data berhasil dihapus!');
    }

    // CPE
    public function indexcpe()
    {
        $data = Cpe::all();
        return view('admin.pages.data-cpe', [
            'data' => $data,
        ]);
    }

    public function storecpe(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required',
        ], [
            'name.required' => 'Nama Kriteria harus diisi!',
            'bobot.required' => 'Bobot Kriteria harus diisi!'
        ]);

        Cpe::create([
            'name' => $request->name,
            'bobot' => $request->bobot
        ]);

        return redirect('/data-cpe')->with('store', 'Data berhasil ditambahkan!');
    }

    public function updatecpe(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required'
        ], [
            'name.required' => 'Nama Kriteria harus diisi!',
            'bobot.required' => 'Bobot Kriteria harus diisi!'
        ]);

        $data = Cpe::find($id);
        $data->name = $request->name;
        $data->bobot = $request->bobot;
        $data->update();

        return redirect('/data-cpe')->with('update', 'Data berhasil diupdate!');
    }

    public function destroycpe($id)
    {
        $data = Cpe::find($id);
        $data->delete();

        return redirect('/data-cpe')->with('destroy', 'Data berhasil dihapus!');
    }

    // Absensi
    public function indexabsensi()
    {
        $data = Absensi::all();
        return view('admin.pages.data-absensi', [
            'data' => $data,
        ]);
    }

    public function storeabsensi(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required',
        ], [
            'name.required' => 'Nama Kriteria harus diisi!',
            'bobot.required' => 'Bobot Kriteria harus diisi!'
        ]);

        Absensi::create([
            'name' => $request->name,
            'bobot' => $request->bobot
        ]);

        return redirect('/data-absensi')->with('store', 'Data berhasil ditambahkan!');
    }

    public function updateabsensi(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required'
        ], [
            'name.required' => 'Nama Kriteria harus diisi!',
            'bobot.required' => 'Bobot Kriteria harus diisi!'
        ]);

        $data = Absensi::find($id);
        $data->name = $request->name;
        $data->bobot = $request->bobot;
        $data->update();

        return redirect('/data-absensi')->with('update', 'Data berhasil diupdate!');
    }

    public function destroyabsensi($id)
    {
        $data = Absensi::find($id);
        $data->delete();

        return redirect('/data-absensi')->with('destroy', 'Data berhasil dihapus!');
    }

    // KJT
    public function indexkjt()
    {
        $data = Kjt::all();
        return view('admin.pages.data-kjt', [
            'data' => $data,
        ]);
    }

    public function storekjt(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required',
        ], [
            'name.required' => 'Nama Kriteria harus diisi!',
            'bobot.required' => 'Bobot Kriteria harus diisi!'
        ]);

        Kjt::create([
            'name' => $request->name,
            'bobot' => $request->bobot
        ]);

        return redirect('/data-kjt')->with('store', 'Data berhasil ditambahkan!');
    }

    public function updatekjt(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required'
        ], [
            'name.required' => 'Nama Kriteria harus diisi!',
            'bobot.required' => 'Bobot Kriteria harus diisi!'
        ]);

        $data = Kjt::find($id);
        $data->name = $request->name;
        $data->bobot = $request->bobot;
        $data->update();

        return redirect('/data-kjt')->with('update', 'Data berhasil diupdate!');
    }

    public function destroykjt($id)
    {
        $data = Kjt::find($id);
        $data->delete();

        return redirect('/data-kjt')->with('destroy', 'Data berhasil dihapus!');
    }

    // Nilai Semester
    public function indexnilaisemester()
    {
        $data = NilaiSemester::all();
        return view('admin.pages.data-nilai-semester', [
            'data' => $data,

        ]);
    }

    public function storenilaisemester(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required',
        ], [
            'name.required' => 'Nama Kriteria harus diisi!',
            'bobot.required' => 'Bobot Kriteria harus diisi!'
        ]);

        NilaiSemester::create([
            'name' => $request->name,
            'bobot' => $request->bobot
        ]);

        return redirect('/data-nilai-semester')->with('store', 'Data berhasil ditambahkan!');
    }

    public function updatenilaisemester(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required'
        ], [
            'name.required' => 'Nama Kriteria harus diisi!',
            'bobot.required' => 'Bobot Kriteria harus diisi!'
        ]);

        $data = NilaiSemester::find($id);
        $data->name = $request->name;
        $data->bobot = $request->bobot;
        $data->update();

        return redirect('/data-nilai-semester')->with('update', 'Data berhasil diupdate!');
    }

    public function destroynilaisemester($id)
    {
        $data = NilaiSemester::find($id);
        $data->delete();

        return redirect('/data-nilai-semester')->with('destroy', 'Data berhasil dihapus!');
    }
}
