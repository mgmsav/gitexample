<?php


$from="eli@eli.com";
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

mail($email, $subject, $message, "From".$from);


print "Your message was sent: </br>$email</br>$subject</br>$message</p>";



?>
