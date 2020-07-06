@extends('layouts.app')
@section('title','UntukMasarin.id')
@section('style')
<link rel="stylesheet" href="css/style3.css">
@endsection

    @section('content')
    <div id="menu-area">
        <div class="banner">
            <div class="content">
                <h2>UntukMasarin</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.corporis explicabo nam adipisci saepe dolore tenetur reiciendis. Praesentium ratione ex, nesciunt perspiciatis velit quam est deserunt.</p>
                <a href="#" class="button button3"><img src="{{ URL::asset('assets/img/Button pesan sekarang.png') }}"></a>
                <a href="#" class="button button4"><img src="{{ URL::asset('assets/img/BUTTON KONTAK KAMI.png') }}"></a>
            </div>
            
        </div>
    </div>
    <!--Services-->
    
    <section class="jasaproduk">
        <div class="produk">
            <h2 class="heading">BEBERAPA HASIL DARI JASA <b>UNTUKMASARIN</b></h2>
            <div class="container">
                <div class="jasaPusat">
                    <div>
                        <img src="{{ URL::asset('assets/img/assets/icon1.png') }}">
                    </div>
                </div>
                <div class="jasaview1">
                    <div>
                        <img src="{{ URL::asset('assets/img/assets/icon1.png') }}">
                        <b><p>Portofolio 1</p></b>
                    </div>
 
                </div>
                <div class="jasaview2">
                    <div>
                        <img src="{{ URL::asset('assets/img/assets/icon1.png') }}">
                        <b><p>Portofolio 2</p></b>
                    </div>
                </div>
                <div class="jasaview3">
                    <div>
                        <img src="{{ URL::asset('assets/img/assets/icon1.png') }}">
                        <b><p>Portofolio 3</p></b>
                    </div>
                </div>
                <div class="jasaview4">
                    <div>
                        <img src="{{ URL::asset('assets/img/assets/icon1.png') }}">
                        <b><p>Portofolio 4</p></b>
                    </div>
                </div>
                <div class="jasaview5">
                    <div>
                        <img src="{{ URL::asset('assets/img/assets/icon1.png') }}">
                        <b><p>Portofolio 5</p></b>
                    </div>
                </div>
                <div class="jasaview6">
                    <div>
                        <img src="{{ URL::asset('assets/img/assets/icon1.png') }}">
                        <b><p>Portofolio 6</p></b>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="services">
        <h2 class="heading">PAKET JASA FOTO PRODUK</h2>
        <div class="container">
            <div class="serviceBx1">
                <div>
                    <img src="{{ URL::asset('assets/img/kOTAK TABEL MERAH.png') }}">
                   
                </div>
            </div>
            <div class="serviceBx2">
                <div>
                    <img src="{{ URL::asset('assets/img/kOTAK TABEL MERAH.png') }}">
                    
                </div>
            </div>
            <div class="serviceBx3">
                <div>
                    <img src="{{ URL::asset('assets/img/kOTAK TABEL MERAH.png') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="jasadesign">
        <div class="design">
            <h2 class="heading">PAKET JASA DESAIN</h2>
            <div class="container">
                <div class="jasaview1">
                    <div>
                        <img src="{{ URL::asset('assets/img/KOTAK TABEL KUNING.png') }}">
                    
                    </div>
                </div>
                <div class="jasaview2">
                    <div>
                        <img src="{{ URL::asset('assets/img/KOTAK TABEL KUNING.png') }}">
                    
                    </div>
                </div>
                <div class="jasaview3">
                    <div>
                        <img src="{{ URL::asset('assets/img/KOTAK TABEL KUNING.png') }}">
                    
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="jasalengkap">
        <div class="lengkap">
            <h2 class="heading">PAKET JASA LENGKAP</h2>
            <div class="container">
                <div class="jasaview1">
                    <div>
                        <img src="{{ URL::asset('assets/img/kOTAK TABEL MERAH.png') }}">
                    
                    </div>
                </div>
                <div class="jasaview2">
                    <div>
                        <img src="{{ URL::asset('assets/img/kOTAK TABEL MERAH.png') }}">
                    
                    </div>
                </div>
                <div class="jasaview3">
                    <div>
                        <img src="{{ URL::asset('assets/img/kOTAK TABEL MERAH.png') }}">
                    
                    </div>
                </div>
            </div>
        </div>
    </section>



    @endsection
