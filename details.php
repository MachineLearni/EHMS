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
	
	.table preview-table {
    position: fixed; !important
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
			<li  class="active"><a href="details.php">PATIENT LIST</a></li>
        <li><a href="vac.php">VACCINATION</a></li>
<li><a href="insem.php">INSEMINATION</a></li>
<li><a href="preg.php">PREGNANCY</a></li>
<li><a href="infer.php">INFERTILITY</a></li>
<li><a href="calf.php">CALF BIRTH</a></li>
<li><a href="ln.php">NITROGEN SUPPLY</a></li>
<li><a href="labs.php">LABS</a></li>
<li><a href="report.php">REPORTS</a></li>
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

                                </tr>
												<?php include 'test.php'?>

                            </thead>
                            <tbody></tbody> <!-- preview content goes here-->
                        </table>
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
<script>

$(document).on('click', '.input-remove-row', function(){ 
    var tr = $(this).closest('tr');
    tr.fadeOut(200, function(){
    	tr.remove();
	});
});

$(function(){
    $('.preview-add-button').click(function(){
	//window.open('patient.php',"_self");
        var form_data = {};
        form_data["Patient No"] = $('.payment-form input[name="Patient No"]').val();
        form_data["Owner Name"] = $('.payment-form input[name="Owner Name"]').val();
        form_data["Occupation"] = $('.payment-form input[name="Occupation"]').val();
	form_data["Category"] = $('.payment-form input[name="Category"]').val();
	form_data["Caste"] = $('.payment-form input[name="Caste"]').val();
	form_data["Address"] = $('.payment-form input[name="Address"]').val();
	form_data["Phone Number"] = $('.payment-form input[name="Phone Number"]').val();
	form_data["Day In"] = $('.payment-form input[name="Day In"]').val();
	form_data["Cow"] = $('.payment-form input[name="Cow"]').val();
	form_data["Buffalo"] = $('.payment-form input[name="Buffalo"]').val();
	form_data["Goat"] = $('.payment-form input[name="Goat"]').val();
	form_data["Horse"] = $('.payment-form input[name="Horse"]').val();
	form_data["Others"] = $('.payment-form input[name="Others"]').val();
        form_data["remove-row"] = '<span class="glyphicon glyphicon-remove"></span>';
        var row = $('<tr></tr>');
        $.each(form_data, function( type, value ) {
            $('<td class="input-'+type+'"></td>').php(value).appendTo(row);
        });
        $('.preview-table > tbody:last').append(row); 
    });  
});
</script>
</body>
</html>
<!---the details will be fetched from the db to be displayed at the patient details tab. 
patient details of the entire day will be displayed. Previous day's records won't be
displayed---->


