<?php
include("connect.php");
$query=mysql_query("SELECT * FROM berita");  
$row=mysql_fetch_row($query);