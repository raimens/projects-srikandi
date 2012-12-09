<?php  
include("connect.php");

session_start();
if (!isset($_SESSION['USERNAMEMEMBER'])) {
header('Location: index.php');
}

if($_POST["button"] == "Simpan")  
{
	date_default_timezone_set('Asia/Jakarta');
    $datetime=date("d-m-y");
    $judul = $_POST['judulberita'];
	$isi = $_POST['isiberita'];
	
	$sql = "INSERT INTO member(USERNAMEMEMBER, JUDULBERITA, ISIBERITA, TANGGALBERITA) 
	VALUES (".$_SESSION['USERNAMEMEMBER'].",'$judul','$isi','$datetime')"; 
    $result = mysql_query($sql);
}
?>