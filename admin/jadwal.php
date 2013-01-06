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

	  <div id="jadwal" class="span9">
	  <h3>Daftar jadwal acara kesenian Indonesia</h3><br>
	  <a class="btn" href="tambahajadwal.php">Tambah Jadwal</a>
	  <a class="btn" href="">Hapus Jadwal</a><br><br>
	<?php
    include ("../function/fungsiviewjadwal.php");
	do{   
        list( $usernamember, $namajadwal, $tanggaljadwal, $tempatjadwal, $deskripsijadwal)=$row;  
        echo "<table width='746' border=0>";
		echo "<tr>";
		echo "<td width='40'><input type='checkbox' name='check' id='check'/></td>";
        echo "<td width='150'>Nama Jadwal</td>";
		echo "<td width='404'>: $namajadwal</td>";
		echo "<td width='192'><a class='btn btn-danger' href=''>Ubah jadwal</a></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td>Tanggal</td>";
		echo "<td>: $tanggaljadwal</td>";
        echo "</tr>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td>Lokasi Acara</td>";
		echo "<td></td>";
		echo "<td>: $tempatjadwal</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td>Deskripsi Acara</td>";
		echo "<td>: $deskripsijadwal</td>";
        echo "</tr>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td>Username</td>";
		echo "<td>: $usernamemember</td>";		
		echo "</tr>";
		echo "<br>";
    }while($row=mysql_fetch_row($query)); 
	?>
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