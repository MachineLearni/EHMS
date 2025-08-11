<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>




<?php
$user='psxsps';
$pass='VCANUC';

$conn=mysqli_connect('mysql.cs.nott.ac.uk',$user,$pass,$user);
if(!$conn)
{
die('Failed to connect to MySQL server:' . mysql_error());

}
     $value = $_POST['user'];

     $sql = "delete from admin where user_name = '$value'";
	$result = $conn->query($sql);
     $conn->close();



?>
<script>window.open('adddoc.php',"_self");</script>
</body>
</html> 

