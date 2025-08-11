
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

     $value = $_POST['Username'];
     $value2 = $_POST['Name'];
     $value3 = $_POST['Password'];
     $value4 = $_POST['E-Mail'];
	$value5 = $_POST['Status'];
     $value6 = $_POST['Phone'];
     $value7 = $_POST['Address'];

     $sql = "INSERT INTO admin (user_name,name,pwd,email,status,phone,address) VALUES ('$value', '$value2', 
     '$value3', '$value4', '$value5', '$value6','$value7')";
	$result = $conn->query($sql);
	echo "result   ".$result;
echo "inserted";
     $conn->close();



?>
<script>window.open('adddoc.php',"_self");</script>
</body>
</html> 

