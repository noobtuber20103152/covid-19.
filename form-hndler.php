<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject_email = $_POST['subject'];
$message_email = $_POST['message'];

$email_from = 'info@gamil.com';
$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email : $visitor_email.\n"
              "Subject : $subject.\n"
              "User Message : $message.\n"






$to = 'ujjawalrachhoya100@gmail.com';
$headers = "From : $email_from \r\n";
$headers = "Reply-To : $visitor_email \r\n";



mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");







?>