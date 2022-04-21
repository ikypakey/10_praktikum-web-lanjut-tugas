<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\nilaiController;
use App\Http\Controllers\ViewController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/mahasiswa', MahasiswaController::class);
Route::get('/view', [ViewController::class,'view']);
Route::get('/nilai/{mahasiswa}', [nilaiController::class, 'nilai']);
Route::get('/cetak_pdf/{mahasiswa}', [nilaiController::class, 'pdf']);