<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SoalController;
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

Route::get('/admin', [RouteController::class, 'admin']);
Route::resource('/admin/siswa', SiswaController::class);
Route::resource('/admin/guru', GuruController::class);
Route::resource('/admin/mata-pelajaran', MapelController::class);
Route::resource('/admin/kelas', KelasController::class);

Route::get('/guru', [RouteController::class, 'guru']);
Route::get('/guru/pengolahanNilai', [RouteController::class, 'valueProcessing']);
Route::get('/guru/membuatKuis', [RouteController::class, 'membuatKuis']);
Route::resource('/guru/membuatKuis/{idMapel}', SoalController::class);
Route::get('/guru/pengolahanNilai/inputNilai', [RouteController::class, 'daftarMapel']);
Route::resource('/guru/pengolahanNilai/inputNilai/{idMapel}', NilaiController::class);
Route::post('/nilai', [NilaiController::class, 'store'])->name('nilai.store');
Route::post('/soal', [SoalController::class, 'store'])->name('soal.store');
