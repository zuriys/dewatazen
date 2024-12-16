@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/tawaranspesialpaket.css') }}" />
@endsection

@section('content')
    <div id="detail-container1">
        <img id="paket-image" src="{{ url('/assets/paket1.png') }}" alt="Gambar Paket"/>
    </div>
        
    <form method="GET" action="{{ route('tawaranspesial.paket.pesan', ['id' => $paketpesan->id_paket] ) }}">
        @csrf
        <div id="detail-container2">
            <div>
                <p id="paket-name">{{ $paketpesan->nama }}</p>
                <p id="paket-location">{{ $paketpesan->alamat }}</p>
                <div id="rating-container">
                    ★★★★☆
                </div>

                <div id="akomodasi">
                    <div id="judul-akomodasi">
                        <h3>Area Akomodasi</h3>
                    </div>
                    <div id="detail-akomodasi">
                        <div id="akomodasi-data">
                            <p>Pusat Kota</p>
                            <p>SPBU Terdekat</p>
                            <p>Rumah Sakit Umum</p>
                        </div>

                        <div id="akomodasi-jarak">
                            <p>1 Km</p>
                            <p>2 Km</p>
                            <p>1 Km</p>
                        </div>
                    </div>
                </div>

                <div class="dropdown-container">
                    <h3>Jam Booking</h3>
                    <p>Anda dapat melakukan booking dari jam 14.00 WITA - 00.00 WITA</p>
                </div>

                <div class="radio-container">
                @if (Auth::check() && Auth::user()->role == "user")
                    <h4>Pilih Kamar</h4>
                    <div class="radio-options">
                        <label>
                            <input type="radio" name="kasur" value="1" />
                            1 Kasur
                        </label>
                        <label>
                            <input type="radio" name="kasur" value="2" />
                            2 Kasur
                        </label>
                        <label>
                            <input type="radio" name="kasur" value="3" />
                            3 Kasur
                        </label>
                    </div>
                @else
                <div class="radio-options">
                    <label>
                        1 Kasur
                    </label>
                    <label>
                        2 Kasur
                    </label>
                    <label>
                        3 Kasur
                    </label>
                </div>
                @endif
                </div>

                <div id="deskripsi">
                    <!-- Menambahkan judul di bagian atas box -->
                    <div id="judul-deskrispi">
                        <h3>Deskripsi Tambahan</h3>
                    </div>
                    <div id="detail-deskripsi">
                        <p>{{ $paketpesan->deskripsi_fasilitas }}</p>
                    </div>
                </div>

            </div>

            <div>
                <h3 id="paket-price">Rp.{{ $paketpesan->harga }}/malam</h3>
            </div>



            <div id="fasilitas-akomodasi">
                <h3>Fasilitas Akomodasi</h3>
                <div class="checkbox-container">
                    @if ($hotelpesan->ac)
                        <div>
                            <li>AC</li>
                        </div>
                    @endif

                    @if ($hotelpesan->parkir)
                        <div>
                            <li>Parkir</li>
                        </div>
                    @endif

                    @if ($hotelpesan->taman)
                        <div>
                            <li>Taman</li>
                        </div>
                    @endif

                    @if ($hotelpesan->restoran)
                        <div>
                            <li>Restoran</li>
                        </div>
                    @endif

                    @if ($hotelpesan->lift)
                        <div>
                            <li>Lift</li>
                        </div>
                    @endif

                    @if ($hotelpesan->balkon)
                        <div>
                            <li>Balkon</li>
                        </div>
                    @endif

                    @if ($hotelpesan->kolam_berenang)
                        <div>
                            <li>Kolam Renang</li>
                        </div>
                    @endif
                </div>
            </div>


        </div>

<!--        @if (Auth::check() && Auth::user()->role == "user")
        <div class="button-container"  id="pesan-sekarang" >
            <button class ="book-btn"  >Pesan Sekarang</button>
        </div>
        @endif
    -->

        @if (Auth::check() && Auth::user()->role == "user")
        <div class="button-container" >
          
            <a id="pesan-sekarang" href="{{ route('tawaranspesial.paket.pesan',['id'=>$paketpesan->id_paket])}}"> <button class ="book-btn" style="color: white">Pesan Sekarang</button></a>

        </div>
        @endif
       

       
        <!-- end object -->
    </form>
@endsection


@section('js')
<!-- plugin -->
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
        1: 'img/tawaran-spesial/paket1.png', 
        2: 'img/tawaran-spesial/paket2.png'  
    };
    

    const params = getQueryParams();

    //document.getElementById('paket-image').src = images[params.id] || 'img/default.jpg';
    document.getElementById('paket-name').textContent = params.name || 'Hotel Default';
    document.getElementById('paket-price').textContent = params.price || 'Harga Tidak Diketahui';

    document.getElementById("pesanSekarang").addEventListener("click", function() {
        const kasurValue = document.querySelector('input[name="kasur"]:checked')?.value || "";


        localStorage.setItem("kasur", kasurValue);

    // Simpan nilai yang dipilih ke localStorage
    localStorage.setItem("selectedOption", selectedValue);

    // Arahkan ke halaman selanjutnya
        window.location.href = "tawaran-special-detail-pesan-paket.html?id=" + params.id + "&name=" + encodeURIComponent(params.name) + "&location=" + encodeURIComponent(params.location) + "&price=" + encodeURIComponent(params.price);
    });


    function redirectToPagePesanPaket1() {
    const id = params.id;
    const name = encodeURIComponent(params.name);
    const location = encodeURIComponent(params.location);
    const price = encodeURIComponent(params.price);

    window.location.href = `tawaran-special-detail-pesan-paket.html?id=${id}&name=${name}&location=${location}&price=${price}`;
}

    
</script>
<script src="{{url("js/script.js")}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection