<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sistem Informasi Kesenian Daerah Indonesia</title>
    <link rel="shortcut icon" href="../img/icon.png"/>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <?php
	include ("headermember.php");
	include ("../function/loginfirst.php");
	?>
	
	<div class="container-fluid">
	  <div class="row-fluid">
		<div class="span3">
		<?php
		include ("../search.php");
		?>
		</div>
	  
		<div class="span9">
		  <form enctype="multipart/form-data" action="../function/fungsiaddjadwal.php" method="post" name="tambahjadwal">
			<h3><strong>Tambah Jadwal</strong></h3>
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
			<input type="submit" class="btn btn-primary" name="button" value="Tambah Jadwal">
			<input class="btn" type="reset" value="Reset">
		  </form>
		</div>
	  </div>
	</div>
	<script src="../js/jquery.autogrow-textarea.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>