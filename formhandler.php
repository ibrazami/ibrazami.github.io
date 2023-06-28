<?php
$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$email_from = 'info@ibrazami.github.io';
$email_subject = 'New Form Submission';
$email_body = "User name : $name. \n",
            "User Email : $email. \n",
            "Message : $message. \n";

$to = 'ibrahimrazami@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply to $email \r \n";

mail($to,$email_subject,$email_body,$headers);
header("Location:index.html")
?>