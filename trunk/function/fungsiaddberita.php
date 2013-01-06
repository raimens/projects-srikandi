<?php  
include("connect.php");
include("loginfirstadmin.php");

if($_POST["button"] == "Tambah Berita")  
{
	date_default_timezone_set('Asia/Jakarta');
    $datetime=date("d-m-y");
    $judul = $_POST['judulberita'];
	$isi = $_POST['isiberita'];
	$username	= $_SESSION['usernamemember'];
	$jenisberita = $_POST['jenisberita'];
	
	$sql = "INSERT INTO berita(USERNAMEMEMBER, JUDULBERITA, ISIBERITA, TANGGALBERITA, JENISBERITA) 
	VALUES ('$username','$judul','$isi','$datetime','$jenisberita')"; 
    $result = mysql_query($sql);
} header("Location: ../admin/berita.php");
?>