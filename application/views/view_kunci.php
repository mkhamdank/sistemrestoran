<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Peminjaman Kunci</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FRAMEWORK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Data Kunci</a></li>
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
  </div>
</nav>
<div class="jumbotron text-center" style="background-color: #daefee";>
      <h2><b>Data Kunci</b></h2>
      <table class="table table-bordered text-center">
      <thread>
        <tr>
          <td>Nama Ruangan</td>
          <td>Kelengkapan</td>
          <td>Gedung</td>
          <td>Id Ruangan</td>
        </tr>
      </thread>
      <tbody>
        <?php foreach ($array as $key) {?>
        <tr>
          <td><?php echo $key['nama_ruangan']?></td>
          <td><?php echo $key['kelengkapan']?></td>
          <td><?php echo $key['gedung']?></td>
          <td><?php echo $key['id_ruangan']?></td>
        </tr>
        <?php } ?>
      </tbody>
        
      </table>

</div>
</body>
</html>