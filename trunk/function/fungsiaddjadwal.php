<?php  
include("connect.php");
include("loginfirst.php");
include("../member/statusuploadfoto.php");

if($_POST["button"] == "Tambah Jadwal")  
{
	$usernamemember	= $_SESSION['usernamemember'];
    $namajadwal = $_POST['namajadwal'];
	$tanggaljadwal = $_POST['tanggaljadwal'];
	$tempatjadwal = $_POST['tempatjadwal'];
	$deskripsijadwal = $_POST['deskripsijadwal'];
	//$nama_file = $_POST['nama_file'];
	//kode upload
	$lokasi_file = $_FILES['nama_file']['tmp_name'];
	$nama_file = $_FILES['nama_file']['name'];
	$tipe_file = $_FILES['nama_file']['type'];
	$ukuran_file = $_FILES['nama_file']['size'];
 
	//kode untuk mengganti spasi menjadi garis bawah pada nama file
 
 
	$nama_baru = preg_replace("/\s+/", "_", $nama_file);
	$direktori = "../upload/$nama_baru";
 
	$MAX_FILE_SIZE = 10000000; //10Mb
 /*
	//cek apakah file kosong?
	if(strlen($nama_file)<1){
	header("File kosong");
	exit();
	}
	//cek apakah format file adalah format gambar
	$formatgambar = array("image/jpg", "image/jpeg","image/gif", "image/png");
	if(!in_array($tipe_file, $formatgambar)) {
	header("format beda");
	exit();
 
	}
	//cek apakah ukuran file diatas 10Mb
	if($ukuran_file > $MAX_FILE_SIZE) {
	header("lebih dari 10MB");
	exit();
	}*/
	//code untuk mengkopi file ke fodler foto
	move_uploaded_file($lokasi_file, $direktori);
	
	$sql = "INSERT INTO jadwal(USERNAMEMEMBER, NAMAJADWAL, TANGGALJADWAL, TEMPATJADWAL, DESKRIPSIJADWAL, GAMBARKEGIATAN) 
	VALUES ('$usernamemember','$namajadwal','$tanggaljadwal','$tempatjadwal','$deskripsijadwal','$nama_file')"; 
 
	//masukan nama file kedalam tabel foto di database mysql
	$result = mysql_query($sql) or die(mysql_error());
 /*
	//check if query successful
	if($result==true) {
	header('sukses');
	} else {
	header('location:foto_form.php?status=4');
	}*/
	mysql_close();

	}

?>