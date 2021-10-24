<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public static function index()
    {
        return view('registrasi');
    }
    public function registrsiMahasiswa(Request $request)
    {
        $req = $request->validate([
            'name' => 'required|min:5|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'password' => 'required|min:5|max:255',
            'level' => 'required|min:5|max:255',
        ]);

        $req['password'] = Hash::make($req['password']);

        User::create($req);
        return redirect('/login');

    }
}
