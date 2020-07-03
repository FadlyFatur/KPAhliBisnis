<!doctype html>
<html lang="en">

<head>  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@700&family=Roboto&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/detailProduk.css') }}" type="text/css">
    <title>AhliBisnis - Detail Produk</title>
</head>

<body>
    <div class="row mt-5">
        <div class="col-sm-6 jasaFoto">
             
        </div>
        
        <div class="col-sm-6 mt-2">
            <form style="padding: 20px;">
                <h4>Foto Produk</h4>
                <div class="form-row mt-4">
                    <div class="form-group col-md-8">
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-outline-danger btn-block">CARI</button>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="jam">Jam</label>
                        <input type="text" class="form-control" id="jam">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="shot">xShot</label>
                        <input type="text" class="form-control" id="shot">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="foto">xFoto</label>
                        <input type="text" class="form-control" id="foto">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">PP?</label>
                        <select id="inputState" class="form-control">
                            <option selected>Pakai</option>
                            <option>Tidak</option>
                        </select>
                    </div>
                </div>
                <div class="form-row mt-4">
                    <div class="form-group col-md-10">
                        <button type="submit" class="btn btn-outline-danger btn-block">PESAN</button>
                    </div>
                </div>
            </form>
        </div> 
    </div>

    <div class="text-center jasaDesain">
        <h4>DESAIN PRODUK</h4>
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ URL::asset('img/desainKemasan.webp') }}" alt="Card image cap">
                    <div class="card-img-overlay    ">
                        <h5 class="card-title">DESAIN KEMASAN</h5>
                    </div>
                    <button type="submit" class="btn btn-outline-danger btn-block mt-4">PILIH PAKET</button>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ URL::asset('img/DesainLogo.webp') }}" alt="Card image cap">
                    <div class="card-img-overlay">
                        <h5 class="card-title">DESAIN LOGO</h5>
                    </div>
                    <button type="submit" class="btn btn-outline-danger btn-block mt-4">PILIH PAKET</button>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ URL::asset('img/desainIG.webp') }}" alt="Card image cap">
                    <div class="card-img-overlay">
                        <h5 class="card-title">DESAIN LOGO</h5>
                    </div>
                    <button type="submit" class="btn btn-outline-danger btn-block mt-4">PILIH PAKET</button>
                </div>
            </div>
        </div>
    </div>

    <div class="jasaPromosi">
        <div class="container">
            <div class="row text-center">
                <div class="col titelPromo">
                    <img src="{{ URL::asset('img/model.webp') }}">
                    <h5 class="mt-3">500.000 Followers</h5>
                </div>
                <div class="col btnForMore">
                    <h4>JASA PROMOSI</h4>
                    <button type="submit" class="btn btn-outline-danger mt-4">CLICK FOR MORE</button><br>
                    <a><img src="{{ URL::asset('img/facebook.webp') }}"></a>
                    <a><img src="{{ URL::asset('img/instagram.webp') }}"></a>
                    <a><img src="{{ URL::asset('img/youtube.webp') }}"></a>
                    <a><img src="{{ URL::asset('img/twitter.webp') }}"></a>
                </div>
            </div>
        </div>
    </div>
    <footer></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>