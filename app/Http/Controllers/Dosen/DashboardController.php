<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('dosen.dashboard',[
            "title" => "Smart Disabilitas"
        ]);
    }
}
