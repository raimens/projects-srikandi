<?php
include("connect.php");
	$query=mysql_query("SELECT namamember, alamatmember, usernamemember, passwordmember, emailmember, kategorimember, biografimember, fotomember, daerahmember FROM member where tipe ='2'");  
	$row=mysql_fetch_row($query);

?>