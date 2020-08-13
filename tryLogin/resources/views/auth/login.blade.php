@extends('layouts.template')
@section('title','Login')
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" type="text/css">
@endsection


@section('content')
    <!-- Image and text -->
    <div class="container">
        <nav class="navbar navbar-light mt-3">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ URL::asset('img/iconLogo.webp') }}" width="30" height="auto" class="d-inline-block align-top" alt="">
                <p>UntukMasarin</p>
            </a>
        </nav>
        <div class="designPage">
            <div class="row mt-3">
                <div class="col-md-6">
                    <img src="{{ URL::asset('img/2-layers.webp') }}" alt="workingAnimation">
                </div>
                <div class="col-md-6">
                    <div class="forms">
                        <div id="circle"></div><h3>LOGIN</h3>
                        <p class="mt-4 mb-3">Log in to your account</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" class=" mt-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukan Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class=" mt-1 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukan Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- <div class="form-group row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                            </div> -->
                            <button type="submit" class="btn btn-block mt-5">LOGIN</button>
                            <div class="row mt-4">
                                <div class="col-sm-5">
                                    @if (Route::has('password.request'))
                                        <a style="color:white;" href="{{ route('password.request') }}">
                                            Lupa Password
                                        </a>
                                    @endif
                                </div>
                                <div class="col-sm-7 d-flex justify-content-end">
                                    @if (Route::has('register'))
                                        <a style="color:white;" href="{{ route('register') }}">Belum punya akun?</a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
