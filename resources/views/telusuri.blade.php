@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/telusuri.css') }}" />
@endsection

@section('content')
    <!-- Hero Section strat  -->
    <section class="hero" id="home"></section>
    <!-- Hero section end -->
    <section id="destinations" class="destinations">
        <div class="container">
            <div class="card">
                <div class="card-image">
                    <div class="card-content">
                        <h1>{{ $blogid->judul_blog }}</h1>
                        <img src="img/travelblog/ulundanu.png" alt="Pura UlunDanu Beratan" />
                        <p>
                            {{ $blogid->deskripsi }}
                        </p>
                        <!-- <button class="btn">Telusuri</button> -->
                    </div>
                </div>
                <div class="card-content">

                    <a href="{{ route('travelblog') }}">
                        <button class="btn1">Kembali</button>
                    </a>
                    <!-- <button class="btn">Telusuri</button> -->
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <!-- Feather Icon -->
    <script>
        feather.replace();
    </script>
    <script src="{{ url('js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
