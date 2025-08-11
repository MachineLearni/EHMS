<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>


<!--<table cellspacing="10"> -->

<?php

$user='psxsps';
$pass='VCANUC';

$conn=mysqli_connect('mysql.cs.nott.ac.uk',$user,$pass,$user);
if(!$conn)
{
die('Failed to connect to MySQL server:' . mysql_error());

}


$sql="SELECT patient_no,owner_name,occupation,caste,category,address,phone_no,day_in,animal_type from patient";
$result=$conn->query($sql);


while ($row=$result->fetch_assoc()){

//echo "<tr><td>" . str_repeat("&nbsp;",10). $row["patient_no"] . "</td><td>" . str_repeat("&nbsp;",18) . $row["owner_name"] . "</td><td>" . str_repeat("&nbsp;",5) . $row["occupation"] . str_repeat("&nbsp;",17) . $row["caste"] . "</td><td>" . str_repeat("&nbsp;",15) . $row["category"] . "</td><td>" . str_repeat("&nbsp;",10) . $row["address"] . "</td><td>" . str_repeat("&nbsp;",4) . $row["phone_no"] . "</td><td>" . str_repeat("&nbsp;",3) . $row["day_in"] . "</td><td>" . str_repeat("&nbsp;",10) . $row["animal_type"] . "</td></tr>";
echo "<tr><td>" . str_repeat("&nbsp;",5). $row["patient_no"] . "</td><td>" . str_repeat("&nbsp;",5) . $row["owner_name"] . "</td><td>" . str_repeat("&nbsp;",5) . $row["occupation"] . "</td><td>" .str_repeat("&nbsp;",5) . $row["caste"] . "</td><td>" . str_repeat("&nbsp;",5) . $row["category"] . "</td><td>" . str_repeat("&nbsp;",5) . $row["address"] . "</td><td>" . str_repeat("&nbsp;",5) . $row["phone_no"] . "</td><td>" . str_repeat("&nbsp;",5) . $row["day_in"] . "</td><td>" . str_repeat("&nbsp;",5) . $row["animal_type"] . "</td></tr>";
}
//echo "</table>";


$conn-> close();
?>
</table>
</body>
</html> 
