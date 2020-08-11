@extends('layouts.template')
@section('title','Keranjang Belanja')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/checkout.css') }}">
@endsection

@section('js')
@endsection

@section('content')
@include('layouts.navigation')
@if(Session::has('cart'))
<div class="container mt-5">

  <div class="row d-flex justify-content-center">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 ">
        <table class="table table-hoverr">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Produk Name</th>
              <th scope="col">Quantity</th>
              <th scope="col">Harga(Rp)</th>
            </tr>
          </thead>
          <!-- {{$number=1}} jgn dihapus-->
            @foreach($produk as $produk)
          <tbody>
             <tr>
               <th scope="row">{{$number++}}</th>
               <td>{{$produk['item']['nama']}}</td>
               <td><span class="badge badge-pill badge-danger text-center">{{$produk['qty']}} </span></td>
               <td>{{ number_format($produk['harga'],0,",",".")}}</td>
               <td>
                <a href="{{route('detailProduk.plus',['id'=>$produk['item']['id']])}}"><i class="fas fa-plus-circle"></i></a>
               </td>
               <td>
                 <a href="{{route('detailproduk.reduceOne',['id'=>$produk['item']['id']])}}">  <i class="fas fa-minus-circle"></i></a>
               </td>
               <td>
                 <a href="{{route('detailproduk.remove',['id'=>$produk['item']['id']])}}">  <i class="far fa-trash-alt"></i></a>
               </td>
             </tr>
           </tbody>
           @endforeach
        </table>

      </ul>
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <strong>Total Harga : Rp. {{number_format($totalHarga,0,",",".")}}</strong>
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
