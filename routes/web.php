<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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