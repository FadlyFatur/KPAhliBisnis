@extends('layouts.template')

@section('title','Register')
@section('css')
    <link rel="stylesheet" href="css/style2.css" type="text/css">
@endsection
@section('content')
@include('layouts.navigation')

<div class="container mt-3 d-flex justify-content-center">
  <!--form start-->
    <form class="form-container" name="register_form" method="POST" action="{{ route('register') }}">
      @csrf
      <h1 class="text-center mb-2">Register</h1>
      <div class="form-group">
        <label for="name">Nama</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>
      <div class="form-group" >
        <label for="number">Nomer Hp</label>
                <!-- <input id="nohp" type="number" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ old('nohp') }}" required autocomplete="nohp" autofocus> -->
                <input Number type="number" id="nohp" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ old('nohp') }}" aria-label="telephone" aria-describedby="basic-addon1" autocomplete="nohp" autofocus required>
                @error('nohp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
            <label for="password-confirm" class="">Confim Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="mt-3">
          <div class="col-md-6-md-4">
              <button type="submit" class="btn btn-danger">
                {{ __('Register') }}
              </button>
            <a href="{{ url('/login') }}" type="submit" class="text-white pull-right">
              {{__('Sudah Punya Akun?') }}
            </a>
          </div>
        </div>
      </form>
  <!--form end-->
</div>

@endsection
