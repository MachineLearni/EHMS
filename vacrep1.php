
<html>

<table cellspacing="10">

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

$ani=array("cow_count","buffalo_count","goat_count","others_count");
$animal=array("Cow","Buffalo","Goat","Others");
$sql="select cost from rates where entity='vaccine'";
$result=$conn->query($sql);
$cost1=$result->fetch_assoc();
$cost=$cost1['cost'];
$rev=0;
$totani=0;


for($i=0;$i<4;$i++)
{
$temp1=$ani[$i];
$sql1="select sum($temp1) AS value_sum from vaccine where date between '$value1' and '$value2'";
$result1=$conn->query($sql1);
$row=$result1->fetch_assoc();

$temp= $cost*$row["value_sum"];
$rev=$rev+$temp;
$totani=$totani+$row["value_sum"];
echo "<tr> <td>" . $animal[$i] . "</td> <td>" . str_repeat("&nbsp;",30) . $row["value_sum"] . "</td> <td>" . str_repeat("&nbsp;",100) . $temp . "</td></tr>";
}

 
echo "<tr><td><br></br><h3>Total Revenue: ".$rev."</tr></td></h3>";
 
echo "<tr><td><h3>Total Vaccines: ".$totani."</tr></td></h3>";

echo "</table>";


$conn-> close();
?>
</table>
</html>
