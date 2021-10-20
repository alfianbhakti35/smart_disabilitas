<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function index(){
        return view('backend/dashboard',[
            "title" => "Smart Disabilitas"
        ]);
    }
}
