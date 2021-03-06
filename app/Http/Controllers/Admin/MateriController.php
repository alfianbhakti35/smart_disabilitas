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
            "materi" => MateriModel::all(),
            "matkul" => MatkulModel::all()
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
            'materi_tunanetra' => 'file|required',
            'materi_tunarungu' => 'file|required',
            'materi_slowlearning' => 'required'
        ]);
        
        if($request->file('materi_tunanetra') && $request->file('materi_tunarungu')){
            $validatedDate['materi_tunanetra'] = $request->file('materi_tunanetra')->store('/public/materi');
            $validatedDate['materi_tunarungu'] = $request->file('materi_tunarungu')->store('/public/materi');
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
            'materi_slowlearning' => 'required'
        ]);
        
        if($request->file('materi_tunanetra') && $request->file('materi_tunarungu')){

            if($request->oldmateri_tunanetra && $request->oldmateri_tunarungu){
                Storage::delete($request->oldmateri_tunanetra);
                Storage::delete($request->oldmateri_tunarungu);
            }
            $validatedDate['materi_tunanetra'] = $request->file('materi_tunanetra')->store('/public/materi');
            $validatedDate['materi_tunarungu'] = $request->file('materi_tunarungu')->store('/public/materi');
        }
        else if($request->file('materi_tunanetra')){

            if($request->oldmateri_tunanetra){
                Storage::delete($request->oldmateri_tunanetra);
            }
            $validatedDate['materi_tunanetra'] = $request->file('materi_tunanetra')->store('/public/materi');
        }
        else if($request->file('materi_tunarungu')){
            
            if($request->oldmateri_tunarungu){
                Storage::delete($request->oldmateri_tunarungu);
            }
            $validatedDate['materi_tunarungu'] = $request->file('materi_tunarungu')->store('/public/materi');
        }

        MateriModel::where('id', $id)->update($validatedDate);

        return redirect('/materi')->with('success','Materi has been update!');
    }

    public function destroy($id)
    {   
        
        $data = MateriModel::where('id',$id)->first()->materi_tunanetra;
        if($data){
            Storage::delete($data);
        }
        $data = MateriModel::where('id',$id)->first()->materi_tunarungu;
        if($data){
            Storage::delete($data);
        }

        MateriModel::destroy($id);

        return redirect('/materi')->with('success','Materi has been delted!');
    }
}
