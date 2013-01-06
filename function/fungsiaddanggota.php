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
	$daerah = $_POST['daerah'];
	$kategorimember=implode(",",$_POST['kategorimember']);
	$namafoto = $_FILES['fotomember']['name']; //get the file name
	$ukuranfoto = $_FILES['fotomember']['size']; //get the size
	$fotoeror = $_FILES['fotomember']['error']; //get the error when upload
	if($ukuranfoto > 0 || $fotoeror == 0) {
		$upload = move_uploaded_file($_FILES['fotomember']['tmp_name'], '../upload'.$namafoto); //save image to the folder
		if($upload) {
			echo "<h3>Selamat!</h3>";
			$sql = "INSERT INTO member(NAMAMEMBER, ALAMATMEMBER, USERNAMEMEMBER, TIPE, PASSWORDMEMBER, EMAILMEMBER, KATEGORIMEMBER, BIOGRAFIMEMBER, FOTOMEMBER, DAERAHMEMBER, FILEFOTO)
			VALUES ('$nama', '$alamat', '$username', '$tipe', '$password', '$email', '$kategorimember', '$biografi', 'upload/$namafoto', '$daerah', $namafoto)";
			$result = mysql_query($sql);
			$ambilfoto = "SELECT fotomember from anggota where filefoto = '$namafoto' limit 1";
			$hasilfoto = mysql_query($ambilfoto);
			while ($file = mysql_fetch_array($hasilfoto)){
				echo "sukses";
		}
} else {
	echo "gagal";
	}
}
}
?>
