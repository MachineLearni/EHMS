<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 30px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 25px;
  text-align: center;
}

.price .grey {
  background-color: #07EF94;
  font-size: 20px;
}

.button {
  background-color: #910404;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 500px) {
  .columns {
    width: 90%;
  }
}
</style>
</head>
<body>

<h1 style="text-align:center">Sai Rural Medical Government Trust</h1>
<h2><p style="text-align:center">The Annual List Of Hospital Expenses For Year [2018-2019]</p></h2>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#910404">The List Of Expenses In [2018-2019]</li>
    <h2><li class="grey">Category Of The Expenses</li></h2>
    <li>Salary Expenses</li>
    <li>Supply Expenses</li>
    <li>Miscellaneous Expenses</li>
    <li>Labor Costs</li>
    <li>Construction Expenses</li>
    <li>Pharmacy Expenses</li>
    <li>Vaccination Expenses</li>
    <li>Technology Expenses</li>
    <li>Medical Equipments and Devices Expenses</li>
    <li>Tax Expenses</li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#910404">The Individual Amounts Spent In [2018-2019]</li>
    <h2><li class="grey">The Total Amount In Rupees</li></h2>
    <li>10 Lakhs</li>
    <li>8 Lakhs</li>
    <li>5 Lakhs</li>
    <li>8 Lakhs</li>
    <li>15 Lakhs</li>
    <li>7 Lakhs</li>
    <li>4 Lakhs</li>
    <li>6 Lakhs</li>
    <li>3.5 Lakhs</li>
    <li>8 Lakhs</li>
  </ul>
</div>
<div class="columns">
  <ul class="price">
    <li class="header">The Total Expenditure for [2018-2019]</li>
    <h2><li class="grey">The Total</li></h2>
    <h2><li>Total - 74,50,000 Lakhs</li></h2>

  </ul>
</div>

</body>
</html>

