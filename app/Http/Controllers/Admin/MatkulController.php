<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin\MatkulModel;
use App\Models\Admin\ProdiModel;
use App\Models\User;
use Illuminate\Routing\Controller;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.matkul.index',[
            "title" => "matkul",
            "matkul" => MatkulModel::all(),
            "user" => User::all(),
            "prodi" => ProdiModel::all()
        ]);
    }

    public function edit($id)
    {
        return view('backend.matkul.edit',[
            "title" => "matkul",
            "matkul" => MatkulModel::where('id',$id)->first(),
            "user" => User::all(),
            "prodi" => ProdiModel::all()
        ]);
    }
    
    public function create()
    {
        return view('backend.matkul.tambah',[
            "title" => "matkul",
            "user" => User::all(),
            "prodi" => ProdiModel::all()
        ]);
    }

    
    public function store(Request $request)
    {
        $validatedDate = $request->validate([
            'nama'  => 'required',
            'user_id' => 'required',
            'prodi_id' => 'required',
            'semester' => 'required'
        ]);
        
        MatkulModel::create($validatedDate);

        return redirect('/matkul')->with('success','New matkul has been addedd!');
    }

    public function show($id){

    }

    public function update(Request $request,$id)
    {
        $validatedDate = $request->validate([
            'nama'  => 'required',
            'user_id' => 'required',
            'prodi_id' => 'required',
            'semester' => 'required'
        ]);

        MatkulModel::where('id', $id)->update($validatedDate);

        return redirect('/matkul')->with('success','Matkul has been update!');
    }

    public function destroy($id)
    {   
        MatkulModel::destroy($id);

        return redirect('/matkul')->with('success','Matkul has been delted!');
    }
}
