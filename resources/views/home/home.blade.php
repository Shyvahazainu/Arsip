@extends('beranda')

@php
    $counter = 1;
@endphp

<link rel="stylesheet" href="../css/home.css">
@section('konten')
    <div class="gambar-profil">
        <img src="../img/man-1.png" alt="img-1" id="gambar-profil">
    </div>
    <div class="beranda">
        <div class="user">
            <h2><b>{{ Auth::user()->name }} </b></h2>

            <p>
                {{ Auth::user()->posisi }}<br>
                {{ Auth::user()->nip }}
            </p>
            <a href="{{ url('profil') }}">
                <button class="profil">
                    Lihat Profil
                </button>
            </a>

        </div>
        <div class="identitas">

            <div class="date">
                <img src="../img/date.png" alt="" srcset="">
                <p><span>Tanggal</span> <br>{{ now()->format(' M, jS Y') }}</p>
            </div>
            {{-- <h1>|</h1> --}}
            <div class="ttl-perkara">
                <img src="../img/case.png" alt="" srcset="">
                <p><span>Total perkara</span> <br>{{ $total_cases }} Kasus</p>
            </div>
            {{-- <h1>|</h1> --}}

            <div class="ttl-arsip">
                <img src="../img/arsip.png" alt="" srcset="">
                <p><span>Jumlah Arsip</span> <br>{{ $total_file }} Berkas</p>
            </div>
            {{-- <h1>|</h1> --}}
            <div class="ttl-locus">
                <img src="../img/locus.png" alt="" srcset="">
                <p><span>Total Locus</span> <br>{{ $total_locus }} Lokasi</p>
            </div>
        </div>
        <input class="search" type="search" placeholder="Search...">

        <div class="bawah">
            <div class="new-5">
                <h4>Data Terbaru</h4>
                @foreach ($dataArsip->take(5) as $arsip)
                    <ol class="top-5">
                        <div>{{ $counter }}</div>
                        <h5> <span>{{ $arsip->dok }}</span> <br>
                            <span>Tangal ditambahkan : {{ $arsip->created_at }}</span>
                        </h5>
                    </ol>
                    @php
                        $counter++;
                    @endphp
                @endforeach
            </div>


        </div>
    </div>
@endsection
