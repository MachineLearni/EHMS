
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
     $value = $_POST['xray'];
     $value2 = $_POST['sono'];
     $value3 = $_POST['health'];
     $value4 = $_POST['emr'];
	$value5 = $_POST['post'];
     $value6 = $_POST['vac'];
    
	$array = array('xray','sono','health','emr','post','vaccine');
	$costs = array($value,$value2,$value3,$value4,$value5,$value6);
	
	for($i=1;$i<=6;$i++)
	{
	     $sql = "UPDATE rates SET cost='$costs[$i]' WHERE entity='$array[$i]'";
		$result = $conn->query($sql);
	}
	$conn->close();



?>
<script>window.open('rates.php',"_self");</script>
</body>
</html> 

