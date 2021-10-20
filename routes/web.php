<?php

use App\Http\Controllers\AkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PenggunaController;

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

Route::get('/fakultas', function () {
    return view('backend/fakultas/index',[
        "title" => "Fakultas"
    ]);
});

Route::get('/prodi', function () {
    return view('backend/prodi/index',[
        "title" => "Prodi"
    ]);
});

Route::get('/pengguna', [PenggunaController::class,'index']);

Route::get('/penggunae', [PenggunaController::class,'edit']);
    
Route::get('/penggunat',[PenggunaController::class,'tambah']);

Route::get('/akun',[AkunController::class,'index']); 

Route::get('/akune',[AkunController::class,'edit']); 

Route::get('/akunt',[AkunController::class,'tambah']); 