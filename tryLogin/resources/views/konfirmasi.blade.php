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
                    <a href= ""><p>Info Pemesanan<i class='fas fa-angle-right' style='font-size:20px'></i></p></a>
                    <a style="cursor: pointer;"><p>Konfirmasi Pembayaran</p></a>
                </div>
                <button type="button" class="btn btn-outline-light">LOGOUT</button>
            </div>

            <form method="POST" action="{{ url('/upload/{id}') }}" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="">
                <div class="form-group">
                  <label for="struk">Upload Bukti Pembayaran</label>
                  <input type="file" class="form-control-file" name="image">
                  <hr>
                  <p>Silahkan upload foto struck/nota pembayaran sesuai dengan total harga</p>
                </div>
            </div>

            <div class="">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
</main>
@endsection
