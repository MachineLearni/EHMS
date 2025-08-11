<!--<?php
if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['check_list']);
echo "You have selected following ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected) {
echo "<p>".$selected ."</p>";
}
echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
}
else{
echo "<b>Please Select Atleast One Option.</b>";
}
}
?>
-->

<?php
$user='psxsps';
$pass='VCANUC';

$conn=mysqli_connect('mysql.cs.nott.ac.uk',$user,$pass,$user);
if(!$conn)
{
die('Failed to connect to MySQL server:' . mysql_error());

}

//echo "1";
$value1 = $_POST['patientno'];
 
$checkbox1 = $_POST['check_list1'];
$checkbox2 = $_POST['check_list2'];
$checkbox3 = $_POST['check_list3'];
$checkbox4 = $_POST['check_list4'];
$checkbox5 = $_POST['check_list5'];
echo $checkbox1;
echo $checkbox2;
echo $checkbox3;
echo $checkbox4;
echo $checkbox5;

$sql2 = mysqli_query($conn,"SELECT lt_no from labs order by lt_no DESC LIMIT 1");
$result2 = mysqli_fetch_array($sql2);
$count1= $result2['lt_no'];
echo $count1;
$count1++;

$c=0;

$query = "INSERT INTO labs (lt_no , patient_no,health,sonography, xray,emr, post_mortem ,total) VALUES ($count1,$value1,$checkbox1,$checkbox2,$checkbox3,$checkbox4,$checkbox5,$c)";
$result = $conn->query($query);

echo "Record inserted";

?>

