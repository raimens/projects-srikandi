<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem Informasi Kesenian Daerah Indonesia</title>
<link href="img/icon.png" rel="shortcut icon" />
<link href="css/bootstrap.min.css" id="bs-css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/css_002.css" rel="stylesheet" type="text/css">
<link href="css/css.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>

<body class="mainblock">
  <div class="container">
  <?php
  include ("header.php");
  ?>
  </div>
  
  <div class="container">
    <div class="row">
	  <div class="span3">
		<div class="sidewell" style="margin-top:0px;">
		 <?php
		  include ("login.php");
		  ?>
		</div>
		
		<div class="sidewell" style="margin-top:0px;">
		 <?php
		  include ("search.php");
		  ?>
		</div>
		
		<div class="wellmess">
		<h4>About SRIKANDI</h4><br>
		<p>SRIKANDI merupakan website mengenai kesenian indonesia. Website ini dibuat sebagai final project RBPL lalala</p><br>
		<div style="text-align: center;">
		<a href="aboutus.php" class="white radius button">Learn More</a>
		</div>
		</div>
		
      </div>
	  
	  <div class="span9">
		<div class="well" style="padding-left:50px;">
		<ul class="thumbnails">
		  <li class="span2">
			<a href="#" class="thumbnail">
			<img src="img/1.jpg" alt="">
			</a>
		  </li>
		  
		  <li class="span2">
			<a href="#" class="thumbnail">
			<img src="img/2.jpg" alt="">
			</a>
		  </li>

		  <li class="span2">
			<a href="#" class="thumbnail">
			<img src="img/3.jpg" alt="">
			</a>
		  </li>

		  <li class="span2">
			<a href="#" class="thumbnail">
			<img src="img/4.jpg" alt="">
			</a>
		  </li>

		  <li class="span2">
			<a href="#" class="thumbnail">
			<img src="img/5.jpg" alt="">
			</a>
		  </li>

		  <li class="span2">
			<a href="#" class="thumbnail">
			<img src="img/6.jpg" alt="">
			</a>
		  </li>
		  
		  <li class="span2">
			<a href="#" class="thumbnail">
		  <img src="img/7.jpg" alt="">
		  </a>
		  </li>
		  <li class="span2">
			<a href="#" class="thumbnail">
		  <img src="img/8.jpg" alt="">
		  </a>
		  </li>
		</ul><hr>
		
		<div style="text-align: center;">
		<p><a href="#" class="medium green button radius">load more...</a></p>
		</div>
		</div>
	  </div>
	</div>
    
	<div class="container" style="padding:30px;">
	<div class="row">
	<div class="span10"></div>
	<div class="span2"></div>
	</div>
	</div>
	
	<div class="row">
      <div class="span6">
		<div class="sidewell2" style="color:black;">
		<h3>Informasi via email</h3>
		<p>Dapatkan informasi mengenai kebudayaan indonesia melalui email setiap harinya!</p>
		<form class="well form-search">
		  <input class="input-xlarge search-query" type="text">
		  <button type="submit" class="blue small radius button">Subscribe</button>
		</form>
		</div>
	  </div>
    
	  <div class="span3">
		<div class="wellfb">
		<h3>Find us on Facebook</h3>
		<p>Sistem Informasi Kesenian Daerah Indonesia SRIKANDI</p><br>
		<div style="text-align: center;"><a href="#" class="white small radius button">Our Facebook Page</a></div><br>
		</div>
      </div>
	  
	  <div class="span3">
		<div class="welltw">
		<h3>Follow us on Twitter</h3>
		<p>Sistem Informasi Kesenian Daerah Indonesia SRIKANDI</p><br>
		<div style="text-align: center;"><a href="#" class="white small radius button">Follow Us on Twitter</a></div><br>
		</div>
      </div>
	</div>
	
    <div class="row">
      <div class="span12">
		<p style="padding:20px;color:black;"><b>Sistem Informasi Kesenian Daerah Indonesia<span class="pull-right">Kelompok 2</span></b></p>
      </div>
    </div>

</div>

<script src="css/jquery.js"></script>
<script src="css/bootstrap.js"></script>
<script src="css/bootstrap-transition.htm"></script>
<script src="css/bootstrap-alert.js"></script>
<script src="css/bootstrap-modal.js"></script>
<script src="css/bootstrap-dropdown.js"></script>
<script src="css/bootstrap-scrollspy.js"></script>
<script src="css/bootstrap-tab.js"></script>
<script src="css/bootstrap-tooltip.js"></script>
<script src="css/bootstrap-popover.js"></script>
<script src="css/bootstrap-button.js"></script>
<script src="css/bootstrap-collapse.js"></script>
<script src="css/bootstrap-carousel.js"></script>
<script src="css/bootstrap-typeahead.js"></script>
</body>
</html>