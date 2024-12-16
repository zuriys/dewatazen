@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/tawaranspesialpesan.css') }}" />
@endsection

@section('content')
    <!-- start object -->
    <div id="detail-container1">
        <img id="hotel-image" src="{{ url('assets/hotel1.jpg') }}" alt="Gambar Hotel" />
    </div>
        <div id="detail-container2">
            <div>
                <p id="hotel-name">{{ $admindashboard->nama }}</p>
                <p id="hotel-location">{{ $admindashboard->alamat }}</p>
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
                    <h4>Pilih Kamar</h4>
                    <div class="radio-options">
                        <label>
                            <li> 1 Kasur</li>
                        </label>
                        <label>
                            <li> 2 Kasur</li>
                        </label>
                        <label>
                            <li> 3 Kasur</li>
                        </label>
                    </div>
                </div>

                <div id="deskripsi">
                    <!-- Menambahkan judul di bagian atas box -->
                    <div id="judul-deskrispi">
                        <h3>Deskripsi Tambahan</h3>
                    </div>
                    <div id="detail-deskripsi">
                        <p>{{ $admindashboard->deskripsi_fasilitas }}</p>
                    </div>
                </div>
                <div style="text-align: center">
                <a href="{{route('admin.dashboard')}}">
                    <button class="btn1" style="margin:0 auto">Kembali</button>
                  </a>
                </div>
            </div>

            <div>
                <h3 id="hotel-price">Rp.{{ $admindashboard->harga }}/malam</h3>
            </div>



            <div id="fasilitas-akomodasi">
                <h3>Fasilitas Akomodasi</h3>
                <div class="checkbox-container">
                    @if ($admindashboard->ac)
                        <div>
                            <li>AC</li>
                        </div>
                    @endif

                    @if ($admindashboard->parkir)
                        <div>
                            <li>Parkir</li>
                        </div>
                    @endif

                    @if ($admindashboard->taman)
                        <div>
                            <li>Taman</li>
                        </div>
                    @endif

                    @if ($admindashboard->restoran)
                        <div>
                            <li>Restoran</li>
                        </div>
                    @endif

                    @if ($admindashboard->lift)
                        <div>
                            <li>Lift</li>
                        </div>
                    @endif

                    @if ($admindashboard->balkon)
                        <div>
                            <li>Balkon</li>
                        </div>
                    @endif

                    @if ($admindashboard->kolam_berenang)
                        <div>
                            <li>Kolam Renang</li>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- end object -->
   
@endsection


@section('js')
    <!--Start Script-->
    <script>
        feather.replace();

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
            1: 'img/tawaran-spesial/hotel1.jpg',
            2: 'img/tawaran-spesial/hotel2.jpg'
        };


        const params = getQueryParams();

        document.getElementById("pesanSekarang").addEventListener("click", function() {
            const kasurValue = document.querySelector('input[name="kasur"]:checked')?.value || "";

            localStorage.setItem("kasur", kasurValue);


            localStorage.setItem("selectedOption", selectedValue);

            // Arahkan ke halaman selanjutnya
            window.location.href = "tawaran-special-detail-pesan.html?id=" + params.id + "&name=" +
                encodeURIComponent(params.name) + "&location=" + encodeURIComponent(params.location) + "&price=" +
                encodeURIComponent(params.price);
        });

        // Fungsi redirect untuk mengarahkan ke halaman detail
        function redirectToPage1() {
            const id = params.id;
            const name = encodeURIComponent(params.name);
            const location = encodeURIComponent(params.location);
            const price = encodeURIComponent(params.price);

            window.location.href =
                `tawaran-special-detail-pesan.html?id=${id}&name=${name}&location=${location}&price=${price}`;
        }
    </script>
@endsection

<script src="{{ url('/js/script.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!--Start Script-->
