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
     
$value1 = $_POST['date'];
$value2 = $_POST['Cow'];
$value3= $_POST['Buffalo'];
$value4= $_POST['Goat'];
$value6= $_POST['Others'];
$value9 = $_POST['comment'];



$sql2 = mysqli_query($conn,"SELECT v_no from vaccine order by v_no DESC LIMIT 1");
$result2 = mysqli_fetch_array($sql2);
$count1= $result2['v_no'];
//echo $count1;


$count1++;
$sql = "INSERT INTO vaccine(v_no,date,cow_count,buffalo_count,goat_count,others_count,comment) VALUES('$count1', '$value1', '$value2', '$value3', '$value4','$value6','$value9')";
$result = $conn->query($sql);
     
//echo "inserted";
$conn->close();
?>
<script>window.open('vac.php',"_self");</script>

</body>
</html>

