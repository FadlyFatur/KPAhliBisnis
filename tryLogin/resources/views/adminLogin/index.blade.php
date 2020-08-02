@extends('layouts.template')
@section('title','Admin-Login')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/adminLogin.css') }}">
@endsection
@section('content')
@include('layouts.navigation')
<div class="container">
    <form method="POST">
        @csrf
        <h3>Admin Login</h3>
        <div class="form-group mt-4">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" class="btn btn-warning">Submit</button>
    </form>
</div>
@endsection