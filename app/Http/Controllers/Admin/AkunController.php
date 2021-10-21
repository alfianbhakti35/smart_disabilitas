<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    
    public function index()
    {
        return view('backend/akun/index',[
            "title" => "Akun"
        ]);
    }

   
    public function create()
    {
        return view('backend/akun/tambah',[
            "title" => "Akun"
        ]);
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit()
    {
        return view('backend/akun/edit',[
            "title" => "Akun"
        ]);
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
