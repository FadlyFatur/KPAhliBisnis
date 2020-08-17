@extends('layouts.template')
@section('title','Contact')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/contact.css') }}">
@endsection

@section('content') 
@include('layouts.navigation')
    @if(session('status'))
        <script>
            alert("Pesan anda telah terkirim!");
        </script>
    @endif
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
        <div class="contactUs mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="container gMapSection">
                        <div id="map"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Kontak Kami</h4>
                    <form method="POST">
                        @csrf
                        <div class="form-group mt-4">
                            <label for="exampleInputEmail1">Your Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="username" placeholder="Enter name">
                        </div>
                        <div class="form-group mt-4">
                            <label for="exampleInputPassword1">Your Email</label>
                            <input type="email" class="form-control" id="exampleInputPassword1" 
                            name="useremail" placeholder="Enter Email">
                        </div>
                        <div class="form-group mt-4">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            name="usermessage"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger btn-block">Submit</button>
                    </form>
                </div>
            </div>
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
