<?php 
$user='psxsps';
$pass='VCANUC';

$conn=mysqli_connect('mysql.cs.nott.ac.uk',$user,$pass,$user);
if(!$conn)
{
die('Failed to connect to MySQL server:' . mysql_error());

}

$value1 = $_POST['Datefrom'];
$value2 = $_POST['Dateto'];
//echo $value1;
$sql="select sum(received_ltr) AS value_sum from nitrogen where date between '$value1' and '$value2'";
$result1=$conn->query($sql);
$row=$result1->fetch_assoc();
$recv=$row["value_sum"];

$sql2="select sum(total_ltr) AS value1_sum from nitrogen where date between '$value1' and '$value2'";
$result2=$conn->query($sql2);
$row2=$result2->fetch_assoc();
$used=$row2["value1_sum"];

$rem=$recv-$used;
  echo "<div class='col-sm-6'>";
echo "<br></br><br></br>";
echo "<h3>Total Received in litres: ".$recv."</h3>";
echo "<h3>Total Used in litres: ".$used."</h3>";
echo "<h3>Total Remaining in litres: ".$rem."</h3>";
echo "</div>";


$conn-> close();
?>
