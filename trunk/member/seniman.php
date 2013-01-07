<!DOCTYPE html>
<html lang="en">
<body background="../img/bar2.jpg">
<head>
<title>Sistem Informasi Kesenian Daerah Indonesia</title>
<link href="../img/icon.png" rel="shortcut icon">
<link href="../css/bootstrap.min.css" id="bs-css" rel="stylesheet">
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/css_002.css" rel="stylesheet" type="text/css">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap-responsive.css" rel="stylesheet">
</head>

<body class="mainblock">
  <div class="container">
  <?php
  include ("headermember.php");
  include ("../function/loginfirst.php");
  ?>
  </div>
  
  <div class="container">
    <div class="row">
	  <div class="span3">
		<?php
		include ("welcome.php");
		?>
	  <div class="sidewell" style="margin-top:0px;">
		<?php
		include ("../search.php");
		?>
	  </div>
      </div>
	  
	  <div class="span9">
		<div class="well" style="padding-left:50px;">
		<center><h3>Seniman Indonesia</h3></center><br>
		<?php
		include("../function/connect.php");
		$query=mysql_query("SELECT * FROM member where tipe ='2' ORDER BY USERNAMEMEMBER"); 
		while ($row = mysql_fetch_row($query)){
		?>
		<div class="row">
		  <div class="span2">
		  <tr>
		  <td><img src="<?php echo $row[8]; ?>"><br></td>
		  </tr>
		  <tr>
		  <td><center><p><?php echo $row[0]; ?></p></center></td>
		  </tr>
		  </div>
		<?php
		}
		?>
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
      <div class="span12">
		<p style="padding:20px;color:black;"><b>Sistem Informasi Kesenian Daerah Indonesia<span class="pull-right">Kelompok 2</span></b></p>
      </div>
    </div>

</div>

<?php
include ("../js/script.php");
?>
</body>
</html>