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
     
$value2 = $_POST['Ownername'];
$value3 = $_POST['Occupation'];
$value4 = $_POST['Category'];
$value5 = $_POST['Caste'];
$value6 = $_POST['Address'];
$value7 = $_POST['phone_no'];
$value8 = $_POST['Datein'];
$value10 = $_POST['Cow'];
$value11= $_POST['Buffalo'];
$value12= $_POST['Goat'];
$value13= $_POST['Horse'];
$value14= $_POST['Others'];

$animal = array($value10, $value11, $value12, $value13, $value14);
$cnt;
$type;


//$sql2 = "SELECT MAX(patient_no) from patient";
//$sql2="SELECT patient_no from patient order by patient_no DESC LIMIT 1";
//$result2 = $conn->query($sql2);
//$count1 = $result2-> fetch_assoc();
//$C3 = $row1['Column3'];
//$count1 = mysql_fetch_array($result2);
//echo $count1[1];
//$q = "select MAX(id) from tbl_name";
//$result2 = mysql_query($sql2);
//$data = mysql_fetch_array($result2);
//echo $count1;



$sql2 = mysqli_query($conn,"SELECT patient_no from patient order by patient_no DESC LIMIT 1");
$result2 = mysqli_fetch_array($sql2);
$count1= $result2['patient_no'];



for($i=0;$i<5;$i++)
{
if($animal[$i]>0)
{
     
    $cnt = $animal[$i];
    if( $i == 0)
        $type = "cow";
    else if($i == 1)
        $type = "buffalo";
    else if($i == 2)
        $type = "goat";
    else if($i == 3)
        $type = "horse";
    else if($i == 4)
        $type = "others";
     
   
    for( $j=0;$j<$cnt;$j++)
    {
	 
        $count1++;
        $sql = "INSERT INTO patient (patient_no,owner_name,occupation,category,caste,address,phone_no,day_in,day_out,animal_type) VALUES('$count1', '$value2', '$value3', '$value4', '$value5','$value6','$value7','$value8','$value8','$type')";
        $result = $conn->query($sql);
     
    }
}
}


$conn->close();
?>

<script>window.open('admin.php',"_self");</script>

</body>
</html>

