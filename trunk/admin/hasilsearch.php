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

	  <div class="span9">
	  <h3>ini tampilan halaman hasil search</h3>
<?php
if(isset($_POST['cari'])){
	$query_str='';
	if($_POST['menu']!='none'){
		if($query_str!=''){
			$query_str.='and ';
		}
		$query_str.="jenis_produk='".$_POST['menu']."' ";
	}
	if($_POST['jenis']!=''){
		if($query_str!=''){
			$query_str.='and ';
		}
		$query_str.="jenis='".$_POST['jenis']."' ";
	}
	if($_POST['daerah']!=''){
		if($query_str!=''){
			$query_str.='and ';
		}
		$query_str.="daerah='".$_POST['daerah']."' ";
	}
	if($_POST['j_ukuran']!='none'){
		if($query_str!=''){
			$query_str.='and ';
		}
		$query_str.="jenis_ukuran='".$_POST['j_ukuran']."'";
	}
	if($query_str!=''){
		$query_str='where '.$query_str;
	}

	$cari=$_POST['menu'];
	include ("../function/connect.php");
	$query="select * from seniman ".$query_str;
	echo $query;
	$result=mysql_query($query);
	$data=array();

	while($row=mysql_fetch_array($result)){
		$data[]=array(
			'jenis_produk'=>$row['jenis_produk'],
			'jenis'=>$row['jenis'],
			'daerah'=>$row['daerah'],
			'jenis_ukuran'=>$row['jenis_ukuran']
		);
	}	


?>
<table id="list_produk">
	

<?php
$c=1;
foreach($data as $row){
	if($c % 2){
		echo "<tr class='even'>";
	}else{
		echo "<tr class='odd'>";
	}
	echo 	"<td>".$row['jenis_produk']."</td>".
			"<td>".$row['jenis']."</td>".
	 		"<td>".$row['daerah']."</td>".
			"<td>".$row['jenis_ukuran']."</td>".
			"</tr>";
	$c+=1;
echo $c;
	}

} 
 ?> 
 </table>
	  
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