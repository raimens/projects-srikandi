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
	  <h3>Daftar Seniman Indonesia</h3><br>
	  <?php
    //include ("../function/fungsisearchadmin.php");
	   
        while ($data = mysql_fetch_array($query)){
		echo "<table width='746' border=0>";
		
		echo "<tr>";
		echo "<td width='40'><input type='checkbox' name='check' id='check'/></td>";
        echo "<td width='150'>Nama</td>";
		echo "<td width='404'>: $data['namamember']</td>";
		echo "<td width='192'><a class='btn btn-danger' href=''>Ubah Riwayat</a></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td>Alamat</td>";
		echo "<td>: $data['alamatmember']</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td>Asal Member</td>";
		echo "<td>: $data['daerahmember']</td>";
        echo "</tr>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td>Username</td>";
		echo "<td>: $data['usernamemember']</td>";		
		echo "</tr>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td>Email</td>";
		echo "<td>: $data['emailmember']</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td>Kategori</td>";
		echo "<td>: $data['kategorimember']</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td>Biografi</td>";
		echo "<td>: $data['biografimember']</td>";
		echo "</tr>";
		echo "<br>";
     }
	?>
        	</div>
	  </div>
    </div>

<?php
include ("../js/script.php");
?>
</body>
</html>