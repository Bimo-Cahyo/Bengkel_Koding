<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\ObatController;
<<<<<<< HEAD

Route::prefix('dokter')->group(function () {
Route::resource('obat', ObatController::class);
Route::resource('periksa', PeriksaController::class);
});
=======
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\PeriksaPasienController;


>>>>>>> c9393ac (ke-3)
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

Auth::routes();

Route::get('/dokter', [HomeController::class, 'dokter'])->name('dokter');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
<<<<<<< HEAD
=======

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//untuk ke halaman dokter


Route::get('/dokter', [HomeController::class, 'dokter'])->name('dokter');

Route::prefix('dokter')->group(function () {
    Route::resource('obat', ObatController::class);
    Route::resource('periksa', PeriksaController::class);
});

Route::prefix('pasien')->group(function () {
    Route::resource('riwayat', RiwayatController::class);
    Route::resource('periksa', PeriksaPasienController::class);
});
Auth::routes();


>>>>>>> c9393ac (ke-3)
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
