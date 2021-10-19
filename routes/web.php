<?php

use App\Http\Controllers\HomeController;
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

Route::get('/materi', function () {
    return view('backend/materi/index',[
        "title" => "Materi"
    ]);
});

Route::get('/materi_t', function () {
    return view('backend/materi/tambah',[
        "title" => "Materi"
    ]);
});

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