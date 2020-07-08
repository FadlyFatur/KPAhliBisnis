@extends('layouts.app')
@section('title','UntukMasarin.id - Kategori')
@section('style')
<link rel="stylesheet" href="css/Kategori_style.css">
@endsection
    @section('content')
      <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
        <path fill="#E14455" fill-opacity="1" d="M0,128L40,160C80,192,160,256,240,256C320,256,400,192,480,138.7C560,85,640,43,720,42.7C800,43,880,85,960,90.7C1040,96,1120,64,1200,58.7C1280,53,1360,75,1400,85.3L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
      </svg> -->
  <div class="no-svg">
      <!-- <img class="img-fluid" style=""src="img/wave_up.svg" alt=""> -->
    <div class="container">
    <h1 style="color:#172232">KATEGORI</h1>
    <p>Belum mengetahui cara bagaimana semua ini bekerja <a href="#"> <span style="color:red;">Cek disini </span></a></p>
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
  </div>

    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250"><path fill="#E14455" fill-opacity="1" d="M0,0L48,48C96,96,192,192,288,202.7C384,213,480,139,576,133.3C672,128,768,192,864,197.3C960,203,1056,149,1152,106.7C1248,64,1344,32,1392,16L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#E14455" fill-opacity="1" d="M0,96L60,101.3C120,107,240,117,360,138.7C480,160,600,192,720,186.7C840,181,960,139,1080,154.7C1200,171,1320,245,1380,282.7L1440,320L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg> -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#E14455" fill-opacity="1" d="M0,96L60,101.3C120,107,240,117,360,117.3C480,117,600,107,720,85.3C840,64,960,32,1080,42.7C1200,53,1320,107,1380,133.3L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
  <div class="bottom">

      <!-- <div class="container" style="background-color:#E14455;" > -->
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
      <!-- </div> -->

  </div>

    <!-- testimonial -->
    @endsection
