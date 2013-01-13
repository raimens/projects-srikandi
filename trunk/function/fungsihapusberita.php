<?php  
include("connect.php");
include ("../function/loginfirstadmin.php");
if($_POST["button"]=="Hapus Berita")  
{  
	$judulberita = $_POST["judulberita"];
	$user = $_POST["usernamemember"];
    $query="DELETE FROM berita WHERE (JUDULBERITA)=('$judulberita') AND (usernamemember)=('$user')";   
    $result=mysql_query($query);            

}     
?>