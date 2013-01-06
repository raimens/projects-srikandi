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
  include ("../function/loginfirstadmin.php");
  include ("adminheader.php");
  ?>
  
  <div class="container">
	<div class="row">
	  <?php
	  include ("sidebar.php");
	  ?>

	  <div class="span9">
	  <h3>Selamat datang di SRIKANDI</h3><br><br>
	  <div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active"><img src="../img/slide.jpg" alt="">
			<div class="container">
			<div class="carousel-caption">
			<p class="lead">SRIKANDI ini itu lalala</p>
			</div>
			</div>
		  </div>
		  <div class="item"><img src="../img/slide2.jpg" alt="">
			<div class="container">
			<div class="carousel-caption">
			<p class="lead">SRIKANDI bumbumski</p>
			</div>
			</div>
		  </div>
		  <div class="item"><img src="../img/slide3.jpg" alt="">
			<div class="container">
			<div class="carousel-caption">
			<p class="lead">SRIKANDI nomnomnom</p>
			</div>
			</div>
		  </div>
		</div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div>
	  
	  <div class="well" style="padding-left:50px;">
		<?php
		include("../function/connect.php");
		$query=mysql_query("SELECT * FROM member where tipe ='2' ORDER BY USERNAMEMEMBER"); 
		while ($row = mysql_fetch_row($query)){
		?><ul class="thumbnails"><li class="span2">
			<a href="#" class="thumbnail">
			<img src="<?php echo $row[8]; ?>">
			</a></li>
		<?php } ?>
		
		<hr>
	  </div>
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