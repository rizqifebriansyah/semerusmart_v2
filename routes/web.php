<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\FarmasiController;

//dashboard route
Route::get('/', [DashboardController::class, 'index'])->middleware('guest')->name('dashboard');


//pendaftaran route
Route::get('DaftarPelayanan', [PendaftaranController::class, 'DaftarPelayanan'])->middleware('guest')->name('DaftarPelayanan');




//farmasi route
Route::get('Layananresep', [FarmasiController::class, 'Layananresep'])->middleware('guest')->name('Layananresep');
