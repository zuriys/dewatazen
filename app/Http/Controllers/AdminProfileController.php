<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminProfileController
{
    public function index()
    {
        return view('adminprofile');
    }

    public function indexedit(Request $request,$id)
    {
        $edit = Pengguna::find($id);
        $edit->username = $request->input('username');
        $edit->email = $request->input('email');
        $edit->password = Hash::make($request->input('password'));
        $edit->alamat = $request->input('alamat');
        $edit->no_hp = $request->input('no_hp');
        $edit->update();


        
        return redirect(route('admin.profile'));
    }

}
