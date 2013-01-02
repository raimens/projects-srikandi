<?php  
include("connect.php");
include("loginfirst.php");
include("../member/statusuploadfoto.php");

if($_POST["button"] == "Tambah Galeri")  
{
	
	$usernamemember	= $_SESSION['usernamemember'];
    $judulfoto = $_POST['judulfoto'];

	$lokasi_file = $_FILES['nama_file']['tmp_name'];
	$nama_file = $_FILES['nama_file']['name'];
	$tipe_file = $_FILES['nama_file']['type'];
	$ukuran_file = $_FILES['nama_file']['size'];
 
	//kode untuk mengganti spasi menjadi garis bawah pada nama file
 
 
	$nama_baru = preg_replace("/\s+/", "_", $usernamemember . "_" . $nama_file);
	$direktori = "../upload/$nama_baru";
 
	$MAX_FILE_SIZE = 10000000; //10Mb
 /*
	//cek apakah file kosong?
	if(strlen($nama_file)<1){
	header('location:foto_form.php?status=1');
	exit();
	}
	//cek apakah format file adalah format gambar
	$formatgambar = array("image/jpg", "image/jpeg","image/gif", "image/png");
	if(!in_array($tipe_file, $formatgambar)) {
	header('location:foto_form.php?status=2');
	exit();
 
	}
	//cek apakah ukuran file diatas 10Mb
	if($ukuran_file > $MAX_FILE_SIZE) {
	header('location:foto_form.php?status=3');
	exit();
	}*/
	//code untuk mengkopi file ke fodler foto
	move_uploaded_file($lokasi_file, $direktori);
	
	$sql = "INSERT INTO jadwal(USERNAMEMEMBER, JUDULFOTO, FOTO) 
	VALUES ('$usernamemember','$judulfoto','$direktori')"; 
 
	//masukan nama file kedalam tabel foto di database mysql
	
	$result = mysql_query($sql) or die(mysql_error());
	
 /*
	//check if query successful
	if($result==true) {
	header('location:foto_form.php?status=0');
	} else {
	header('location:foto_form.php?status=4');
	}*/
	mysql_close();

	}

?>