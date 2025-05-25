<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$messege=$_POST['message'];

$emil_from = 'website email';

$email_subject='New form submission';
$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "Subject: $subject.\n".
            "User Message: $massage.\n";
$to = 'taankkrishi@gamil.com';
$to = 'soniyasingh122002@gmail.com';
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>