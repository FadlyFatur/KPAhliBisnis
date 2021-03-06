@extends('layouts.template')
@section('title','Admin-Dashboard')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/adminDashboard.css') }}">
@endsection
@section('content')
@include('layouts.navigation')
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/dashboard/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('/dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('/dashboard/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/dashboard/dist/css/adminlte.min.css') }}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<!-- <main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Aktivitas Toko</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="callout callout-info">
                                        <small class="text-muted">Omset Harian</small>
                                        <br>
                                        <strong class="h4">Rp 0</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-danger">
                                        <small class="text-muted">Pelanggan Baru (H-7)</small>
                                        <br>
                                        <strong class="h4">0</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-primary">
                                        <small class="text-muted">Perlu Dikirim</small>
                                        <br>
                                        <strong class="h4">0</strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="callout callout-success">
                                        <small class="text-muted">Total Produk</small>
                                        <br>
                                        <strong class="h4">0</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> -->

  @foreach ($orders as $order)

  <div class="table col-lg-3">
      <table class="table table-bordered table-hover text-center ">
          <thead class="">
            <?php $i = 1; ?>
              <tr>
                <th>No.</th>
                <th>Id Pemesan</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Address</th>
                <th>Provinsi at</th>
                <th>Kabupaten</th>
                <th>Kode Pos</th>
                <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <td class="text-center">{{$loop->iteration}}</td>
                <td>{{$order->id}}</td>
                <td>{{$order->name_depan}} {{$order->name_belakang}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->telphone}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->Provinsi}}</td>
                <td>{{$order->Kabupaten}}</td>
                <td>{{$order->Kode_pos}}</td>
                <td>
                  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#{{$order->id}}" aria-expanded="false" aria-controls="collapseExample">
                  Lihat Produk
                   </button>
                </td>
              </tr>
          </tbody>
      </table>

      <div class="collapse" id="{{$order->id}}">

          <table class="table">
            <thead>
              <?php $i = 1; ?>
                  <tr>
                    <th>No.</th>
                    <th>Nama Produk</th>
                    <th>Konsep</th>
                    <th>Penggunaan Foto</th>
                    <th>Produk</th>
                    <th>Total Harga</th>
                    <th>Nama Image</th>
                    <th>Status</th>
                    <th>Konfirmasi?</th>
                    <th>Cek Bukti</th>
                  </tr>
            </thead>
            <tbody>
              <!-- {{$number=1}} JANGAN DIHAPUS-->
              @foreach ($order->cart->items as $item)
              <tr class="text-center">
                <td class="text-center">{{$loop->iteration}}</td>
                <td>{{$order->nama_produk}}</td>
                <td>{{$order->konsep}}</td>
                <td>{{$order->pengunaan_foto}}</td>
                <td>
                  @foreach ($order->cart->items as $item)
                  {{$item['item']['nama']}} | {{$item['qty']}} | {{number_format($item['harga'],0,",",".")}} <br>
                  @endforeach
                </td>
                <td>{{number_format($order->cart->totalHarga,0,",",".")}}</td>
                <td>{{$order->filename}}</td>
                <td class="text-center">{{$order->status}}</td>
                <td>
                    <form method="post" action="{{Route('adminUpdate',$order->id)}}">
                        @csrf
                        <input type="hidden" name="orderid" value="{{$order->id}}"/>
                        <a href="">
                        <button class="btn btn-lg btn-success" type="submit" name="action" value="Konfirmasi">Konfirmasi</button>
                        @if($order->filename != NULL)
                            <td class="cs-p-1"><a class="text-primary" href="{{ url('/data_file/'.$order->filename) }}" target="_blank">Lihat Gambar</a></td>
                        @else
                            <td class="cs-p-1">Belum upload</td>
                        @endif
                        </a>
                    </form>
                </td>
              </tr>
              @endforeach
              <!-- <strong class="text-primary">Total Harga : Rp.{{number_format($order->cart->totalHarga,0,",",".")}}</strong> -->
            </tbody>
          </table>

      </div>

  </div>

  <br>
  <hr>
  @endforeach


</body>
@endsection
