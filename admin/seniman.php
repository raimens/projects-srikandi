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
  include ("../function/loginfirstadmin.php");
  include ("../function/fungsiviewseniman.php");
  ?>
  
  <div class="container">
	<div class="row">
	  <?php
	  include ("sidebar.php");
	  include ("../function/fungsipagingsenimanadmin.php");
	  ?>
     
	  <div id="seniman" class="span9">
	  <div class="pagination pagination-centered">
    <ul>
	<?php 
		for($i=1; $i<=$jumlahhalaman; $i++){
			print '<li><a href="seniman.php?page='.$i.'">'.$i.'</a></li>';
		}
	?>
	</ul>
	</div>
	<form method="post" name="seniman" action="../function/fungsihapusseniman.php">
	  <h3>Daftar Seniman Indonesia</h3><br>
	  <a class="small blue button radius" href="tambahanggota.php">Tambah Seniman</a>
	  <input type="submit" class="small red button radius" id="button" name="button" value="Hapus Seniman"><br><br>
<<<<<<< .mine
	<?php
	do{   
        list($namamember,$alamatmember,$usernamemember,$emailmember,$kategorimember,$biografimember,$fotomember,$daerahmember)=$row;  
        echo "<table width='792' border=0>";
		echo "<tr>";
		echo "<td width='40'><input type='checkbox' name='checkbox[]' id='checkbox[]' value='$usernamemember'/></td>";
        echo "<td width='150'>Nama</td>";
		echo "<td width='404'>: $namamember</td>";
		echo "<td width='10'></td>";?>
		<td width="192"><a class="small pink button radius" name="ubah" id="ubah" href="ubahanggota.php?USERNAMEMEMBER=<?php echo $usernamemember;?>">Ubah Riwayat</a></td>
=======
	  <div class="row">
		<?php
		do {
		  list($namamember,$alamatmember,$usernamemember,$emailmember,$kategorimember,$biografimember,$fotomember,$daerahmember)=$row;  
		echo "<div class='span3'>
			  <table width='' border=0>
			  <td width='30'><input type='checkbox' name='checkbox[]' id='checkbox[]' value='$usernamemember'/></td>
			  <td width='100'><img src='$fotomember' width='220' height='150'></td>
			  </table>
			  </div>";
		echo "<div class='span6'>
			  <table width='' border=0>
			  <tr>
			  <td width='130'>Nama</td>
			  <td width='400'>: $namamember</td>
			  <td width='20'></td>";
		?>
		<form action="ubahanggota.php" method="post">
		<td width='192'><a class='btn btn-info' href='ubahanggota.php'>Ubah Riwayat</a></td>
		</form>
>>>>>>> .r84
		<?php
		echo "</tr>";
		echo "<tr>";
		echo "<td>Alamat</td>";
		echo "<td>: $alamatmember</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Asal Member</td>";
		echo "<td>: $daerahmember</td>";
        echo "</tr>";
		echo "<tr>";
		echo "<td>Username</td>";
		echo "<td>: $usernamemember</td>";		
		echo "</tr>";
		echo "<tr>";
		echo "<td>Email</td>";
		echo "<td>: $emailmember</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Kategori</td>";
		echo "<td>: $kategorimember</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Biografi</td>";
		echo "<td>: $biografimember</td>";
		echo "</tr>";
		echo "</table>";
		echo "<br>";
		echo "</div>";
    }while($row=mysql_fetch_row($query)); 
	?>
	  	</div>
	  </form>
	</div>
	
    </div>
<?php
//include ("../function/fungsihapusseniman.php");
include ("../js/script.php");
?>
	  


</body>
</html>