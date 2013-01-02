<?php  
include("connect.php");

if($_POST["button"] == "Daftar")  
{
    $nama = $_POST['namamember'];
	$alamat = $_POST['alamatmember'];
	$username = $_POST['usernamemember'];
	$tipe = 2;
	$password = $_POST['passwordmember'];
	$email = $_POST['emailmember'];
	$kategori = $_POST['kategorimember'];
    $biografi = $_POST['biografimember'];
	$foto = $_POST['fotomember'];
	
	$sql = "INSERT INTO member(NAMAMEMBER, ALAMATMEMBER, USERNAMEMEMBER, TIPE, PASSWORDMEMBER, EMAILMEMBER, KATEGORIMEMBER, BIOGRAFIMEMBER, FOTOMEMBER) 
	VALUES ('$nama', '$alamat', '$username', '$tipe', '$password', '$email', '$kategori', '$biografi', '$foto')"; 
    $result = mysql_query($sql);
}
?>