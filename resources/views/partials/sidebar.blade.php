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
                <li class=" {{ Route::is('home') ? 'active' : '' }}"><a href="{{ url('home') }}"><img
                            src="../img/dashboard.png" alt="">Dashboard</a></li>
                <li class=" {{ Route::is('penyidikan') ? 'active' : '' }}"><a href=" {{ url('penyidikan') }}"><img
                            src="../img/penyidikan.png" alt="">Penyidikan</a>
                </li>
                <li class=" {{ Route::is('penuntutan') ? 'active' : '' }}"><a href="{{ url('penuntutan') }}"><img
                            src="../img/penuntutan.png" alt="">Penuntutan</a>
                </li>
                <li class=" {{ Route::is('ee') ? 'active' : '' }}"><a href="{{ url('ee') }}"><img
                            src="../img/ee.png" alt="">EE</a></li>
                <li class=" {{ Route::is('kontak') ? 'active' : '' }}"><a href="{{ url('kontak') }}"><img
                            src="../img/call.png" alt="">Kontak</a></li>
                <li class=" {{ Route::is(route('actionlogout')) ? 'active' : '' }}"><a
                        href="{{ route('actionlogout') }}"><img src="../img/logout.png" alt="">Log Out</a>
                </li>
            </ul>

        </div>
    </header>
</div>
<script src="../js/nav.js"></script>
