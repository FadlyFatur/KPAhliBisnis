@extends('layouts.app')
<link rel="stylesheet" href="css/verify.css" type="text/css">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-4">
                <div class="card">
                    <div class="card mt-5 mr-5 ml-5 mb-3">
                        <div class="mt-3" style="width:100%; text-align:center">
                                <img src="{{ URL::asset('img/iconLogo.webp') }}" width="50" height="50">
                        </div>
                        <b><div class="mt-4" style="text-align:center">{{ __('Verify Your Email Address') }}</div></b>

                        <div class="card-body text-center">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif
                            <p>'Halo Selamat datang di <b><a href="/">UntukMasarin</a></b> !</p>
                            {{ __('Sebelum Melanjutkan, cek email kamu dulu yuk untuk verifikasi !') }}

                            <p class="mt-2">{{ __('Masih belum dapet email dari kami? Klik tombol dibawah ini yuk!') }}</p>
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link btn-success text-white mt-1 mb-3">{{ __('click here to request another') }}</button>.
                            </form>
                        </div>
                    </div>
                    <div class="mt-1 mb-3" style="width:100%; text-align:center">
                        <a class="mr-3" href="https://www.instagram.com/untukmasarin/?hl=en">
                                <img src="{{ URL::asset('img/instagram.jpg') }}" width="30" height="30">
                        </a>
                        <a href="https://www.facebook.com/Solusi-Marketing-Untuk-UMKM-100900111668228">
                                <img src="{{ URL::asset('img/facebook.webp') }}" width="30" height="30">
                        </a>
                    </div>
                    <p class="text-center">&copy; Copyright 2020 ahlibisnis.id</p>
                </div>   
        </div>
    </div>
</div>
@endsection
