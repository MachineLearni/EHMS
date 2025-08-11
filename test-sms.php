<?php
/*
* Get API key and Sender ID from 
* http://springedge.com 
* Copy php-send-sms-code.php in same directory
*/
    include 'php-send-sms-code.php';
    $sendsms=new sendsms("f/PXpWLLiJ8-tsd4p8LQinUvoiCalwVl1cCIQfXdAW", "SEDEMO");
    $sendsms->send_sms("07464261400", "test sms");

?>
