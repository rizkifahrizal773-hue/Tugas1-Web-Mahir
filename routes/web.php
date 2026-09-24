<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

/*
|--------------------------------------------------------------------------
| Web Routes - Website Profil Mahasiswa
|--------------------------------------------------------------------------
*/

// Halaman Profil Mahasiswa (Halaman Utama & /profil)
Route::get('/', [HelloController::class, 'profil'])->name('profil');
Route::get('/profil', [HelloController::class, 'profil']);

// Halaman Riwayat Pendidikan Mahasiswa
Route::get('/pendidikan', [HelloController::class, 'pendidikan'])->name('pendidikan');

// Route kompatibilitas untuk latihan sebelumnya
Route::get('/biodata', [HelloController::class, 'biodata']);
Route::get('/hello', [HelloController::class, 'index']);