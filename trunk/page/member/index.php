<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sistem Informasi Kesenian Daerah Indonesia</title>
    <link rel="shortcut icon" href="img/icon.png"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <?php
	include ("header.php");
	?>
	
	<div class="container-fluid">
	  <div class="row-fluid">
		<div class="span3">
		<?php
		include ("search.php");
		?>
		</div>
	  
		<div class="span9">
		  <div id="slideshow" class="carousel slide">
			<div class="carousel-inner">
			  <div class="active item">halooo</div>
			  <div class="item">halo</div>
			  <div class="item">mumu</div>
			</div>
		  <a class="carousel-control left" href="" data-slide="prev">&lsaquo;</a>
		  <a class="carousel-control right" href="" data-slide="next">&rsaquo;</a>
		  </div>
		</div>
	  </div>
	</div>	
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>