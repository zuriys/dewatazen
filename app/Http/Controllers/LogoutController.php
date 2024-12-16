<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{

    
    public function logout(Request $request)
    {
    
        Session::flush();

        Auth::logout();

    
        return redirect(route('beranda'));

      
    }
    
    

}

