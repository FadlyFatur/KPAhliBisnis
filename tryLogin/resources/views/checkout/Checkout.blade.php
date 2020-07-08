@extends('layouts.app')
@section('title', 'Checkout')
@section('style')
    <link rel="stylesheet" href="checkout-style.css">
@endsection

@section('content')
    <!-- <header class="d-flex flex-column flex-md-row align-item-md-center p-5 bg-light">
      <div class="pt-md-3 pb-md-4">
        <h1 class="bd-title mt-0">CHECKOUT</h1>
      </div
    </header> -->
  <div class="no-svg">

    <div class="container">
     <div class="py-5" >
       <h1>CHECKOUT</h1>
     </div>

     <div class="row ">
       <!-- shopping cart -->
       <div class="col-md-4 order-md-2 mb-4 ">
         <h4 class="d-flex justify-content-between align-items-center mb-3">
           <span class="text-muted">Daftar Pemesanan</span>
           <span class="badge badge-secondary badge-pill">3</span>
         </h4>
         <ul class="list-group mb-3 ">
           <li class="list-group-item d-flex justify-content-between lh-condensed">
             <div>
               <h6 class="my-0">Nama Produk</h6>
               <small class="text-muted">Brief description</small>
             </div>
             <span class="text-muted">$12</span>
           </li>
           <li class="list-group-item d-flex justify-content-between lh-condensed">
             <div>
               <h6 class="my-0">Second product</h6>
               <small class="text-muted">Brief description</small>
             </div>
             <span class="text-muted">$8</span>
           </li>
           <li class="list-group-item d-flex justify-content-between lh-condensed">
             <div>
               <h6 class="my-0">Third item</h6>
               <small class="text-muted">Brief description</small>
             </div>
             <span class="text-muted">$5</span>
           </li>
           <li class="list-group-item d-flex justify-content-between bg-light">
             <div class="text-success">
               <h6 class="my-0">Promo code</h6>
               <small>EXAMPLECODE</small>
             </div>
             <span class="text-success">-$5</span>
           </li>
           <li class="list-group-item d-flex justify-content-between">
             <span>Harga Total (Rp)</span>
             <strong>$20</strong>
           </li>
         </ul>
         <form class="card p-2">
           <div class="input-group">
             <input type="text" class="form-control" placeholder="Promo code">
             <div class="input-group-append">
               <button type="submit" class="btn btn-secondary">Redeem</button>
             </div>
           </div>
         </form>
       </div>


       <!-- form -->
       <div class="col-md-8 order-md-1">
         <h5 class="mb-3">Detail Identitas</h5>
         <hr>
         <form class="needs-validation" novalidate>
           <div class="row">
             <div class="col-md-6 mb-3">
               <label for="firstName">Nama Depan</label>
               <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
               <div class="invalid-feedback">
                 Nama Depan harus diisi.
               </div>
             </div>
             <div class="col-md-6 mb-3">
               <label for="lastName">Nama Belakang</label>
               <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
               <div class="invalid-feedback">
                 Nama Belakang harus diisi.
               </div>
             </div>
           </div>

           <div class="mb-3">
             <label for="email">Email</label>
             <input type="email" class="form-control" id="email" placeholder="nama@example.com">
             <div class="invalid-feedback">
               Masuka email yang valid untuk informasi pemesanan.
             </div>
           </div>

           <div class="mb-3">
             <label for="email">Nomer Telepon</label>
             <input type="email" class="form-control" id="email" placeholder="+62 8xxx xxxx">
             <div class="invalid-feedback">
               Masuka Nomor telepon yang valid untuk informasi pemesanan.
             </div>
           </div>

           <div class="mb-3">
             <label for="address">Alamat</label>
             <input type="text" class="form-control" id="address" placeholder="Isi dengan detail" required>
             <div class="invalid-feedback">
               Please enter your shipping address.
             </div>
           </div>

           <div class="row">
             <div class="col-md-5 mb-3">
               <label for="country">Kecamatan</label>
               <select class="custom-select d-block w-100" id="country" required>
                 <option value="">pilih...</option>
                 <option>United States</option>
               </select>
               <div class="invalid-feedback">
                 Please select a valid country.
               </div>
             </div>
             <div class="col-md-4 mb-3">
               <label for="state">Kabupaten/Kota</label>
               <select class="custom-select d-block w-100" id="state" required>
                 <option value="">Pilih...</option>
                 <option>California</option>
               </select>
               <div class="invalid-feedback">
                 Please provide a valid state.
               </div>
             </div>
             <div class="col-md-4 mb-3">
               <label for="state">Provinsi</label>
               <select class="custom-select d-block w-100" id="state" required>
                 <option value="">Pilih...</option>
                 <option>California</option>
               </select>
               <div class="invalid-feedback">
                 Please provide a valid state.
               </div>
             </div>
           </div>

           <h5 class="mt-5">Detail Pembayaran</h5>
           <hr class="mb-4">
           <h4 class="mb-3">Payment</h4>

           <div class="mb-4">
             <label for="country">Transfer Bank</label>
           </div>
           <hr class="mb-4">
           <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
         </form>
         <p class="p-5 text-center">Copyright 2020</p>
       </div>
     </div>
   </div>
  </div>

@endsection
