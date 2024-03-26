<link rel="stylesheet" href="../css/nav.css">
<div class="hdr-container">
    <header>
        <div class="logo-container">
            <img src="../img/logo-kj.png" alt="Logo Kejati">
        </div>
        <div class="nav" id="navbar">
            <div class="tambah-data">
                <li>
                    <h5>
                        Tambah <br>Arsip
                    </h5>
                    <a type="button" href ="{{ url('upload') }}">+</a>
                    {{-- </div> --}}

                </li>
            </div>
            <ul class="kiri">
                <a href="{{ url('home') }}">
                    <li class=" {{ Route::is('home') ? 'active' : '' }}"><img src="../img/dashboard.png"
                            alt="">Beranda</li>
                </a>
                <a href=" {{ url('penyidikan') }}">
                    <li class=" {{ Route::is('penyidikan') ? 'active' : '' }}"><img src="../img/penyidikan.png"
                            alt="">Penyidikan
                    </li>
                </a>
                <a href="{{ url('penuntutan') }}">
                    <li class=" {{ Route::is('penuntutan') ? 'active' : '' }}"><img src="../img/penuntutan.png"
                            alt="">Penuntutan
                    </li>
                </a>
                <a href="{{ url('ee') }}">
                    <li class=" {{ Route::is('ee') ? 'active' : '' }}"><img src="../img/ee.png" alt="">EE</li>
                </a>
                <a href="{{ url('kontak') }}">
                    <li class=" {{ Route::is('kontak') ? 'active' : '' }}"><img src="../img/call.png"
                            alt="">Kontak</li>
                </a>
                <a href="{{ route('actionlogout') }}">
                    <li class=" {{ Route::is(route('actionlogout')) ? 'active' : '' }}"><img src="../img/logout.png"
                            alt="">Keluar
                    </li>
                </a>
            </ul>

        </div>
    </header>
</div>
<script src="../js/nav.js"></script>
