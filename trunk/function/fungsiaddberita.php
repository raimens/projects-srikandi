<?php  
include("connect.php");
include("loginfirst.php");


if($_POST["button"] == "Simpan")  
{
	
	date_default_timezone_set('Asia/Jakarta');
    $datetime=date("d-m-y");
    $judul = $_POST['judulberita'];
	$isi = $_POST['isiberita'];
	$usernamemember	= $_SESSION['usernamemember'];
	$jenisberita = $_POST['jenisberita'];
	
	$sql = "INSERT INTO berita(USERNAMEMEMBER, JUDULBERITA, ISIBERITA, TANGGALBERITA, JENISBERITA) 
	VALUES ('$usernamemember','$judul','$isi','$datetime','$jenisberita')"; 
    $result = mysql_query($sql);
}
?>