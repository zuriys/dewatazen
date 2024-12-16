<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dewata Zen</title>
    <!--START FAVICON-->
    <link rel="icon" type="image/png" href="img/logo.png" />
    <link rel="shortcut icon" type="image/png" href="img/logo.png" />
    <!--END FAVICON-->
    <!-- FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My style -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/register.css') }}" />
  </head>
  <body>
    <div class="container">
      <!-- Bagian Kiri -->
      <div class="welcome-container">
        <h2>Selamat Datang!</h2>
        <p>Untuk tetap terhubung dengan kami, login dengan akun pribadimu.</p>
        <a href="{{ route('login') }}">
            <button class="btn-masuk">Masuk</button>
          </a>
      </div>

      <!-- Bagian Kanan -->
      <div class="register-container">
        <h2>Buat Akun</h2>
        <div class="social-icons">
          <div class="feature-icon"><i data-feather="mail"></i></div>
          <div class="feature-icon"><i data-feather="github"></i></div>
          <div class="feature-icon"><i data-feather="linkedin"></i></div>
        </div>
        <p>Gunakan email kamu untuk membuat akun.</p>
        <form method="POST" action="{{ route('registeruser') }}">
        @csrf
        <input type="text" placeholder="Username" name="username"/>
        <input type="password" placeholder="Password" name="password"/>
        <input type="text" placeholder="Email" name="email"/>
        <input type="text" placeholder="Alamat" name="alamat"/>
        <input type="text" placeholder="No_tlp" name="no_tlp"/>
        <button class="btn-buat" style="color:white">Buat</a></button>
       <br><br>
        <a href="{{ route('beranda') }}"><p style="font-size: 10px">DewataZen</p></a>
        <!-- <p>
          Jika sudah memiliki akun?
          <a href="#">Masuk</a>  -->
        </p>
      </div>
    </div>

    <script>
      feather.replace();
    </script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
