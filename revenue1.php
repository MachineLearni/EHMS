
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

$labs=array("health","sonography","xray","emr","post_mortem");
$cost=array(30,40,50,10,20);
$sum=0;

for($i=0;$i<5;$i++)
{
$sql="select count(*) from labs,patient where $labs[$i]=1 and labs.patient_no=patient.patient_no and patient.day_in>'$value1' and patient.day_in<'$value2'";

$result=$conn->query($sql);


while ($row=$result->fetch_assoc()){
$temp= $cost[$i]*$row["count(*)"];
$sum=$sum+$temp;
echo "<tr> <td>" . $labs[$i] . "</td> <td>" . str_repeat("&nbsp;",60) . $row["count(*)"] . "</td> <td>" . str_repeat("&nbsp;",100) . $temp . "</td></tr>";
}
}
 
echo "<tr><td><h3>Total Revenue: ".$sum."</tr></td></h3>";

echo "</table>";


$conn-> close();
?>
</table>
</html>
