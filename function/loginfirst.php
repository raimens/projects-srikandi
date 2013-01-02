<?php
include "../function/connect.php";
session_start();
	
if (!isset($_SESSION['usernamemember'])){
	header('Location: ../home.php');
}
$sql = "SELECT usernamemember FROM member";
$login = mysql_query($sql) or die (mysql_error());
$usernamemember = "";
if ($row=mysql_fetch_row($login)){
	$usernamemember = $row[0];
}