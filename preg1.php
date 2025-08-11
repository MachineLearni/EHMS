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
$value2 = $_POST['breed'];
$value3= $_POST['ai'];
$value4= $_POST['checkup'];


$sql2 = mysqli_query($conn,"SELECT pd_no from pregnancy order by pd_no DESC LIMIT 1");
$result2 = mysqli_fetch_array($sql2);
$count1= $result2['pd_no'];
//echo $count1;


$count1++;
$sql = "INSERT INTO pregnancy(pd_no,patient_no,breed,ai_no,checkup_result) VALUES('$count1','$value1','$value2','$value3','$value4')";
$result = $conn->query($sql);
     
//echo "inserted";
$conn->close();
?>
<script>window.open('preg.php',"_self");</script>

</body>
</html>

