<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Fakultas;
>>>>>>> f5d949da1fcdf9803d83e7f094055fbe9baf94e6
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return view('backend/fakultas/index',[
            "title" => "Fakultas"
        ]);
=======
        //
>>>>>>> f5d949da1fcdf9803d83e7f094055fbe9baf94e6
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD

    public function tambah()
    {
        return view('backend/fakultas/tambah',[
            "title" => "Fakultas"
        ]);
    }

=======
>>>>>>> f5d949da1fcdf9803d83e7f094055fbe9baf94e6
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
<<<<<<< HEAD
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
=======
     * @param  \App\Models\Fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function show(Fakultas $fakultas)
>>>>>>> f5d949da1fcdf9803d83e7f094055fbe9baf94e6
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
<<<<<<< HEAD
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('backend/fakultas/edit',[
            "title" => "Fakultas"
        ]);
=======
     * @param  \App\Models\Fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function edit(Fakultas $fakultas)
    {
        //
>>>>>>> f5d949da1fcdf9803d83e7f094055fbe9baf94e6
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
<<<<<<< HEAD
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
=======
     * @param  \App\Models\Fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fakultas $fakultas)
>>>>>>> f5d949da1fcdf9803d83e7f094055fbe9baf94e6
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<< HEAD
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
=======
     * @param  \App\Models\Fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fakultas $fakultas)
>>>>>>> f5d949da1fcdf9803d83e7f094055fbe9baf94e6
    {
        //
    }
}
