<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $mitra = Mitra::all();
        return view('landing.pages.index', [
            'mitra' => $mitra
        ]);
    }
}
