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
     

$value2 = $_POST['date'];
$value3= $_POST['provider'];
$value4= $_POST['cinch'];
$value5= $_POST['clitre'];
$value6= $_POST['rlitre'];
$value7= $_POST['tinch'];
$value8= $_POST['tlitre'];
$value11= $_POST['comment'];


$sql2 = mysqli_query($conn,"SELECT ln_no from nitrogen order by ln_no DESC LIMIT 1");
$result2 = mysqli_fetch_array($sql2);
$count1= $result2['ln_no'];
//echo $count1;


$count1++;
$sql = "INSERT INTO nitrogen(ln_no,date,provider,cont_type_inch,cont_type_ltr,received_ltr,total_inch,total_ltr,comments) VALUES('$count1', '$value2', '$value3', '$value4','$value5', '$value6', '$value7', '$value8', '$value11')";
$result = $conn->query($sql);
     
//echo "inserted";
$conn->close();
?>
<script>window.open('ln.php',"_self");</script>

</body>
</html>

