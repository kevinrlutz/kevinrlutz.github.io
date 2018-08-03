<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail("kevinlutz429@gmail.com", $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
