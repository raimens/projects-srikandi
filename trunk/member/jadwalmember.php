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
		<a align="right" class="btn" href="tambah-jadwal.php">+ Tambah Jadwal</a><br><br>
		</div>
	  </div>
	</div>	
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>