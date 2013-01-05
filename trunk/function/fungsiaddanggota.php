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
	$kategorimember = $_POST['kategorimember'];
	$biografi = $_POST['biografimember'];
	$foto = $_POST['fotomember'];
	$kategorimember=implode(",",$_POST['kategorimember']);
	
	$sql = "INSERT INTO member(NAMAMEMBER, ALAMATMEMBER, USERNAMEMEMBER, TIPE, PASSWORDMEMBER, EMAILMEMBER, KATEGORIMEMBER, BIOGRAFIMEMBER, FOTOMEMBER) 
	VALUES ('$nama', '$alamat', '$username', '$tipe', '$password', '$email', '$kategorimember', '$biografi', '$foto')"; 
    $result = mysql_query($sql);

}
?>