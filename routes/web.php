<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NilaiKepentinganController;
use App\Http\Controllers\SubKriteriaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\PenghitunganController;
use App\Http\Controllers\LandingController;

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

#Sub Kriteria ftth
Route::get('/data-ftth', [SubKriteriaController::class, 'indexftth'])->middleware('IsLogin', 'IsAdmin');
Route::post('/data-ftth', [SubKriteriaController::class, 'storeftth'])->middleware('IsLogin', 'IsAdmin');
Route::put('/data-ftth/{id}', [SubKriteriaController::class, 'updateftth'])->middleware('IsLogin', 'IsAdmin');
Route::delete('/data-ftth/{id}', [SubKriteriaController::class, 'destroyftth'])->middleware('IsLogin', 'IsAdmin');

#Sub Kriteria cpe
Route::get('/data-cpe', [SubKriteriaController::class, 'indexcpe'])->middleware('IsLogin', 'IsAdmin');
Route::post('/data-cpe', [SubKriteriaController::class, 'storecpe'])->middleware('IsLogin', 'IsAdmin');
Route::put('/data-cpe/{id}', [SubKriteriaController::class, 'updatecpe'])->middleware('IsLogin', 'IsAdmin');
Route::delete('/data-cpe/{id}', [SubKriteriaController::class, 'destroycpe'])->middleware('IsLogin', 'IsAdmin');

#Sub Kriteria absensi
Route::get('/data-absensi', [SubKriteriaController::class, 'indexabsensi'])->middleware('IsLogin', 'IsAdmin');
Route::post('/data-absensi', [SubKriteriaController::class, 'storeabsensi'])->middleware('IsLogin', 'IsAdmin');
Route::put('/data-absensi/{id}', [SubKriteriaController::class, 'updateabsensi'])->middleware('IsLogin', 'IsAdmin');
Route::delete('/data-absensi/{id}', [SubKriteriaController::class, 'destroyabsensi'])->middleware('IsLogin', 'IsAdmin');

#Sub Kriteria kjt
Route::get('/data-kjt', [SubKriteriaController::class, 'indexkjt'])->middleware('IsLogin', 'IsAdmin');
Route::post('/data-kjt', [SubKriteriaController::class, 'storekjt'])->middleware('IsLogin', 'IsAdmin');
Route::put('/data-kjt/{id}', [SubKriteriaController::class, 'updatekjt'])->middleware('IsLogin', 'IsAdmin');
Route::delete('/data-kjt/{id}', [SubKriteriaController::class, 'destroykjt'])->middleware('IsLogin', 'IsAdmin');

#Sub Kriteria nilai semester
Route::get('/data-nilai-semester', [SubKriteriaController::class, 'indexnilaisemester'])->middleware('IsLogin', 'IsAdmin');
Route::post('/data-nilai-semester', [SubKriteriaController::class, 'storenilaisemester'])->middleware('IsLogin', 'IsAdmin');
Route::put('/data-nilai-semester/{id}', [SubKriteriaController::class, 'updatenilaisemester'])->middleware('IsLogin', 'IsAdmin');
Route::delete('/data-nilai-semester/{id}', [SubKriteriaController::class, 'destroynilaisemester'])->middleware('IsLogin', 'IsAdmin');

#Siswa
Route::get('/data-siswa', [SiswaController::class, 'index'])->middleware('IsLogin');
Route::post('/data-siswa', [SiswaController::class, 'store'])->middleware('IsLogin');
Route::put('/data-siswa/{id}', [SiswaController::class, 'update'])->middleware('IsLogin');
Route::delete('/data-siswa/{id}', [SiswaController::class, 'destroy'])->middleware('IsLogin');

#Mitra
Route::get('/data-mitra', [MitraController::class, 'index'])->middleware('IsLogin');
Route::post('/data-mitra', [MitraController::class, 'store'])->middleware('IsLogin');
Route::put('/data-mitra/{id}', [MitraController::class, 'update'])->middleware('IsLogin');
Route::delete('/data-mitra/{id}', [MitraController::class, 'destroy'])->middleware('IsLogin');

#Penghitungan
Route::get('/penghitungan', [PenghitunganController::class, 'index'])->middleware('IsLogin', 'IsAdmin');
