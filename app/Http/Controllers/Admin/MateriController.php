<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\PdfToText\Pdf;

class MateriController extends Controller
{
   
    public function index()
    {
        return view('backend/materi/index',[
            "title" => "Materi"
        ]);
    }

    public function pdfTotext()
    {
        $path = 'c:/Program Files/Git/mingw64/bin/pdftotext';
        echo Pdf::getText('book.pdf', $path);
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
