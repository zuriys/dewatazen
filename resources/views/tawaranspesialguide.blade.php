@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/tawaranspesialguide.css') }}" />
@endsection

@section('content')

    <div id="detail-container1">
        <img id="guide-image" src="{{ url('/assets/guide1.jpg') }}" alt="Gambar Guide"/>
    </div>
        
    <div id="detail-container2">
        <div>
            <p id="guide-name">{{ $guidepesan->judul_tour }}</p>
            <p id="guide-location">{{ $pengguna->alamat }}</p> 
            <div id="rating-container">
                ★★★★☆
            </div>
        
            <div id="deskripsi">
                <!-- Menambahkan judul di bagian atas box -->
                <div id="judul-deskrispi"> 
                    <h3></h3>
                   
                </div>
                <div id="detail-deskripsi">
                    <p>{{ $guidepesan->deskripsi }}</p>
                </div>
            </div>
            
        </div>

        <div>
            <h3 id="guide-price">Harga Dinegosiasikan</h3>
        </div>

    </div>

    @if (Auth::check() && Auth::user()->role == 'user')
        <div class="button-container" >
            <a id="pesan-sekarang" href="https://wa.me/{{ $guidepesan->no_hp}} "> <button onclick="redirectToPagePesanGuide1()" class ="book-btn" style="color:antiquewhite; background: #ff7f00; padding:20px 20px;">Pesan Sekarang</button>
        </div>
        @endif

 
  
 



@endsection

    <!-- plugin -->
    
@section('js')
    <script>
        
        feather.replace();
            // Fungsi untuk membaca parameter dari URL
        function getQueryParams() {
            const params = new URLSearchParams(window.location.search);
            return {
                id: params.get('id'),
                name: params.get('name'),
                location: params.get('location'),
                price: params.get('price')
            };
        }

        const images = {
            1: 'img/tawaran-spesial/guide1.jpg', 
            2: 'img/tawaran-spesial/guide2.jpg'  
        };
        
    
        const params = getQueryParams();
    
        //document.getElementById('guide-image').src = images[params.id] || 'img/default.jpg';
       // document.getElementById('guide-name').textContent = params.name || 'Hotel Default';
        //document.getElementById('guide-location').textContent = params.location || 'Lokasi Tidak Diketahui';
        //document.getElementById('guide-price').textContent = params.price || 'Harga Tidak Diketahui';

        document.getElementById("pesanSekarang").addEventListener("click", function() {
            const kasurValue = document.querySelector('input[name="kasur"]:checked')?.value || "";

        // Arahkan ke halaman selanjutnya
            window.location.href = "tawaran-special-detail-pesan-guide.html?id=" + params.id + "&name=" + encodeURIComponent(params.name) + "&location=" + encodeURIComponent(params.location) + "&price=" + encodeURIComponent(params.price);
        });

        // Arahkan ke halaman baru
    
        // Fungsi redirect untuk mengarahkan ke halaman detail
        function redirectToPagePesanGuide1() {
        const id = params.id;
        const name = encodeURIComponent(params.name);
        const location = encodeURIComponent(params.location);
        const price = encodeURIComponent(params.price);

        window.location.href = `tawaran-special-detail-pesan-guide.html?id=${id}&name=${name}&location=${location}&price=${price}`;
}      
    </script>
    <script src="{{ url('/js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection