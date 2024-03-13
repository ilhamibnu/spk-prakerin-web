<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NilaiKepentinganController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DetailSiswaController;
use App\Http\Controllers\DetailMitraController;
use App\Http\Controllers\PenghitunganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

#Landing
Route::get('/', [LandingController::class, 'index']);

#Auth
Route::get('/login', [AuthController::class, 'indexlogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('IsLogin');
Route::post('/update-profil', [AuthController::class, 'updateprofil'])->middleware('IsLogin');

#Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('IsLogin');

#User
Route::get('/data-user', [UserController::class, 'index'])->middleware('IsLogin', 'IsAdmin');
Route::post('/data-user', [UserController::class, 'store'])->middleware('IsLogin', 'IsAdmin');
Route::put('/data-user/{id}', [UserController::class, 'update'])->middleware('IsLogin', 'IsAdmin');
Route::delete('/data-user/{id}', [UserController::class, 'destroy'])->middleware('IsLogin', 'IsAdmin');

#Kriteria
Route::get('/data-kriteria', [KriteriaController::class, 'index'])->middleware('IsLogin', 'IsAdmin');
Route::post('/data-kriteria', [KriteriaController::class, 'store'])->middleware('IsLogin', 'IsAdmin');
Route::put('/data-kriteria/{id}', [KriteriaController::class, 'update'])->middleware('IsLogin', 'IsAdmin');
Route::delete('/data-kriteria/{id}', [KriteriaController::class, 'destroy'])->middleware('IsLogin', 'IsAdmin');

#Nilai Kepentingan
Route::get('/data-nilai-kepentingan', [NilaiKepentinganController::class, 'index'])->middleware('IsLogin', 'IsAdmin');
Route::post('/data-nilai-kepentingan', [NilaiKepentinganController::class, 'store'])->middleware('IsLogin', 'IsAdmin');
Route::put('/data-nilai-kepentingan/{id}', [NilaiKepentinganController::class, 'update'])->middleware('IsLogin', 'IsAdmin');
Route::delete('/data-nilai-kepentingan/{id}', [NilaiKepentinganController::class, 'destroy'])->middleware('IsLogin', 'IsAdmin');

#Siswa
Route::get('/data-siswa', [SiswaController::class, 'index'])->middleware('IsLogin');
Route::post('/data-siswa', [SiswaController::class, 'store'])->middleware('IsLogin');
Route::post('/data-siswa-import', [SiswaController::class, 'import'])->middleware('IsLogin');
Route::put('/data-siswa/{id}', [SiswaController::class, 'update'])->middleware('IsLogin');
Route::delete('/data-siswa/{id}', [SiswaController::class, 'destroy'])->middleware('IsLogin');


#Mitra
Route::get('/data-mitra', [MitraController::class, 'index'])->middleware('IsLogin');
Route::post('/data-mitra', [MitraController::class, 'store'])->middleware('IsLogin');
Route::put('/data-mitra/{id}', [MitraController::class, 'update'])->middleware('IsLogin');
Route::delete('/data-mitra/{id}', [MitraController::class, 'destroy'])->middleware('IsLogin');


#Detail Siswa
Route::get('/detail-siswa/{id}', [DetailSiswaController::class, 'index'])->middleware('IsLogin');
Route::post('/detail-siswa', [DetailSiswaController::class, 'store'])->middleware('IsLogin');
Route::put('/detail-siswa/{id}', [DetailSiswaController::class, 'update'])->middleware('IsLogin');
Route::delete('/detail-siswa/{id}', [DetailSiswaController::class, 'destroy'])->middleware('IsLogin');

#Detail Mitra
Route::get('/detail-mitra/{id}', [DetailMitraController::class, 'index'])->middleware('IsLogin');
Route::post('/detail-mitra', [DetailMitraController::class, 'store'])->middleware('IsLogin');
Route::put('/detail-mitra/{id}', [DetailMitraController::class, 'update'])->middleware('IsLogin');
Route::delete('/detail-mitra/{id}', [DetailMitraController::class, 'destroy'])->middleware('IsLogin');

#Penghitungan
Route::get('/data-penghitungan/{id}', [PenghitunganController::class, 'index'])->middleware('IsLogin');
