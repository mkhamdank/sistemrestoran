<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="utf-8">
  <title>Restoran Ku</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/freelancer/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>assets/freelancer/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/freelancer/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index" style="background-color: #18bc9c">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Sulthonah Resto</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                <img class="img-responsive" src="<?php echo base_url();?>assets/freelancer/img/LOGO256.png" alt="">
                </div>
            </div>
        </div>
    </header>

    <div class="container text-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <a class="btn btn-outline" href="<?php echo site_url('Restoran_controller/pemesanan'); ?>">Pesan</a>
        </div>
    </div>
    <div class="container text-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="intro-text">
                <hr class="star-light">
                <h1 style="color: #2c3e50">Menu Makanan</h1>
                <hr class="star-light">
            </div>
                <div class="row g-pad-bottom" >
                    <?php foreach ($array_makan as $key) { ?>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img width="250px" src="<?=base_url("assets/uploads")."/".$key['gambar'] ?>">
                                </div>
                                <h4><?php echo $key['nama_makanan'] ?></h4>
                                <h5>Harga : <?php echo $key['harga_makanan'] ?></h5>
                                <h5>Stok : <?php echo $key['stok_makanan'] ?></h5>
                            </div>
                            <br>
                    </div>
                        <?php } ?>
                </div>
        </div>
    </div>

    <div class="container text-center">
    <br><br><br>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="intro-text">
                <hr class="star-light">
                <h1 style="color: #2c3e50">Menu Minuman</h1>
                <hr class="star-light">
            </div>
                <div class="row g-pad-bottom" >
                    <?php foreach ($array_minum as $key) { ?>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img width="250px" src="<?=base_url("assets/uploads")."/".$key['gmbr'] ?>">
                                </div>
                                <h4><?php echo $key['nama_minuman'] ?></h4>
                                <h5>Harga : <?php echo $key['harga_minuman'] ?></h5>
                                <h5>Stok : <?php echo $key['stok_minuman'] ?></h5>
                            </div>
                            <br>
                    </div>
                    <?php } ?>
                </div>
        </div>
    </div>
    <br>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-12">
                        <h3>Lokasi</h3>
                        <p>Simbar Menjangan 43A
                            <br>Kota Malang
                            <br><br><div class="col-lg-12">
                        Copyright &copy; Sulthonah Resto 2017
                    </div></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                    <a href="<?php echo site_url('login_controller') ?>" class="btn btn-lg btn-primary">
                         Login Admin
                    </a>
                    
                </div>
                </div>
            </div>
        </div>
    </footer>

    
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/freelancer/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/freelancer/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url();?>assets/freelancer/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>assets/freelancer/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/freelancer/js/freelancer.min.js"></script>
</body>

</html>
