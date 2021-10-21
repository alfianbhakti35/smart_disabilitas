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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard',[AdminController::class,'index']);

Route::get('/materi', [MateriController::class,'index']);
Route::get('/materi_t',[MateriController::class,'create']);
Route::get('/materi_e',[MateriController::class,'edit']);
Route::post('/materi_s',[MateriController::class,'store']);

Route::get('/matkul', [MatkulController::class, 'index']);
Route::get('/matkul_t', [MatkulController::class, 'create']);
Route::get('/matkul_e', [MatkulController::class, 'edit']);

Route::get('/kelas',[KelasController::class,'index']);
Route::get('/kelas_t',[KelasController::class,'create']);
Route::get('/kelas_e',[KelasController::class,'edit']);

Route::get('/fakultas', [FakultasController::class,'index']);
Route::get('/fakultas_t', [FakultasController::class,'create']);
Route::get('/fakultas_e', [FakultasController::class,'edit']);

Route::get('/prodi', [ProdiController::class,'index']);
Route::get('/prodi_t', [ProdiController::class,'create']);
Route::get('/prodi_e', [ProdiController::class,'edit']);

Route::get('/pengguna',[PenggunaController::class,'index']);
Route::post('/pengguna_e', [PenggunaController::class,'edit']);
Route::post('/pengguna_t',[PenggunaController::class,'create']);

Route::get('/akun',[AkunController::class,'index']); 
Route::post('/akun_e',[AkunController::class,'edit']); 
Route::post('/akun_t',[AkunController::class,'create']); 

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/registrasi', [RegistrasiController::class, 'index']);
Route::post('/registrasi', [RegistrasiController::class, 'registrsiMahasiswa']);