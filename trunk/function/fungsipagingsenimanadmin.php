<?php
include ("connect.php");

$maxpost=5;


if(!isset($_GET['page'])){
	$pagenow = 1;
} else {
	$pagenow = $_GET['page'];
}
$jumlahhalaman=ceil(mysql_num_rows($query)/$maxpost);
$pagenow = ($pagenow-1)*$maxpost;
	$query=mysql_query("SELECT namamember, alamatmember, usernamemember, emailmember, kategorimember, biografimember, fotomember, daerahmember
	FROM member where tipe='2' LIMIT $pagenow, $maxpost");
	$row=mysql_fetch_row($query);
?>
