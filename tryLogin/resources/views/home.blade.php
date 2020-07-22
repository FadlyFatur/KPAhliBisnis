@extends('layouts.template')
@section('title','Account')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/accountPage.css') }}">
@endsection
@section('content')
@include('layouts.navigation')
<main id="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" id="dashboard">
                <div class="text-center">
                    <img src="{{ URL::asset('img/accountPage/logo.PNG') }}" class="mt-5">
                    <a href="#" class="mt-2">Untuk Masarin</a>
                </div>
                <div class="link">
                    <p>Pengaturan Akun<i class='fas fa-angle-right' style='font-size:20px'></i></p>
                    <p>Info Pemesanan</p>
                </div>
                <a href="{{route('logout')}}" class="btn btn-outline-light" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">LOGOUT</a>
                                    
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <div class="col-md-9">
                <div class="content">
                    <i class="fa fa-bars" style="font-size:24px;" onclick="showFunction()" id="show"></i>
                    <i class="fa fa-close" style="font-size:24px;" onclick="closeFunction()" id="close"></i>
                    <h4>Account Info</h4>
                    <section>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="image text-center">
                                    <img src="{{ URL::asset('img/accountPage/mahesapasfoto.jpg') }}" class="rounded-circle" width="100"><br>
                                    <button type="button" class="btn btn-outline-dark">Ganti Foto</button>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h5 class="mt-4 ml-3">General Info</h5>
                                <hr>
                                <form>
                                    <div class="form-group nama">
                                        <label for="exampleInputEmail1">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group email">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <button type="button" class="btn btn-danger">PERBARUI</button>
                                </form>
                                <hr>
                                <h5 class="ml-3">Ganti Password</h5>
                                <form class="mt-2 mb-4">
                                    <div class="form-group pw">
                                        <label for="exampleInputEmail1">Password Lama</label>
                                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group pw">
                                        <label for="exampleInputPassword1">Password Baru</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group email">
                                        <label for="exampleInputPassword1">Konfrmasi Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <button type="button" class="btn btn-danger">PERBARUI</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    function showFunction() {
        document.getElementById("dashboard").style.left = "0";
        document.getElementById("show").style.display = "none";
        document.getElementById("close").style.display = "block";
        document.getElementById("main").style.overflow = "hidden";
    }
    function closeFunction() {
        document.getElementById("dashboard").style.left = "-500px";
        document.getElementById("show").style.display = "block";
        document.getElementById("close").style.display = "none";
        document.getElementById("main").style.overflow = "scroll";
    }
</script>
@endsection