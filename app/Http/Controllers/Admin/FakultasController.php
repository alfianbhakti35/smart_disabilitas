<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use App\Models\Admin\FakultasModel;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class FakultasController extends Controller
{

    public function index()
    {
        return view('backend.fakultas.index',[
            "title" => "Fakultas",
            "fakultas" => FakultasModel::all()
        ]);
    }

    public function edit($id)
    {
        return view('backend.fakultas.edit',[
            "title" => "Fakultas",
            "fakultas" => FakultasModel::where('id',$id)->first()
        ]);
    }
    
    public function create()
    {
        return view('backend.fakultas.tambah',[
            "title" => "Fakultas"
        ]);
    }

    
    public function store(Request $request)
    {
        
        $validatedDate = $request->validate([
            'nama'  => 'required',
            'kode' => 'required'
        ]);
        
        FakultasModel::create($validatedDate);

        return redirect('/fakultas')->with('success','New Fakultas has been addedd!');
    }

    public function show($id){

    }

    public function update(Request $request,$id)
    {
        $validatedDate = $request->validate([
            'nama'  => 'required',
            'kode' => 'required'
        ]);

        FakultasModel::where('id', $id)->update($validatedDate);

        return redirect('/fakultas')->with('success','Fakultas has been update!');
    }

    public function destroy($id)
    {   
        FakultasModel::destroy($id);

        return redirect('/fakultas')->with('success','Fakultas has been delted!');
    }

}
