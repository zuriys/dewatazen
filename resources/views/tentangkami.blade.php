@extends('layouts.app')

@section("css")
  <link rel="stylesheet" type="text/css" href="{{ url('/css/tentangkami.css') }}" />
@endsection

@section('content')
  <div class="search-overlay" id="searchOverlay">
    <div class="search-bar">
        <input type="text" placeholder="Ketik di sini......" />
        <button class="btn-search">Cari Disini</button>
    </div>
  </div>

  <!-- Pertama start -->
  <section class="pertama">
    <div class="profile-section">
      <img src="{{url("assets/pertama.jpg")}}" alt="Team working in office" class="profile-image">
      <div class="text-overlay" >
          <h2 >Kenal Kami Lebih Lanjut</h2>
          <h1>Profil Perusahaan</h1>
      </div>
  </section>
  <!-- Pertama end -->

  <!-- Kedua start -->
  <section class="Kedua">
    <div class="row"  data-aos="fade-up" data-aos-duration="1500" >
      <div class="about-img" >
        <img src="{{url("assets/meeting.jpg")}}" alt="meeting" />
      </div>
      <div class="content">
        <h2> Meeting Diskusi Fitur </h2>
        <p>
          Di Dewata Zen, kami selalu bersemangat dalam 
          menciptakan pengalaman wisata yang luar biasa. 
          Kami berdiskusi secara intens mengenai fitur-fitur 
          yang ada di dalam platform kami, memastikan setiap 
          detail dirancang untuk memenuhi kebutuhan pengguna.
        </p>
    </div>
  </section>
  <!-- Kedua End -->

  <!-- Ketiga Start -->
  <section class="Ketiga">
    <div class="row"  data-aos="fade-up" data-aos-duration="1500" >
      <div class="about-img" >
        <img src="{{url("assets/meet.png")}}" alt="meet" />
      </div>
      <div class="content">
        <h2> Bertemu dengan Mitra </h2>
        <p>
          Kami juga aktif menjalin kemitraan dengan berbagai 
          penyedia layanan lokal, seperti hotel, pemandu 
          wisata, dan penyelenggara tur, untuk memberikan 
          pilihan terbaik bagi para wisatawan. Melalui 
          kolaborasi ini, kami berusaha membangun ekosistem 
          yang saling menguntungkan dan memperkuat komunitas
          wisata Bali.
        </p>
    </div>
  </section>
  <!-- Ketigan End -->

  <!-- stats start -->
  <section class="stats">
    <div class="stats-container" data-aos="flip-up" data-aos-duration="1500" >
      <div class="stat-card" >
          <div class="stat-number">57+</div>
          <div class="stat-label">Karyawan Perusahaan</div>
      </div>
      <div class="stat-card">
          <div class="stat-number">70+</div>
          <div class="stat-label">Mitra Perusahaan</div>
      </div>
      <div class="stat-card">
          <div class="stat-number">99+</div>
          <div class="stat-label">Customer Perusahaan</div>
      </div>
  </div>
  </section>
  <!-- stats end -->

  <!-- kontak start -->
  <section class="kontak">
    <section class="contact-section" data-aos="zoom-in" data-aos-duration="1500" >
      <h2 class="contact-title">Contact Us</h2>
      <div class="contact-info">
          <div class="contact-item">Email : dewatazen@gmail.com</div>
          <div class="contact-item">Telephone : 0361 -0938259323</div>
          <div class="contact-item">Instagram : @dewatazen</div>
          <div class="contact-item">Alamat Pusat : Jl bubuya Gg boboiboy No 2</div>
      </div>
  </section>
  </section>
  <!-- kontak end -->
@endsection

@section('js')
  <!-- plugin -->
  <script>
    feather.replace();
  </script>
  <script src="{{ url("js/script.js") }}" ></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
@endsection
