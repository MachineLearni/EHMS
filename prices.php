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
  width: 25%;
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
  background-color: #FCE207;
  font-size: 20px;
}

.button {
  background-color: #930D1F;
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
<h2><p style="text-align:center">The Annual Fees List Of The Hospital Services For Year [2018-2019]</p></h2>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#930D1F">Hospital Departments/Services</li>
    <h2><li class="grey">Treatments Available In The Hospital</li></h2>
    <li>Eye CheckUp  </li>
    <li>Diabetes Test  </li>
    <li>Health CheckUp </li>
    <li>Xray </li>
    <li>Sonography  </li>
    <li>EMR  </li>
    <li>Vaccinations</li>
    <li>Surgeries And Transplants  </li>
    <li>Post Mortem  </li>
    <li>Blood Bank  </li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">List Of Fees For Treatment</li>
    <h2><li class="grey">The Rates For Individual Treatment</li></h2>
    <li>900 Rs - Eye CheckUp</li>
    <li>1,200 Rs - Diabetes Test</li>
    <li>800 Rs - Routine Health CheckUp</li>
    <li>750 Rs - Xray</li>
    <li>800 Rs - Sonography</li>
    <li>660 Rs - EMR</li>
    <li>1,000 Rs - 2,000 Rs/ Per Vaccination</li>
    <li>80,000 Rs - 1,00,000 Rs/ Per Transplant and Surgery</li>
    <li>4,000 Rs For Post Mortem</li>
    <li>1,500 Rs - 3,000 Rs/ Per Blood Bag Depending On The Blood Group</li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#930D1F">Hospital's Veterinary Department</li>
    <h2><li class="grey">Treatments Available In Veterinary Dept</li></h2>
    <li>Vaccinations  </li>
    <li>Arificial Insemination  </li>
    <li>Pregnancy And delivery  </li>
    <li>Treatment For Infertlity  </li>
     <li>Reproduction Organ Transplants  </li>
    <li>Full Checkup Of The Animal  </li>
    <li>Surgeries  </li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header"> List Of Fees For Treatment</li>
    <h2><li class="grey">The Rates For Individual Treatment</li></h2>
    <li> 800 Rs - 1,200 Rs/ Per Vaccination</li>
    <li>1,000 Rs - 1,500 Rs/ Per Artificial Insemination</li>
    <li>900 Rs - 1,000 Rs/ Delivery and Pregnancy Checkup</li>
    <li>800 Rs - 900 Rs For Treatment</li>
    <li>2,000 Rs/Per Transplant</li>
    <li>500 Rs - 700 Rs For Entire Checkup</li>
    <li>1,000 Rs - 1,500 Rs For Surgery </li>
  </ul>
</div>

</body>
</html>

