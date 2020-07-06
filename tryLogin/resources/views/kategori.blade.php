@extends('layouts.app')
@section('title','UntukMasarin.id - Kategori')
@section('style')
<link rel="stylesheet" href="css/Kategori_style.css">
@endsection
    @section('content')

    <div class="container">
      <h1>KATEGORI</h1>
        <!-- start card -->
        <div class="row p-3">
             <!-- card1 -->
           <div class="main-card col">
             <div class="card bg-light border-light p-3 flex-md-row h-md-250">
               <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="img/banner-img.png" style="width: 226px; height: 175px;">
                   <div class="card-body d-flex flex-column align-items-start">
                   <h3 class="mb-1">
                      Temukan partner bisnis anda bersama kami.
                   </h3>
                   <p class=" mb-auto">Pililah jasa sesuai dengan kebutuhan anda disni</p>
                </div>
             </div>
           </div>
           <!-- card2 -->
           <div class=" col-sm text-center">
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
         <strong class="produk text-primary">By AhliBisnis</strong>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#E14455" fill-opacity="1" d="M0,0L48,48C96,96,192,192,288,202.7C384,213,480,139,576,133.3C672,128,768,192,864,197.3C960,203,1056,149,1152,106.7C1248,64,1344,32,1392,16L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

    <div class="bottom">

      <!-- <div class="container" style="background-color:#E14455;" > -->
        <h1 class="text-center">Testimoni</h1>

          <!-- start card -->
          <div id="carouselExampleFade" class="carousel slide carousel-fade mx-auto" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/studio-2.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/studio-3.jpg" alt="Second slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      <!-- </div> -->

  </div>

    <!-- testimonial -->
    @endsection
