<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        // Cek kredensial login
        if (Auth::attempt($request->only('username', 'password'))) {
            $request->session()->regenerate(); // Regenerasi session ID
            
            if(Auth::check() && Auth::user()->role == "super_admin"){
                return redirect()->route('superadmin.member');
            }


            return redirect()->route('admin.dashboard'); // Redirect ke dashboard
        }

        // Jika gagal, kembali ke login dengan error
        return redirect()->route('login')->withErrors(['login' => 'Username atau password salah.']);
    }

 

}

