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
<body class="hold-transition sidebar-mini layout-fixed">
        <!-- Main content -->
        <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
            <!-- /.card -->

    <div class="container">
        <table style="width:100%">
            <?php $i = 1; ?>
                <tr>
                    <th>No.</th>
                    <th>Id</th>
                    <th>Nama Brand</th>
                    <th>Jumlah Produk</th>
                    <th>Jenis Produk</th>
                    <th>Konsep</th>
                    <th>Penggunaan</th>
                    <th>Request</th>
                    <th>Format Foto</th>
                    <th>Created at</th>
                    <th>updated at</th>
                    <th>Edit/Delete</th>
                </tr>
                @foreach($checkout as $checkout)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{$checkout->id}}</td>
                    <td>{{$checkout->nama_brand}}</td>
                    <td>{{$checkout->jumlah_produk}}</td>
                    <td class="text-center">{{$checkout->jenis_produk}}</td>
                    <td>{{$checkout->konsep}}</td>
                    <td>{{$checkout->penggunaan}}</td>
                    <td class="text-center">{{$checkout->request}}</td>
                    <td class="text-center">{{$checkout->format_foto}}</td>
                    <td class="text-center">{{$checkout->created_at}}</td>
                    <td class="text-center">{{$checkout->updated_at}}</td>
                    <td>
                        <a href="{{url('/edit')}}" class="btn btn-xs btn-primary">Edit</a> |
                        <a href="#" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');">Delete</a>
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