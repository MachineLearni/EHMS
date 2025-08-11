//<?php
//session_start();
//error_reporting(0);
//if($_SESSION["status"]!="doctor"){
	//header("Location:logout.php");
	
//}
//?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctor Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortut icon" href="petcross.ico"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	.jumbotron {
      background-color:  #616a6b;
      color: #fff;
	padding: 1px 1px;
      font-family: Montserrat, sans-serif;
  }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;}
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 200%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>

 </style>

 <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
</head>
<body>

<div class="jumbotron text-center">
  <div class="col-sm-1">
       
  </div>
  <h1 class="text-center">Sai Rural Medical Government Trust</h1>
  <h2 class="text-center">Pravara,Ahmednagar</h2> 
	<nav class="navbar navbar-inverse">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#">WELCOME, DOCTOR</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login2.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
</nav>
 </div>
</div>

					
	<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      
      <ul class="nav nav-pills nav-stacked">
        <li class="active" ><a href="doc.php">PATIENT DETAILS</a></li>
	<li><a href="details.php">PATIENT LIST</a></li>
        <li><a href="vac.php">VACCINATION</a></li>
<li><a href="insem.php">INSEMINATION</a></li>
<li><a href="preg.php">PREGNANCY</a></li>
<li><a href="infer.php">INFERTILITY</a></li>
<li><a href="calf.php">CALF BIRTH</a></li>
<li><a href="ln.php">NITROGEN SUPPLY</a></li>
<li><a href="labs.php">LABS</a></li>
<li><a href="report.php">REPORTS</a></li>
<li><a href="prices.php">FEES FOR TREATMENTS</a></li>
<li><a href="pharmacydoc.php">PHARMACY</a></li>
<li><a href="labdeptdoc.php">LAB DEPARTMENTS</a></li>
<li><a href="devices.php">MEDICAL EQUIPMENTS AND DEVICES</a></li>
<li><a href="indexc2.php">CHAT WITH THE ADMINISTRATOR</a></li>
<li><a href="ratingsystem.php">PATIENT'S RATINGS</a></li>
<li><a href="indexc.php">PATIENT'S REVIEWS</a></li>
<li><a href="perform.php">HOSPITAL'S ACCOMPLISHEMNTS</a></li>
 <li><a href="upcoming.php">UPCOMING EVENTS</a></li>
 <li><a href="admindetails.php">CURRENT ADMINISTRATORS</a></li>
      </ul><br>
    </div>
<div class="col-sm-6">
            <h4>Please fill Patient No.:</h4>
		<form action="doc.php" method="POST" >
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Patient No.</label>
                        <div class="col-sm-9">
                            <input type="integer" class="form-control" id="patientno" name="patientno">
                        </div>
			</div>
		
		<div style="text-align:center">

		<input type="submit" style="font-face: 'Comic Sans MS'; font-size: small; color: white; background-color:#337ab7" name="submit" value=" SUBMIT ">
</div>
<br></br>
		<h4>Details:</h4>
		
		
		<?php

$user='psxsps';
$pass='VCANUC';

$conn=mysqli_connect('mysql.cs.nott.ac.uk',$user,$pass,$user);
if(!$conn)
{
die('Failed to connect to MySQL server:' . mysql_error());

}

$value1 = $_POST['patientno'];

$sql="SELECT patient_no,owner_name,occupation,caste,category,address,phone_no,day_in,animal_type from patient where patient_no='$value1'";
$result=$conn->query($sql);


while ($row=$result->fetch_assoc())
{

echo "<h3>" . "Owner Name: " . $row["owner_name"] . "</h3>";
echo "<h3>" . "Occupation: " . $row["occupation"]. "</h3>";
echo "<h3>" . "Caste: " . $row["caste"] . "</h3>";
echo "<h3>" ."Category: " . $row["category"] . "</h3>";
echo "<h3>" ."Address: " . $row["address"] . "</h3>";
echo "<h3>" ."Phone No.: " . $row["phone_no"]. "</h3>";
echo "<h3>" ."Day In: " . $row["day_in"] . "</h3>";
echo "<h3>" ."Animal Type: " . $row["animal_type"] . "</h3>";
}


//$conn-> close();
?>
		<br></br>
 </div>
		</div>
            </div>   
<div class="col-sm-6">
<div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
		<form action="doc.php" method="POST">
		
                  <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Patient No.</label>
                        <div class="col-sm-9">
                            <input type="integer" class="form-control" id="patientno" name="patientno1">
                        </div>
			</div>

                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Disease</label>
                        <div class="col-sm-9">
                            <input type="integer" class="form-control" id="disease" name="disease">
                        </div>
			</div>
		
                    <div class="row-md-2">
                <div class="panel-body two-col">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="well well-sm">
                                <div class="checkbox">
                                    <label>
					
                                        <input type="checkbox" name="check_list1" value="major"/>

                                        Major Surgery
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="well well-sm">
                                <div class="checkbox">
                                    <label>
					
                                        <input type="checkbox" name="check_list2" value="minor" />

                                        Minor Surgery
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Day Out</label>
                        <div class="col-sm-9">
                            <input class="form-control" id="date" name="dayout" placeholder="YYYY-MM-DD" type="text" />
                        </div>
			</div>
		
		<div style="text-align:center">

		<input type="submit" style="font-face: 'Comic Sans MS'; font-size: small; color: white; background-color:#337ab7" name="submit1" value=" SUBMIT ">
</div>

	<?php
$user='psxsps';
$pass='VCANUC';

$conn=mysqli_connect('mysql.cs.nott.ac.uk',$user,$pass,$user);
if(!$conn)
{
die('Failed to connect to MySQL server:' . mysql_error());

}

$value1 = $_POST['patientno1'];
//echo $value1;
$value2 = $_POST['disease'];
$checkbox1 = $_POST['check_list1'];
$checkbox2 = $_POST['check_list2'];
$value3 = $_POST['dayout'];

if(!empty($checkbox1))
{
$sql="update patient set day_out='$value3',disease='$value2',treatment='$checkbox1' where patient_no='$value1'";
$result=$conn->query($sql);

}
else
{
$sql="update patient set day_out='$value3',disease='$value2',treatment='$checkbox2' where patient_no='$value1'";
$result=$conn->query($sql);

}

/*$sql1="update patient set day_out='$value3',disease='$value2',treatment='$checkbox1' where patient_no='$value11'";
$result1=$conn1->query($sql1);
*/
/*<?php
if($_GET){
    if(isset($_GET['submit'])){
display();
    }elseif(isset($_GET['submit1'])){
        submit();
    }
}

    function display()
    {

$user='psxsps';
$pass='VCANUC';

$conn=mysqli_connect('mysql.cs.nott.ac.uk',$user,$pass,$user);
if(!$conn)
{
die('Failed to connect to MySQL server:' . mysql_error());

}

$value1 = $_POST['patientno'];
echo $value1;
$sql="SELECT patient_no,owner_name,occupation,caste,category,address,phone_no,day_in,animal_type from patient where patient_no='$value1'";
$result=$conn->query($sql);


while ($row=$result->fetch_assoc())
{

echo "<h3>" . "Owner Name: " . $row["owner_name"] . "</h3>";
echo "<h3>" . "Occupation: " . $row["occupation"]. "</h3>";
echo "<h3>" . "Caste: " . $row["caste"] . "</h3>";
echo "<h3>" ."Category: " . $row["category"] . "</h3>";
echo "<h3>" ."Address: " . $row["address"] . "</h3>";
echo "<h3>" ."Phone No.: " . $row["phone_no"]. "</h3>";
echo "<h3>" ."Day In: " . $row["day_in"] . "</h3>";
echo "<h3>" ."Animal Type: " . $row["animal_type"] . "</h3>";
}

    }
    function submit()
    {
echo $value1;
$value2 = $_POST['disease'];
$checkbox1 = $_POST['check_list1'];
$checkbox2 = $_POST['check_list2'];
$value3 = $_POST['dayout'];

if(!empty($checkbox1))
{
$sql="update patient set day_out='$value3',disease='$value2',treatment='$checkbox1' where patient_no='$value1'";
$result=$conn->query($sql);

}
else
{
$sql="update patient set day_out='$value3',disease='$value2',treatment='$checkbox2' where patient_no='$value1'";
$result=$conn->query($sql);

}

    }



*/
$conn-> close();
?>	
		</div>
</div>
</div>
		

                        

</body>
</html>


