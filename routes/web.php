<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');


Route::get('/', [RouteController::class, 'index'])->middleware('auth');
Route::resource('/admin/siswa', SiswaController::class)->middleware(['auth', 'must-admin']);
Route::resource('/admin/guru', GuruController::class)->middleware(['auth', 'must-admin']);
Route::resource('/admin/mata-pelajaran', MapelController::class)->middleware(['auth', 'must-admin']);
Route::resource('/admin/kelas', KelasController::class)->middleware(['auth', 'must-admin']);

Route::get('/guru', [RouteController::class, 'guru'])->middleware(['auth', 'must-guru']);
Route::get('/guru/inputNilai', [RouteController::class, 'daftarMapel'])->middleware(['auth', 'must-guru']);
Route::get('/guru/inputNilai/{id}', [RouteController::class, 'daftarMapel'])->middleware(['auth', 'must-guru']);
Route::get('/siswa/catatan-nilai', [SiswaController::class, 'showNilai'])->middleware(['auth', 'must-siswa']);
Route::get('/guru/lihat-nilai', [NilaiController::class, 'index'])->middleware(['auth', 'must-guru']);
Route::get('/guru/lihat-nilai/{idMapel}', [RouteController::class, 'daftarTugas'])->middleware(['auth', 'must-guru']);
Route::resource('/guru/pengolahanNilai/inputNilai/{idMapel}', NilaiController::class)->middleware(['auth', 'must-guru']);
Route::post('/nilai', [NilaiController::class, 'store'])->name('nilai.store')->middleware(['auth', 'must-guru']);
