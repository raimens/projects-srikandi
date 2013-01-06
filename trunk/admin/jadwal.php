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
	  <a class="small blue button radius" href="tambahjadwal.php">Tambah Jadwal</a>
	  <input type="submit" class="small red button radius" id="button" name="button" value="Hapus Jadwal"><br><br>
	  <div class="row">
		<?php
		include ("../function/fungsiviewjadwal.php");
		do{   
			list($namajadwal, $tanggaljadwal, $tempatjadwal, $deskripsijadwal, $usernamemember, $gambarkegiatan)=$row;  
			echo "<div class='span3'>
				  <table width='' border=0>
				  <td width='30'><input type='checkbox' name='checkbox[]' id='checkbox[]' value='$usernamemember'/></td>
				  <td width='100'><img src='$gambarkegiatan' width='220' height='150'></td>
				  </table></div>";
			echo "<div class='span6'>
				  <table width='' border=0>
				  <tr>
				  <td width='130'>Nama Jadwal</td>
				  <td width='400'>: $namajadwal</td>
				  <td width='20'></td>";
			?>
			<form action="ubahjadwal.php" method="post">
			<td width='192'><a class='btn btn-info' href='ubahjadwal.php'>Ubah Jadwal</a></td>
			</form>
			<?php
			echo "</tr>";
			echo "<tr>";
			echo "<td>Tanggal</td>";
			echo "<td>: $tanggaljadwal</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Lokasi Acara</td>";
			echo "<td>: $tempatjadwal</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Deskripsi Acara</td>";
			echo "<td>: $deskripsijadwal</td>";
			echo "</tr>";
			echo "<tr>";
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