@extends('beranda')

@section('konten')
  <h4>Selamat Datang home biasa <b>{{Auth::user()->name}}</b>, Anda Login sebagai <b>{{Auth::user()->level}}</b>.</h4>
  <li><a href="{{route('actionlogout')}}"><i class="fa fa-power-off"></i> Log Out</a></li>

@endsection