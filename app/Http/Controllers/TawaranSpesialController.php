<?php

namespace App\Http\Controllers;

use App\Models\Historiguide;
use App\Models\Paket;
use App\Models\Penginapan;
use App\Models\Pengguna;
use App\Models\Pesanan;
use App\Models\PesananHotel;
use Illuminate\Http\Request;
use App\Models\PesananPaket;

class TawaranSpesialController extends Controller
{
    public function index(){
        $penginapan = Penginapan::all();
        $historiguide = Historiguide::all();
        $paket = Paket::all();
        return view('tawaranspesial',['penginapan' => $penginapan,'historiguide' => $historiguide, 'paket' => $paket]);
    }    

    public function showhotel($id){
        $hotelpesan = Penginapan::find($id);
        return view('tawaranspesialpesan',['hotelpesan' => $hotelpesan]);

    }

    public function showguide($id){
        $guidepesan = Historiguide::find($id);
        $pengguna = Pengguna::find($id);
        return view('tawaranspesialguide',['guidepesan'=>$guidepesan,'pengguna'=>$pengguna]);
    }

    public function showpaket($id){
        $paketpesan = Paket::find($id);
        $hotelpesan = Penginapan::find($paketpesan->id_penginapan);
        return view('tawaranspesialpaket',['paketpesan'=>$paketpesan,'hotelpesan'=>$hotelpesan]);
    }
    
    public function edithotel(Request $request,$id){
        $hotel= Penginapan::find($id);
        $kasur = $request->input('kasur');
        $pesanan = new PesananHotel;
        $pesanan->harga_total = (int)$kasur*(int)$hotel->harga;
        $pesanan->status = 'Menunggu Pihak Hotel';
        $pesanan->id_penginapan = $id;
        $pesanan->id_pengguna = 1;
        $pesanan->harga = $hotel->harga;
        $pesanan->tipe_kasur = $kasur;
        $pesanan->save();
        
        return view('detailtawaranspesialpesan',["hotel"=> $hotel,'hotelnama'=> $hotel->nama,"totalharga"=>$pesanan->harga_total,"status"=>$pesanan->status, 'alamat'=> $hotel->alamat,"tipekasur"=>$kasur]);
    }

    public function editpaket(Request $request,$id){
        $paket= Paket::find($id);
        $kasur = $request->input('kasur');
        $pesanan = new PesananPaket;
        $pesanan->harga_total = (int)$kasur*(int)$paket->harga;
        $pesanan->status = 'Menunggu Pihak Hotel dan Guide';
        $pesanan->id_paket = $id;
        $pesanan->id_pengguna = 1;
        $pesanan->harga = $paket->harga;
        $pesanan->tipe_kasur = $kasur;
        $pesanan->save();
        return view('detailtawaranspesialpaket',["paket"=> $paket,'paketnama'=> $paket->nama,"totalharga"=>$pesanan->harga_total,"status"=>$pesanan->status, 'alamat'=> $paket->alamat,"tipekasur"=>$kasur]);
    }
    
}
