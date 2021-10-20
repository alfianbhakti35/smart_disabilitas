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
Route::get('/materi_t',[MateriController::class,'create']);
Route::post('/materi_e',[MateriController::class,'edit']);
Route::post('/materi_s',[MateriController::class,'store']);


Route::post('/mata_kuliah', function () {
    return view('backend/matkul/index',[
        "title" => "Mata Kuliah"
    ]);
});

Route::post('/kelas', function () {
    return view('backend/kelas/index',[
        "title" => "Kelas"
    ]);
});

Route::get('/fakultas', [FakultasController::class,'index']);
Route::post('/fakultas_t', [FakultasController::class,'create']);
Route::post('/fakultas_e', [FakultasController::class,'edit']);

Route::get('/prodi', [ProdiController::class,'index']);
Route::post('/prodi_t', [ProdiController::class,'create']);
Route::post('/prodi_e', [ProdiController::class,'edit']);

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