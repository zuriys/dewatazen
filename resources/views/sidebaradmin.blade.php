<!-- Sidebar -->
<div class="sidebar">

    @dump(Auth::user()->role)
    <ul>
        @if (Auth::user()->role == 'super_admin')
            <li>
                <a href="{{ route('admin.profile') }}"><i data-feather="user"></i>Profile</a>
            </li>
            <li>
                <a href="{{ route('superadmin.member') }}"><i data-feather="trello"></i>Member</a>
            </li>
            <li>
                <a href="{{ route('superadmin.blog') }}"><i data-feather="trello"></i>Blog</a>
            </li>
            <li>
                <li style="display: flex; align-items: center;">
                    <form method="POST" action="{{ route('logout') }}" style="margin: auto; margin-left:35px">
                        @csrf
                        <button type="submit" style="
                            background: none; /* Hilangkan background putih */
                            color: #FFFFFF; /* Warna font putih */
                            border: none; /* Hapus border */
                            padding: 0; /* Hilangkan padding default */
                            font-size: 16px; /* Perbesar ukuran font */
                            display: flex; /* Atur agar ikon dan teks sejajar */
                            align-items: center; /* Posisikan vertikal rata tengah */
                            gap: 8px; /* Beri jarak antara ikon dan teks */
                            cursor: pointer; /* Tambahkan pointer saat hover */
                            text-decoration: none;
                            font-family: Arial, sans-serif;">
                            <span style="font-size: 20px;">&#x2192;</span>
                            Keluar
                        </button>
                    </form>
                </li>
        @endif

        @if (Auth::user()->role == 'admin_hotel')
            <li>
                <a href="{{ route('admin.profile') }}"><i data-feather="user"></i>Profile</a>
            </li>
            <li>
                <a href="{{ route('admin.dashboard') }}"><i data-feather="trello"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ route('admin.pesanan') }}"><i data-feather="shopping-bag"></i>Pesanan</a>
            </li>
            <li style="display: flex; align-items: center;">
                <form method="POST" action="{{ route('logout') }}" style="margin: auto; margin-left:35px">
                    @csrf
                    <button type="submit" style="
                        background: none; /* Hilangkan background putih */
                        color: #FFFFFF; /* Warna font putih */
                        border: none; /* Hapus border */
                        padding: 0; /* Hilangkan padding default */
                        font-size: 16px; /* Perbesar ukuran font */
                        display: flex; /* Atur agar ikon dan teks sejajar */
                        align-items: center; /* Posisikan vertikal rata tengah */
                        gap: 8px; /* Beri jarak antara ikon dan teks */
                        cursor: pointer; /* Tambahkan pointer saat hover */
                        text-decoration: none;
                        font-family: Arial, sans-serif;">
                        <span style="font-size: 20px;">&#x2192;</span>
                        Keluar
                    </button>
                </form>
            </li>
        @endif


        @if (Auth::user()->role == 'admin_guide')
            <li>
                <a href="{{ route('admin.profile') }}"><i data-feather="user"></i>Profile</a>
            </li>
            <li>
                <a href="{{ route('admin.dashboard') }}"><i data-feather="trello"></i>Dashboard</a>
            </li>
            <li style="display: flex; align-items: center;">
                <form method="POST" action="{{ route('logout') }}" style="margin: auto; margin-left:35px">
                    @csrf
                    <button type="submit" style="
                        background: none; /* Hilangkan background putih */
                        color: #FFFFFF; /* Warna font putih */
                        border: none; /* Hapus border */
                        padding: 0; /* Hilangkan padding default */
                        font-size: 16px; /* Perbesar ukuran font */
                        display: flex; /* Atur agar ikon dan teks sejajar */
                        align-items: center; /* Posisikan vertikal rata tengah */
                        gap: 8px; /* Beri jarak antara ikon dan teks */
                        cursor: pointer; /* Tambahkan pointer saat hover */
                        text-decoration: none;
                        font-family: Arial, sans-serif;">
                        <span style="font-size: 20px;">&#x2192;</span>
                        Keluar
                    </button>
                </form>
            </li>
        @endif

    </ul>
</div>
</div>
