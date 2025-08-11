<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('https://images.unsplash.com/photo-1518818419601-72c8673f5852?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: orange;
  font-family: "Courier New", Courier, monospace;
  font-size: 30px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 20px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 20px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">
  <div class="top ">
    <h2>Sai Rural Medical Government Trust,Ahmednagar</h2>
  </div>
  <div class="top left">
    <h3>***UPCOMING EVENTS OF THE GOVERMENT TRUST***</h3>
    <p>1. A new building in the west block for the veterinary and cattle department</p>
    <p>2. Free vaccinations and treatments provided by the government for the farmers in the village.</p>
    <p>3. The inaugration of the new building is on the 14th November 2019</p>
    <p>4. Dr. Padmashri Vikhe Patil will be the guest of honour of the inaugration ceremony</p>
    <p>5. Latest machines for laser treatment to be installed in the hospital by 12th september 2019</p>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  </div>
  <div class="bottom">
    <p>Thank you!!</p>
  </div>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>

