<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Kalkulator CI</title>
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
<!-- <img src="assets/1.jpg" class="img-rounded" alt="1" width="304" height="236"> -->

	<h2><b>Belajar Berhitung</b></h2>
	<br>
	<form action="<?php echo site_url('calculator2/hasil_hitung');?>" method="POST">
		Angka pertama : &nbsp <input type="text"  name="angka1"/><br/><br/>
		Angka kedua : &nbsp &nbsp &nbsp <input type="text"  name="angka2"/><br/><br/>
		<select name="pilih hitung">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select><br/><br/>
		<input type="submit" value="Hitung">
		</form>
		</div>
</body>
</html>