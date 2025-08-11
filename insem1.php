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
$value2 = $_POST['Organ'];
$value4= $_POST['comment'];


$sql2 = mysqli_query($conn,"SELECT ai_no from ai order by ai_no DESC LIMIT 1");
$result2 = mysqli_fetch_array($sql2);
$count1= $result2['ai_no'];
//echo $count1;


$count1++;
$sql = "INSERT INTO ai(ai_no,patient_no,repr_organ_cond,comments) VALUES('$count1', '$value1', '$value2', '$value4')";
$result = $conn->query($sql);


//echo "inserted";

$sql3 = mysqli_query($conn,"SELECT phone_no from  patient,ai where ai.patient_no='$value1' and ai.patient_no=patient.patient_no");
$result3 = mysqli_fetch_array($sql3);
$phone= $result3['phone_no'];


$sql4= mysqli_query($conn,"SELECT day_in from  patient,ai where ai.patient_no='$value1' and ai.patient_no=patient.patient_no");
$result4 = mysqli_fetch_array($sql4);
$datet= $result4['day_in'];
$eff=date('Y-m-d', strtotime("+3 months", strtotime($datet)));

//echo $phone;
	
	// Authorisation details.
	$username = "pavi_104@yahoo.co.in";
	$hash = "7a0cf73491a38033eab253f70271da0dce226fdc9a6ac0d6f4af42b1580c9483";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $phone; // A single number or a comma-seperated list of numbers
	$message = "Next appointment date for patient number: ".$value1." is ".$eff." . Please visit.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);





$conn->close();
?>
<script>window.open('insem.php',"_self");</script>

</body>
</html>

