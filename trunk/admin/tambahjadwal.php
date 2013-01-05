<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem Informasi Kesenian Daerah Indonesia</title>
<link href="../img/icon.png" rel="shortcut icon" />
<link href="../css/bootstrap.min.css" id="bs-css" rel="stylesheet">
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/css_002.css" rel="stylesheet" type="text/css">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap-responsive.css" rel="stylesheet">
</head>

<body class="mainblock">
  <?php
  include ("adminheader.php");
  include ("../function/loginfirstadmin.php")
  ?>
  
  <div class="container">
	<div class="row">
	  <?php
	  include ("sidebar.php");
	  ?>

	  <div class="span9">
		<form enctype="multipart/form-data" action="../function/fungsiaddjadwal.php" method="post" name="tambahjadwal">
			<h3><strong>Tambah Jadwal</strong></h3><br>
			<table width="507">
			<tr>
			  <td width="150"><label>Nama Acara</label>&nbsp;</td>
			  <td width="345"><label for="namajadwal"></label>
			  <input type="text" name="namajadwal" id="namajadwal" /></td>
			</tr>
			<tr>
			  <td><label>Tanggal</label>&nbsp;</td>
			  <td><input type="date" name="tanggaljadwal" id="tanggaljadwal" />&nbsp;</td>
			</tr>
			<tr>
			  <td><label>Lokasi</label>&nbsp;</td>
			  <td><input type="text" name="tempatjadwal" id="tempatjadwal" />&nbsp;</td>
			</tr>
			<tr>
			  <td><label>Deskripsi Acara</label>&nbsp;</td>
			  <td><label for="deskripsijadwal"></label>
			    <textarea name="deskripsijadwal" id="deskripsijadwal" cols="45" rows="5"></textarea>&nbsp;</td>
			</tr>
			<tr>
			  <td><label>Foto</label>&nbsp;</td>
			  <td><input class="input-large" type="file" name="nama_file" accept="image/png,image/jpeg,image/jpg,image/gif"><small><span class="help-block">Max 10MB. jpg / jpeg / png / gif</span></small>&nbsp;</td>
			</tr>
		    </table><br>
			<input type="submit" class="small blue button radius" name="button" value="Tambah Jadwal">
			<input class="small white button radius" type="reset" value="Reset">
		  </form>
		  </div>
    </div>
	
	<div class="container" style="padding:30px;">
	  <div class="row">
		<div class="span10"></div>
		<div class="span2"></div>
	  </div>
	</div>
  </div>

<?php
include ("../js/script.php");
?>
</body>
</html>