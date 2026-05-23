<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController; // Pastikan 'Controllers' pakai S

// Jalur navigasi web profil kampus
Route::get('/', [ProfilController::class, 'index'])->name('beranda_kampus');
Route::get('/profil', [ProfilController::class, 'profil'])->name('kampus.profil');
Route::get('/kontak', [ProfilController::class, 'kontak'])->name('kampus.kontak');
Route::get('/prodi/{nama_prodi}', [ProfilController::class, 'prodi'])->name('kampus.prodi');
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'create'])->name('mahasiswa.tambah');
Route::post('/mahasiswa/simpan', [MahasiswaController::class, 'store'])->name('mahasiswa.simpan');