<?php

use Illuminate\Support\Facades\Route;

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

Route::view('admin', 'admin.index');
Route::get('/', function () {
    return view('home');
    // return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/visimisi', [App\Http\Controllers\ProfileController::class, 'visimisi'])->name('visimisi');
Route::get('/tujuan', [App\Http\Controllers\ProfileController::class, 'tujuan'])->name('tujuan');
Route::get('/strukturorganisasi', [App\Http\Controllers\ProfileController::class, 'strukturorganisasi'])->name('strukturorganisasi');
Route::get('/contact', [App\Http\Controllers\ProfileController::class, 'contact'])->name('contact');

Route::get('/skemasertifikasi', [App\Http\Controllers\SertifikasiController::class, 'skemasertifikasi'])->name('skemasertifikasi');
Route::get('/ujikompetensi', [App\Http\Controllers\SertifikasiController::class, 'ujikompetensi'])->name('ujikompetensi');
Route::get('/sertifikat', [App\Http\Controllers\SertifikasiController::class, 'sertifikat'])->name('sertifikat');

