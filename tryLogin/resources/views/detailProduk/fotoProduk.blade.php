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
                <h1>Produk Jasa dari Kami</h1>
                <hr>
                <p>Membuatuhkan Bantuan?</p>
                <button type="button" class="btn btn-danger">Contact Us</button>

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
<!-- <div class="fotoProduk">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 text-center mt-5">
                <img src="{{ URL::asset('img/iconFoto.webp') }}">
            </div>
            <div class="col-md-6 ">
                <h1>Foto Produk</h1>
                <p>first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model
                sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free
                from repetition, injected humour, or non-characteristic words etc.</p>
                <button type="button" class="btn btn-danger">PESAN</button>
                <button type="button" class="btn btn-danger">LIHAT CONTOH</button>
            </div>
        </div>
    </div>
</div> -->
<!-- End of Foto Produk Section -->

<!-- Jasa Desain Section -->
<div class="jasaDesain">
    <div class="container">
        <h1 class="text-center">Jasa Desain</h1>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="box">
                    <img src="{{ URL::asset('img/iconFeed.webp') }}">
                    <h5>Desain Feed Instagram</h5>
                    <p>to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition,
                    injected humour, or non-characteristic words etc.</p>
                    <button type="button" class="btn btn-warning">PESAN</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <img src="{{ URL::asset('img/iconStory.webp') }}">
                    <h5>Desain Instastory</h5>
                    <p>to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition,
                    injected humour, or non-characteristic words etc.</p>
                    <button type="button" class="btn btn-warning">PESAN</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <img src="{{ URL::asset('img/iconVideo.webp')}}">
                    <h5>Desain Video Animasi</h5>
                    <p>to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition,
                    injected humour, or non-characteristic words etc.</p>
                    <button type="button" class="btn btn-warning">PESAN</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">

                    <img src="{{ URL::asset('img/iconLogo.webp') }}">
                    <h5>Desain Logo</h5>
                    <p>to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition,
                    injected humour, or non-characteristic words etc.</p>
                    <button type="button" class="btn btn-warning">PESAN</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Jasa Desain Section -->

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
