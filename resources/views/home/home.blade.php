@extends('beranda')

<link rel="stylesheet" href="../css/home.css">
@section('konten')
    <div class="beranda">
        <div class="identitas">
            <div class="line-1">
                <img src="{{ $jk === 'l' ? asset('../img/woman.png') : asset('../img/man.png') }}" alt="P"
                    id="gambar-profil">
                <h4>{{ Auth::user()->name }}</h4>
            </div>
            <p>
                <b>{{ Auth::user()->posisi }}</b><br>
                <b>{{ Auth::user()->nip }}</b>
            </p>
            <div class="date">
                <h4>Tanggal</h4>
                <p>{{ now()->format(' M, jS Y') }}</p>
            </div>

            <div class="ttl-perkara">
                <h4>Total Perkara</h4>
                <p>{{ $total_cases }} Kasus</p>
            </div>
            <div class="ttl-kasus">
                <h4>Jumlah Arsip</h4>
                <p>{{ $total_file }} Berkas</p>
            </div>
            <div class="ttl-locus">
                <h4>Total Locus</h4>
                <p>{{ $total_locus }} Lokasi</p>
            </div>
            <div class="all-locus">
                <h4>All Locus Values</h4>
                <ul>
                    @foreach ($total_dik as $dik)
                        <li>{{ $dik }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
