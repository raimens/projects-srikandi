<?php
include("connect.php");

//$_SESSION['salah']=FALSE;
if(isset($_POST['usernamemember']) and isset($_POST['passwordmember'])){
session_start();

$sql = "SELECT usernamemember FROM member WHERE (usernamemember = '" . mysql_real_escape_string($_POST['usernamemember']) . "') and (passwordmember = '" . mysql_real_escape_string($_POST['passwordmember']) . "')";
//echo $sql;
$login = mysql_query($sql);
//var_dump($login);
if ($row=mysql_fetch_row($login)) {
	$_SESSION['usernamemember'] = $row[0];
	//echo "sukses";
	header('Location: ../member/index.php');
	} else {
		$_SESSION['salah']=TRUE;
		header('Location: ../home.php');
	 }
} else {
	//echo "gagal";
	header('Location: ../home.php');
	}