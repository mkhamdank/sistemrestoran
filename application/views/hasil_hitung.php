<!DOCTYPE html>
<html>
<head>
	<title>Hasil Hitung</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FRAMEWORK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Belajar Menghitung</a></li>
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
  </div>
</nav>
<div class="jumbotron text-center" style="background-color: #daefee";>
	<h2><b>Hasil Perhitungan</b></h2>
<h3>
	<?php echo $angka1.$pilih_hitung.$angka2." = ".$hasil_hitung;
  ?>
</h3>
<a href="<?php echo site_url('calculator2/');?>"><b><- Kembali Menghitung</b></a>
</body>
</html>
