@extends('layouts.template')
@section('title','Keranjang Belanja')

@section('css')
@endsection

@section('js')
@endsection

@section('content')
@include('layouts.navigation')
@if(Session::has('cart'))
<div class="container mt-5">

  <div class="row d-flex justify-content-center">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 ">
      <ul class="list-group">
        @foreach($produk as $produk)
          <li class="list-group-item">
            <span class="badge badge-pill badge-danger">{{$produk['qty']}} </span>
            <strong>|  {{$produk['item']['nama']}}  |  </strong>
            <span class="label label-success">Rp. {{$produk['harga']}}</span>
            <div class="btn-group pull-right">
              <buton class="btn btn-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action <span class="caret"></span></buton>
              <ul class="dropdown-menu text-center">
                <li><a href="#">Reduce by 1</a></li>
                <li><a href="#">Reduce All</a></li>
              </ul> 
            </div>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <strong>Total Harga : Rp. {{$totalHarga}}</strong>
    </div>
  </div>
  <hr>
  <div class="row d-flex justify-content-center">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
    </div>
  </div>
  @else
  <div class="row d-flex justify-content-center">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <h2 class="text-center mt-5">Tidak ada item</h2>
    </div>
  </div>
</div>
@endif
@endsection
