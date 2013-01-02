<?php  
include("connect.php");
if($_POST["button"]=="Hapus Member")  
{  
	$username = $_POST["usernamemember"];   
    $query="DELETE FROM member WHERE (USERNAMEMEMBER)=('$username')";   
    $result=mysql_query($query);            

}     
?>