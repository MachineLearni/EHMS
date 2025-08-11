//<?php
//session_start();
//error_reporting(0);
//if($_SESSION["status"]!="admin"){
	//header("Location:logout.php");
	//}

//?>	

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
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
      padding-top: 0px;
      background-color:#f1f1f1;
      height: 200%;
    }
    
    /* Set black background color, white text and some padding */
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<div class="jumbotron text-center">
  <div class="col-sm-1">
     
  </div>
  <h1 class="text-center">Sai Rural Medical Government Trust</h1>
  <h2 class="text-center">Pravara,Ahmednagar</h2> 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Welcome!</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login2.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
 </div>
</div>
						
	<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
      <h2>Hi, Admin</h2>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="admin.php">New Admission</a></li>
        <li class="active"><a href="patient.php">Patient Details</a></li>
	<li><a href="adddoc.php">Add Staff</a></li>
	<li><a href="rates.php">Rates</a></li>
      </ul><br>
    </div>

<div class="col-sm-9">
            <h4>Preview:</h4>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table preview-table">
                            <thead>
                                <tr>
                                    <th>Patient No</th>
                                    <th>Owner Name</th>
                                    <th>Occupation</th>
                                    <th>Category</th>
                                    <th>Caste</th>
									<th>Address</th>
				    <th>Phone Number</th>
				    <th>Day In</th>
				    <th>Animal Type</th>
				    
				    <?php include 'test.php'?>
                                </tr>
                            </thead>
                            <tbody><<!---script>

<?php
$user='psxsps';
$pass='VCANUC';

$conn=mysqli_connect('mysql.cs.nott.ac.uk',$user,$pass,$user);
if(!$conn)
{
die('Failed to connect to MySQL server:' . mysql_error());

}


$sql="SELECT patient_no,owner_name,occupation,caste,category,address,phone_no,day_in,day_out,animal_type from patient";
$result=$conn->query($sql);


while ($row=$result->fetch_assoc()){
echo "<tr><td>" . $row["patient_no"] . "</td><td>" . $row["owner_name"] . "</td><td>" . $row["occupation"]. $row["caste"] . "</td><td>" . $row["category"] . "</td><td>" . $row["address"] . "</td><td>" . $row["phone_no"] . "</td><td>" . $row["day_in"] . "</td><td>" . $row["day_out"] . "</td><td>" . $row["animal_type"] . "</td></tr>";
}
echo "</table>";


$conn-> close();
?>
</script--->
</tbody> <!-- preview content goes here-->
                        <!----/table---->
                    </div>                            
                </div>
            </div>
            <div class="row text-right">
                <div class="col-xs-12">
                   <!----<h4>Total: <strong><span class="preview-total"></span></strong></h4>>---->
                </div>
            </div>
            <!div class="row">
                <!div class="col-xs-12">
                    <!hr style="border:1px dashed #dddddd;">
                    <!---button type="button" class="btn btn-primary btn-block">Submit all and finish</button--->
                <!/div>                
            <!/div>
        </div>
 <div w3-include-html="admin.php"></div> 

</body>
</html>
<!---the details will be fetched from the db to be displayed at the patient details tab. 
patient details of the entire day will be displayed. Previous day's records won't be
displayed---->




