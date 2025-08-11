<?php
//get the values via POST method from the ui
echo "strted";
$value8='2018-12-03';
echo $value8;

$eff=date('Y-m-d', strtotime("+3 months", strtotime($value8)));
echo $eff;



$conn->close();
?>

