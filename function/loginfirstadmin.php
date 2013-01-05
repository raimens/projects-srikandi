<?php
include "connect.php";
session_start();
	
if (!isset($_SESSION['usernamemember'])){
	header('Location: ../admin/adminlogin.php');
}
$sql = "SELECT usernamemember FROM member WHERE tipe = '1'";
$login = mysql_query($sql) or die (mysql_error());
$usernamemember = "";
if ($row=mysql_fetch_row($login)){
	$usernamemember = $row[0];
}