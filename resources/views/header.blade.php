<!-- navbar start -->
<head>
  <link rel="stylesheet" href="{{ url("/css/header.css") }}">
</head>
<nav class="navbar">
  <a href="#" class="navbar-logo">Dewata<span>Zen</span>.</a>

  <div class="navbar-nav">
    <a href="{{ route('beranda') }}">Beranda</a>
    <a href="{{ route('tentangkami') }}">Tentang Kami</a>
    <a href="{{ route('travelblog') }}">Travel Blog</a>
    <a href="{{ route('tawaranspesial') }}">Tawaran Spesial</a>
    <a href="#more">More</a>

    @if(Auth::check() && Auth::user()->role == 'user')
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button>
      Logout</button>
    </form>
    @endif
  </div>
</nav>



  <!--<div class="navbar-extra">
    <a button class="search-icon"><i data-feather="search"></i></button>
    <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
  </div>-->


<!-- Navbar end -->
