<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from ='robustengineeringworks@gmail.com';
$email_subject = 'New Form submission';
$email_body = "User name: $name. \n".
"User email: $email. \n".
"User Subject : $subject. \n".
"User message : $message. \n";

$to = 'gokuvinod47@gmail.com';
$headers = "From: $email_from \r\n ";
$headers .="Reply To: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>