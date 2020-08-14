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
                    <a style="cursor: pointer;"><p>Info Pemesanan<i class='fas fa-angle-right' style='font-size:20px'></i></p></a>
                    <a href= ""><p>Konfirmasi Pembayaran</p></a>
                </div>
                <button type="button" class="btn btn-outline-light">LOGOUT</button>
            </div>

            <div class="col-md-9">
                <div class="content">
                    <i class="fa fa-bars" style="font-size:24px;" onclick="showFunction()" id="show"></i>
                    <i class="fa fa-close" style="font-size:24px;" onclick="closeFunction()" id="close"></i>
                    <h1 class="mb-5">Info Pemesanan</h1>
                    @foreach ($orders as $order)
                    <div class="table-responsive">
                      <h4>Kode Pemesanan : {{$order->payment_id}}</h4>
                        <table class="table table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama Pemesan</th>
                                    <th scope="col">Tanggal Order</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Provinsi</th>
                                    <th scope="col">Kabupaten</th>
                                    <th scope="col">Kecamatan</th>
                                    <th scope="col">Status Konfirmasi</th>
                                    <th scope="col">Foto Struk</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <th scope="col">{{$order->name_depan}} {{$order->name_belakang}} </th>
                                  <th scope="col">{{date("d/m/Y", strtotime($order->created_at))}}</th>
                                  <th scope="col">{{$order->address}} </th>
                                  <th scope="col">{{$order->Provinsi}}</th>
                                  <th scope="col">{{$order->Kabupaten}}</th>
                                  <th scope="col">{{$order->Kecamatan}}</th>
                                  <th scope="col">Pending</th>
                                  <th scope="col">...</th>
                                  <th scope="col">
                                    <button type="button" class="btn btn-Success">Konfirmasi</button>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#{{$order->payment_id}}" aria-expanded="false" aria-controls="collapseExample">
                                       Produk
                                     </button>
                                  </th>
                                  <!-- <button type="button" class="btn btn-danger">Delete</button></td> -->
                                </tr>
                            </tbody>
                        </table>
                        <div class="collapse" id="{{$order->payment_id}}">
                          <div class="card card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nama Produk</th>
                                  <th scope="col">Quantity</th>
                                  <th scope="col">Harga (Rp)</th>
                                </tr>
                              </thead>
                              <tbody>
                                <!-- {{$number=1}} JANGAN DIHAPUS-->
                                @foreach ($order->cart->items as $item)
                                <tr>
                                  <th scope="row">{{$number++}}</th>
                                  <td>{{$item['item']['nama']}}</td>
                                  <td>{{$item['qty']}}</td>
                                  <td>{{number_format($item['harga'],0,",",".")}}</td>
                                </tr>
                                @endforeach
                                <strong class="text-primary">Total Harga : Rp.{{number_format($order->cart->totalHarga,0,",",".")}} </strong>
                              </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
<script>

    function showFunction() {
        document.getElementById("dashboard").style.left = "0";
        document.getElementById("show").style.display = "none";
        document.getElementById("close").style.display = "block";
        document.getElementById("main").style.overflow = "hidden";
    }
    function closeFunction() {
        document.getElementById("dashboard").style.left = "-500px";
        document.getElementById("show").style.display = "block";
        document.getElementById("close").style.display = "none";
        document.getElementById("main").style.overflow = "scroll";
    }
</script>
@endsection
