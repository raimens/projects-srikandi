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
	  	<form action="../function/fungsiaddanggota.php" method="post" name="tambahanggota">
		  <h3><strong>Ubah Riwayat Seniman</strong></h3><br>
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
		  <td><label>Provinsi</label>&nbsp;</td>
		  <td>
		  <label class="control-label" for="daerahmember"></label>
		  <select type="text" name="daerah">
		  <option value="Aceh">Aceh</option>
		  <option value="Sumatera Utara">Sumatera Utara</option>
		  <option value="Sumatera Barat">Sumatera Barat</option>
		  <option value="Riau">Riau</option>
		  <option value="Kepulauan Riau">Kepulauan Riau</option>
		  <option value="Jambi">Jambi</option>
		  <option value="Sumatera Selatan">Sumatera Selatan</option>
		  <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
		  <option value="Bengkulu">Bengkulu</option>
		  <option value="Bandar Lampung">Bandar Lampung</option>
		  <option value="DKI Jakarta">DKI Jakarta</option>
		  <option value="Banten">Banten</option>
		  <option value="Jawa Barat">Jawa Barat</option>
		  <option value="Jawa Tengah">Jawa Tengah</option>
		  <option value="DI Yogyakarta">DI Yogyakarta</option>
		  <option value="Jawa Timur">Jawa Timur</option>
		  <option value="Bali">Bali</option>
		  <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
		  <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
		  <option value="Kalimantan Barat">Kalimantan Barat</option>
		  <option value="Kalimantan Tengah">Kalimantan Tengah</option>
		  <option value="Kalimantan Selatan">Kalimantan Selatan</option>
		  <option value="Kalimantan Timur">Kalimantan Timur</option>
		  <option value="Kalimantan Utara">Kalimantan Utara</option>
		  <option value="Sulawesi Utara">Sulawesi Utara</option>
		  <option value="Gorontalo">Gorontalo</option>
		  <option value="Sulawesi Tengah">Sulawesi Tengah</option>
		  <option value="Sulawesi Barat">Sulawesi Barat</option>
		  <option value="Sulawesi Selatan">Sulawesi Selatan</option>
		  <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
		  <option value="Maluku">Maluku</option>
		  <option value="Maluku Utara">Maluku Utara</option>
		  <option value="Papua Barat">Papua Barat</option>
		  <option value="Papua">Papua</option>
		</select>
		  </td>
		  </tr>
		  <tr>
		  <td><label>Username</label>&nbsp;</td>
		  <td><input type="text" name="usernamemember" id="usernamemember" />&nbsp;</td>
		  </tr>
		  <tr>
		  <td><label>Password</label>&nbsp;</td>
		  <td><input type="password" name="passwordmember" id="passwordmember" />&nbsp;</td>
		  </tr>
		  <tr>
		  <td><label>Email</label>&nbsp;</td>
		  <td><input type="email" name="emailmember" id="emailmember" />&nbsp;</td>
		  </tr>
		  <tr>
		  <td><label>Kategori Member</label>&nbsp;</td>
		  <td><input type="checkbox" name = "kategorimember[]" value="Seni Tari">  Seni Tari<br>
            <input type="checkbox" name = "kategorimember[]" value="Seni Musik">  Seni Musik<br>
            <input type="checkbox" name = "kategorimember[]" value="Seni Rupa">  Seni Rupa<br>
            <input type="checkbox" name = "kategorimember[]" value="Drama">  Drama<br>
          </td>
		  </tr>
		  <tr>
		  <td><label>Biografi</label>&nbsp;</td>
		  <td><label for="biografimember"></label>
		  <textarea name="biografimember" id="biografimember" cols="45" rows="5"></textarea>&nbsp;</td>
		  </tr>
		  <tr>
		  <td><label>Foto</label>&nbsp;</td>
		  <td><input class="input-large" type="file" name="fotomember" accept="image/png,image/jpeg,image/jpg"><small><span class="help-block">Max 200 kb. jpg / jpeg / png</span></small>&nbsp;</td>
		  </tr>
		  </table>
		  <p><input type="checkbox" name="setuju" id="setuju" /> Setuju dengan syarat dan ketentuan pendaftaran  </p><br>
		  <input type="submit" class="small blue button radius" name="button" value="Daftar">
		  <input class="small white button radius" type="reset" value="Reset">
		</form>
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