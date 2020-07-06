@extends('layouts.app')
<link rel="stylesheet" href="css/style2.css" type="text/css">
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
                  <form class="form-container" method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1>Register</h1>
                    <div class="form-row">
                      <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label ">{{ __('Name') }}</label>

                              <div class="col-md-12">
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row">
                          <label for="number" class="col-md-4 col-form-label">{{ __('NO.HP') }}</label>
                          <div class="col-md-12">
                                  <input id="nohp" type="number_format" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ old('nohp') }}" required autocomplete="nohp" autofocus>

                                  @error('nohp')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                        <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label">{{ __('E-Mail Address') }}</label>

                              <div class="col-md-12">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                            <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

                              <div class="col-md-12">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirm Password') }}</label>

                              <div class="col-md-12">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              </div>
                          </div>
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="form-group row mb-0">
                            <div class="col-md-6-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a href="#" type="submit">
                                    {{__('Already have an account?') }}
                                </a>
                            </div>
                        </div>
                  </form>
                  <!--form end-->
                </div>
          </div>
      </div>
         
@endsection
