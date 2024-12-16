@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/detailtawaranspesialpaket.css') }}" />
@endsection

@section('content')
    <!-- object -->
    <div id="object1">
        <div class="header">
            <h3>Hasil Reservasi Terkirim ke Email !</h3>
            <h4>Check email anda secara berkala</h4>
        </div>
        <div class="data1">
            <div class="left">
                <p> <strong>Akomodasi</strong> <a>:</a> <span id="object-name">{{ $paket->nama }}</span></p>
                <p> <strong>Harga</strong> <a>:</a> <span id="object-price">{{ $totalharga }}</span></p>
                <p> <strong>Lokasi</strong> <a>:</a> <span id="object-location">{{ $paket->alamat }}</span></p>
                <p> <strong>Status</strong> <a>:</a> <span id="object-status">{{ $status }}</span></p>
                <p> <strong>Jam Booking</strong> <a>:</a> <span id="selected-option">Anda dapat melakukan booking dari jam
                        14.00 WITA - 00.00 WITA </span></p>
                <p> <strong>Tipe Bed</strong> <a>:</a> <span id="selected-kasur">{{ $tipekasur }}</span></p>
            </div>
            <div class="right">
                <img id="paket-image" src="{{ url('/assets/paket1.png') }}" alt="paket Image" />
            </div>
        </div>
        <div class="button-container">
            <a href= " {{ route('tawaranspesial') }}"><button id="kembali">Kembali</button></a>
        </div>
    </div>
    </div>
@endsection

@section('js')
    <!--Start Script-->
    <script>
        window.onload = function() {
            const params = getQueryParams();

            const images = {
                1: 'img/tawaran-spesial/paket1.png',
                2: 'img/tawaran-spesial/paket2.png'
            };

            // document.getElementById('paket-image').src = images[params.id] || 'img/default.jpg';
            document.getElementById('paket-name').textContent = `${params.name || 'Hotel Default'}`;
            document.getElementById('paket-price').textContent = `${params.price || 'Harga Tidak Diketahui'}`;

            const kasurValue = localStorage.getItem("kasur");


            document.getElementById("selected-kasur").textContent = ` ${kasurValue || "Tidak ada"}`;

            const selectedValue = localStorage.getItem("selectedOption");
            document.getElementById("selected-option").textContent = selectedValue ? selectedValue : "Tidak ada";

            const selectedValue1 = localStorage.getItem("paketStatus");
            document.getElementById("paket-status").textContent = selectedValue1 ? selectedValue1 :
                "Menunggu Konfirmasi Pihak Penginapan";

            document.getElementById("kembali").addEventListener("click", function() {
                window.location.href = "tawaran-spesial.html"; // Mengarahkan ke halaman tawaran-spesial.html
            });
        };


        function getQueryParams() {
            const params = new URLSearchParams(window.location.search);
            return {
                id: params.get('id'),
                name: params.get('name'),
                location: params.get('location'),
                price: params.get('price'),
                status: params.get('status')
            };
        }
    </script>
    <!--End Script-->

    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
