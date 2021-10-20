<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PenggunaController extends Controller
{
   
    public function index()
    {
        return view('backend/pengguna/index',[
            "title" => "Pengguna"
        ]);
    }

    
    public function create()
    {
        return view('backend/pengguna/tambah',[
            "title" => "Pengguna"
        ]);
    }

    public function edit()
    {
        return view('backend/pengguna/edit',[
            "title" => "Pengguna"
        ]);
    }
  
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
