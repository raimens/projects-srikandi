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
  ?>
  
  <div class="container">
	<div class="row">
	  <?php
	  include ("sidebar.php");
	  ?>

	  <div id="seniman" class="span9">
        <h3>Manajemen Koperasi</h3>
				<?php
                include("../function/connect.php");
                $sql = "SELECT * FROM member";
                $records = mysql_query($sql); 
                while($rows = mysql_fetch_array($records)){
				echo "<div class='row-fluid'>";	
                echo "<div class='span4'>
                        <img src='../img/default.jpg'' alt='' width='260' height='180' /> 
                      </div>";
                echo "<div class='span8'>
                        Nama : " . $rows['namamember'] . "<br />
                        Alamat : " . $rows['alamatmember'] . "<br />
                        Email : " . $rows['emailmember'] . "<br />
                        Kategori : " . $rows['kategorimember'] . "<br />
                        Biografi : " . $rows['biografimember'] . "<br />
						Asal daerah : " . $rows['daerahmember'] . "<br />
						Username : " . $rows['usernamemember'] . "<br />
                        <p align='right'><a class='btn btn-danger' href='..'>Hapus Member</a></p>
                      </div>";
				echo  "</div>";	  
                }
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