<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sistem Informasi Kesenian Daerah Indonesia</title>
    <link rel="shortcut icon" href="../../img/icon.png"/>
    <link href="../../css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <?php
	include ("headermember.php");
	include "../../function/connect.php";
	session_start();
	
	if (!isset($_SESSION['usernamemember'])){
		header('Location: ../../home.php');
	}
	$sql = "SELECT usernamemember FROM member";
	$login = mysql_query($sql) or die (mysql_error());
	$usernamemember = "";
	if ($row=mysql_fetch_row($login)){
		$usernamemember = $row[0];
	}
	?>
	
	<div class="container-fluid">
	  <div class="row-fluid">
		<div class="span3">
		<?php
		include ("../../search.php");
		?>
		</div>
	  
		<div class="span9">
		</div>
	  </div>
	</div>	
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>