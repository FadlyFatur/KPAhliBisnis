@extends('layouts.template')
@section('title','Account')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/infoPemesanan.css') }}">
@endsection
@include('layouts.navigation')
@section('content')
<main id="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" id="dashboard">
                <div class="text-center">
                    <img src="{{ URL::asset('img/accountPage/logo.PNG') }}" class="mt-5">
                    <a href="#" class="mt-2">Untuk Masarin</a>
                </div>
                <div class="link">
                    <a href= "{{ route('homeUpdate') }}"><p>Pengaturan Akun</p></a>
                    <a style="cursor: pointer;"><p>Info Pemesanan<i class='fas fa-angle-right' style='font-size:20px'></i></p></a>
                </div>
                <button type="button" class="btn btn-outline-light">LOGOUT</button>
            </div>
            <div class="col-md-9">
                <div class="content">
                    <i class="fa fa-bars" style="font-size:24px;" onclick="showFunction()" id="show"></i>
                    <i class="fa fa-close" style="font-size:24px;" onclick="closeFunction()" id="close"></i>
                    <h4 class="mb-5">Info Pemesanan</h4>
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">No.Pemesanan</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Foto Struk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Untuk Masarin</td>
                                    <td>1755001214038</td>
                                    <td>Jl.Cihampelas No.18 RT 000 RW 000 17220, Bandung - Jawa Barat</td>
                                    <td>Menunggu Konfirmasi</td>
                                    <td><img src="{{ URL::asset('img/accountPage/mahesapasfoto.jpg') }}"><br>
                                        <button type="button" class="btn btn-warning">Edit</button>
                                    <button type="button" class="btn btn-danger">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
