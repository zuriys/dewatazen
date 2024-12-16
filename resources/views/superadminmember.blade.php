@extends('layouts.admin')
    
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/superadminmember.css') }}" />
@endsection


@section('content')
    <div id="searchOverlay1" class="search-overlay">
      <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Ketik sesuatu...">
        <button id="closeOverlay">✖ Tutup</button>
      </div>
    </div>

    <!-- Popup Konfirmasi -->
  <!-- <div id="popup-confirm" class="popup hidden">
    <div class="popup-content">
      <p>Apakah yakin keluar?</p>
      <button class="cancel-btn">Batal</button>
      <button class="logout-btn">Log Out</button>
    </div>
  </div> -->

    <!-- Member Table -->
    <div class="table-container">
        <table class="member-table">
          <thead>
            <tr>
              <th></th>
              <th>Nama</th>
              <th>ID</th>
              <th>Email</th>
              <th>Role</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($supermember as $supermembertunggal)
            <tr>
              <td>
                <img src="{{ url('/assets/yetti.jpg') }}"  alt="Avatar" /> 
              </td>
              <td>{{$supermembertunggal->username}}</td>
              <td>{{$supermembertunggal->id_pengguna}}</td>
              <td>{{$supermembertunggal->email}}</td>
              <td>{{$supermembertunggal->role}}</td>

              <td>
                <form method="GET" action="{{ route('deletemember', ['id' => $supermembertunggal->id_pengguna]) }}">
                @csrf
                <button class="delete-btn" >Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@section('js')
    <!-- Feather Icon -->
    <script>
      feather.replace();
    </script>
    <script src="{{ url('/js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
@endsection
