@extends('layouts.app')
<link rel="stylesheet" href="css/verify.css" type="text/css">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-4">

            <div class="card">
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
                    
                    {{ __('Sebelum Melanjutkan, cek email kamu dulu yuk untuk verifikasi !') }}

                    <p class="mt-2">{{ __('Masih belum dapet email dari kami? Klik tombol dibawah ini yuk!') }}</p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link btn-success text-white mt-1 mb-3">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
