@extends('layouts.app')
<link rel="stylesheet" href="style2.css" type="text/css">
@section('content')
<div class="container bg">
        <nav>
          <a class="navbar-brand" href="#">
              <img src="img/logo.webp" width="45" height="auto" class="d-inline-block align-top"
                  alt="">
              <p>UntukMasarin</p>
          </a>
        </nav>
          <div class="container frms">
            <div class="wrapper">
                  <!--form start-->
                  <form class="form-container">
                    <h1>Register</h1>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">First name</label>
                        <input type="text" class="form-control" id="inputEmail4">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Last name</label>
                        <input type="text" class="form-control" id="inputEmail4">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="inputEmail4">No.HP</label>
                        <input type="number" class="form-control" id="inputEmail4">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="inputPassword4">Confirm Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                      </div>
                    </div>
                    <div class="form-group">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <a href="#">Already Have an account?</a>
                  </form>
                  <!--form end-->
                </div>
          </div>
      </div>
         
@endsection
