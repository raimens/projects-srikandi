<?php
$conn = mysql_connect('localhost', 'root', '');
if (!$conn) {
	die('eror connection '.mysql_error());
	}
if(!mysql_select_db("srikandi")) {
	die("cannot select your database");
	}