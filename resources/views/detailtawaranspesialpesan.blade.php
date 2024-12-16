@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/detailtawaranspesialpesan.css') }}" />
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
                <p> <strong>Akomodasi</strong> <a>:</a> <span id="object-name">{{ $hotelnama }}</span></p>
                <p> <strong>Harga</strong> <a>:</a> <span id="object-price">{{ $totalharga }}</span></p>
                <p> <strong>Lokasi</strong> <a>:</a> <span id="object-location">{{ $alamat }}</span></p>
                <p> <strong>Status</strong> <a>:</a> <span id="object-status">{{ $status }}</span></p>
                <p> <strong>Jam Booking</strong> <a>:</a> <span id="selected-option">Anda dapat melakukan booking dari jam
                        14.00 WITA - 00.00 WITA </span></p>
                <p> <strong>Tipe Bed</strong> <a>:</a> <span id="selected-kasur">{{ $tipekasur }}</span></p>
            </div>
            <div class="right">
                <img id="object-image" src="{{ url('/assets/hotel1.jpg') }}" alt="Hotel Paket" />
            </div>
        </div>
        <div class="button-container">
            <a href= " {{ route('tawaranspesial') }}"><button id="kembali">Kembali</button></a>
        </div>
    </div>
@endsection

@section('js')
    <!--Start Script-->
    <script>
        window.onload = function() {

            const params = getQueryParams();


            const images = {
                1: 'img/tawaran-spesial/hotel1.jpg',
                2: 'img/tawaran-spesial/hotel2.jpg'
            };


            const kasurValue = localStorage.getItem("kasur");




            const selectedValue = localStorage.getItem("selectedOption");


            const selectedValue1 = localStorage.getItem("objectStatus");



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

    <script src="{{ url('js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
