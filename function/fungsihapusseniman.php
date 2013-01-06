<?php
include ("connect.php");
if($_POST["button"]=="Hapus Seniman")  
{ 
         if (count($_POST['checkbox']) > 0) {
   foreach ($_POST['checkbox'] as $del_id) {
    $sql = "DELETE FROM member WHERE (usernamemember)=('$del_id') ";
    $result = mysql_query($sql) or die(mysql_error()); 
		}
}}     
     
?>

