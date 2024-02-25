<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Mitra;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;


class DashboardController extends Controller
{
    public function index()
    {
        $siswa = Siswa::count();
        $mitra = Mitra::count();
        $user = User::where('id_role', '2')->count();
        $kriteria = Kriteria::count();
        return view('admin.pages.dashboard', [
            'siswa' => $siswa,
            'mitra' => $mitra,
            'user' => $user,
            'kriteria' => $kriteria
        ]);
    }
}
