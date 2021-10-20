<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AkunController;
use App\Http\Controllers\Admin\ProdiController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\Admin\FakultasController;
use App\Http\Controllers\Admin\PenggunaController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard',[AdminController::class,'index']);

Route::get('/materi', [MateriController::class,'index']);
Route::get('/materi_t',[MateriController::class,'tambah']);
Route::get('/materi_e',[MateriController::class,'edit']);



Route::get('/mata_kuliah', function () {
    return view('backend/matkul/index',[
        "title" => "Mata Kuliah"
    ]);
});

Route::get('/kelas', function () {
    return view('backend/kelas/index',[
        "title" => "Kelas"
    ]);
});

Route::get('/fakultas', [FakultasController::class,'index']);
Route::get('/fakultas_t', [FakultasController::class,'tambah']);
Route::get('/fakultas_e', [FakultasController::class,'edit']);

Route::get('/prodi', [ProdiController::class,'index']);
Route::get('/prodi_t', [ProdiController::class,'tambah']);
Route::get('/prodi_e', [ProdiController::class,'edit']);

Route::get('/pengguna',[PenggunaController::class,'index']);
Route::get('/pengguna_e', [PenggunaController::class,'edit']);
Route::get('/pengguna_t',[PenggunaController::class,'tambah']);

Route::get('/akun',[AkunController::class,'index']); 
Route::get('/akun_e',[AkunController::class,'edit']); 
Route::get('/akun_t',[AkunController::class,'tambah']); 

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/registrasi', [RegistrasiController::class, 'index']);
Route::post('/registrasi', [RegistrasiController::class, 'registrsiMahasiswa']);