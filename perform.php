<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/*  counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #430C75;
  color: yellow;
}

.fa {font-size:50px;}
</style>
</head>
<body>

<h1 style="text-align:center">Sai Rural Medical Government Trust</h1>
<h2><p style="text-align:center">The Accomplishments And Establishments Of The Government Medical Trust</p></h2>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>2000+</h3>
      <p>Patients Happy And Satisfied With Facilities And Treatments </p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>200+</h3>
      <p>Vaccinations Available for Hospital/Veterinary Department</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-smile-o"></i></p>
      <h3>570+</h3>
      <p>Latest Medical Technologies & Equipments Used</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-coffee"></i></p>
      <h3>1250+</h3>
      <p>Patients Happy With Hospital's Canteen Food Quality</p>
    </div>
  </div>
</div>

</body>
</html>

