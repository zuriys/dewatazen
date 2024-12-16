@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ url('/css/travelblog.css') }}" />
@endsection

@section('content')
    <div id="more-content" class="more-popup">
      <div class="more-inner">
        <div class="more-item">
          <img src="{{url("/assets/maps.png")}}" alt="Interactive Map">
          <p>Interactive Map</p>
        </div>
        <div class="more-item">
          <img src="{{url("/assets/store.png")}}" alt="Store">
          <p>Store</p>
        </div>
      </div>
    </div>
  </div>

    <div class="search-overlay" id="searchOverlay">
      <div class="search-bar">
          <input type="text" placeholder="Ketik di sini......" />
          <button class="btn-search">Cari Disini</button>
      </div>
    </div>

    <!-- Hero Section strat  -->
    <section class="hero" id="home">
      <div class="content">
        <h1 data-aos="fade-right" data-aos-duration="1500">Temukan<span>Pengalaman</span></h1>
        <h2 data-aos="fade-right" data-aos-duration="1500">Luar Biasa Anda</h2>
      </div>
    </section>
    <!-- Hero section end -->

    <!-- Pertama start -->
    <section class="pertama">
      <div class="text-overlay">
        <h1 data-aos="fade-up" data-aos-duration="1500">Ringkasan Cerita Seru</h1>
        <h2 data-aos="fade-up" data-aos-duration="1500">
          Ayo dapatkan experience dengan pantai indah, budaya kaya, dan
          petualangan menakjubkan
        </h2>
        <h3 data-aos="fade-up" data-aos-duration="1500">juga surga relaksasi dan eksplorasi yang tak terlupakan!</h3>
      </div>
    </section>
    <!-- Pertama end -->

    <section id="destinations" class="destinations">
      <div class="container">
      @foreach ($blog as $blogtunggal )
        <div class="card">
          <div class="card-image">
            <img
              src="{{url("/assets/ulundanu.png")}}"
              alt="Pura UlunDanu Beratan"
            />
          </div>
        
          <div class="card-content">
            <h3>{{ $blogtunggal->judul_blog }}</h3>
            <p>
              </p>
            <a href="{{ route('travelblog.telusuri',['id'=>$blogtunggal->id_blog])}}">
              <button class="btn">Telusuri</button>
            </a>
          </div>
        </div>
      @endforeach
      </section>
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


