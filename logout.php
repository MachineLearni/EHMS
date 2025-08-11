<?php
session_start();
error_reporting(0);
ob_start();
session_destroy();
$add="login2.php";
header('LOCATION: '.$add);
?>
