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
     
$value1 = $_POST['patientno'];
$value2 = $_POST['ai'];
$value3= $_POST['date'];
$value4= $_POST['comment'];



$sql2 = mysqli_query($conn,"SELECT cb_no from calf order by cb_no DESC LIMIT 1");
$result2 = mysqli_fetch_array($sql2);
$count1= $result2['cb_no'];
//echo $count1;


$count1++;
$sql = "INSERT INTO calf(cb_no,patient_no,ai_no,birth_date,comment ) VALUES('$count1', '$value1', '$value2', '$value3', '$value4')";
$result = $conn->query($sql);
     
//echo "inserted";
$conn->close();
?>
<script>window.open('calf.php',"_self");</script>

</body>
</html>

