<?php  
include("connect.php");
if($_POST["button"]=="Hapus Berita")  
{  
	$judulberita = $_POST["judulberita"];   
    $query="DELETE FROM member WHERE (JUDULBERITA)=('$judulberita')";   
    $result=mysql_query($query);            

}     
?>