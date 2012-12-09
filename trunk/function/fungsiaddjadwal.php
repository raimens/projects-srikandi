<?php  
include("connect.php");
include("loginfirst.php");

if($_POST["button"] == "Tambah Jadwal")  
{
	$usernamemember	= $_SESSION['usernamemember'];
    $namajadwal = $_POST['namajadwal'];
	$tanggaljadwal = $_POST['tanggaljadwal'];
	$tempatjadwal = $_POST['tempatjadwal'];
	$deskripsijadwal = $_POST['deskripsijadwal'];
	$gambarkegiatan = $_POST['gambarkegiatan'];
	
	$sql = "INSERT INTO jadwal(USERNAMEMEMBER, NAMAJADWAL, TANGGALJADWAL, TEMPATJADWAL, DESKRIPSIJADWAL, GAMBARKEGIATAN) 
	VALUES ('$usernamemember','$namajadwal','$tanggaljadwal','$tempatjadwal','$deskripsijadwal','$gambarkegiatan')"; 
    $result = mysql_query($sql);

}


?>