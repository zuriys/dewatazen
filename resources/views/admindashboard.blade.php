@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/admindashboard.css') }}" />
@endsection


@section('content')

    <!-- dashboard -->
    <div class="dashboard">
        <h1>Dashboard</h1>
 
        @if(Auth::check() && Auth::user()->role =='admin_guide')
        @foreach ($admindashboardguide as $admindashboardguidetunggal)
        <a href="{{ route('admin.dashboard.guidedetail', ['id' => $admindashboardguidetunggal->id_histori]) }}" class="card">
            <img src="{{ url('assets/vila.png') }}" alt="Villa Semanjuk Bale" />
            <div class="card-content">
                <h2>{{ $admindashboardguidetunggal->judul_tour }}</h2>
                <div id="fasilitas-akomodasi">
                </div>
                <p>
                    <b>
                        {{ $admindashboardguidetunggal->deskripsi }}
                    </b>
                </p>
            </div>
        </a>
        @endforeach

        @elseif(Auth::check() && Auth::user()->role =='admin_hotel')
        @foreach ($admindashboard as $admindashboardtunggal)
            <a href="{{ route('admin.dashboard.villadetail', ['id' => $admindashboardtunggal->id_penginapan]) }}" class="card">
                <img src="{{ url('assets/vila.png') }}" alt="Villa Semanjuk Bale" />
                <div class="card-content">
                    <h2>{{ $admindashboardtunggal->nama }}</h2>
                    <div id="fasilitas-akomodasi">
                        <div class="checkbox-container">
                            @if ($admindashboardtunggal->ac)
                                <div>
                                    <p>AC</p>
                                </div>
                            @endif

                            @if ($admindashboardtunggal->parkir)
                                <div>
                                    <p>Parkir</p>
                                </div>
                            @endif

                            @if ($admindashboardtunggal->taman)
                                <div>
                                    <p>Taman</p>
                                </div>
                            @endif

                            @if ($admindashboardtunggal->restoran)
                                <div>
                                    <p>Restoran</p>
                                </div>
                            @endif

                            @if ($admindashboardtunggal->lift)
                                <div>
                                    <p>Lift</p>
                                </div>
                            @endif

                            @if ($admindashboardtunggal->balkon)
                                <div>
                                    <p>Balkon</p>
                                </div>
                            @endif

                            @if ($admindashboardtunggal->kolam_berenang)
                                <div>
                                    <p>Kolam Renang</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <p>
                        <b>
                            {{ $admindashboardtunggal->deskripsi_fasilitas }}
                        </b>
                    </p>
                </div>
            </a>
        @endforeach
        @endif

    </div>
    <a href={{ route('admindashboard.detail') }} class="floating-button">
        <i class="icon">+</i>
    </a>
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
