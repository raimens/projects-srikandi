<?php
include("connect.php");
$query=mysql_query("SELECT * FROM member where tipe ='2' ORDER BY USERNAMEMEMBER");  
$row=mysql_fetch_row($query);