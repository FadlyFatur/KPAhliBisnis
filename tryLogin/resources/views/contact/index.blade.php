@extends('layouts.template')
@section('title','Contact')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/contact.css') }}">
@endsection

@section('content') 
@include('layouts.navigation')
    <div class="containers">
        <h2>CONTACT US</h2>
    </div>
    <div class="wrapper">
        <main>
            <div class="row text-center mt-2">
                <div class="col">
                    <img src="{{ URL::asset('img/location.png') }}">
                    <p class="mt-3">Jl.Sudirman 31 No.88<br>Bandung, Jawa Barat</p>
                </div>
                <div class="col">
                    <img src="{{ URL::asset('img/phone.png') }}">
                    <p class="mt-3">+62 888 8888 8888</p>
                </div>
                <div class="col">
                    <img src="{{ URL::asset('img/mail.png') }}">
                    <p class="mt-3">ahlibisnis@test.com</p>
                </div>
            </div>
        </main>
    </div>

    <section>
        <div class="container gMapSection">
            <div id="map"></div>
        </div>
    </section>

    <footer class="container footer">
        <h3 class="mt-5 text-center">FAQ</h3>
        <div class="row">
            <div class="col-sm-4 mt-4">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="{{ URL::asset('img/questionMark.png') }}">
                    </div>
                    <div class="col-sm-10">
                        <h4>Lorem ipsum dolor sit</h4>
                        <p>Praesentaliquam. Nullam sit amet aliquet ligula. Quisque feugiat nec sem ac pharetra. Mauris purus massa, scelerisque
                            vel nibh in, placerat pharetra erat.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-4">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="{{ URL::asset('img/questionMark.png') }}">
                    </div>
                    <div class="col-sm-10">
                        <h4>Lorem ipsum dolor sit</h4>
                        <p>Praesentaliquam. Nullam sit amet aliquet ligula. Quisque feugiat nec sem ac pharetra. Mauris purus massa, scelerisque
                            vel nibh in, placerat pharetra erat.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-4">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="{{ URL::asset('img/questionMark.png') }}">
                    </div>
                    <div class="col-sm-10">
                        <h4>Lorem ipsum dolor sit</h4>
                        <p>Praesentaliquam. Nullam sit amet aliquet ligula. Quisque feugiat nec sem ac pharetra. Mauris purus massa, scelerisque
                            vel nibh in, placerat pharetra erat.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="{{ URL::asset('js/gmaps.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var map = new GMaps({
            el: '#map',
            lat: -12.043333,
            lng: -77.028333
        });
    </script>
@endsection
