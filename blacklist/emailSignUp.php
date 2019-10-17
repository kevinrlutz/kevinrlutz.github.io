<?php
// the message
$msg = $_GET["emailInput"];

// send email
mail("kevinlutz429@gmail.com","My subject",$msg);
?>
