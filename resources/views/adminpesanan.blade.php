@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/adminpesanan.css') }}" />
@endsection


@section('content')
    <!-- pesanan -->
    <div class="pesanan">
        <div class="Judul">
            <h1>PESANAN</h1>
        </div>
        <div class="filter-buttons">
        </div>
        @foreach ($pesananhotel as $pesananhoteltunggal)
            <div class="order-card">
                <div class="order-header">
                    <div class="order-label">Order</div>
                    <div class="order-info">
                        <p>Ariel Hikmat</p>
                        <p>Pesan Hotel ID: {{ $pesananhoteltunggal->id_pesanan }}</p>
                    </div>
                </div>
                <div class="order-details">
                    <p>{{ $pesananhoteltunggal->created_at }}</p>
                    <p>{{ $pesananhoteltunggal->nama }}</p>
                    <p>Jumlah kasur: {{ $pesananhoteltunggal->tipe_kasur }}</p>
                    <p>Harga: {{ $pesananhoteltunggal->harga }}</p>
                    <p>Total Harga: {{ $pesananhoteltunggal->harga_total }}</p>
                </div>
                <div class="order-actions">
                    <form method="GET"
                        action="{{ route('deletepesananhotel', ['id' => $pesananhoteltunggal->id_pesanan]) }}">
                        @csrf
                        <button class="reject">Tolak Pesanan</button>


                        <button class="accept">Terima Pesanan</button>
                </div>
            </div>
        @endforeach

        @foreach ($pesananpaket as $pesananpakettunggal)
            <div class="order-card">
                <div class="order-header">
                    <div class="order-label">Order</div>
                    <div class="order-info">
                        <p>Ariel Hikmat</p>
                        <p>Pesan Hotel ID: {{ $pesananpakettunggal->id_pesanan }}</p>
                    </div>
                </div>
                <div class="order-details">
                    <p>{{ $pesananpakettunggal->created_at }}</p>
                    <p>{{ $pesananpakettunggal->nama }}</p>
                    <p>Jumlah kasur: {{ $pesananpakettunggal->tipe_kasur }}</p>
                    <p>Harga: {{ $pesananpakettunggal->harga }}</p>
                    <p>Total Harga: {{ $pesananpakettunggal->harga_total }}</p>
                </div>
                <div class="order-actions">

                    <form method="GET"
                        action="{{ route('deletepesananpaket', ['id' => $pesananpakettunggal->id_pesanan]) }}">
                        @csrf
                        <button class="reject">Tolak Pesanan</button>


                        <button class="accept">Terima Pesanan</button>
                </div>
            </div>
        @endforeach
        <!-- Tambahkan kartu pesanan tambahan di sini jika diperlukan -->
    </div>
@endsection

@section('js')
    <script>
        feather.replace();
    </script>
    <script src="{{ url('js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    </body>

    </html>
@endsection
