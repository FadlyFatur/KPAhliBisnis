@extends('layouts.template')
@section('title','Admin-Login')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/adminLogin.css') }}">
@endsection
@section('content')
@include('layouts.navigation')
<div class="container">
    <form method="POST" action="{{ route('index') }}">
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
        <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" class="btn btn-warning">Submit</button>
    </form>
</div>
@endsection