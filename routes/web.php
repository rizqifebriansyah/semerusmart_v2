<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;

Route::get('/', [DashboardController::class, 'index'])->middleware('guest')->name('dashboard');
Route::get('DaftarPelayanan', [PendaftaranController::class, 'DaftarPelayanan'])->middleware('guest')->name('DaftarPelayanan');
