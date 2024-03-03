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

#Auth
Route::get('/', [AuthController::class, 'indexlogin']);
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
Route::get('/data-kriteria', [KriteriaController::class, 'index'])->middleware('IsLogin');
Route::post('/data-kriteria', [KriteriaController::class, 'store'])->middleware('IsLogin');
Route::put('/data-kriteria/{id}', [KriteriaController::class, 'update'])->middleware('IsLogin');
Route::delete('/data-kriteria/{id}', [KriteriaController::class, 'destroy'])->middleware('IsLogin');

#Nilai Kepentingan
Route::get('/data-nilai-kepentingan', [NilaiKepentinganController::class, 'index'])->middleware('IsLogin');
Route::post('/data-nilai-kepentingan', [NilaiKepentinganController::class, 'store'])->middleware('IsLogin');
Route::put('/data-nilai-kepentingan/{id}', [NilaiKepentinganController::class, 'update'])->middleware('IsLogin');
Route::delete('/data-nilai-kepentingan/{id}', [NilaiKepentinganController::class, 'destroy'])->middleware('IsLogin');

#Sub Kriteria ftth
Route::get('/data-ftth', [SubKriteriaController::class, 'indexftth'])->middleware('IsLogin');
Route::post('/data-ftth', [SubKriteriaController::class, 'storeftth'])->middleware('IsLogin');
Route::put('/data-ftth/{id}', [SubKriteriaController::class, 'updateftth'])->middleware('IsLogin');
Route::delete('/data-ftth/{id}', [SubKriteriaController::class, 'destroyftth'])->middleware('IsLogin');

#Sub Kriteria cpe
Route::get('/data-cpe', [SubKriteriaController::class, 'indexcpe'])->middleware('IsLogin');
Route::post('/data-cpe', [SubKriteriaController::class, 'storecpe'])->middleware('IsLogin');
Route::put('/data-cpe/{id}', [SubKriteriaController::class, 'updatecpe'])->middleware('IsLogin');
Route::delete('/data-cpe/{id}', [SubKriteriaController::class, 'destroycpe'])->middleware('IsLogin');

#Sub Kriteria absensi
Route::get('/data-absensi', [SubKriteriaController::class, 'indexabsensi'])->middleware('IsLogin');
Route::post('/data-absensi', [SubKriteriaController::class, 'storeabsensi'])->middleware('IsLogin');
Route::put('/data-absensi/{id}', [SubKriteriaController::class, 'updateabsensi'])->middleware('IsLogin');
Route::delete('/data-absensi/{id}', [SubKriteriaController::class, 'destroyabsensi'])->middleware('IsLogin');

#Sub Kriteria kjt
Route::get('/data-kjt', [SubKriteriaController::class, 'indexkjt'])->middleware('IsLogin');
Route::post('/data-kjt', [SubKriteriaController::class, 'storekjt'])->middleware('IsLogin');
Route::put('/data-kjt/{id}', [SubKriteriaController::class, 'updatekjt'])->middleware('IsLogin');
Route::delete('/data-kjt/{id}', [SubKriteriaController::class, 'destroykjt'])->middleware('IsLogin');

#Sub Kriteria nilai semester
Route::get('/data-nilai-semester', [SubKriteriaController::class, 'indexnilaisemester'])->middleware('IsLogin');
Route::post('/data-nilai-semester', [SubKriteriaController::class, 'storenilaisemester'])->middleware('IsLogin');
Route::put('/data-nilai-semester/{id}', [SubKriteriaController::class, 'updatenilaisemester'])->middleware('IsLogin');
Route::delete('/data-nilai-semester/{id}', [SubKriteriaController::class, 'destroynilaisemester'])->middleware('IsLogin');

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
Route::get('/penghitungan', [PenghitunganController::class, 'index'])->middleware('IsLogin');
