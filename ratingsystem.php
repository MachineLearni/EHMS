<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=3">
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  margin: 0 auto; /* Center website */
  max-width: 800px; /* Max width */
  padding: 20px;
}

.heading {
  font-size: 30px;
  margin-right: 30px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: yellow;
}

/* Three column layout */
.side {
  float: left;
  width: 20%;
  margin-top:20px;
}

.middle {
  margin-top:20px;
  float: left;
  width: 60%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-7 {width: 10%; height: 18px; background-color: #4CAF50;}
.bar-6 {width: 12%; height: 18px; background-color: #C5D10D;}
.bar-5 {width: 75%; height: 18px; background-color: #8E0DA8;}
.bar-4 {width: 40%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 20%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 10%; height: 18px; background-color: #082A2C;}
.bar-1 {width: 8%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 300px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
</style>
</head>
<body>

<span class="heading">Star Rating System For The Patients After Their Visit To The Hospital</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>The Overall Ratings Received By The Hospital In Year 2018-2019</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>*****5 STARS</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>****4 STARS</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>45</div>
  </div>
  <div class="side">
    <div>***3 STARS</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>42.2</div>
  </div>
  <div class="side">
    <div>**2 STARS</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>17.8</div>
  </div>
  <div class="side">
    <div>* 1 STAR</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
<div class="side">
    <div>Please share your suggestions if you have any!!</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-6"></div>
    </div>
  </div>
  <div class="side right">
    <div>17.6</div>
  </div>
</div>

</body>
</html>

