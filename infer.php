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
          <li><a href="doc.php">PATIENT DETAILS</a></li>
			<li><a href="details.php">PATIENT LIST</a></li>
        <li><a href="vac.php">VACCINATION</a></li>
<li><a href="insem.php">INSEMINATION</a></li>
<li><a href="preg.php">PREGNANCY</a></li>
<li class="active"><a href="infer.php">INFERTILITY</a></li>
<li><a href="calf.php">CALF BIRTH</a></li>
<li><a href="ln.php">NITROGEN SUPPLY</a></li>
<li><a href="labs.php">LABS</a></li>
<li><a href="report.php">REPORTS</a></li>
      </ul><br>
    </div>

<div class="col-sm-6">
            <h4>Please fill in the details:</h4>
		<form action="infer1.php" method="POST" >
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Patient No.</label>
                        <div class="col-sm-9">
                            <input type="integer" class="form-control" id="patientno" name="patientno">
                        </div>
                    </div> 
		 <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Breed</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="breed" name="breed">
                        </div>
                    </div> 
		    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">AI No.</label>
                        <div class="col-sm-9">
                            <input type="integer" class="form-control" id="ai" name="ai">
                        </div>
                    </div> 
		   	
		    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Checkup Result</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="checkup" name="checkup">
                        </div>
                    </div> 
		    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Medication Details</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="med" name="med">
                        </div>
                    </div> 
		    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Proof Record Details</label>
                        <div class="col-sm-9">
                            <input type="integer" class="form-control" id="proof" name="proof">
                        </div>
                    </div> 
		    
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                                <input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="Submit">
                        </div>
                </div>
                </div>
            </div>            

</body>
</html>

