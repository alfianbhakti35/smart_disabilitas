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

    public function edit()
    {
        return view('backend/materi/edit',[
            "title" => "Materi"
        ]);
    }
    
    public function create()
    {
        return view('backend/materi/tambah',[
            "title" => "Materi"
        ]);
    }

    
    public function store(Request $request)
    {
        ddd($request);
        $validatedDate = $request->validate([
            'matkul_id'  => 'required',
            'judul_materi' => 'reuqied|unique:materi_models',
            'file_materi' => 'required',
            'jenis_materi' => 'required'
        ]);
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
