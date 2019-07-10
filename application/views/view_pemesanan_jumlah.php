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

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
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
                    <!-- <li class="page-scroll">
                        <a href="">Halo Anonymous!!</a>
                    </li> -->
                    <!-- <li class="page-scroll">
                        <a href="#about">Tentang</a>
                    </li>
                    <li class="page-scroll">
                     <a href="#contact">Kontak</a>
                    </li> -->
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
                <div class="col-lg-4">
                <img class="img-responsive" src="<?php echo base_url();?>assets/freelancer/img/LOGO256.png" alt="">
                </div>
                <div class="col-lg-8">
                    <div class="intro-text">
                        <h1 class="name">Form<br>Pemesanan</h1>
                        <hr class="star-light">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                        <?php echo form_open('restoran_controller/pesan'); ?>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="no_meja">Nomor Meja</label>
                                <input type="text" class="form-control" placeholder="<?php echo $nomor_meja ?>" id="no_meja"  name="no_meja" value="<?php echo $nomor_meja ?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="nama_pemesan">Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" id="nama_pemesan" name="nama_pemesan" value="<?php echo $nama_pemesan ?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="tanggal">Tanggal</label>
                                <input type="text" class="form-control" placeholder="Tanggal" id="tanggal" name="tanggal" required data-validation-required-message="Isikan Tanggal" value="<?php echo $tanggal ?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="pesanan_mkn">Makanan</label>
                                <?php 
                                $mak = count($data_makanan);
                                for ($i = 0;$i<$mak ;$i++) { ?>
                                    <input type="text" class="form-control" id="" name="nama_makanan" value="<?php echo $data_makanan[$i]; ?>">
                                    <select name="jumlahmak[]" id="" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                <p class="help-block text-danger"></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="pesanan_mnm">Minuman</label>
                                <?php 
                                $min = count($data_minuman);
                                for ($i = 0;$i<$min ;$i++) { ?>
                                    <input type="text" class="form-control" id="" name="nama_minuman" value="<?php echo $data_minuman[$i]; ?>">
                                    <select name="jumlahmin[]" id="" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                <p class="help-block text-danger"></p>
                                <?php } ?>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-primary" data-dismiss="modal">Pesan</button>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>  


    <!-- Footer -->
    <footer style="color: white" class=" footer text-center">
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
