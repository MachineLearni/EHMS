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
      <li><a href="doc.php">PATIENT DETAILS</a></li>
			<li><a href="details.php">PATIENT LIST</a></li>
        <li class="active"><a href="vac.php">VACCINATION</a></li>
<li><a href="insem.php">INSEMINATION</a></li>
<li><a href="preg.php">PREGNANCY</a></li>
<li><a href="infer.php">INFERTILITY</a></li>
<li><a href="calf.php">CALF BIRTH</a></li>
<li><a href="ln.php">NITROGEN SUPPLY</a></li>
<li><a href="labs.php">LABS</a></li>
<li><a href="report.php">REPORTS</a></li>
      </ul><br>
    </div>

<div class="col-sm-6">
            <h4>Please fill in the details:</h4>
		<form action="vac1.php" method="POST" >
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
				<input class="form-control" id="date" name="date" placeholder="YYYY-MM-DD" type="text" />
                        </div>
                    </div> 

		 	<div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Cow</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="Cow" name="Cow">
                        </div>
                    </div>

		    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Buffalo</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="Buffalo" name="Buffalo">
                        </div>
                    </div>

		    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Goat</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="Goat" name="Goat">
                        </div>
                    </div>
		    

		    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Others</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="Others" name="Others">
                        </div>
                    </div>

			

			<div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Comment</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="comment" name="comment">
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

