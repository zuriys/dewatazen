@extends('layouts.app')


@section('css')
<link rel="stylesheet" type="text/css" href="{{ url('/css/tawaranspesial.css') }}" />
@endsection


@section('content')        
<!--OBJECT START-->
<section class="object">
    <div class="persegi">
        <h1> Temukan Penginapan Mu</h1>
        <p>Dapatkan penginapan ideal untuk liburan 
            Anda di Bali bersama Dewata Zen. 
            Mulai dari vila pantai hingga hotel 
            mewah, temukan tempat menginap sesuai 
            gaya dan kebutuhan Anda untuk pengalaman 
            yang nyaman dan berkesan!
        </p>
    </div>
</section>
<!--OBJECT END-->

<!--Filter Control-->
<nav class="button-filter">
    <button class = "filter-btn " data-category="semua">Semua</button>
    <button class = "filter-btn " data-category="penginapan">Penginapan</button>
    <button class = "filter-btn " data-category="guide">Guide</button>
    <button class = "filter-btn " data-category="paket">Paket Special</button>
</nav>
<!--FILTER CONTENT END-->

<!--CONTENT-->
<!--Start Penginapan-->

                             
<section class="content">
    <div class="content-grid">
        @foreach ($penginapan as $penginapantunggal )
        <div class="item" data-category="penginapan" data-id="1" data-name="Watermark Hotel and Spa Bali" data-location="Jimbaran, Kuta Selatan" data-price="Rp 919.542/malam" >
            <img src="{{url("/assets/hotel1.jpg")}}"  alt="Watermark Hotel and Spa Bali">
            <h3>{{$penginapantunggal->nama}}</h3>
            <p>{{$penginapantunggal->alamat}}</p>
            <p>{{$penginapantunggal->harga}}</p>
         
            @if(Auth::check() && Auth::user()->role == 'user')
            <a href="{{ route('tawaranspesial.hotel',['id'=>$penginapantunggal->id_penginapan])}}"><button class="book-btn" onclick="redirectToPagePaket(this)">Pesan</button></a>
            @else
            <a href="{{ route('tawaranspesial.hotel',['id'=>$penginapantunggal->id_penginapan])}}"><button class="book-btn" onclick="redirectToPagePaket(this)">Lihat</button></a>
            @endif
            
        </div>
        @endforeach

                       
<!--START GUIDE-->
        @foreach ($historiguide as $historiguidetunggal)       
            <div class="item" data-category="guide" data-id="1" data-name="Bli Ngurah - Tour Guide" data-location="Denpasar, Kota Madya" data-price="Rp 919.542/hari">
                <img src="{{url("/assets/guide1.jpg")}}"  alt="img-guide1">
                <h3>{{$historiguidetunggal->judul_tour}}</h3>
                <p>Tour guide pesan secara langsung</p>
                <p>Harga Dinegosiasikan</p>
               
                @if(Auth::check() && Auth::user()->role == 'user')
                <a href="{{ route('tawaranspesial.guide',['id'=>$historiguidetunggal->id_histori])}}"><button class="book-btn" onclick="redirectToPagePaket(this)">Pesan</button></a>
                @else
                <a href="{{ route('tawaranspesial.guide',['id'=>$historiguidetunggal->id_histori])}}"><button class="book-btn" onclick="redirectToPagePaket(this)">Lihat</button></a>
                @endif
                
            </div>
        @endforeach
<!--END GUIDE-->

<!--START PAKET-->
        @foreach ($paket as $pakettunggal)  
        <div class="item" data-category="paket" data-id="1" data-name="cccccc" data-location="ccccc" data-price="ccccc">
            <img src="{{url("/assets/hotel1.jpg")}}" alt="Watermark Hotel and Spa Bali">
            <h3>{{$pakettunggal->nama}}</h3>
            <p>{{$pakettunggal->alamat}}</p>
            <p>{{$pakettunggal->harga}}</p>


            @if(Auth::check() && Auth::user()->role == 'user')
            <a href="{{ route('tawaranspesial.paket',['id'=>$pakettunggal->id_paket])}}"><button class="book-btn" onclick="redirectToPagePaket(this)">Pesan</button></a>
            @else
            <a href="{{ route('tawaranspesial.paket',['id'=>$pakettunggal->id_paket])}}"><button class="book-btn" onclick="redirectToPagePaket(this)">Lihat</button></a>
            @endif
            
        </div>
        @endforeach

    </div>
</section>
@endsection

@section('js')
<!-- plugin -->
<script>
    feather.replace();

    // Start Filter kategori
    const filterButtons = document.querySelectorAll('.filter-btn');
    const items = document.querySelectorAll('.content-grid .item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');
            items.forEach(item => {
                if (category === 'semua' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    // End Filter kategori

    // Start Function to redirect to booking penginapan page
    function redirectToPage(button) {
    const item = button.closest('.item');
    const itemId = item.getAttribute('data-id');
    const itemName = item.getAttribute('data-name');
    const itemLocation = item.getAttribute('data-location');
    const itemPrice = item.getAttribute('data-price');
        window.location.href = `tawaran-special-pesan.html?id=${itemId}&name=${encodeURIComponent(itemName)}&location=${encodeURIComponent(itemLocation)}&price=${encodeURIComponent(itemPrice)}`;
    }
    // Start Function to redirect to booking page

    function redirectToPageGuide(button) {
    const item = button.closest('.item');
    const itemId = item.getAttribute('data-id');
    const itemName = item.getAttribute('data-name');
    const itemLocation = item.getAttribute('data-location');
    const itemPrice = item.getAttribute('data-price');

    // You can pass these details to a new page via URL parameters or store them in localStorage.
    // For example, navigating to a booking page with item details:
    window.location.href = `tawaran-special-pesan-guide.html?id=${itemId}&name=${encodeURIComponent(itemName)}&location=${encodeURIComponent(itemLocation)}&price=${encodeURIComponent(itemPrice)}`;
    }

    function redirectToPagePaket(button) {
    const item = button.closest('.item');
    const itemId = item.getAttribute('data-id');
    const itemName = item.getAttribute('data-name');
    const itemLocation = item.getAttribute('data-location');
    const itemPrice = item.getAttribute('data-price');

    // You can pass these details to a new page via URL parameters or store them in localStorage.
    // For example, navigating to a booking page with item details:
    window.location.href = `tawaran-special-pesan-paket.html?id=${itemId}&name=${encodeURIComponent(itemName)}&location=${encodeURIComponent(itemLocation)}&price=${encodeURIComponent(itemPrice)}`;
    }

</script>
@endsection      

    