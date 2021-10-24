<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin\MatkulModel;
use App\Models\Dosen\MateriModel;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dosen.materi.index',[
            "title" => "Materi",
            "materi" => MateriModel::all()
        ]);
    }

    public function edit($id)
    {
        return view('dosen.materi.edit',[
            "title" => "Materi",
            "matkul" => MatkulModel::all(),
            "materi" => MateriModel::where('id',$id)->first()
        ]);
    }
    
    public function create()
    {
        return view('dosen.materi.tambah',[
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

        return redirect('/dosen/materi')->with('success','New materi has been addedd!');
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

        if($request->file('materi_tunanetra') || $request->file('materi_tunarungu')){
            if($request->oldfile){
                Storage::delete($request->oldfile);
            }
            $validatedDate['materi_tunanetra'] = $request->file('materi_tunanetra')->store('/public/materi');
            $validatedDate['materi_tunarungu'] = $request->file('materi_tunarungu')->store('/public/materi');
        }

        MateriModel::where('id', $id)->update($validatedDate);

        return redirect('/dosen/materi')->with('success','Materi has been update!');
    }

    public function destroy($id)
    {   
        $data = MateriModel::where('id',$id)->first()->materi_tunarungu;
        $data = MateriModel::where('id',$id)->first()->materi_tunanetra;
        if($data){
            Storage::delete($data);
        }

        MateriModel::destroy($id);

        return redirect('/dosen/materi')->with('success','Materi has been delted!');
    }
}
