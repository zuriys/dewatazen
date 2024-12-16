@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/beranda.css') }}" />
@endsection

@section('content')
    <div class="search-overlay" id="searchOverlay">
        <div class="search-bar">
            <input type="text" placeholder="Ketik di sini......" />
            <button class="btn-search">Cari Disini</button>
        </div>
    </div>

    <!-- Hero Section strat  -->
    <section class="hero" id="home">
        <main class="content">
        <h1 data-aos="fade-right" data-aos-duration="1500" >Mari Mencari</h1>
        <h2 data-aos="fade-right"  data-aos-duration="1500" >Tempat Terbaik</h2>
        <a href="{{ route('login') }}" class="cta"  data-aos="fade-right"  data-aos-duration="1500" >Ayo Cari!!</a>
        <p data-aos="fade-right"  data-aos-duration="1500" >
            Jelajahi keindahan alam, budaya, dan pengalaman tak terlupakan di
            berbagai tempat eksotis. Nikmati liburan sempurna dengan panduan
            lengkap untuk atraksi terbaik, akomodasi nyaman, dan layanan khusus
            yang dirancang untuk kenyamanan Anda!
        </p>
        </main>
    </section>
    <!-- Hero section end -->

    <!-- About section start -->
    <section id="about" class="about">
        <div class="row">
        <div class="about-img" data-aos="flip-left" data-aos-duration="1500" >
            <img src="{{url("assets/tentang-kami.png")}}" alt="Tentang Kami" />
        </div>
        <div class="content">
            <h2 data-aos="fade-right"  data-aos-duration="1500" >Tentang <span>Kami</span></h2>
            <p data-aos="fade-right"  data-aos-duration="1500" >
            Selamat datang di Dewata Zen! Kami adalah platform yang berdedikasi
            untuk membantu Anda menemukan pengalaman wisata yang tak terlupakan.
            Temukan dengan mudah tempat-tempat yang memukau, dari pantai tropis
            hingga situs budaya ikonik, semuanya dalam satu platform yang
            dirancang khusus untuk memudahkan wisata Anda.
            </p>
            <div class="stats" >
            <div class="stat-box" data-aos="flip-left" data-aos-duration="1500">
                <h2>1K+</h2>
                <p>Pengguna</p>
            </div>
            <div class="stat-box"data-aos="flip-left" data-aos-duration="1500" >
                <h2>100</h2>
                <p>Mitra Penginapan</p>
            </div>
            <div class="stat-box" data-aos="flip-left" data-aos-duration="1500">
                <h2>60+</h2>
                <p>Hari Beroperasi</p>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- About section end -->

    <!-- Fitur -->
    <section id="fitur" class="fitur">
        <div class="container"> 
            <h1 data-aos="fade-up" data-aos-duration="1500" >Kami Memberikan</h1>
            <h2 data-aos="fade-up" data-aos-duration="1500" >Fitur Terbaik</h2>
            <h3 data-aos="fade-up" data-aos-duration="1500" >Untuk Kamu</h3>
            <p data-aos="fade-up" data-aos-duration="1500" >
            Temukan fitur terbaik kami untuk pengalaman wisata tak terlupakan! Dari 
            rekomendasi destinasi populer, layanan booking mudah, 
            panduan wisata lokal, hingga penawaran eksklusif. Semua 
            dirancang untuk membantu Anda menikmati liburan yang nyaman, 
            aman, dan penuh petualangan seru!
            </p>
        <div class="features" data-aos="fade-up" data-aos-duration="1500" > 
            <div class="feature"> 
            <div class="feature-icon">
                <i data-feather="briefcase"></i>
            </div> 
            <div class="feature-title">BANYAK PILIHAN</div> 
            <div class="feature-description">Pilih opsi terbaik kamu untuk mendapatkan pengalaman yang tak terlupakan.</div> 
            </div> <div class="feature"> 
            <div class="feature-icon">
                <i data-feather="map"></i>
            </div> 
            <div class="feature-title">TOUR TERBAIK</div> 
            <div class="feature-description">Temui setiap hal tersembunyi, dan telusuri setiap keindahan didalamnya.</div> 
            </div>   <div class="feature"> 
            <div class="feature-icon">
                <i data-feather="smartphone"></i>
            </div> 
            <div class="feature-title">SISTEM MUDAH</div> 
            <div class="feature-description">Lakukan pemesanan dengan sistem yang sederhana dan mudah diorganisasi, untuk memenuhi kebutuhan wisatamu.</div> 
            </div> 
    </section>
    <!-- Fitur end -->

    <!-- Mulai -->
    <section class="banner">
        <div class="banner-text" data-aos="fade-left" data-aos-duration="1500">
        <h1>Ayo Mulai</h1> 
        <h2>Perjalanan mu</h2> 
        <p>Ayo mulai perjalananmu sekarang! Temukan destinasi impian, 
            rencanakan petualangan yang tak terlupakan, dan 
            nikmati pengalaman wisata dengan mudah. Dari pantai 
            hingga pegunungan, setiap sudut menunggu untuk dijelajahi. 
            Jadikan liburanmu lebih istimewa bersama kami!</p>
    </div>
    </section>

<!-- sumbit -->
  <section class="submit">
    <div class="content" data-aos="fade-up" data-aos-duration="1500" >
      <h2>Dapatkan konten Eksklusif dari</h2>
      <h1>Dewata Zen</h1>
      <form class="subscribe-form">
        <div class="input-container">
          <i data-feather="mail"></i>
          <input
            type="email"
            placeholder="Masukan Alamat Email Anda"
            required
          />
        </div>
        <button type="submit">Subscribe</button>
      </form>
    </div>
  </section>
<!-- submit end -->
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

 
