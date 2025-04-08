<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\PeriksaPasienController;


>>>>>>> c9393ac (ke-3)

Route::get('/', function () {
    return view('welcome');
});
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
