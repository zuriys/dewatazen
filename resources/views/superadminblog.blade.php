@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/superadminblog.css') }}" />
@endsection

@section('content')
    <!-- dashboard -->
    <div class="dashboard">
      <!-- <h1>Dashboard</h1> -->
      @foreach ($blog as $blogtunggal)      
      <a href="villa-details.html" class="card">
        <img src="{{ url('/assets/vila.png') }}" alt="Villa Semanjuk Bale" />
        <div class="card-content">
          <h2>{{ $blogtunggal->judul_blog }}</h2>
          <p>{{ $blogtunggal->deskripsi }}</p>
        </div>
      </a>
    @endforeach
  </div>

    <a href="{{ route('superadmin.blog.detail') }}" class="floating-button">
      <i class="icon">+</i>
    </a>
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
