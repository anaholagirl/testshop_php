<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$email_body = "";
$email_body = $email_body . "Name: " . $name . "\n";
$email_body = $email_body . "Email: " . $email . "\n";
$email_body = $email_body . "Message: " . $message . "\n";

// comment - TODO: Send Email

// redirect after we send the email

header("Location: contact-thanks.php");

// this is useful so that if visitor uses back button on browser it won't send form twice

?>

