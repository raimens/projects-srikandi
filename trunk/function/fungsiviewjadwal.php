<?php
include("connect.php");
$query=mysql_query("SELECT usernamemember, namajadwal, tanggaljadwal, tempatjadwal, deskripsijadwal FROM jadwal where tipe ='2'");  
$row=mysql_fetch_row($query);