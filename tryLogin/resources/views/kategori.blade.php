@extends('layouts.app')
@section('title','UntukMasarin.id - Kategori')
@section('style')
<link rel="stylesheet" href="css/Kategori_style.css">
@endsection
    @section('content')
    <div class="base">
      <h1 style="text-align: center; padding-top:100px;">KATEGORI</h1>
      <div class="container">
        <!-- start card -->
        <div class="row p-3">
           <div class="col-md-6">
             <!-- card1 -->
             <div class="card main-card flex-md-row mb-4 h-md-250">
               <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="img/banner-img.png" style="width: 226px; height: 175px;">
                   <div class="card-body d-flex flex-column align-items-start">
                   <h3 class="mb-0">
                      Temukan partner bisnis anda bersama kami.
                   </h3>
                   <p class=" mb-auto">Pililah jasa sesuai dengan kebutuhan anda disni</p>
                </div>
             </div>
           </div>
           <!-- card2 -->
           <div class="col-sm">
             <div class="card-deck">
                <div class="card side-card">
                  <img class="card-img-top" src="img/desain-grafis.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">DESAIN GRAFIS</h5>
                  </div>
                </div>
                <!-- start card3 end card2 -->
                <div class="card side-card">
                  <img class="card-img-top" src="img/photo-produk.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">FOTO PRODUK</h5>
                  </div>
                </div>
                <!-- end card3 -->
              </div>
           </div>
         </div>
         <!-- end card -->
         <strong class="d-inline-block mb-3 text-primary">By AhliBisnis</strong>
      </div>
    </div>

    <!-- testimonial -->
    <div class="base2">
      <h1 style="text-align: center; padding-top:50px;">Testimonial</h1>
      <div class="container p-2 sizing">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="10000">
                <img src="img/photo-produk.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="img/desain-grafis.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/promosi.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

    </div>
    @endsection
