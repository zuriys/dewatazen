<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class RegistrasiController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){
        $pengguna = new Pengguna();
        $pengguna->username = $request->input('username');
        $pengguna->password = Hash::make($request->input('password'));
        $pengguna->email = $request->input('email');
        $pengguna->alamat = $request->input('alamat');
        $pengguna->no_hp = $request->input('no_tlp');
        $pengguna->role = 'user';
        $pengguna->save();

        return redirect(route('login'));
        
    }
}
