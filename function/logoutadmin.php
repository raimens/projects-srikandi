<?php
session_start();

unset($_SESSION['usernamemember']);

// session_destroy();
header('Location: ../admin/adminlogin.php');