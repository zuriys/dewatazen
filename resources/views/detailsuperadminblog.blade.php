@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/detailsuperadminblog.css') }}" />
@endsection


@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <!-- <h1>Dashboard</h1> -->
      <form method="GET" enctype="multipart/form-data" action="{{ route('savedatablog') }} ">
        <div class="form-group">
            <label for="judul_blog">Judul Blog</label>
            <input type="text" id="judul_blog" name="judul_blog">
          </div>
          <div class="form-group">
            <label for="deskripsi">Detail</label>
            <textarea id="deskripsi" name="deskripsi" rows="1" placeholder="Masukan Deskripsi (tekan Enter untuk menambah baris baru)"></textarea>
          </div>          
        <div class="form-group">
          <label for="foto">Foto:</label>
        
          <div class="upload-button" >
            <i data-feather="upload" name="photos"></i>
            <input type="file" name="photos" id="photos" accept="image/*" required><br><br>
          </div>

        </div>
        <button class="submit-button">Simpan</button>
      </div>
    </div>
  </form>
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
