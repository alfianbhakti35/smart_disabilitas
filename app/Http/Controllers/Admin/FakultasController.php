<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class FakultasController extends Controller
{

    public function index()
    {
        return view('backend/fakultas/index',[
            "title" => "Fakultas"
        ]);
    }

    public function create()
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
