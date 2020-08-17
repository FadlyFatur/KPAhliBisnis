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
                  <a href= ""><p>Info Pemesanan</p></a>
                  <a style="cursor: pointer;"><p>Konfirmasi Pembayaran <i class='fas fa-angle-right' style='font-size:20px'></i></p></a>
              </div>
              <button type="button" class="btn btn-outline-light">LOGOUT</button>
          </div>
        </div>
      </div>

    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
            <tr>
                <th class="cs-p-1">Name</th>
                <th class="cs-p-1">URL</th>
            </tr>
        </thead>

        @forelse($images as $image)
            <tr>
                <td class="cs-p-1">{{ $image->name }}</td>
                <td class="cs-p-1"><a href="{{ $image->url }}">View Image</a></td>
            </tr>
            @empty
            <p>No Images at the moment</p>
        @endforelse
    </table>
</div>


</main>
@endsection
