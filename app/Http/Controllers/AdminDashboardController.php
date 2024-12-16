<?php

namespace App\Http\Controllers;

use App\Models\Historiguide;
use App\Models\Penginapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController
{
    public function index(){
        $admindashboard = Penginapan::all();
        $admindashboardguide = Historiguide::all();
        return view('admindashboard',['admindashboard' => $admindashboard ,"admindashboardguide"=> $admindashboardguide]);
    }

    public function show(){
        $admindashboard = Penginapan::all();
        return view('detailadmindashboard',['admindashboard'=> $admindashboard]);
    }
  
    public function showsave(Request $request){
        $admindashboard = Penginapan::all();
        $tambah = new Penginapan();
        $tambah->nama = $request->input("judul_postingan");
        $tambah->jumlah_kamar = $request->input("jumlah_kamar");
        $tambah->deskripsi_fasilitas = $request->input("deskripsi");
        $tambah->alamat = $request->input("alamat");
        $tambah->harga = $request->input("harga");
        $tambah->ac = $request->boolean("ac");
        $tambah->parkir = $request->boolean("parkir");
        $tambah->taman = $request->boolean("taman");
        $tambah->restoran = $request->boolean("restoran");
        $tambah->lift = $request->boolean("lift");
        $tambah->balkon = $request->boolean("balkon");
        $tambah->kolam_berenang = $request->boolean("kolam-renang");
        $tambah->wifi = $request->boolean("wifi");
        $tambah->url_foto = 'bubuububu';
        $tambah->save();
        
        return redirect(route('admin.dashboard'));
    }
    
    public function showtambah($id){
        $admindashboard = Penginapan::find($id);
       
        return view('villadetaildashboardadmin',['admindashboard'=> $admindashboard]);
    }

   public function showadminguide(){
       $admindashboard = Historiguide::all();
       return view('detailadmindashboard',['admindashboardguide'=> $admindashboard]);
   }
  
   public function showsaveadminguide(Request $request){
       $admindashboard = Historiguide::all();
       $tambah = new Historiguide();
       $tambah->judul_tour = $request->input('judul');
       $tambah->deskripsi = $request->input('deskripsi');
       $tambah->no_hp = $request->input('no_hp');
       $tambah->url_foto = "dummy foto";
       $tambah->save();

       return redirect(route('admin.dashboard'));
   }
    
   public function showtambahadminguide($id){
       $guidepesan = Historiguide::find($id);
       
       return view('guidedetaildashboardadmin',['guidepesan'=> $guidepesan]);
   }



}
