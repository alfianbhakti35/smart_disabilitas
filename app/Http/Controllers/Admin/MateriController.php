<?php

namespace App\Http\Controllers\Admin;

use Spatie\PdfToText\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Admin\MateriModel;
use App\Models\Admin\MatkulModel;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
   
    public function index()
    {
        return view('backend.materi.index',[
            "title" => "Materi",
            "materi" => MateriModel::all()
        ]);
    }

    public function pdfTotext()
    {
        $path = 'c:/Program Files/Git/mingw64/bin/pdftotext';
        echo Pdf::getText('book.pdf', $path);
    }

    public function edit($id)
    {
        return view('backend.materi.edit',[
            "title" => "Materi",
            "matkul" => MatkulModel::all(),
            "materi" => MateriModel::where('id',$id)->first()
        ]);
    }
    
    public function create()
    {
        return view('backend.materi.tambah',[
            "title" => "Materi",
            "matkul" => MatkulModel::all()
        ]);
    }

    
    public function store(Request $request)
    {
        
        $validatedDate = $request->validate([
            'matkul_id'  => 'required',
            'judul_materi' => 'required',
            'file_materi' => 'file|required',
            'jenis_materi' => 'required'
        ]);
        
        if($request->file('file_materi')){
            $validatedDate['file_materi'] = $request->file('file_materi')->store('/public');
        }else{
            echo "gagal";
        }

        MateriModel::create($validatedDate);

        return redirect('/materi')->with('success','New materi has been addedd!');
    }

    public function show($id){

    }

    public function update(Request $request,$id)
    {
        $validatedDate = $request->validate([
            'matkul_id'  => 'required',
            'judul_materi' => 'required',
            'jenis_materi' => 'required'
        ]);

        if($request->file('file_materi')){
            if($request->oldfile){
                Storage::delete($request->oldfile);
            }
            $validatedDate['file_materi'] = $request->file('file_materi')->store('/public');
        }

        MateriModel::where('id', $id)->update($validatedDate);

        return redirect('/materi')->with('success','Materi has been update!');
    }

    public function destroy($id)
    {   
        $data = MateriModel::where('id',$id)->first()->file_materi;
        if($data){
            Storage::delete($data);
        }

        MateriModel::destroy($id);

        return redirect('/materi')->with('success','Materi has been delted!');
    }
}
