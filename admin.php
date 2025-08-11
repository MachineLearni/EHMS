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
<link href="myStyle.css" rel="stylesheet" />
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

 <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>
    $(document).ready(function(){
      var date_input=$('input[id="date"]'); //our date input has the name "date"
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
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Welcome!</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
        <li class="active"><a href="admin.php">New Admission</a></li>
        <li><a href="patient.php">Patient Details</a></li>
	 <li><a href="adddoc.php">Add Staff</a></li>
	<li><a href="rates.php">Rates</a></li>
	<li><a href="salaries.php">DOCTOR'S/STAFF'S SALARIES</a></li>
        <li><a href="prices.php">FEES FOR TREATMENTS</a></li>
	<li><a href="pharmacy.php">PHARMACY</a></li>
	<li><a href="labdept.php">LAB DEPARTMENTS</a></li>
	<li><a href="attendance.php">DOCTOR'S/STAFF'S ATTENDANCE RECORD</a></li>
	<li><a href="devices.php">AVAILABLE MEDICAL EQUIPMENTS</a></li>
        <li><a href="expend.php">EXPENDITURES</a></li>
		<li><a href="popup.php">CHATS</a></li>
        <li><a href="action_page.php">CHAT RECORDS</a></li>
	<li><a href="indexc.php">PATIENT'S REVIEWS</a></li>
	<li><a href="indexc1.php">APPOINTMENTS</a></li>
        <li><a href="ratingsystem.php">PATIENT'S RATINGS</a></li>
 	<li><a href="perform.php">HOSPITAL'S ACCOMPLISHEMNTS</a></li>
      </ul><br>
    </div>


	<h3>Next Patient No.:</h3>
<?php
$user='psxsps';
$pass='VCANUC';

$conn=mysqli_connect('mysql.cs.nott.ac.uk',$user,$pass,$user);
if(!$conn)
{
die('Failed to connect to MySQL server:' . mysql_error());

}
$sql2 = mysqli_query($conn,"SELECT patient_no from patient order by patient_no DESC LIMIT 1");
$result2 = mysqli_fetch_array($sql2);
$count1= $result2['patient_no'];

$count1++;
echo "<h3>" . $count1 . "</h3>";
$conn->close();

?>
<br></br>
<div class="col-sm-8">
            <h4>Please fill in the details:</h4>
		<form action="insert1.php" method="POST" >
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    
                    <div class="form-group">
                        <label for="Owner Name" class="col-sm-3 control-label">Owner Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Owner Name" name="Ownername">
                        </div>
                    </div> 
		    <div class="form-group">
                        <label for="Occupation" class="col-sm-3 control-label">Occupation</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Occupation" name="Occupation">
                        </div>
                    </div> 
		    <div class="form-group">
                        <label for="Category" class="col-sm-3 control-label">Category</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Category" name="Category">
                        </div>
                    </div> 	
		    <div class="form-group">
       			<label for="Caste" class="col-sm-3 control-label">Caste</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Caste" name="Caste">
                        </div>
                    </div> 
		    <div class="form-group">
                        <label for="Address" class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Address" name="Address">
                        </div>
                    </div> 
		    <div class="form-group">
                        <label for="Address" class="col-sm-3 control-label">Phone No</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone_no" name="phone_no">
                        </div>
                    </div> 
		    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Date IN</label>
                        <div class="col-sm-9">
				<input class="form-control" id="date" name="Datein" placeholder="YYYY-MM-DD" type="text" />
                        </div>
                    </div> 
	
                    <div class="form-group">
                        <label for="Cow" class="col-sm-3 control-label">Cow</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="Cow" name="Cow">
                        </div>
                    </div>
		    <div class="form-group">
                        <label for="Buffalo" class="col-sm-3 control-label">Buffalo</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="Buffalo" name="Buffalo">
                        </div>
                    </div>
		    <div class="form-group">
                        <label for="Goat" class="col-sm-3 control-label">Goat</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="Goat" name="Goat">
                        </div>
                    </div>
		    <div class="form-group">
                        <label for="Horse" class="col-sm-3 control-label">Horse</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="Horse" name="Horse">
                        </div>
                    </div>
		    <div class="form-group">
                        <label for="Others" class="col-sm-3 control-label">Others</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="Others" name="Others">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                                <input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="Submit">
                        </div>
                    </div>
                </div>
            </div>   
	</form>
</div>         

</body>
</html>



