<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MateriController extends Controller
{
   
    public function index()
    {
        return view('backend/materi/index',[
            "title" => "Materi"
        ]);
    }

    public function tambah()
    {
        return view('backend/materi/tambah',[
            "title" => "Materi"
        ]);
    }

    public function edit()
    {
        return view('backend/materi/edit',[
            "title" => "Materi"
        ]);
    }
    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, MateriController $materiController)
    {
        //
    }

    public function destroy(MateriController $materiController)
    {
        //
    }
}
