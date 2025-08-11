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
        <li><a href="patient.php">Patient Details</a></li>
	 <li class="active"><a href="adddoc.php">Add Staff</a></li>
	<li><a href="rates.php">Rates</a></li>
      </ul><br>
    </div>

<div class="col-sm-8">
            <h4>Please fill in the details:</h4>
	
		
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">

		<form action="ad.php" method="POST" >
                  <div class="form-group">
                        <label for="Username" class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Username" name="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Name" name="Name">
                        </div>
                    </div> 
		    <div class="form-group">
                        <label for="Password" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Password" name="Password">
                        </div>
                    </div> 
		    <div class="form-group">
                        <label for="E-Mail" class="col-sm-3 control-label">E-Mail</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="E-Mail" name="E-Mail">
                        </div>
</div>
		<div class="form-group">
       			<label for="Status" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Status" name="Status">
                        </div>
                    </div> 	
		    <div class="form-group">
       			<label for="Phone" class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="integer" class="form-control" id="Phone" name="Phone">
                        </div>
                    </div> 
			<div class="form-group">
       			<label for="Address" class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Address" name="Address">
                        </div>
                    </div> 
			<div class="form-group">
                        <div class="col-sm-12 text-right">
                            <input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="Submit">
                            </button>
                        </div>
 
<!---?php include 'ad.php'?--->
<!--<form action="ad.php" method="POST" >

<p>Username: <input type="text" name="Username" /></p>
  <p>Name: <input type="text" name="Name" /></p>
  <p>Password: <input type="text" name="Password" /></p>
  <p>E-mail: <input type="text" name="E-Mail" /></p>
<p>Status: <input type="text" name="Status" /></p>
  <p>Phone: <input type="integer" name="Phone" /></p>
  <p>Address: <input type="text" name="Address" /></p>
  <input type="submit" value="Submit" /> --->
 
                    </div>
                </div>
</form>
            </div>      

<div class="col-sm-8">
            <h4>Please fill in the username that you want to delete:</h4>
	
		
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">

		<form action="ad1.php" method="POST" >
                  <div class="form-group">
                        <label for="Username" class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="user" name="user">
                        </div>
                    </div>	
		<div class="form-group">
                        <div class="col-sm-12 text-right">
                            <input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="Delete">
                            </button>
                        </div>
 		</form>
		</div>
  

</body>
</html>

