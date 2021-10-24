<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use App\Models\Admin\FakultasModel;
use Illuminate\Http\Request;
use App\Models\Admin\ProdiModel;
use Illuminate\Routing\Controller;

class ProdiController extends Controller
{

    public function index()
    {
        $prodi = ProdiModel::all();
        if($prodi)
        return view('backend.prodi.index',[
            "title" => "prodi",
            "fakultas" => FakultasModel::all(),
            "prodi" => ProdiModel::all()
        ]);
    }

    public function edit($id)
    {
        return view('backend.prodi.edit',[
            "title" => "prodi",
            "fakultas" => FakultasModel::all(),
            "prodi" => ProdiModel::where('id',$id)->first()
        ]);
    }
    
    public function create()
    {
        return view('backend.prodi.tambah',[
            "title" => "prodi",
            "fakultas" => FakultasModel::all()
        ]);
    }

    
    public function store(Request $request)
    {
        
        $validatedDate = $request->validate([
            'nama'  => 'required',
            'fakultas_id' => 'required'
        ]);
        
        ProdiModel::create($validatedDate);

        return redirect('/prodi')->with('success','New prodi has been addedd!');
    }

    public function show($id){

    }

    public function update(Request $request,$id)
    {
        $validatedDate = $request->validate([
            'nama'  => 'required',
            'fakultas_id' => 'required'
        ]);

        ProdiModel::where('id', $id)->update($validatedDate);

        return redirect('/prodi')->with('success','Prodi has been update!');
    }

    public function destroy($id)
    {   
        ProdiModel::destroy($id);

        return redirect('/prodi')->with('success','prodi has been delted!');
    }
}
