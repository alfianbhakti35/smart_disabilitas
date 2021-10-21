<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\MateriModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
        return $request->file('file_materi')->store('materi-pdf');

        $validatedDate = $request->validate([
            'matkul_id'  => 'required',
            'judul_materi' => 'required|unique:materi_models',
            'file_materi' => 'required',
            'jenis_materi' => 'required'
        ]);

        MateriModel::create($validatedDate);

        return redirect('/dashboard')->with('success','New materi has been addedd!');
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
