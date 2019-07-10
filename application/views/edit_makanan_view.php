<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Restoran Ku</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('restoran_controller') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li>
            <a href="<?php echo site_url('login_controller/logout'); ?>" data-toggle="control-sidebar"><b>Logout</b></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/admin/dist/img/admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $nama; ?></p>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGASI</li>
        <li class="active">
          <a href="<?php echo site_url('restoran_controller') ?>">
            <span>Menu Makanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('restoran_controller/minuman') ?>">
            <span>Menu Minuman</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('restoran_controller/create_makanan') ?>">
            <span>Tambah Makanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('restoran_controller/create_minuman') ?>">
            <span>Tambah Minuman</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('restoran_controller/pesananMakanan') ?>">
            <span>Pesanan Makanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('restoran_controller/pesananMinuman') ?>">
            <span>Pesanan Minuman</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('restoran_controller/historyPesanan') ?>">
            <span>History Pemesanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<div class="content-wrapper">
<div class="jumbotron text-center">
<div class="container">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <?php echo form_open_multipart('restoran_controller/edit_makanan/'.$this->uri->segment(3).'/'.$this->uri->segment(4));?>
    <legend><h2><b>Edit Menu Makanan</b></h2></legend>
    <?php echo validation_errors(); ?>
    <div class="form-group">

    <?php
foreach ($makanan->result() as $key){
  ?>
      <label>ID</label>
      <input type="text" class="form-control" name="id_makanan" id="nama_makanan" placeholder="Masukkan ID Makanan" value="<?php echo $key->id_makanan; ?>"></input>
  <?php
}
    ?>


    <?php
foreach ($makanan->result() as $key){
  ?>
      <label>Nama Makanan</label>
      <input type="text" class="form-control" name="nama_makanan" id="nama_makanan" placeholder="Masukkan Nama Makanan" value="<?php echo $key->nama_makanan; ?>"></input>
  <?php
}
    ?>

    <?php
foreach ($makanan->result() as $key){
  ?>
      <label>Jenis Makanan</label>
      <input type="text" class="form-control" name="jenis_makanan" id="jenis_makanan" placeholder="Masukkan Jenis Makanan" value="<?php echo $key->jenis_makanan; ?>"></input>
  <?php
}
    ?>

    <?php
foreach ($makanan->result() as $key){
  ?>
      <label>Harga</label>
      <input type="text" class="form-control" name="harga_makanan" id="harga_makanan" placeholder="Masukkan Harga Makanan" value="<?php echo $key->harga_makanan; ?>"></input>
  <?php
}
    ?>

    <?php
foreach ($makanan->result() as $key){
  ?>
      <label>Stok Makanan</label>
      <input type="text" class="form-control" name="stok_makanan" id="stok_makanan" placeholder="Masukkan Stok Makanan" value="<?php echo $key->stok_makanan; ?>"></input>
  <?php
}
    ?>
<?php
foreach ($makanan->result() as $key){
  ?>
      <label>Gambar</label><br>
      <img width="70" src="<?=base_url("assets/uploads")."/".$key->gambar?>">
      <input type="file" name="userfile" size="20" class="form-control">
  <?php
}
    ?>
    </div>
      <button type="submit" class="btn btn-info">Edit</button>
      <?php echo form_close();?>
      </div>
      </div>
      </div>
      </div>
      </div>
      <script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/admin/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/admin/dist/js/demo.js"></script>

</body>
</html>

