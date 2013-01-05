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

	  <div id="seniman" class="span9">
        <h3>Manajemen Koperasi</h3>
	<?php
    include ("../function/fungsiviewseniman.php");
	do{   
        list($namamember,$alamatmember,$usernamemember,$passwordmember,$emailmember,$kategorimember,$biografimember,$fotomember,$daerahmember)=$row;  
        echo "<tr>";
        echo "<td>$fotomember</td>";		
        echo "<td>$namamember</td>";
		echo "<td>$alamatmember</td>";
		echo "<td>$daerahmember</td>";
        echo "<td>$usernamemember</td>";  
        echo "<td>$passwordmember</td>";
		echo "<td>$emailmember</td>";
		echo "<td>$kategorimember</td>";
		echo "<td>$biografimember</td>";
        echo "</tr>";  
    }while($row=mysql_fetch_row($query)); 
	?>
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