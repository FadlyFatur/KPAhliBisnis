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
<main class="main">
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
</main>

    <div class="container">
        <table style="width:100%">
            <?php $i = 1; ?>
                <tr>
                    <th>No.</th>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Kode Pembelian</th>
                    <th>Bukti Pembayaran</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>updated at</th>
                    <th>Konfirmasi?</th>
                </tr>
                @foreach($admin as $admin)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{$admin->id}}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->kode_pembelian}}</td>
                    <td class="text-center">{{$admin->BuktiPembayaran}}</td>
                    <td class="text-center">{{$admin->status}}</td>
                    <td class="text-center">{{$admin->created_at}}</td>
                    <td class="text-center">{{$admin->updated_at}}</td>
                    <td>
                    <form method="post" action="{{Route('adminDashboard.index')}}">
                        @csrf
                        <input type="hidden" name="adminid" value="{{$admin->id}}"/>
                        <button class="btn btn-lg btn-success" type="submit">
                            Konfirmasi
                        </button>
                    </form>
                    </th>
                </tr>
                @endforeach
        </table>
        <a class="btn btn-primary float-right mt-2" href="{{url('/create')}}" role="button">Tambah Data</a>
</div>


<!-- jQuery -->
<script src="{{ asset('/dashboard/plugins/jquery/jquery.min.jss') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/dashboard/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dashboard/dist/js/adminlte.js') }}"></script>

</body>
@endsection