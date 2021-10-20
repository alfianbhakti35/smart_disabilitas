<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;


Route::get('/', [HomeController::class, 'index']);

// Route::get('/admin', function(){
//     return view('admin',[
//         "name" => "edwin",
//         "email" => "edwin"
//     ]);
// });

Route::get('/dashboard', function () {
    return view('backend/dashboard',[
        "title" => "Smart Disabilitas"
    ]);
});

Route::get('/materi', [MateriController::class,'pdfTotext']);

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

Route::get('/mahasiswa', function () {
    return view('backend/mahasiswa/index',[
        "title" => "Mahasiswa"
    ]);
});

Route::get('/akun', function () {
    return view('backend/akun/index',[
        "title" => "Akun"
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/registrasi', [RegistrasiController::class, 'index']);
Route::post('/registrasi', [RegistrasiController::class, 'registrsiMahasiswa']);
