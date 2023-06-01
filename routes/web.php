<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
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
Route::get('/guru', [RouteController::class, 'guru']);
Route::get('/guru/pengolahanNilai', [RouteController::class, 'valueProcessing']);
Route::get('/guru/pengolahanNilai/inputNilai', [RouteController::class, 'inputValue']);
