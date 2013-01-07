<?php
include ("connect.php");
$username= $_GET['USERNAMEMEMBER'];
//var_dump( $username);


$tampil="SELECT NAMAMEMBER, ALAMATMEMBER, USERNAMEMEMBER, PASSWORDMEMBER, EMAILMEMBER, KATEGORIMEMBER, BIOGRAFIMEMBER, FOTOMEMBER, DAERAHMEMBER FROM member where tipe ='2' and (usernamemember)=('$username')";  
$row = mysql_query($tampil);
$data = mysql_fetch_row ($row);
$result = mysql_fetch_array($row);
$id=$result['DAERAHMEMBER'];
?>