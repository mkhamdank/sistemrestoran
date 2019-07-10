<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo site_url('calculator2') ?>">Belajar Menghitung</a></li>
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
  </div>
</nav>
  

<div class="jumbotron text-center" style="background-color: pink";>
    <h1>Hello There!!</h1>      
    <p>Membuat Halaman Bootstrap Sederhana</p>
  </div>
  <div class="container">
  <div class="row">
  <div class="col-sm-5">Bootstrap uses Autoprefixer to deal with CSS vendor prefixes. If you're compiling Bootstrap from its Less/Sass source and not using our Gruntfile, you'll need to integrate Autoprefixer into your build process yourself. </div>
  <div class="col-sm-5">If you're using precompiled Bootstrap or using our Gruntfile, you don't need to worry about this because Autoprefixer is already integrated into our Gruntfile.</div>
  <div class="col-sm-2">Bootstrap is downloadable in two forms, within which you'll find the following directories and files, logically grouping common resources and providing both compiled and minified variations.</div>
</div>
</div>
<div class="jumbotron text-center" style="background-color: pink;">
  <div class="row">
  <div class="col-sm-4">Bootstrap uses Autoprefixer to deal with CSS vendor prefixes. If you're compiling Bootstrap from its Less/Sass source and not using our Gruntfile, you'll need to integrate Autoprefixer into your build process yourself. </div>
  <div class="col-sm-4">If you're using precompiled Bootstrap or using our Gruntfile, you don't need to worry about this because Autoprefixer is already integrated into our Gruntfile.</div>
  <div class="col-sm-4"><span class="glyphicon glyphicon-envelope"></span>   sulthonah.fauziah10@gmail.com</div>

    <!-- <h1>Hello There!!</h1>      
    <p>Membuat Halaman Bootstrap Sederhana</p> -->

  </div>
  <!-- <p>This is some text.</p>      
  <p>This is another text.</p> -->
  <!-- <h3>Basic Navbar Example</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p> -->
</div>
</body>
</html>