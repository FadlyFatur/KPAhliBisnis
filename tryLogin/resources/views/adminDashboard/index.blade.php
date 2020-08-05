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
    <div class="container">
        <table style="width:100%">
            <?php $i = 1; ?>
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
                    </td>
                </tr>
                @endforeach
        </table>
        <a class="btn btn-primary float-right mt-2" href="{{url('/create')}}" role="button">Tambah Data</a>
</div>



</body>
@endsection