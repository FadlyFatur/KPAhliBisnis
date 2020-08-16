@extends('layouts.template')
@section('title', 'Checkout')
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/checkout-style.css') }}">
@endsection

@section('content')
@include('layouts.navigation')
    <div class="container">
     <div class="py-5" >
       <h1>CHECKOUT</h1>
     </div>

     <div class="row ">
       <!-- shopping cart -->
       <div class="col-md-4 order-md-2 mb-4 ">
         <h4 class="d-flex justify-content-between align-items-center mb-3">
           <span class="text-danger">Daftar Pesanan</span>
           <span class="badge badge-secondary badge-danger">{{$qty}} </span>
         </h4>
         @if(Session::has('cart'))
         <ul class="list-group mb-3 ">
           @foreach($produks as $produk)
           <li class="list-group-item d-flex justify-content-between lh-condensed">
             <div>
               <h6 class="my-0">{{$produk['item']['nama']}}</h6>
               <small class="text-muted">Jumlah Produk yang dipesan : </small>
               <span class="badge badge-secondary ">{{$produk['qty']}} </span>
             </div>
             <span class="text-muted">Rp. {{number_format($produk['harga'],0,",",".")}}</span>
           </li>
           @endforeach
           <!-- <li class="list-group-item d-flex justify-content-between bg-light">
             <div class="text-success">
               <h6 class="my-0">Promo code</h6>
               <small>EXAMPLECODE</small>
             </div>
             <span class="text-success">-$5</span>
           </li> -->
           <li class="list-group-item d-flex justify-content-between">
             <span>Harga Total</span>
             <strong>Rp.{{number_format($total,0,",",".")}}</strong>
           </li>
         </ul>
         @else
         <li class="list-group-item d-flex justify-content-between">
            <strong>Tidak Ada Item</strong>
         </li>
         @endif
         <!-- <form class="card p-2">
           <div class="input-group">
             <input type="text" class="form-control" placeholder="Promo code">
             <div class="input-group-append">
               <button type="submit" class="btn btn-secondary">Redeem</button>
             </div>
           </div>
         </form> -->
       </div>


       <!-- form -->
       <div class="col-md-8 order-md-1">
         <h4 class="mb-3 text-danger">Identitas Pemesan</h4>
         <hr>
         <!-- form pemesanan -->
         <form class="needs-validation" action="{{route('checkout')}}" method="post" id="myForm">
         @csrf
           <div class="row">
             <div class="col-md-6 mb-3">
               <div class="form-group">
                 <label for="firstName">Nama Depan</label>
                 <input type="text" class="form-control" name="name-depan" id="firstName" required>
                 <div class="invalid-feedback">
                   Nama Depan harus diisi.
                 </div>
               </div>
             </div>
             <div class="col-md-6 mb-3">
               <div class="form-group">
                 <label for="lastName">Nama Belakang</label>
                 <input type="text" class="form-control" id="lastName" name="name-belakang" required>
                 <div class="invalid-feedback">
                   Nama Belakang harus diisi.
                 </div>
               </div>
             </div>
           </div>

           <div class="mb-3">
             <div class="form-group">
               <label for="email">Email</label>
               <input type="email" class="form-control" id="email" placeholder="nama@example.com" name="email" required>
               <div class="invalid-feedback">
                 Masukan email yang valid.
               </div>
             </div>
           </div>

           <div class="mb-3">
             <div class="form-group">
               <label for="email">Nomer Telepon</label>
               <div class="input-group mb-3">
                 <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1">+62</span>
                 </div>
                 <input type="tel" class="form-control" name="telephone" placeholder="" aria-label="telephone" aria-describedby="basic-addon1" required>
               </div>
             </div>
           </div>

           <div class="mb-3">
             <div class="form-group">
               <label for="address">Alamat</label>
               <input type="text" class="form-control" id="address" name="alamat" placeholder="Isi dengan detail" required>
               <div class="invalid-feedback">
                 Please enter your shipping address.
               </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-4 mb-3">
               <div class="form-group">
               <label for="provinsi">Provinsi</label>
               <select class="custom-select d-block w-100" name="prov" id="provinsi" required>
                 <option value="">Pilih...</option>
                  @foreach($provinsi as $list_prov)
                    <option value="{{ $list_prov }}">{{ $list_prov }}</option>
                  @endforeach
               </select>
               <script>
                $(function() {
                      // when select changes
                      $('#provinsi').on('change', function() {

                          // create data from form input(s)
                          const nama_provinsi = $("#provinsi").children("option:selected").val();
                          let formData = $('#myForm').serialize();
                          console.log(formData);

                          // send data to your endpoint
                          $.ajax({
                              url: "{{ route('checkoutLoc') }}",
                              type: 'post',
                              data: formData,
                              dataType: 'json', // we expect a json response
                              success: function(response) {
                                  console.log(response.success2);
                                  var kota_list = response.success2;
                                  var selop = "";

                                  $.each(kota_list,function(i){
                                    selop += "<option value='"+kota_list[i]+ "'>" + kota_list[i] + "</option>";
                                  });
                                  $("#kota").append(selop);
                              }
                          });
                      });
                  });
              </script>
               <div class="invalid-feedback">
                 Please provide a valid state.
               </div>
             </div>
             </div>
             <div class="col-md-4 mb-2">
               <div class="form-group">
                 <label for="kota">Kabupaten/Kota</label>
                 <select class="custom-select d-block w-100" name="kab" id="kota" required>
                   <option value="">Pilih...</option>
                 </select>
                 <div class="invalid-feedback">
                   Please select a valid country.
                 </div>
               </div>
             </div>
             <div class="col-md-4 mb-3">
               <div class="form-group">
                 <label for="address">Kode Pos</label>
                 <input type="number" class="form-control" name="posKode" id="kecamatan" placeholder="" value="" required>
                 <div class="invalid-feedback">
                   Please enter your shipping address.
                 </div>
               </div>
               <!-- <div class="form-group">
                 <label for="kecamatan">Kecamatan</label>
                <input type="text" class="form-control" name="kec" id="kecamatan" placeholder="" value="" required>
                 <div class="invalid-feedback">
                   Please provide a valid state.
                 </div>
             </div> -->
             </div>
           </div>

           <hr>

            <!-- identitas brand -->
           <h4 class="mb-3 text-danger">Identitas Brand/Produk</h4>
           <hr>
            <div class="row">
              <div class="col mb-3 ">
                <div class="form-group">
                <label for="firstName">Nama Produk/Brand</label>
                <input type="text" class="form-control" name="produk" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Nama Produk/Brand harus diisi.
                </div>
              </div>
              </div>
            </div>

              <div class="mb-3">
                <div class="form-group">
                <label for="firstName">Jenis Produk</label>
                <input type="text" class="form-control" name="jenis" id="firstName" placeholder="Makanan/minuman, sepatu, baju, dll." value="" required>
                <div class="invalid-feedback">
                  Nama Produk/Brand harus diisi.
                </div>
              </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="state">Konsep</label>
                  <select class="custom-select d-block w-100" name="konsep" id="state" required>
                    <option value="">Pilih...</option>
                    <option>Catalogue</option>
                    <option>Lookbook</option>
                    <option>Creativedesk</option>
                  </select>
                  <div class="invalid-feedback">
                    Pilih Salah satu.
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="state">Pengunaan Foto</label>
                  <select class="custom-select d-block w-100" name="uses" id="state" required>
                    <option value="">Pilih...</option>
                    <option>Online media</option>
                    <option>Commercial printing</option>
                    <option>Private photoshoot</option>
                  </select>
                  <div class="invalid-feedback">
                    Pilih Salah satu.
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="checkbox" id="accept" name="accept" required>
                <label for="vehicle1">Dengan ini saya menyetujui</label> <a href="#">Term & Condition</a>
              </div>

           <!-- <h5 class="mt-5">Detail Pembayaran</h5>
           <hr class="mb-4">
           <h4 class="mb-3">Payment</h4> -->

           <!-- <div class="mb-4">
             <label for="country">Transfer Bank</label>
           </div> -->
           <hr class="mb-4 mt-5">
           <button class="btn btn-danger btn-lg btn-block" type="submit">Submit</button>
         </form>

         <p class="p-5 text-center">Copyright 2020</p>
       </div>
     </div>
   </div>

@endsection
