<?php

namespace App\Http\Controllers;
use function Laravel\Prompts\search;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class MemberController
{
    public function index(){
        $member = Pengguna::all();
        return view('superadminmember',['supermember'=>$member]);
    }


    public function indexdelete(Request $request, $id) {
        $request = Pengguna::find($id);
        if ($request) { 
            $request->delete();
            return redirect()->route('superadmin.member')->with('success', 'Pengguna berhasil dihapus.');
        } else {
            return redirect()->route('superadmin.member')->with('error', 'Pengguna tidak ditemukan.');
        }
    }

    public function indexsearch(){
        $member = Pengguna::all();
        return view('superadminmember',['supermember'=>$member]);
    }

}
