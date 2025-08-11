
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


$sql="SELECT animal_type,count(*) from patient where day_in between '$value1' and '$value2' and treatment='major' group by animal_type";
$result=$conn->query($sql);


while ($row=$result->fetch_assoc()){

echo "<tr><td>" . $row["animal_type"] . "</td><td>" . str_repeat("&nbsp;",130) . $row["count(*)"] . "</td></tr>";
}
echo "</table>";


$conn-> close();
?>
</table>
</html>
