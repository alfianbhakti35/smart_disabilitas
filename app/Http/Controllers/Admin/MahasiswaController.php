<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public static function index()
    {
        return view('mahasiswa.index');
    }
}
