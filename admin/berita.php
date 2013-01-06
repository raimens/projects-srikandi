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

	  <div class="span9">
	  <h3>Daftar berita mengenai Kesenian dan Kebudayaan Indonesia</h3><br>
	  <a class="btn" href="tambahberita.php">Tambah Berita</a>
	  <a class="btn" href="">Hapus Berita</a>
	<?php
    include ("../function/fungsiviewberita.php");
	do{   
        list($namamember,$judulberita,$tanggalberita,$jenisberita,$isiberita)=$row;  
        echo "<table width='746' border=0>";
		echo "<tr>";
		echo "<td width='40'><input type='checkbox' name='check' id='check'/></td>";
        echo "<td width='150'>Nama Pembuat</td>";
		echo "<td width='404'>: $namamember</td>";
		echo "<td width='192'><a class='btn btn-danger' href='ubahberita.php'>Ubah berita</a></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td>Judul Berita</td>";
		echo "<td>: $judulberita</td>";
        echo "</tr>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td>Tanggal Berita</td>";
		echo "<td>: $tanggalberita</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td>";
		echo "<td>Jenis Berita</td>";
		echo "<td>: $jenisberita</td>";
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