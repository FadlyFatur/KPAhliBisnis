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
                    <!-- <a href= ""><p>Konfirmasi Pembayaran</p></a> -->
                </div>
                <button type="button" class="btn btn-outline-light">LOGOUT</button>
            </div>

            @if(Session::has('success'))
            <div class="modal" tabindex="-1" id="myModal" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Order Sukses</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h5>{{Session::get('success')}}</h5>
                    <p>Detail order dapat dilihat dihalaman ini</p>
                    <p></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
            @endif

            <div class="col-md-9">
                <div class="content">
                    <i class="fa fa-bars" style="font-size:24px;" onclick="showFunction()" id="show"></i>
                    <i class="fa fa-close" style="font-size:24px;" onclick="closeFunction()" id="close"></i>
                    <h1 class="mb-5">Info Pemesanan</h1>

                    <!-- @if(Session::has('sukses'))
                      <p class="text-success">Foto telah diupload</p>
                    @endif -->
                    @foreach ($orders as $order)

                    <div class="table-responsive">
                      <p>Kode Pemesanan : {{$order->payment_id}}</p>
                        <table class="table table-bordered table-hover text-center">
                            <thead class="">
                                <tr>
                                    <th scope="col">Nama Pemesan</th>
                                    <th scope="col">Tanggal Order</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Total Harga(Rp)</th>
                                    <th scope="col">Status Konfirmasi</th>
                                    <th scope="col">Foto Struk</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <th scope="col">{{$order->name_depan}} {{$order->name_belakang}} </th>
                                  <th scope="col">{{date("d/m/Y", strtotime($order->created_at))}}</th>
                                  <th scope="col">{{$order->address}}, {{$order->Kabupaten}}, {{$order->Provinsi}}</th>
                                  <th scope="col">{{number_format($order->cart->totalHarga,0,",",".")}} </th>
                                  @if($order->status != True)
                                    <th scope="col">Pending</th>
                                  @else
                                    <th scope="col">Confirm</th>
                                  @endif
                                  @if($order->filename != NULL)
                                  <td class="cs-p-1"><a class="text-primary" href="{{ url('/data_file/'.$order->filename) }}" target="_blank">Lihat Gambar</a></td>
                                  @else
                                  <td class="cs-p-1">Belum upload</td>
                                  @endif
                                  <!-- <th scope="col"> <img src="{{ url('/data_file/'.$order->filename) }}" alt="..."></th> -->
                                  <th scope="col" class="but-col">
                                    <button type="button" class="btn btn-Success mb-2"  data-toggle="modal" data-target="#exampleModal">Konfirmasi</button>

                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#{{$order->payment_id}}" aria-expanded="false" aria-controls="collapseExample">
                                    Lihat Produk
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
                                <strong class="text-primary">Total Harga : Rp.{{number_format($order->cart->totalHarga,0,",",".")}}</strong>
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

    <!-- modal konfirmasi struk -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembayaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <form method="POST" action="/file-upload/{{$order->id}}" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="modal-body">
              <!-- <div class="form-group">
              <label for="name">File Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter file Name" name="name">
            </div> -->
            <div class="form-group">
              <label for="struk">Upload Bukti Pembayaran</label>
              <input type="file" class="form-control-file" name="image">
              <hr>
              <p>Silahkan upload foto struck/nota pembayaran sesuai dengan total harga</p>
            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <!-- <input type="submit" name="submit" value="Upload" class="btn btn-primary"> -->
          </div>
        </form>
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

    type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });

</script>
@endsection
