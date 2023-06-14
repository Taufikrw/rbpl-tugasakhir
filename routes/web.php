<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SiswaController;

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

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');


Route::get('/admin', [RouteController::class, 'admin'])->middleware('auth');
Route::resource('/admin/siswa', SiswaController::class)->middleware('auth');
Route::resource('/admin/guru', GuruController::class)->middleware('auth');
Route::resource('/admin/mata-pelajaran', MapelController::class)->middleware('auth');
Route::resource('/admin/kelas', KelasController::class)->middleware('auth');
Route::get('/guru', [RouteController::class, 'guru']);
Route::get('/guru/pengolahanNilai', [RouteController::class, 'valueProcessing']);
Route::get('/guru/pengolahanNilai/inputNilai', [RouteController::class, 'daftarMapel']);
Route::resource('/guru/pengolahanNilai/inputNilai/{mapelName}', NilaiController::class);