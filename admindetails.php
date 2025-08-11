<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #F03217;
}

.right {
  right: 0;
  background-color: purple;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}
</style>
</head>
<body>

<div class="split left">
  <div class="centered">
    <img src="https://png.pngtree.com/element_origin_min_pic/16/12/11/117cf1fbfdede0adf30936bf24e7496f.jpg" alt="administrator">
    <h2>Mr.Damodaran Prasanna</h2>
    <p>The main administrator of Sai Rural Medical Government Trust.</p>
       <p>Email ID- damu@gmail.com </p>
  </div>
</div>

<div class="split right">
  <div class="centered">
    <img src="https://banner2.kisspng.com/20180306/kce/kisspng-cartoon-female-illustration-professional-women-5a9e6973213606.134458721520331123136.jpg" alt="governemnt official">
    <h2>Mrs.Lakshmi Patil</h2>
    <p> Supervisor and government official</p>
       <p>Email ID- lakshmi2010@gmail.com</p>
  </div>
</div>
     
</body>
</html> 

