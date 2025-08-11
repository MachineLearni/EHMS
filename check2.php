<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
$user='psxsps';
$pass='VCANUC';

$conn=mysqli_connect('mysql.cs.nott.ac.uk',$user,$pass,$user);
if(!$conn)
{
die('Failed to connect to MySQL server:' . mysql_error());

}

$username=$_GET['username']; 
$password=$_GET['password'];


$result = $conn->query("SELECT user_name FROM admin WHERE user_name='$username'");
$row = $result-> fetch_assoc();
//echo $row["user_name"];
$result1 = $conn->query("SELECT pwd FROM admin WHERE user_name='$username'");
$row1 = $result1-> fetch_assoc();
//echo $row1["pwd"];
$result2=$conn->query("SELECT status from admin WHERE user_name='$username'");
$row2 = $result2-> fetch_assoc();
$status=$row2["status"];

$result1 = mysqli_query($conn,$sql1);
$flag1=0;

//echo "executed";
//echo $status;

if($username == $row["user_name"]){
	if($password==$row1["pwd"])
	{

		//src="doc.php";
		//$link="<script>window.open("doc.php")</script>";
		//echo $link;
		//echo "success";
		//$flag=1;
		//echo $flag;
		//$flag1=1;
		$_SESSION["status"]=$status;
		
		
	}
	else{
		//echo "failpass";
		//$flag1=0;
		//echo $flag;
		echo "<div class='alert'>";
  echo "<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>"; 
  echo "<strong>Danger!</strong> Indicates a dangerous or potentially negative action.";
	echo "</div>";
		header("Location:logout.php");
		
	}
	}
else {
	//echo "failure";
	//$flag1=0;
	//echo $flag;
	header("Location:logout.php");
     }
//echo $_SESSION["status"];
?>

<script>
var flag1="<?php echo $flag1 ?>";
var session="<?php echo $_SESSION['status'] ?>";
document.write(status);
var status="<?php echo $status ?>";
if(session=="doctor")
	window.open('doc.php',"_self");
else if(session=="admin")
	window.open('admin.php',"_self");
</script>
</body>
</html>
