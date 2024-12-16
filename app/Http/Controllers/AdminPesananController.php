<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\PesananHotel;
use App\Models\PesananPaket;
use App\Models\Penginapan;

class AdminPesananController
{
    public function index(){
        $pesananpaket = PesananPaket::all();
        $pesananhotel = PesananHotel::all();

     //   $pesanan = Penginapan::find($pesananhotel->id_penginapan);
        return view('adminpesanan',['pesananpaket'=>$pesananpaket,'pesananhotel'=>$pesananhotel]);
    }


    public function showdeletepesananhotel(Request $request, $id) {
        $request = PesananHotel::find($id);
        if ($request) { 
            $request->delete();
            return redirect()->route('admin.pesanan')->with('success', 'Pengguna berhasil dihapus.');
        } else {
            return redirect()->route('admin.pesanan')->with('error', 'Pengguna tidak ditemukan.');
        }
    }


    public function showdeletepesananpaket(Request $request, $id) {
        $request = PesananPaket::find($id);
        if ($request) { 
            $request->delete();
            return redirect()->route('admin.pesanan')->with('success', 'Pengguna berhasil dihapus.');
        } else {
            return redirect()->route('admin.pesanan')->with('error', 'Pengguna tidak ditemukan.');
        }
    }
}
