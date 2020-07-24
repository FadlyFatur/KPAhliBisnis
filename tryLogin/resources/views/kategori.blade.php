@extends('layouts.template')
@section('title','UntukMasarin.id - Kategori')
@section('css')
<link rel="stylesheet" href="css/Kategori_style.css">
@endsection
    @section('content')
@include('layouts.navigation')

<main>
    <div class="container">
      <h1 style="color:#172232">KATEGORI</h1>
      <p>Belum mengetahui cara bagaimana semua ini bekerja <a href="#"> <span style="color:red;">Cek disini </span></a></p>
        <!-- start card -->
        <div class="row p-3">
             <!-- card1 -->
           <div class="main-card col">
             <div class="card bg-light border-light flex-md-row h-md-250">
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
                  <a class="kat-1" href="#"><img class="card-img-top" src="img/desain-grafis.jpg" alt="Card image cap"></a>
                  <div class="card-body">
                    <h5 class="card-title">DESAIN GRAFIS</h5>
                  </div>
                </div>
                <!-- start card3 end card2 -->
                <div class="card side-card">
                  <a class="kat-1" href="#"> <img class="card-img-top" src="img/photo-produk.jpg" alt="Card image cap"></a>
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
</main>

  <svg id="svg-page2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#E14354" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,224C384,235,480,245,576,240C672,235,768,213,864,192C960,171,1056,149,1152,149.3C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<section class="page2">
    <div class="container">
        <h1 class="text-center">Testimoni</h1>
          <!-- start card -->
          <div id="carouselExampleFade" style="padding-top:0px" class="carousel slide carousel-fade mx-auto" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/testi1.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/testi2.png" alt="Second slide">
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
    </div>
</section>

    <!-- testimonial -->
    @endsection
