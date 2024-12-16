@extends('layouts.admin')
   
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/adminlaporkan.css') }}" />
@endsection

@section('content')
<!-- dashboard -->
    <div class="dashboard">
        <!-- <h1>Dashboard</h1> -->
        <!-- <div class="form-group">
            <label for="pengguna-name">Judul Postingan</label>
            <input type="text" id="pengguna-name" name="pengguna-name">
          </div> -->
          <div class="form-group">
            <label for="deskripsi">Detail Laporan</label>
            <textarea id="deskripsi" name="deskripsi" rows="15" placeholder="Masukan Deskripsi"></textarea>
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
    </div>
@endsection

@section('js')
    <!-- Feather Icon -->
    <script>
      feather.replace();
    </script>
    <script src="{{url("js/script.js")}}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
@endsection
