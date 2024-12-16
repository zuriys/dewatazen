@extends('layouts.admin')
<link rel="stylesheet" type="text/css" href="{{ url('/css/adminprofile.css') }}" />
@section('css')

@endsection

@section('content')
    <!-- profile -->
    <section id="profile" class="profile-section">
        <h2>PROFILE<p style="font-size: 10px">Pastikan Anda Mengisi semua Input Form</p></h2>
        

        <div class="form-container">
          <form method="GET" action="{{ route('indexedit',['id'=> Auth::user()->id_pengguna])}}">
            @csrf
            <label for="username">Nama Pengguna :</label>
            <input type="text" id="username" name="username" placeholder="{{ Auth::user()->username }}"/>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="{{ Auth::user()->email }}" />
            <label for="email">No Telepon :</label>
            <input type="no_hp" id="no_hp" name="no_hp" placeholder="{{ Auth::user()->no_hp }}" />
            <label for="email">Alamat :</label>
            <input type="alamat" id="alamat" name="alamat" placeholder="{{ Auth::user()->alamat }}" />
            <label for="password">Kata Sandi :</label>
            <input type="password" id="password" name="password"/>
            <label for="confirm-password">Ulangi Kata Sandi :</label>
            <input type="password" id="confirm-password" name="confirm-password"/>

            <button type="submit" class="update-button">Perbarui Data</button>
          </form>

          <div class="avatar-section">
            <p>Avatar Foto</p>
            <div class="avatar-box">
              <div class="avatar-icon">👤</div>
              <button class="change-avatar">Ganti Foto</button>
            </div>
          </div>
        </div>
      </div>
    </section>

@section('js')
    <!-- Feather Icon -->
    <script>
      feather.replace();
    </script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
 @endsection
