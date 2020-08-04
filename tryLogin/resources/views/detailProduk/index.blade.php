@extends('layouts.template')
@section('title','Detail Produk')
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/detailProduk.css') }}" type="text/css">
@endsection

@section('content')
@include('layouts.navigation')
<main>
    <div class="container">
        <div class="row ">
            <div class="col-md-6 text-center">
                <img src="{{ URL::asset('img/iconDuduk.webp') }}">
            </div>
            <div class="col-md-6">
              <h1>Produk dari UntukMasarin</h1>
              <hr>
              <p>Membutuhkan Bantuan?</p>
              <a href="/contact"> <button type="button" class="btn btn-danger">Kontak kami</button> </a>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1"
            d="M0,224L60,192C120,160,240,96,360,85.3C480,75,600,117,720,144C840,171,960,181,1080,186.7C1200,192,1320,192,1380,192L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
</main>
<!-- Foto Produk Section -->
<div class="btn-group mb-5 d-flex justify-content-center" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary btn-lg btn1 border border-light" id="btn1" onclick="myFunction()">Foto Produk</button>
  <button type="button" class="btn btn-secondary btn-lg btn2 border border-light" id="btn2" onclick="btn2Function()">Desain Grafis</button>
</div>

<script>
function myFunction() {
  var x = document.getElementById("kol-1");
  var y = document.getElementById("kol-2");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  }
else{
    x.style.display = "block";
  }
}

function btn2Function(){
  var x = document.getElementById("kol-1");
  var y = document.getElementById("kol-2");
  if (y.style.display == "none") {
    x.style.display = "none";
    y.style.display = "block";
  }
else{
    y.style.display = "none";
  }
}
</script>


<div class="fotoProduk fp1 mb-5" id="kol-1">
  <div class="container">
    <div class="row mb-5">
        <div class="col-lg-3 col-md-6 text-center">
                <img class="img-fluid" src="{{ URL::asset('img/foto_produk/paket1(foto-produk).png')}}" class="img-fluid">
                <button type="button" class="btn btn-danger">PESAN</button>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
                <img class="img-fluid" src="{{ URL::asset('img/foto_produk/paket2(foto-produk).png')}}" class="img-fluid">
                <button type="button" class="btn btn-danger">PESAN</button>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
                <img class="img-fluid" src="{{ URL::asset('img/foto_produk/studio1(foto-produk).png')}}" class="img-fluid">
                <button type="button" class="btn btn-danger">PESAN</button>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
                <img class="img-fluid" src="{{ URL::asset('img/foto_produk/studio2(foto-produk).png')}}" class="img-fluid">
                <button type="button" class="btn btn-danger">PESAN</button>
        </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-3 col-md-6 text-center">
              <img class="img-fluid" src="{{ URL::asset('img/foto_produk/outdoor(foto-produk).png')}}" class="img-fluid">
              <button type="button" class="btn btn-danger">PESAN</button>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
              <img class="img-fluid" src="{{ URL::asset('img/foto_produk/paket1-makanan(foto-produk).png')}}" class="img-fluid">
              <button type="button" class="btn btn-danger">PESAN</button>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
              <img class="img-fluid" src="{{ URL::asset('img/foto_produk/paket2-makanan(foto-produk).png')}}" class="img-fluid">
              <button type="button" class="btn btn-danger">PESAN</button>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
              <img class="img-fluid" src="{{ URL::asset('img/foto_produk/paket3-makanan(foto-produk).png')}}" class="img-fluid">
              <button type="button" class="btn btn-danger">PESAN</button>
      </div>
    </div>
  </div>
</div>

<div class="fotoProduk mb-5" id="kol-2">
  <div class="container">
    <div class="row mb-5">
        <div class="col-lg-4 col-md-6 text-center">
                <img class="img-fluid" src="{{ URL::asset('img/desain_grafis/paket1(jasa-desain).png')}}" class="img-fluid">
                <button type="button" class="btn btn-danger">PESAN</button>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
                <img class="img-fluid" src="{{ URL::asset('img/desain_grafis/paket2(jasa-desain).png')}}" class="img-fluid">
                <button type="button" class="btn btn-danger">PESAN</button>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
                <img class="img-fluid" src="{{ URL::asset('img/desain_grafis/paketStory(jasa-desain).png')}}" class="img-fluid">
                <button type="button" class="btn btn-danger">PESAN</button>
        </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-4 col-md-6 text-center">
              <img class="img-fluid" src="{{ URL::asset('img/desain_grafis/paket1-logo.png')}}" class="img-fluid">
              <button type="button" class="btn btn-danger">PESAN</button>
      </div>
      <div class="col-lg-4 col-md-6 text-center">
              <img class="img-fluid" src="{{ URL::asset('img/desain_grafis/paket2-logo.png')}}" class="img-fluid">
              <button type="button" class="btn btn-danger">PESAN</button>
      </div>
      <div class="col-lg-4 col-md-6 text-center">
              <img class="img-fluid" src="{{ URL::asset('img/desain_grafis/video-animasi.png')}}" class="img-fluid">
              <button type="button" class="btn btn-danger">PESAN</button>
      </div>
    </div>
  </div>
</div>

<!-- Carousel Section -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ URL::asset('img/new-york-1745089_1920.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ URL::asset('img/bgDesigner.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ URL::asset('img/photography-of-sea-during-sunset-258210.jpg') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection
