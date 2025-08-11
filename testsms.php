<?php 
// include send sms class
include 'sendsms.php'; 
// create object of class
$sendsms = new sendsms( "f/PXpWLLiJ8-tsd4p8LQinUvoiCalwVl1cCIQfXdAW", "SEDEMO");  //API key, Sender
// call send sms function
$sendsms->send_sms("07464261400", "no fail you");
?>
