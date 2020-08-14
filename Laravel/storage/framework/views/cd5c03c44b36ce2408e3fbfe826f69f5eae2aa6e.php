<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta charset="UTF-8">
    <title>UntukMasarin</title>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style3.css')); ?>" type="text/css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>
<body>
    <!--banner-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="<?php echo e(URL::asset('assets/img/LOGO UMI.png')); ?>" width="80"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">UntukMasarin <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Portofolio</a>
            <a class="nav-item nav-link" href="#">Foto Produk</a>
            <a class="nav-item nav-link" href="#">Jasa Design</a>
            <a class="nav-item nav-link" href="#">Our Other Services</a>
            <a class="nav-item nav-link" href="#">About Us</a>
            <a class="nav-item nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <a class="nav-item nav-link" href="#">Login</a>
            <a class="nav-item nav-link" href="#">Register</a>
          </div>
        </div>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>
    <footer>
        @copyright2015
    </footer>
    



</body><?php /**PATH D:\Aplikasi\xampp\htdocs\Laravel\Laravel\resources\views/layouts/frontend/master.blade.php ENDPATH**/ ?>