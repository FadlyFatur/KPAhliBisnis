@extends('layouts.app')
@section('title','UntukMasarin.id')
@section('style')
<link rel="stylesheet" href="css/style3.css">
@endsection

    @section('content')
    <main>
        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                        <h2>UntukMasarin</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.corporis explicabo nam adipisci saepe dolore tenetur reiciendis. Praesentium ratione ex, nesciunt perspiciatis velit quam est deserunt.</p>
                        <a href="#" class="button button3"><img src="{{ URL::asset('assets/img/Button pesan sekarang.png') }}"></a>
                        <a href="#" class="button button4"><img src="{{ URL::asset('assets/img/BUTTON KONTAK KAMI.png') }}"></a>
   
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ URL::asset('img/Layer_2.webp') }}">
                </div>
            </div>
        </div>
    </main>