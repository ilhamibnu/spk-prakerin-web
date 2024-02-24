<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\UserController;



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

#Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('IsLogin');

#Kriteria
Route::get('/data-kriteria', [KriteriaController::class, 'index'])->middleware('IsLogin');
Route::post('/data-kriteria', [KriteriaController::class, 'store'])->middleware('IsLogin');
Route::put('/data-kriteria/{id}', [KriteriaController::class, 'update'])->middleware('IsLogin');
Route::delete('/data-kriteria/{id}', [KriteriaController::class, 'destroy'])->middleware('IsLogin');

#User
Route::get('/data-user', [UserController::class, 'index'])->middleware('IsLogin');
Route::post('/data-user', [UserController::class, 'store'])->middleware('IsLogin');
Route::put('/data-user/{id}', [UserController::class, 'update'])->middleware('IsLogin');
Route::delete('/data-user/{id}', [UserController::class, 'destroy'])->middleware('IsLogin');
