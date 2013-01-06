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
  <div class="container">
	<div class="navbar" style="padding-top:20px;">
	  <div class="navbar-inner" style="padding-top:10px; padding-bottom:5px;">
		<div class="container">
		  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  
		  <a class="brand" href="#">SRIKANDI</a>
		  <div class="nav-collapse">
		  <ul class="nav">
		  <li class="active"><a href="#">Sistem Informasi Kesenian Daerah Indonesia</a></li>
		  </ul>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  
  <div class="container">
    <div class="row">
	  <div class="span4">
	  .	
      </div>
	  
	  <div class="span8">
	  <div class="row-fluid">
		<div class="row-fluid">
		<div class="span12 center login-header">
		</div>
		</div>
			
		<div class="row-fluid">
		<div class="well span5 center login-box">
		<form method="POST" action="../function/fungsi-login-admin.php">
		  <center><h3>ADMIN PANEL</h3></center><br>
		  <div class="control-group">
			<label class="control-label" for="usernamemember">Username</label>
			<div class="controls">
			<input type="text" name="usernamemember">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="passwordmember">Password</label>
			<div class="controls">
			<input type="password" name="passwordmember">
			</div>
		  </div>
		  
		  <p class="center span5">
		  <button type="submit" class="btn btn-primary">Login</button>
		  </p>    
		</form>
		</div>
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
</div>

<<?php
include ("../js/script.php");
?>
</body>
</html>