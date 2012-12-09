<?php  
include("connect.php");
if($_POST["button"]=="Hapus Foto")  
{  
	$judulfoto = $_POST["judulfoto"];   
    $query="DELETE FROM member WHERE (JUDULFOTO)=('$judulfoto')";   
    $result=mysql_query($query);            

}     
?>