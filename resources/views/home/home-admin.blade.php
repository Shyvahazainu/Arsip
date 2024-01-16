@extends('beranda')

<link rel="stylesheet" href="../css/home.css">
@section('konten')

  <div class="identitas">
    <h4>Selamat Datang home admin <b>{{Auth::user()->name}}</b>, 
    Anda Login sebagai <b>{{Auth::user()->level}}</b><br>
    Posisi anda <b>{{Auth::user()->posisi}}</b><br>
    NIP anda : <b>{{Auth::user()->nip}}</b></h4>
    
    <!-- Assuming you have a $currentDate variable in your controller or passed to the view -->
    <div class="date">
      <p>{{ now()->format(' F, jS Y'); }}</p>
      
      <h1>Total Cases: {{ $total_cases }}</h1>
    </div>
  </div>

@endsection