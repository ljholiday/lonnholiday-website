<?php
/* Elonara App */

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";
$messagecontent = "From Elonara's Contact Form \r\n\r\n $message";
$recipient = "lonn@ljholiday.com";

mail($recipient, $subject, $messagecontent, $mailheader, ) or die("Error!");
/* This throws the customer to the thank you page */
header('Location: thank-you.html');
exit();
?>
