@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/detailadmindashboard.css') }}" />
@endsection


@section('content')

    @if(Auth::check() && Auth::user()->role == "admin_hotel")
   
   
    <form method="GET" action="{{ route('savedatahotel') }}">
        @csrf
        <!-- dashboard -->
        <div class="dashboard">
            <h1>Dashboard</h1>
            <div class="form-group">
                <label for="judul_postingan">Judul Postingan</label>
                <input type="text" id="judul_postingan" name="judul_postingan">
            </div>
           <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" rows="1"
                    placeholder="Masukan alamat (tekan Enter untuk menambah baris baru)"></textarea>
            </div>
            <div class="form-group">
                <label for="deskripsi">Detail</label>
                <textarea id="deskripsi" name="deskripsi" rows="1"
                    placeholder="Masukan Deskripsi (tekan Enter untuk menambah baris baru)"></textarea>
            </div>
            <div class="form-group">
                <label for="jumlah_kamar">Jumlah Kamar</label>
                <textarea id="jumlah_kamar" name="jumlah_kamar" rows="1"
                    placeholder="Masukan jumlah kamar (tekan Enter untuk menambah baris baru)"></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <textarea id="harga" name="harga" rows="1"
                    placeholder="Masukan harga (tekan Enter untuk menambah baris baru)"></textarea>
            </div> 
           <div class="form-group">
                <label for="telp">No Telepon</label>
                <textarea id="telp" name="telp" rows="1"
                    placeholder="Masukan telp (tekan Enter untuk menambah baris baru)"></textarea>
            </div> 
            <div class="form-group">
                <label for="foto">Foto:</label>
                <div class="upload-button">
                    <i data-feather="upload"></i>
                    <span>Tambahkan photo</span>
                </div>
            </div>

            <div class="container">
                <div class="item">
                  <input type="hidden" name="ac" value="0">
                    <input type="checkbox" id="ac" name="ac" value="1" >
                    <label for="ac">AC</label>
                </div>
                <div class="item">
                  <input type="hidden" name="parkir" value="0">
                    <input type="checkbox" id="parkir" name="parkir" value="1">
                    <label for="parkir">Parkir</label>
                </div>
                <div class="item">
                  <input type="hidden" name="taman" value="0">
                    <input type="checkbox" id="taman" name="taman" value="1">
                    <label for="taman">Taman</label>
                </div>
                <div class="item">
                  <input type="hidden" name="restoran" value="0">
                    <input type="checkbox" id="restoran" name="restoran" value="1">
                    <label for="restoran">Restoran</label>
                </div>
                <div class="item">
                  <input type="hidden" name="lift" value="0">
                    <input type="checkbox" id="lift" name="lift" value="1">
                    <label for="lift">Lift</label>
                </div>
                <div class="item">
                  <input type="hidden" name="balkon" value="0">
                    <input type="checkbox" id="balkon" name="balkon" value="1">
                    <label for="balkon">Balkon</label>
                </div>
                <div class="item">
                  <input type="hidden" name="kolam" value="0">
                    <input type="checkbox" id="kolam" name="kolam" value="1">
                    <label for="kolam-renang">Kolam Renang</label>
                </div>
                <div class="item">
                   <input type="hidden" name="wifi" value="0">
                    <input type="checkbox" id="wifi" name="wifi" value="1">
                    <label for="wifi">Wifi</label>
                </div>
            </div> 
            <br>
            <button class="submit-button">Simpan</button>
        </div>
    </form>

    @elseif(Auth::check() && Auth::user()->role == "admin_guide")
    <form method="GET" action="{{ route('saveadminguide') }}">
        @csrf
        <div class="dashboard">
            <h1>Dashboard</h1>
            <div class="form-group">
                <label for="judul_tour">Judul Tour</label>
                <input type="text" id="judul_tour" name="judul">
            </div>
           <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="1"
                    placeholder="Masukan alamat (tekan Enter untuk menambah baris baru)"></textarea>
            </div>
            <div class="form-group">
                <label for="no_hp">No Telepon</label>
                <textarea id="no_hp" name="no_hp" rows="1"
                    placeholder="Masukan Deskripsi (tekan Enter untuk menambah baris baru)"></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <div class="upload-button">
                    <i data-feather="upload"></i>
                    <span>Tambahkan photo</span>
                </div>
            </div>
            <button class="submit-button">Simpan</button>
        </div>
        </form>
    
   
   
   
   
   
   
   
   
   
   
   
   
    @endif
@endsection

@section('js')
    <!-- Feather Icon -->
    <script>
        feather.replace();
    </script>
    <script src="{{ url('js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
