<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sistem Informasi Kesenian Daerah Indonesia</title>
    <link rel="shortcut icon" href="img/icon.png"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <?php
	include ("header.php");
	?>
	
	<div class="container-fluid">
	  <div class="row-fluid">
		<div class="span3">
		<?php
		include ("search.php");
		?>
		</div>
	  
		<div class="span9">
		  <form action="fungsitambah-anggota.php" method="post" name="tambah anggota">
			<h3><strong>Formulir Tambah Anggota</strong></h3>
			<table width="507">
			<tr>
			  <td width="150"><label>Nama</label>&nbsp;</td>
			  <td width="345"><label for="namamember"></label>
			  <input type="text" name="namamember" id="namamember" /></td>
			</tr>
			<tr>
			  <td><label>Alamat</label>&nbsp;</td>
			  <td><input type="text" name="alamatmember" id="alamatmember" />&nbsp;</td>
			</tr>
			<tr>
			  <td><label>Username</label>&nbsp;</td>
			  <td><input type="text" name="usernamemember" id="usernamemember" />&nbsp;</td>
			</tr>
			<tr>
			  <td><label>Password</label>&nbsp;</td>
			  <td><input type="text" name="passwordmember" id="passwordmember" />&nbsp;</td>
			</tr>
			<tr>
			  <td><label>Email</label>&nbsp;</td>
			  <td><input type="text" name="emailmember" id="emailmember" />&nbsp;</td>
			</tr>
			<tr>
			  <td><label>Kategori Member</label>&nbsp;</td>
			  <td><input type="text" name="kategorimember" id="kategorimember" />&nbsp;</td>
			</tr>
			<tr>
			  <td><label>Biografi</label>&nbsp;</td>
			  <td><label for="biografimember"></label>
			    <textarea name="biografimember" id="biografimember" cols="45" rows="5"></textarea>&nbsp;</td>
			</tr>
			<tr>
			  <td><label>Foto</label>&nbsp;</td>
			  <td><input type="text" name="fotomember" id="fotomember" />&nbsp;</td>
			</tr>
		    </table>
			<p>
			<input type="checkbox" name="setuju" id="setuju" />
			Setuju dengan syarat dan ketentuan pendaftaran  </p><br>
			<button type="submit" class="btn btn-primary">Daftar</button>
		  </form>
		</div>
	  </div>
	</div>	
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>