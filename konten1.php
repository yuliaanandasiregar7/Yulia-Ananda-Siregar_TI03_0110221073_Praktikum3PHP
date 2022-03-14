<?php
include_once 'header.php';
?>

<!--konten 1 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormBelanja_Yulia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="container-fluid">
	<div class="row">

  <!--bagian kiri-->
		<div class="col-md-6">
<form action="form_belanja.php" method="POST">
  <div class="form-group row">
    <label for="Customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="Customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="Tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="mesin cuci"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Jumlah_beli" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="Jumlah_beli" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
     <input type="submit" value="SIMPAN" name="proses">

</form>
</div>
</div>
</div>

<!--bagian kanan-->
<div class="col-md-6">
        <ul class="list-group">
          <li class="list-group-item active">Daftar Harga</li>
          <li class="list-group-item">TV : 4.200.000 </li>
          <li class="list-group-item">Kulkas : 3.100.000</li>
          <li class="list-group-item">Mesin Cuci : 3.800.000 </li>
          <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
        </ul>
      </div>
    </div>
  </div>
  
  <?php
include_once 'footer.php';
?>