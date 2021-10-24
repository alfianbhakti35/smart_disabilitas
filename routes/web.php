<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;

use App\Http\Controllers\Admin\AkunController;
use App\Http\Controllers\Admin\FakultasController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\ProdiController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\Admin\MatkulController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Mahasiswa\DashboardController;
use App\Http\Controllers\Mahasiswa\MateriController as MahasiswaMateriController;

Route::get('/', [HomeController::class, 'index']);

// Admin
Route::get('/dashboard',[AdminController::class,'index']);

Route::resource('/materi', MateriController::class);

Route::resource('/matkul', MatkulController::class);

Route::resource('/fakultas', FakultasController::class);

Route::resource('/prodi', ProdiController::class);
// Penutup Admin

// Login dan Registrasi
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/registrasi', [RegistrasiController::class, 'index']);
Route::post('/registrasi', [RegistrasiController::class, 'registrsiMahasiswa']);
// Penutup Login dan Registrasi

// Mahasiswa
Route::get('/m_dashboard',[DashboardController::class,'index']);

Route::get('/m_materi', [MahasiswaMateriController::class,'index']);
Route::get('/m_listmateri', [MahasiswaMateriController::class,'listmateri']);
Route::get('/m_detailmateri', [MahasiswaMateriController::class,'detailmateri']);

// Penutup Mahasiswa

