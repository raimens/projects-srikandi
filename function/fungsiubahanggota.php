<?php  
include("connect.php");
include("loginfirstadmin.php");

if($_POST["button"] == "Ubah")  
{
 $nama = $_POST['namamember'];
	$alamat = $_POST['alamatmember'];
	$username = $_POST['usernamemember'];
	$password = $_POST['passwordmember'];
	$email = $_POST['emailmember'];
	$kategorimember = $_POST['kategorimember'];
	$biografi = $_POST['biografimember'];
	$kategorimember=implode(",",$_POST['kategorimember']);
	/*
	$lokasi_file = $_FILES['nama_file']['tmp_name'];
	$nama_file = $_FILES['nama_file']['name'];
	$tipe_file = $_FILES['nama_file']['type'];
	$ukuran_file = $_FILES['nama_file']['size'];
*/
	$daerah = $_POST['daerah'];
	/*
	$nama_baru = preg_replace("/\s+/", "_", $username . "_" . $nama_file);
	$direktori = "../fotomember/$nama_baru";
	$MAX_FILE_SIZE = 10000000; //10MB
	move_uploaded_file($lokasi_file, $direktori);
	*/
	$query="UPDATE member SET NAMAMEMBER = '$nama', ALAMATMEMBER = '$alamat', 
	PASSWORDMEMBER = '$password', EMAILMEMBER = '$email', KATEGORIMEMBER = '$kategorimember',
	BIOGRAFIMEMBER = '$biografi', DAERAHMEMBER = '$daerah' WHERE USERNAMEMEMBER ='$username'";
	
	mysql_query($query);
}