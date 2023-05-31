<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AdminController::class, 'index']);
Route::resource('/admin/siswa', SiswaController::class);
Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/pengolahanNilai', [GuruController::class, 'valueProcessing']);
Route::get('/guru/pengolahanNilai/inputNilai', [GuruController::class, 'inputValue']);
