<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{

    public function index()
    {
        return view('backend/fakultas/index',[
            "title" => "Fakultas"
        ]);
    }

    public function tambah()
    {
        return view('backend/fakultas/tambah',[
            "title" => "Fakultas"
        ]);
    }
    
    public function edit()
    {
        return view('backend/fakultas/edit',[
            "title" => "Fakultas"
        ]);
    }

}
