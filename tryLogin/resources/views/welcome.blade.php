@extends('layouts.template')
@section('title','UntukMasarin.id')
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/style3.css') }}" type="text/css">
@endsection
@section('content')
@include('layouts.navigation')
<main>
      <div class="container">
        <div class="row align-self-center">
          <div class="col">
            <h1>UntukMasarin</h1>
            <p> <b>UntukMasarin</b> bertujuan membantu UMKM <br> dalam mempermudah berbagai kegiatan promosi UMKM<br> dengan menyediakan beragam jasa<br> seperti Foto produk, Desain, Dan pembuatan video promosi</p>
            <a href="/kategori"> <button type="button" class="btn btn-danger btn-psn pesan">PESAN</button></a>
            <a href="/contact"> <button type="button" class="btn btn-danger btn-ktk kontak">KONTAK</button></a>
          </div>
        </div>
      </div>
</main>
    <!--Services-->

<section class="page2">
  <div class="container text-center">
      <h2 class="heading mb-5">BEBERAPA HASIL DARI JASA <b>UNTUKMASARIN</b></h2>
      <div class="row mb-3">
        <!-- video -->
        <div class="col mr-5">
        <!-- <p>test</p> -->
            <video width="500" height="420" controls>
            <source src="{{ URL::asset('img/umi.MP4') }}" type="video/mp4">
            <source src="{{ URL::asset('img/umi.ogg') }}" type="video/ogg">
          </video>
        </div>
        <!-- card -->
        <div class="col">

          <div class="row jasa-produk mr-1 mb-1">
            <div class="card-group">
              <div class="card card1">
                <img class="card-img-top" src="{{ URL::asset('assets/img/assets/icon1.png') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-title">Portofolio 1</p>
                </div>
              </div>
              <div class="card card2">
                <img class="card-img-top" src="{{ URL::asset('assets/img/assets/icon1.png') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-title">Portofolio 2</p>
                </div>
              </div>
              <div class="card card3">
                <img class="card-img-top" src="{{ URL::asset('assets/img/assets/icon1.png') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-title">Portofolio 3</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row jasa-produk mr-1">
            <div class="card-group">
              <div class="card card4">
                <img class="card-img-top" src="{{ URL::asset('assets/img/assets/icon1.png') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-title">Portofolio 4</p>
                </div>
              </div>
              <div class="card card5">
                <img class="card-img-top" src="{{ URL::asset('assets/img/assets/icon1.png') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-title">Portofolio 5</p>
                </div>
              </div>
              <div class="card card6">
                <img class="card-img-top" src="{{ URL::asset('assets/img/assets/icon1.png') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-title">Portofolio 6</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    <strong class="produk text-primary">By ahlibisnis.id</strong>
  </div>
</section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#FEDD56" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,208C384,192,480,192,576,192C672,192,768,192,864,192C960,192,1056,192,1152,165.3C1248,139,1344,85,1392,58.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
  </svg>

<section class="page3">
  <div class="container text-center">
    <h2 class="heading">PAKET JASA FOTO PRODUK</h2>
    <div class="row service ">
      <div class="col-4 nopadding produk1">
        <img src="{{ URL::asset('img/paket1-makanan.png') }}">
      </div>
      <div class="col-4 nopadding produk2">
        <img src="{{ URL::asset('img/paket2.png') }}">
      </div>
      <div class="col-4 nopadding produk3">
        <img src="{{ URL::asset('img/studio1.png') }}">
      </div>
    </div>
    <strong class="produk text-primary">By ahlibisnis.id</strong>
  </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#E14354" fill-opacity="1" d="M0,64L48,53.3C96,43,192,21,288,32C384,43,480,85,576,101.3C672,117,768,107,864,117.3C960,128,1056,160,1152,176C1248,192,1344,192,1392,192L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

<section class="page4">
  <div class="container text-center">
    <h2 class="heading">PAKET JASA DESAIN PRODUK</h2>
    <div class="row service ">
      <div class="col-4 nopadding produk1">
        <a class="nav-item nav-link {{request()->is('detailProduk') ? 'active' :''}}" href="{{ url('/detailProduk') }}"><img src="{{ URL::asset('img/paket1-logo.png') }}"></a>
      </div>
      <div class="col-4 nopadding produk2">
        <a class="nav-item nav-link {{request()->is('detailProduk') ? 'active' :''}}" href="{{ url('/detailProduk') }}"><img src="{{ URL::asset('img/paket2-logo.png') }}"></a>
      </div>
      <div class="col-4 nopadding produk3">
        <a  class="nav-item nav-link {{request()->is('detailProduk') ? 'active' :''}}" href="{{ url('/detailProduk') }}"><img src="{{ URL::asset('img/video-animasi.png') }}"></a>
      </div>
    </div>
  <strong class="produk text-primary">By ahlibisnis.id</strong>
  </div>
</section>

<footer>&copy; Copyright 2020 ahlibisnis.id</footer>


    @endsection
